<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Constant;
use App\Models\ConstantOption;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class ConstantController extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'constants')->first();
        view()->share('model', $this->model);
    }

    public function index()
    {
        $data = Constant::orderBy('created_at', 'desc')->get();
        return view('admin.constants.index' , compact('data'));
    }
    public function show(Constant $obj)

    {
        $data = $obj->options;
        // dd($data);
        return view('admin.constants.show' , compact('data'));
    }

    public function create()
    {

        return view('admin.constants.form');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_ar' => 'required',
            'name_en' => 'required',
            'constant_id' => 'required',
        ]);


        $input = $request->all();

        ConstantOption::create($input);

        $status = true;
        $msg = __('dash.created successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));

        return view('admin.constants.form');
    }

    public function edit(ConstantOption $obj)
    {
        return view('admin.constants.form' , ['data' => $obj]);
    }

    public function update(Request $request , ConstantOption $obj)
    {
        $this->validate($request, [
            'name_ar' => 'required',
            'name_en' => 'required',
            'constant_id' => 'required',
        ]);

        $input = $request->all();


        $obj->update($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));

        return view('admin.constants.form');
    }

    public function destroy(ConstantOption $obj)
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
