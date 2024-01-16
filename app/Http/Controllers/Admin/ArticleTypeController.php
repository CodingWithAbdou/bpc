<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ArticleType;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class ArticleTypeController extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'article-type')->first();
        view()->share('model', $this->model);
    }

    public function index()
    {
        $data = ArticleType::orderBy('order_by', 'asc')->get();
        return view('admin.news-type.index' , compact('data'));
    }

    public function create()
    {
        return view('admin.news-type.form');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $input = $request->all();


        $input = getInput($input, ArticleType::$trans, $input['locale']);
        ArticleType::create($input);

        $status = true;
        $msg = __('dash.created successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));

        return view('admin.home');
    }

    public function edit(ArticleType $obj)
    {
        return view('admin.news-type.form' , ['data' => $obj]);
    }

    public function update(Request $request , ArticleType $obj)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $input = $request->all();


        $input = getInput($input, ArticleType::$trans, $input['locale']);
        $obj->update($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));

        return view('admin.home');
    }

    public function destroy(ArticleType $obj)
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
