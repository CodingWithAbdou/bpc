<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\InvestorService;
use App\Models\InvestorServicesInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InvestorServiceController extends Controller
{
    public function index()
    {
        $data = InvestorServicesInfo::first();
        return  view('front.InvestorRelations.services' , compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'card_id' => 'required',
            'mobile' => 'required',
            'email' => 'required|email:rfc,dns',
            'address' => 'required',
            'image' => 'nullable|max:' . getMaxSize() . '|mimes:' . acceptImageType(0),
            'bank_name' => 'required',
            'iban' => 'required',
        ]);


        $inputs = $request->all();
        $inputs['image'] =  generalUpload('InvestorService', $request->image);
        $data = InvestorService::create($inputs);


        $to = 'info@bpc.com';
        $from = [
            'email' => config('mail.from.address'),
            'name' => config('mail.from.name'),
        ];

        if($to && $from){
            try {
                Mail::send('emails.services', compact('data'), function ($msg) use ($to, $from, $data) {
                    $msg->from($from['email'], $data->name);
                    $msg->to($to, null)->subject('Investor services');
                    $msg->attach(asset($data->image));

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
