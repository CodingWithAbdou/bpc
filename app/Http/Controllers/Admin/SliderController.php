<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\ProjectModel;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'sliders')->first();
        view()->share('model', $this->model);
    }

    public function index()  {
        $data = Slider::orderBy('order_by', 'asc')->orderBy('created_at', 'desc')->get();
        // dd($data);
        return view('admin.sliders.index', compact('data'));
    }

    public function create()  {
        return view('admin.sliders.form');
    }

    public function store(Request $request)  {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'required|max:' . getMaxSize() . '|mimes:' . acceptImageType(0),
            'file_one' => 'nullable',
            'file_two' => 'nullable',
        ]);

        $input = $request->all();


        $input['image'] = generalUpload($this->model->model, $request->image);

        if ($request->file_one) {
            $input['file_one'] = generalUpload($this->model->model, $request->file_one);
            $input['file_one_name'] = $request->file_one->getClientOriginalName();
        }

        if ($request->file_two) {
            $input['file_two'] = generalUpload($this->model->model, $request->file_two);
            $input['file_two_name'] = $request->file_two->getClientOriginalName();
        }

        $input = getInput($input, Slider::$trans, getLocale());

        Slider::create($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.' . $this->model->route_key . '.index');

        return response()->json(compact('status', 'msg', 'url'));

    }

    public function edit(Slider $obj)  {
        return view('admin.sliders.form', ['data' => $obj]);
    }

    public function update(Request $request, Slider $obj) {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|max:' . getMaxSize() . '|mimes:' . acceptImageType(0),
            'file_one' => 'nullable',
            'file_two' => 'nullable',
        ]);

        $input = $request->all();


        if ($request->image) {
            $input['image'] = generalUpload($this->model->model, $request->image);
        } else {
            $input['image'] = $obj->image;
        }

        if ($request->file_one) {
            $input['file_one'] = generalUpload($this->model->model, $request->file_one);
            $input['file_one_name'] = $request->file_one->getClientOriginalName();

        }else {
            $input['file_one'] = $obj->file_one;
        }

        if ($request->file_two) {
            $input['file_two'] = generalUpload($this->model->model, $request->file_two);
            $input['file_two_name'] = $request->file_two->getClientOriginalName();
        }else {
            $input['file_two'] = $obj->file_two;
        }

        $input = getInput($input, Slider::$trans, getLocale());
        $obj->update($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.' . $this->model->route_key . '.index');

        return response()->json(compact('status', 'msg', 'url'));

    }

    public function destroy(Slider $obj)
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
        $obj = Slider::find($request->id);
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
