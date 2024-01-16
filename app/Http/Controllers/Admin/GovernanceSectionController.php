<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Governance;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class GovernanceSectionController extends Controller
{

    public $model;

    public function __construct(Request $request) {
        $this->model = ProjectModel::where('route_key', $request->segment(2))->first();
        view()->share('model', $this->model);
    }
    public function index()
    {
        $data = Governance::select('*')->get();
        $member = ProjectModel::where('route_key' , 'members')->first();
        return view('admin.governance.sections.index' , compact('data' , 'member'));
    }
    public function edit(Governance $obj)
    {
        return view('admin.governance.sections.form' , ['data' => $obj]);
    }

    public function update(Request $request , Governance $obj)
    {
        $this->validate($request, [
            'image' => $obj->image?'nullable':'required'.'|max:'.getMaxSize().'|mimes:'.acceptImageType(0),
            'title' => $this->model->route_key == 'page-board-of-directors' || $this->model->route_key == 'page-committees' ? 'required' : 'nullable' ,
            'title_color' => $this->model->route_key == 'page-board-of-directors' || $this->model->route_key == 'page-committees' ? 'required' : 'nullable' ,
            'description_one' => 'nullable',
            'description_two' => 'nullable',
            'file' => 'nullable'
        ]);

        $input = $request->all();
        if ($request->file) {
            $input['file'] = generalUpload($this->model->model, $request->file);
            $input['file_name'] = $request->file->getClientOriginalName();
        }else {
            $input['file'] = $obj->file;
        }

        if($request->image){
            $input['image'] = generalUpload($this->model->model, $request->image);
        }

        $input = getInput($input, Governance::$trans, $input['locale']);

        $obj->update($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.governance.index');

        return response()->json(compact('status', 'msg' , 'url'));
    }

    public function removeUpload(Request $request)
    {
        $obj = Governance::find($request->id);
        $status = deleteUpload($obj->file);
        $obj->update([
            'file' => null,
            'file_name' => null,
        ]);
        return response()->json(compact('status'));
    }
}

