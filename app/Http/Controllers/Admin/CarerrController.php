<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\InfoCareer;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class CarerrController extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'career-information')->first();
        view()->share('model', $this->model);
    }

    public function index()
    {
        $data = InfoCareer::orderBy('created_at', 'desc')->get();
        return view('admin.careers.index' , compact('data'));
    }

    public function create()
    {
        return view('admin.careers.form');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'file' => 'nullable',
        ]);

        $input = $request->all();
        if ($request->file) {
            $input['file'] = generalUpload($this->model->model, $request->file);
            $input['file_name'] = $request->file->getClientOriginalName();
        }


        $input = getInput($input, InfoCareer::$trans, $input['locale']);
        InfoCareer::create($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));

        return view('admin.careers.form');
    }


    public function edit(InfoCareer $obj)
    {
        return view('admin.careers.form' , ['data' => $obj]);
    }

    public function update(Request $request , InfoCareer $obj)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'file' => 'nullable',
        ]);

        $input = $request->all();

        if ($request->file) {
            $input['file'] = generalUpload($this->model->model, $request->file);
            $input['file_name'] = $request->file->getClientOriginalName();
        }else {
            $input['file'] = $obj->file;
        }

        $input = getInput($input, InfoCareer::$trans, $input['locale']);
        $obj->update($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));

        return view('admin.careers.form');
    }

    public function destroy(InfoCareer $obj)
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
        $obj = InfoCareer::find($request->id);
        $status = deleteUpload($obj->file);
        $obj->update([
            'file' => null,
            'file_name' => null,
        ]);
        return response()->json(compact('status'));
    }

    public function showForm()
    {
        $data = Career::orderBy('created_at' , 'desc')->get();
        return view('admin.careers.show' , compact('data'));
    }

    public function destroyForm(Career $obj)
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

