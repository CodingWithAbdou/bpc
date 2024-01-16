<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'branches')->first();
        view()->share('model', $this->model);
    }

    public function index ()
    {
        $data = Branch::get();
        return view('admin.branches.index' , compact('data'));
    }

    public function create()
    {
        return view('admin.branches.form');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'nullable|max:' . getMaxSize() . '|mimes:' . acceptImageType(0),
            'title' => 'required',
            'title_color' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $input = $request->all();

        if ($request->image) {
            $input['image'] = generalUpload($this->model->model, $request->image);
        }

        $input = getInput($input, Branch::$trans, $input['locale']);
        Branch::create($input);

        $status = true;
        $msg = __('dash.created successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));
    }
    public function edit(Branch $obj)
    {
        return view('admin.branches.form' , ['data' => $obj]);
    }

    public function update(Request $request , Branch $obj)
    {
        $this->validate($request, [
            'image' => 'nullable|max:' . getMaxSize() . '|mimes:' . acceptImageType(0),
            'title' => 'required',
            'title_color' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $input = $request->all();

        if ($request->image) {
            $input['image'] = generalUpload($this->model->model, $request->image);
        } else {
            $input['image'] = $obj->image;
        }

        $input = getInput($input, Branch::$trans, $input['locale']);
        $obj->update($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));

        return view('admin.categories.form');
    }

    public function destroy(Branch $obj)
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
