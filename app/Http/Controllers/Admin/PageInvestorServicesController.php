<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InvestorServicesInfo;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class PageInvestorServicesController extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'page-investor-services')->first();
        view()->share('model', $this->model);
    }
    public function edit()
    {
        $data = InvestorServicesInfo::get()->first();
        return view('admin.investor-services.form' , compact('data'));
    }

    public function update(Request $request)
    {
        $obj = InvestorServicesInfo::get()->first();

        $this->validate($request, [
            'whatsapp' => 'required',
            'email' => 'required',
            'description_en' => 'required',
            'description_ar' => 'required',
        ]);

        $input = $request->all();

        if($request->image){
            $input['image'] = generalUpload($this->model->model, $request->image);
        }
        $obj->update($input);


        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.investor-relations.index');

        return response()->json(compact('status', 'msg' , 'url'));
    }

}
