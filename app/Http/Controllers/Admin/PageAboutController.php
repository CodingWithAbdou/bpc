<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class PageAboutController extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'pageAbout')->first();
        view()->share('model', $this->model);
    }

    public function index(Request $request)
    {
//        $data = Page::where('page_key', 'about')->translatedIn(getLocale())->orderBy('order_no', 'asc')->orderBy('created_at', 'desc')->get();
        $data = Page::where('page_key', 'about')->orderBy('order_by', 'asc')->get();
        return view('admin.pages.index', compact('data'));
    }

    public function edit(Page $obj)
    {
        return view('admin.pages.form', ['data' => $obj]);
    }

    public function update(Request $request, Page $obj)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'nullable',
            'description' => 'nullable',
            'image_one' => 'nullable|max:' . getMaxSize() . '|mimes:' . acceptImageType(0),
        ]);

        $input = $request->all();

        if ($request->image_one) {
            $input['image_one'] = generalUpload($this->model->model, $request->image_one);
        } else {
            $input['image_one'] = $obj->image_one;
        }

        if ($request->image_two) {
            $input['image_two'] = generalUpload($this->model->model, $request->image_two);
        } else {
            $input['image_two'] = $obj->image_two;
        }

        $input = getInput($input, Page::$trans, $input['locale']);
        $obj->update($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.' . $this->model->route_key . '.index');

        return response()->json(compact('status', 'msg', 'url'));
    }
}
