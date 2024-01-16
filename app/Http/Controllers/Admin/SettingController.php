<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectModel;
use App\Models\Setting;
use Facebook\Facebook;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public $model;

    public function __construct() {
        $this->model = ProjectModel::where('route_key', 'settings')->first();
        view()->share('model', $this->model);
    }

    public function index(){
        $setting = Setting::select('*')->get()->sortBy('order_by');
        return view('admin.settings.index', compact('setting'));
    }

    public function update(Request $request){
        $this->validate($request, [
            'website_name_ar' => 'required',
            'website_name_en' => 'required',
            'description_ar' => 'required',
            'description_en' => 'required',
            'Headquarters_one' => 'required',
            'Headquarters_two' => 'required',
            'branch_one' => 'required',
            'branch_two' => 'required',
            'keywords' => 'required',
            'logo' => 'nullable|max:'.getMaxSize().'|mimes:'.acceptImageType(0),
            'favicon' => 'nullable|max:'.getMaxSize().'|mimes:'.acceptImageType(0),
            'email' => 'required|email:rfc,dns',
            'address_ar' => 'required',
            'address_en' => 'required',
            'footer_description_ar' => 'required',
            'footer_description_en' => 'required',
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'instagram' => 'nullable',
            'linkedin' => 'nullable',
            'youtube' => 'nullable',

            'facebook_id' => 'nullable',
            'facebook_secert' => 'nullable',
            'facebook_token' => 'nullable',

        ]);


        $inputs = $request->all();
        $app_id =  Setting::where('setting_key' , 'facebook_id')->first()->setting_value;
        $app_secert =  Setting::where('setting_key' , 'facebook_secert')->first()->setting_value;
        $short_token = Setting::where('setting_key' , 'facebook_token')->first()->setting_value;
        if($short_token != $request->facebook_token || $app_secert != $request->facebook_secert || $app_id != $request->facebook_id){
            $short_token = $request->facebook_token ;
            $app_secert = $request->facebook_secert ;
            $app_id = $request->facebook_id ;
            $fb = new Facebook([
                'app_id' =>  $app_id,
                'app_secret' => $app_secert,
                'default_graph_version' => 'v18.0', // Use the latest version
            ]);
            try{
                $long_access_token = $fb->get(
                    '/oauth/access_token?grant_type=fb_exchange_token&client_id='. $app_id.'&client_secret='.$app_secert.'&fb_exchange_token='.$short_token.'"',
                    $short_token,
                );
                $access_token = $long_access_token->getDecodedBody()['access_token'];
                Setting::where('setting_key', 'facebook_token_long')->first()->update([
                    'setting_value' => $access_token
                ]);
            } catch (\Facebook\Exceptions\FacebookResponseException $e) {
                // echo 'Graph returned an error: ' . $e->getMessage();
            } catch (\Facebook\Exceptions\FacebookSDKException $e) {
                // echo 'Facebook SDK returned an error: ' . $e->getMessage();
            }
        }
        foreach ($inputs as $index=>$value){
            $setting = Setting::where('setting_key', $index)->first();
            if($setting){
                if($setting->setting_key == 'pdf_file'){
                    if(isset($inputs['pdf_file_name']) && $inputs['pdf_file_name']){
                        $setting->update([
                            'setting_value' => generalUpload('Setting', $value)
                        ]);
                    }else{
                        $setting->update([
                            'setting_value' => null
                        ]);
                    }
                }else{
                    if($setting->type_id == 2){
                        $setting->update([
                            'setting_value' => generalUpload('Setting', $value)
                        ]);
                    }else{
                        $setting->update([
                            'setting_value' => $value
                        ]);
                    }
                }

            }
        }

        $msg = __('dashboard.updated successfully');
        $request->session()->flash('success', $msg);
        return redirect()->route('dashboard.home');
    }

}
