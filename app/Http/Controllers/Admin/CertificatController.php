<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class CertificatController extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'certificates')->first();
        view()->share('model', $this->model);
    }
    public function index()
    {
        $data = Certificate::orderBy('created_at', 'desc')->get();
        return view('admin.certificates.index' , compact('data'));
    }

    public function create()
    {
        return view('admin.certificates.form');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'icone' => 'nullable|max:' . getMaxSize() . '|mimes:' . acceptImageType(0),
            'name' => 'required',
            'description_ar' => 'required',
            'description_en' => 'required',
        ]);

        $input = $request->all();
        if ($request->icone) {
            $input['icone'] = generalUpload($this->model->model, $request->icone);
        }


        Certificate::create($input);

        $status = true;
        $msg = __('dash.created successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));

        return view('admin.categories.form');
    }

    public function edit(Certificate $obj)
    {
        return view('admin.certificates.form' , ['data' => $obj ]);
    }

    public function update(Request $request , Certificate $obj )
    {
        $this->validate($request, [
            'icone' => $obj->icone?'nullable':'required'.'|max:'.getMaxSize().'|mimes:'.acceptImageType(0),
            'name' => 'required',
            'description_ar' => 'required',
            'description_en' => 'required',
        ]);

        $input = $request->all();

        if($request->icone){
            $input['icone'] = generalUpload($this->model->model, $request->icone);
        }else {
            $input['icone'] = $obj->icone;
        }
        $obj->update($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));
    }

    public function destroy(Certificate $obj)
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
}
