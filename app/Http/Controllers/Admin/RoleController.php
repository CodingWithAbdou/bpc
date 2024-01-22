<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectModel;
use App\Models\Role;
use App\Models\RoleHasPermission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public $model;

    public function __construct() {
        $this->model = ProjectModel::where('route_key', 'roles')->first();
        view()->share('model', $this->model);
    }

    public function index(Request $request)
    {
        $data = Role::orderBy('created_at', 'desc')->get();
        return view('admin.roles.index', compact('data'));
    }

    public function create()
    {
        return view('admin.roles.form');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $input = $request->all();
        Role::create($input);

        \Artisan::call('cache:clear');

        $status = true;
        $msg = __('dash.created successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));
    }

    public function edit(Request $request, Role $obj)
    {
        return view('admin.roles.form', ['data' => $obj]);
    }

    public function update(Request $request, Role $obj)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $input = $request->all();
        $obj->update($input);

        \Artisan::call('cache:clear');

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));
    }

    public function destroy(Request $request, Role $obj)
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

    public function permissions(Request $request, Role $role){
        $pages = ProjectModel::whereNotNull('model')
                            ->where('model', '<>', '')
                            ->where('is_menu', 1)
                            ->with('Permission')
                            ->orderBy('order_per' , 'asc')
                            ->get();
        $role_has_permission = RoleHasPermission::where('role_id', $role->id)->get()->pluck('permission_id')->toArray();
        return view('admin.roles.permissions', compact('role', 'pages', 'role_has_permission'));
    }

    public function permissionsStore(Request $request, Role $role){
        $permissions = $request->get('permissions');
        $role->Permission()->sync($permissions);
        \Artisan::call('cache:clear');
        $msg = __('dash.updated successfully');
        $request->session()->flash('success', $msg);
        return redirect()->route('dashboard.'.$this->model->route_key.'.index');
    }

}
