<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'articles')->first();
        view()->share('model', $this->model);
    }
    public function index()
    {
        $data = Article::orderBy('order_by', 'asc')->orderBy('created_at', 'desc')->get();
        // dd($data);
        return view('admin.news.index' , compact('data'));
    }

    public function create()
    {
        return view('admin.news.form');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|max:'.getMaxSize().'|mimes:'.acceptImageType(0),
            'title' => 'required',
            'member_id' => 'required',
            'article_type_id' => 'required',
            'description' => 'required',
            'file_one' => 'nullable|max:'.getMaxSize().'|mimes:'.acceptFileType(0),
            'file_two' => 'nullable|max:'.getMaxSize().'|mimes:'.acceptFileType(0),
        ]);

        $input = $request->all();

        if($request->image){
            $input['image'] = generalUpload($this->model->model, $request->image);
        }
        if($request->file_one){
            $input['file_one'] = generalUpload($this->model->model, $request->file_one);
            $input['file_one_name'] = $request->file_one->getClientOriginalName();
        }
        if($request->file_two){
            $input['file_two'] = generalUpload($this->model->model, $request->file_two);
            $input['file_two_name'] = $request->file_two->getClientOriginalName();
        }
        $input = getInput($input, Article::$trans, $input['locale']);
        Article::create($input);


        $status = true;
        $msg = __('dash.created successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));
    }

    public function edit(Article $obj)
    {
        return view('admin.news.form', ['data' => $obj]);
    }

    public function update(Request $request, Article $obj)
    {

        $this->validate($request, [
            'image' => $obj->image?'nullable':'required'.'|max:'.getMaxSize().'|mimes:'.acceptImageType(0),
            'title' => 'required',
            'member_id' => 'required',
            'article_type_id' => 'required',
            'description' => 'required',
            'file_one' => 'nullable|max:'.getMaxSize().'|mimes:'.acceptFileType(0),
            'file_two' => 'nullable|max:'.getMaxSize().'|mimes:'.acceptFileType(0),
        ]);


        $input = $request->all();

        if($request->image){
            $input['image'] = generalUpload($this->model->model, $request->image);
        }else{
            $input['image'] = $obj->image;
        }

        if($request->file_one){
            $input['file_one'] = generalUpload($this->model->model, $request->file_one);
            $input['file_one_name'] = $request->file_one->getClientOriginalName();
        }else {
            $input['file_one'] = $obj->file_one;
            $input['file_one_name'] = $obj->file_one_name;
        }
        if($request->file_two){
            $input['file_two'] = generalUpload($this->model->model, $request->file_two);
            $input['file_two_name'] = $request->file_two->getClientOriginalName();
        }else {
            $input['file_two'] = $obj->file_two;
            $input['file_two_name'] = $obj->file_two_name;
        }
        
        $input = getInput($input, Article::$trans, $input['locale']);
        $obj->update($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));
    }

    public function destroy(Article $obj)
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

    public function removeUpload(Request $request){
        $status = true;
        $obj = Article::find($request->id);
        // dd($request);
        if($request->keyfile == 'file_one') {
            $status = deleteUpload($obj->file_one);
            $obj->update([
                'file_one' => null,
                'file_one_name' => null,
            ]);
        }
        if($request->keyfile == 'file_two') {
            $status = deleteUpload($obj->file_two);
            $obj->update([
                'file_two' => null,
                'file_two_name' => null,
            ]);
        }

        return response()->json(compact('status'));
    }

}
