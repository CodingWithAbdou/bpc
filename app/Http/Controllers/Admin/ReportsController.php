<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FileReport;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public $model, $type;

    public function __construct(Request $request) {
        $this->model = ProjectModel::where('route_key', $request->segment(2))->first();
        view()->share('model', $this->model);
        if($this->model->route_key == 'financial-reports-annual'){
            $this->type = 0;
        }else{
            $this->type = 1;
        }
    }

    public function index()
    {
        $data = FileReport::where('type', $this->type)->orderBy('order_by', 'asc')->orderBy('created_at', 'desc')->get();
        return view('admin.financial-reports.reports.index', compact('data'));
    }

    public function create()
    {
        return view('admin.financial-reports.reports.form', ['type' => $this->type]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required',
        ]);

        $input = $request->all();
        if ($request->file) {
            $input['file'] = generalUpload($this->model->model, $request->file);
            $input['file_name'] = $request->file->getClientOriginalName();
        }
        $currentDateTime = now();
        $lastMonthDateTime  = $currentDateTime->subMonth();
        $lastMonthNumber = $lastMonthDateTime->month;

        if($request->type == '1') {
            if($lastMonthNumber < 4) {
                $input['quarter'] = '1';
            }elseif ($lastMonthNumber>3 and $lastMonthNumber < 7){
                $input['quarter'] = '2';
            }elseif ($lastMonthNumber>6 and $lastMonthNumber < 10){
                $input['quarter'] = '3';
            }elseif ($lastMonthNumber>9){
                $input['quarter'] = '4';
            }
        }

        FileReport::create($input);

        $status = true;
        $msg = __('dash.created successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));
    }

    public function edit(FileReport $obj)
    {
        return view('admin.financial-reports.reports.form', ['data' => $obj, 'type' => $obj->type]);
    }

    public function update(Request $request, FileReport $obj)
    {
        $this->validate($request, [
            'file' => 'required',
        ]);

        $input = $request->all();
        if ($request->file) {
            $input['file'] = generalUpload($this->model->model, $request->file);
            $input['file_name'] = $request->file->getClientOriginalName();
        }else {
            $input['file']  = $obj->file;
        }

        $obj->update($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));
    }

    public function destroy(FileReport $obj)
    {
        try {
            $obj->delete();
            $status = true;
            $msg = __('dash.deleted_successfully');
        }catch (\Exception $e){
            $status = false;
            $msg = $e->getMessage();
        }
        return response()->json(compact('status', 'msg'));
    }

    public function removeUpload(Request $request)
    {
        $obj = FileReport::find($request->id);
        $status = deleteUpload($obj->file);
        $obj->update([
            'file' => null,
            'file_name' => null,
        ]);
        return response()->json(compact('status'));
    }
}
