<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConstantOption;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class ReorderController extends Controller
{
    public function index(Request $request, $segment, $id=0)
    {
        $model = ProjectModel::where('route_key', $segment)->first();

        if(!$model){
            abort(403);
        }
        // if($model->route_key == 'sliders') {
        //     $list  = $model->model_name::orderBy('order_by', 'asc')->get();
        // }
        if($model->route_key == 'board-of-directors') {
            $list  = $model->model_name::translatedIn(getLocale())->where('type' ,  '1')->orderBy('order_by', 'asc')->get();
        }elseif ($model->route_key == 'executive-management') {
            $list  = $model->model_name::translatedIn(getLocale())->where('type' ,  '2')->orderBy('order_by', 'asc')->get();
        }elseif ($model->route_key == 'financial-reports-annual') {
            $list  = $model->model_name::where('type' ,  '0')->orderBy('order_by', 'asc')->get();
        }
        elseif($model->route_key == 'financial-reports-quarter') {
            $list  = $model->model_name::where('type' ,  '1')->orderBy('order_by', 'asc')->get();
        }
        elseif($model->route_key == 'certificates') {
            $list  = $model->model_name::orderBy('order_by', 'asc')->get();
        }
        elseif($model->route_key == 'constants') {
            $list  = ConstantOption::orderBy('order_by', 'asc')->get();
        }
        else {
            $list = $model->model_name::translatedIn(getLocale())->orderBy('order_by', 'asc')->get();
        }

        if($id==0){
            return view('admin.reorder-items.reorder', compact('list', 'model'));
        }else{
            return view('admin.reorder-items.reorder', compact('list', 'model', 'id'));
        }
    }
    public function update(Request $request)
    {
        $itemIds = $request->idList;
        $orderIds = $request->orderList;

        if($request->segment == 'constants') {
            $model = ProjectModel::where('route_key', 'constant-options')->first();
        }else {
            $model = ProjectModel::where('route_key', $request->segment)->first();
        }
        if(!$model){
            abort(403);
        }
        if (!empty($itemIds) && !empty($orderIds)) {
            for ($i = 0; $i < sizeof($itemIds); $i++) {
                $found = $model->model_name::query()->where('id', $itemIds[$i])->first();
                if (!empty($found)) {
                    $found->update(['order_by' => $orderIds[$i]]);
                }
            }
            $status = true;
            $msg = __('dash.updated successfully');
            return response()->json(compact('status', 'msg'));
        }
        else{
            $status = false;
            $msg = __('dash.something wrong');
            return response()->json(compact('status', 'msg'));
        }
    }
}
