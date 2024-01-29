<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectModel;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'reservations')->first();
        view()->share('model', $this->model);
    }

    /**
     * Display a listing of the resource.
     */
    public function registered()
    {
        $data = Reservation::orderBy('created_at', 'desc')->where("auth" , "1")->get();
        return view('admin.reservations.index' , compact('data'));
    }
    public function noRegistered()
    {
        $data = Reservation::orderBy('created_at', 'desc')->where("auth" , "0")->get();
        return view('admin.reservations.index' , compact('data'));
    }

    public function destroy(Request $request, Reservation $obj)
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
