<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class GovernanceController extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'governance')->first();
        view()->share('model', $this->model);
    }
    public function index()
    {
        $data = Page::where('page_key' , 'governance')->get();
        return view('admin.governance.index' , compact('data'));
    }

    public function edit(Page $obj)
    {
        return view('admin.governance.form' , ['data' => $obj]);
    }

    public function update(Request $request , Page $obj)
    {
        $this->validate($request, [
            'description' => 'required',
        ]);

        $input = $request->all();

        $obj->update($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.' . $this->model->route_key . '.index');

        return response()->json(compact('status', 'msg', 'url'));

    }

}
