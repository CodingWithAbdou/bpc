<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectModel;
use App\Models\StokePrice;
use Illuminate\Http\Request;

class PageStokPriceController extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'stock-price')->first();
        view()->share('model', $this->model);
    }

    public function edit()
    {
        $data = StokePrice::translatedIn(getLocale())->first();
        return view('admin.stoke-price.form' , compact('data'));
    }

    public function update(Request $request)
    {
        $obj = StokePrice::get()->first();

        $this->validate($request, [
            'image' => $obj->image?'nullable':'required'.'|max:'.getMaxSize().'|mimes:'.acceptImageType(0),
            'price' => 'required',
            'percent' => 'required',
            'link' => 'required',
            'subtitle' => 'required',
            'info' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        if($request->image){
            $input['image'] = generalUpload($this->model->model, $request->image);
        }

        $input = getInput($input, StokePrice::$trans, $input['locale']);
        $obj->update($input);


        $status = true;
        $msg = __('dash.created successfully');
        $url = route('dashboard.investor-relations.index');

        return response()->json(compact('status', 'msg' , 'url'));
    }
}
