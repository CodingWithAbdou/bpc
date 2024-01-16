<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FileReport;
use App\Models\Page;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class PageFinancialReportsController extends Controller
{
    public $model;

    public function __construct() {
        $this->model = ProjectModel::where('route_key', "financial-reports")->first();
        view()->share('model', $this->model);
    }

    public function index()
    {
        $data = Page::where('page_key' , 'investor-relations')->where('section_key' , 'financial-reports')->first();
        $financial_reports_annual = ProjectModel::where('route_key', "financial-reports-annual")->first();
        $financial_reports_quarter = ProjectModel::where('route_key', "financial-reports-quarter")->first();
        return view('admin.financial-reports.index', compact('data' , 'financial_reports_annual' , 'financial_reports_quarter'));
    }

    public function edit()
    {
        $data = Page::where('page_key' , 'investor-relations')->where('section_key' , 'financial-reports')->first();
        return view('admin.financial-reports.form', compact('data'));
    }

    public function update(Request $request)
    {
        $obj =  Page::where('page_key' , 'investor-relations')->where('section_key' , 'financial-reports')->first();
        $this->validate($request, [
            'image_one' => $obj->image?'nullable':'required'.'|max:'.getMaxSize().'|mimes:'.acceptImageType(0),
        ]);

        $input = $request->all();

        if($request->image_one){
            $input['image_one'] = generalUpload($this->model->model, $request->image_one);
        }else {
            $input['image_one'] = $obj->image_one;
        }

        $obj->update($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));

    }
}
