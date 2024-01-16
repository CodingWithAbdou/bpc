<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FileReport;
use App\Models\Page;
use App\Models\PageList;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class PageResponsibility extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'social-responsibility')->first();
        view()->share('model', $this->model);
    }

    public function index()
    {
        $data = Page::where('page_key' , 'responsibility')->orderBy('created_at', 'desc')->get();
        return view('admin.responsibility.index' , compact('data'));
    }

    public function edit()
    {
        $obj = Page::where('page_key' , 'responsibility')->where('section_key' , 'social_responsibility')->first();
        return view('admin.responsibility.form', ['data' => $obj]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);
        $input = $request->all();
        $input = getInput($input, Page::$trans, $input['locale']);
        $obj = Page::where('page_key' , 'responsibility')->where('section_key' , 'social_responsibility')->first();
        $obj->update($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.' . $this->model->route_key . '.index');

        return response()->json(compact('status', 'msg', 'url'));
    }

    public function community()
    {
        $data = Page::where('page_key' , 'responsibility')->where('section_key' , 'community')->first();
        return view('admin.responsibility.community.form' , compact('data'));
    }

    public function communityupdate(Request $request)
    {
        $obj = Page::where('page_key' , 'responsibility')->where('section_key' , 'community')->first();
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

}
