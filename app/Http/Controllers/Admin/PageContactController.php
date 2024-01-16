<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\ProjectModel;
use App\Models\Setting;
use Illuminate\Http\Request;

class PageContactController extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'page-contact')->first();
        view()->share('model', $this->model);
    }

    public function index ()

    {
        $data = Page::where('page_key' ,  'contact')->get();
        return view('admin.page-contact.index' , compact('data'));
    }

    public function edit ()
    {
        $setting = Setting::where('category' , '2')->get();
        return view('admin.page-contact.form' , compact('setting'));
    }

    public function update(Request $request){

        $this->validate($request, [
            'Headquarters_one' => 'required',
            'Headquarters_two' => 'required',
            'branch_one' => 'required',
            'branch_two' => 'required',
            'address_ar' => 'required',
            'address_en' => 'required',
            'email' => 'required',
        ]);


        $inputs = $request->all();
        foreach ($inputs as $index=>$value){
            $setting = Setting::where('setting_key', $index)->first();
            if($setting){
                $setting->update([
                    'setting_value' => $value
                ]);
            }
        }
        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.' . $this->model->route_key . '.index');

        return response()->json(compact('status', 'msg', 'url'));

        // $msg = __('dashboard.updated successfully');
        // $request->session()->flash('success', $msg);
        // return redirect()->route('dashboard.page-contact.index');
    }
}
