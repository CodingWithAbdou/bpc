<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InvestorService;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class InvestorServiceController extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'investor-services')->first();
        view()->share('model', $this->model);
    }

    public function index()
    {
        $data = InvestorService::orderBy('created_at', 'desc')->get();
        return view('admin.investor-services.index' , compact('data') );
    }

    public function destroy(InvestorService $obj)
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
