<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'locations')->first();
        view()->share('model', $this->model);
    }
    public function index()
    {
        $data = Location::orderBy('created_at', 'desc')->get();
        return view('admin.locations.index' , compact('data'));
    }

    public function create()
    {
        return view('admin.locations.form');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'image' => 'required|max:'.getMaxSize().'|mimes:'.acceptImageType(0),
            'name_ar' => 'required',
            'name_en' => 'required',
            'name_fr' => 'required',
        ]);
        $input = $request->all();

        if($request->image){
            $input['image'] = generalUpload($this->model->model, $request->image);
        }


        $location =  Location::create($input);

        $status = true;
        $msg = __('dash.created successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg' , 'url'));
    }

    public function edit(Location $obj)
    {
        return view('admin.locations.form', ['data' => $obj]);
    }

    public function update(Request $request  , Location $obj)
    {
        $this->validate($request, [
            'image' => $obj->image?'nullable':'required'.'|max:'.getMaxSize().'|mimes:'.acceptImageType(0),
            'name_ar' => 'required',
            'name_en' => 'required',
            'name_fr' => 'required',
        ]);

        $input = $request->all();


        if($request->image){
            $input['image'] = generalUpload($this->model->model, $request->image);
        }else {
            $input['image'] = $obj->image;
        }


        $obj->update($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));

    }
    public function destroy(Request $request, Location $obj)
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
