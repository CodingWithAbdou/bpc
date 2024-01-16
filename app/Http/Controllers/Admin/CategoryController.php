<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'categories')->first();
        view()->share('model', $this->model);
    }

    public function index()
    {
        $data = Category::orderBy('created_at', 'desc')->get();
        return view('admin.categories.index' , compact('data'));
    }

    public function create()
    {
        return view('admin.categories.form');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'product_type_id' => 'required',
        ]);

        $input = $request->all();


        $input = getInput($input, Category::$trans, $input['locale']);
        Category::create($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));

        return view('admin.categories.form');
    }

    public function edit(Category $obj)
    {
        return view('admin.categories.form' , ['data' => $obj]);
    }

    public function update(Request $request , Category $obj)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $input = $request->all();


        $input = getInput($input, Category::$trans, $input['locale']);
        $obj->update($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));

        return view('admin.categories.form');
    }

    public function destroy(Category $obj)
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
