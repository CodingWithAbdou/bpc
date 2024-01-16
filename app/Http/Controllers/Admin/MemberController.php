<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public $model, $type;

    public function __construct(Request $request) {
        $this->model = ProjectModel::where('route_key', $request->segment(2))->first();
        view()->share('model', $this->model);
        if($this->model->route_key == 'board-of-directors'){
            $this->type = 1;
        }else{
            $this->type = 2;
        }
    }

    public function index()
    {
        $data = Member::where('type', $this->type)->translatedIn(getLocale())->orderBy('order_by', 'asc')->orderBy('created_at', 'desc')->get();
        return view('admin.members.index', compact('data'));
    }

    public function create()
    {
        return view('admin.members.form', ['type' => $this->type]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'job_title' => 'nullable',
            'description' =>'required',
            'image' => 'nullable|max:'.getMaxSize().'|mimes:'.acceptImageType(0),
        ]);

        $input = $request->all();
        if($request->image){
            $input['image'] = generalUpload($this->model->model, $request->image);
        }
        $input = getInput($input, Member::$trans, $input['locale']);
        Member::create($input);

        $status = true;
        $msg = __('dash.created successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));
    }

    public function edit(Member $obj)
    {
        return view('admin.members.form', ['data' => $obj, 'type' => $obj->type]);
    }

    public function update(Request $request, Member $obj)
    {
        $this->validate($request, [
            'name' => 'required',
            'job_title' => 'nullable',
            'description' =>'required',
            'image' => 'nullable|max:'.getMaxSize().'|mimes:'.acceptImageType(0),
        ]);

        $input = $request->all();

        if($request->image){
            $input['image'] = generalUpload($this->model->model, $request->image);
        }else{
            $input['image'] = $obj->image;
        }

        $input = getInput($input, Member::$trans, $input['locale']);
        $obj->update($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));
    }

    public function destroy(Member $obj)
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
