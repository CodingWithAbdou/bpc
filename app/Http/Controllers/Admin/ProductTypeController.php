<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductType;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'product-types')->first();
        view()->share('model', $this->model);
    }
    public function index()
    {
        $data = ProductType::orderBy('created_at', 'desc')->get();
        return view('admin.product-types.index' , compact('data'));
    }

    public function edit(ProductType $obj)
    {
        return view('admin.product-types.form' , ['data' => $obj ]);
    }

    public function update(Request $request , ProductType $obj )
    {
        $this->validate($request, [
            'icone' => $obj->icone?'nullable':'required'.'|max:'.getMaxSize().'|mimes:'.acceptImageType(0),
            'name' => 'required',
        ]);

        $input = $request->all();

        if($request->icone){
            $input['icone'] = generalUpload($this->model->model, $request->icone);
        }else {
            $input['icone'] = $obj->icone;
        }


        $input = getInput($input, ProductType::$trans, $input['locale']);
        $obj->update($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));
    }
}
