<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $branches = Branch::get();
        $info = Setting::where('category' , '2')->get();

        $Headquarters_one =  $info->where('setting_key' , 'Headquarters_one')->first();
        $Headquarters_two =  $info->where('setting_key' , 'Headquarters_two')->first();

        $branch_one =  $info->where('setting_key' , 'branch_one')->first();
        $branch_two =  $info->where('setting_key' , 'branch_two')->first();

        $email = $info->where('setting_key' , 'email')->first();

        $address_en = $info->where('setting_key' , 'address_en')->first();
        $address_ar = $info->where('setting_key' , 'address_ar')->first();

        return view('front.contact' , compact('branches' ,'Headquarters_one' ,'Headquarters_two' ,'branch_one' ,'branch_two' ,'email' ,'address_en' , 'address_ar' ));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $to = 'info@bpc.com';
        $from = [
            'email' => config('mail.from.address'),
            'name' => config('mail.from.name'),
        ];

        $inputs = $request->all();

        $data = Contact::create($inputs);
        // dd($data);
        if($to && $from){
            try {
                Mail::send('emails.contact', compact('data'), function ($msg) use ($to, $from, $data) {
                    $msg->from($from['email'], $data->name);
                    $msg->to($to, null)->subject('Contact Us');
                });
            }catch (\Exception $e){
                $status = false;
                $msg = $e->getMessage();
                return response()->json(compact('status', 'msg'));
            }
        }


        $status = true;
        $msg = __('front.application_success');

        return response()->json(compact('status', 'msg'));
    }
}
