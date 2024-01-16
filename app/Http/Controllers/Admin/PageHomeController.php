<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\ProjectModel;
use App\Models\Slider;
use Illuminate\Http\Request;

class PageHomeController extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'pageHome')->first();
        view()->share('model', $this->model);
    }

    public function index(Request $request)
    {
        $data = Page::where('page_key', 'home')->orderBy('order_by', 'asc')->get();
        $sliders = Slider::orderBy('order_by', 'asc')->get();

        return view('admin.pages.index', compact('data' , 'sliders'));
    }

    public function edit(Page $obj)
    {
        // $production_types = ProductType::orderBy('order_by', 'asc')->get();
        return view('admin.pages.form', ['data' => $obj]);
    }

    public function update(Request $request, Page $obj)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'nullable',
            'description' => 'nullable',
            'image_one' => 'nullable|max:' . getMaxSize() . '|mimes:' . acceptImageType(0),
            'image_two' => 'nullable|max:' . getMaxSize() . '|mimes:' . acceptImageType(0),
            'info' => $obj->section_key == 'since'?'required':'nullable',
        ]);

        $input = $request->all();

        if ($request->image_one) {
            $input['image_one'] = generalUpload($this->model->model, $request->image_one);
        }
        if ($request->image_two) {
            $input['image_two'] = generalUpload($this->model->model, $request->image_two);
        }

        $input = getInput($input, Page::$trans, $input['locale']);
        $obj->update($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.' . $this->model->route_key . '.index');

        return response()->json(compact('status', 'msg', 'url'));
    }

}
