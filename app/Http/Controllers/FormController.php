<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function form(Request $request)
    {

        $this->validate($request, [
            'location' => 'required',
            'hotel' => 'required',
            'checkin' => 'required',
            'checkout' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'number_people' => 'required',
            'room' => 'required',
            'fullname' => 'required',
            'age' => 'required',
            'number_passport' => 'required',
            'nationality' => 'required',
            'delivery' => 'required',
            'flight_no' => $request->delivery == '1' ? 'required' : 'nullable',
            'arrival_time' => $request->delivery == '1' ? 'required' : 'nullable',
        ]);

        $inputs = $request->all();

        if (auth()->check()) {
            $inputs['auth'] = auth()->user()->name;
        }

        $reservation = Reservation::create($inputs);

        if($request->number_people)
        {
            foreach($request->fullname as $key=>$fullname) {
                if($fullname == null) continue;
                $reservation->peoples()->create([
                    'reservation_id' => $reservation->id,
                    'age' => $request->age[$key],
                    'number_passport' => $request->number_passport[$key] ,
                    'nationality' => $request->nationality[$key] ,
                    'fullname' => $request->fullname[$key],
                ]);
            }
        }

        $to = 'reservation@canturktourism.com';
        $from = [
            'email' => config('mail.from.address'),
            'name' => config('mail.from.name'),
        ];
        $data = $reservation;
        if($to && $from){
            try {
                Mail::send('emails.reserv', compact('data'), function ($msg) use ($to, $from, $data) {
                    $msg->from($from['email'], $data->name);
                    $msg->to($to, null)->subject('Reservation');
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
