<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    function translationGet(Request $request, $route_key){
        $model = ProjectModel::where('route_key', $route_key)->first();
        $data = $model->model_name::translatedIn($request->lang)->find($request->id);
        $trans = $model->model_name::$trans;
        // dd($model->model_name::$trans);
        $values = [];
        foreach ($trans as $val){
            $values[$val] = $data?$data->translate($request->lang)->$val??'':'';
        }
        $status = true;
        return response()->json(compact('status', 'values'));
    }

}
