<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\PageList;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class PageEnvironmentConteroller extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'environment')->first();
        view()->share('model', $this->model);
    }

    public function index ()
    {
        $data = Page::where('page_key' , 'responsibility')->where('section_key' , 'environment')->first();
        return view('admin.responsibility.environment.index' , compact('data'));
    }

    public function edit()
    {
        $data = Page::where('page_key' , 'responsibility')->where('section_key' , 'environment')->first();
        return view('admin.responsibility.environment.form' , compact('data'));
    }

    public function update(Request $request)
    {
        $obj = Page::where('page_key' , 'responsibility')->where('section_key' , 'environment')->first();
        $this->validate($request, [
            'image_one' => $obj->image_one?'nullable':'required'.'|max:'.getMaxSize().'|mimes:'.acceptImageType(0),
            'title' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        if($request->image_one){
            $input['image_one'] = generalUpload($this->model->model, $request->image_one);
        }else {
            $input['image_one'] = $obj->image_one;
        }

        $input = getInput($input, Page::$trans, $input['locale']);
        $obj->update($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.' . $this->model->route_key . '.index');

        return response()->json(compact('status', 'msg', 'url'));
    }
    
    public function lists(PageList $obj)
    {
        return view('admin.responsibility.environment.form-lists' , ['data' => $obj]);
    }

    public function listsUpdate(Request $request , PageList $obj)
    {
        $this->validate($request, [
            'title' => 'required',
            'title_color' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        $input = getInput($input, PageList::$trans, $input['locale']);
        $obj->update($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.' . $this->model->route_key . '.index');

        return response()->json(compact('status', 'msg', 'url'));

    }
}
