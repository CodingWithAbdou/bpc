<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'products')->first();
        view()->share('model', $this->model);
    }
    public function index()
    {
        $data = Product::orderBy('created_at', 'desc')->get();
        return view('admin.products.index' , compact('data'));
    }

    public function create()
    {
        return view('admin.products.form');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'image' => 'required|max:'.getMaxSize().'|mimes:'.acceptImageType(0),
            'name' => 'required',
            'product_type_id' => 'required',
            'category_ids' => 'required|array',
            'use' => 'required',
            'how_to_use' => 'required',
            'file' => 'nullable|max:'.getMaxSize().'|mimes:'.acceptFileType(0),
            'image_sm' => 'nullable',
            'image_lg' => 'nullable',
        ]);


        $count_sm = 0 ;
        $count_lg = 0 ;
        $input = $request->all();
        if($request->image_sm){
            $imageSmPaths = [];
            foreach($request->image_sm as $image) {
                $count_sm++;
                $imageSmPaths[] = generalUpload($this->model->model,  $image);
            }
        }

        if($request->image_lg){
            $imageLgPaths = [];
            foreach($request->image_lg as $image) {
                $count_lg++;
                $imageLgPaths[] = generalUpload($this->model->model,  $image);
            }
        }
        if($request->image){
            $input['image'] = generalUpload($this->model->model, $request->image);
        }
        if($request->file){
            $input['file'] = generalUpload($this->model->model, $request->file);
            $input['file_name'] = $request->file->getClientOriginalName();
        }

        $input = getInput($input, Product::$trans, $input['locale']);
        $product =  Product::create($input);
        $counter = $count_sm < $count_lg  ? $count_lg : $count_sm;
        for( $i =0 ; $i < $counter ; $i++ ) {
            $product->images()->create([
                'product_id' => $product->id,
                'image_sm' =>  $imageSmPaths[$i]??''  ,
                'image_lg' => $imageLgPaths[$i]?? '' ,
            ]);
        }

        if(count($request->category_ids) > 0) {
            $product->categories()->syncWithoutDetaching($request->category_ids);
        }

        $status = true;
        $msg = __('dash.created successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg' , 'url'));
    }

    public function edit(Product $obj)
    {
        return view('admin.products.form', ['data' => $obj]);
    }

    public function update(Request $request  , Product $obj)
    {
        $this->validate($request, [
            'image' => $obj->image?'nullable':'required'.'|max:'.getMaxSize().'|mimes:'.acceptImageType(0),
            'name' => 'required',
            'product_type_id' => 'required',
            'category_ids' => 'required',
            'use' => 'required',
            'how_to_use' => 'required',
            'file' => 'nullable|max:'.getMaxSize().'|mimes:'.acceptFileType(0),
            'image_sm' => 'nullable',
            'image_lg' => 'nullable',
        ]);

        $count_sm = 0 ;
        $count_lg = 0 ;
        $imageSmPaths = [];
        $imageLgPaths = [];
        $input = $request->all();

        if($request->image_sm){
            $keys = array_keys($request->image_sm);
            for($i =0 ; $i <= 2 ; $i++) {
                if(in_array( $i, $keys )) {
                    $count_sm = $i;
                    $imageSmPaths[$i] = generalUpload($this->model->model,  $request->image_sm[$i]);
                }else {
                    $imageSmPaths[$i] = $obj->images->where('product_id' , $obj->id)[$i]->image_sm??'';
                }
            }
        }else {
            for($i =0 ; $i <= 2 ; $i++) {
                $imageSmPaths[$i] = $obj->images->where('product_id' , $obj->id)[$i]->image_sm??'';
            }
        }
        if($request->image_lg){
            $keys = array_keys($request->image_lg);
            for($i =0 ; $i <= 2 ; $i++) {
                if(in_array( $i, $keys )) {
                    $count_lg = $i;
                    $imageLgPaths[$i] = generalUpload($this->model->model,  $request->image_lg[$i]);
                }else {
                    $imageLgPaths[$i] = $obj->images->where('product_id' , $obj->id)[$i]->image_lg??'';
                }
            }
        }else {
            for($i =0 ; $i <= 2 ; $i++) {
                $imageLgPaths[$i] = $obj->images->where('product_id' , $obj->id)[$i]->image_lg??'';
            }
        }

        if($request->image){
            $input['image'] = generalUpload($this->model->model, $request->image);
        }else {
            $input['image'] = $obj->image;
        }
        if($request->file){
            $input['file'] = generalUpload($this->model->model, $request->file);
            $input['file_name'] = $request->file->getClientOriginalName();
        }else {
            $input['file'] = $obj->file;
            $input['file_name'] = $obj->file_name;
        }

        $input = getInput($input, Product::$trans, $input['locale']);
        $obj->update($input);
        $counter = $count_sm < $count_lg  ? $count_lg : $count_sm;

        for( $i =0 ; $i < $obj->images->count() ; $i++ ) {
            $obj->images[$i]->update([
                'product_id' => $obj->id,
                'image_sm' =>  $imageSmPaths[$i]??''  ,
                'image_lg' => $imageLgPaths[$i]?? '' ,
            ]);
        }
        $counter = $count_sm < $count_lg  ? $count_lg : $count_sm;

        if($counter == $obj->images->count()) {
            for( $i = $obj->images->count() ; $i <= $counter ; $i++ ) {
                $obj->images()->create([
                    'product_id' => $obj->id,
                    'image_sm' =>  $imageSmPaths[$i]??''  ,
                    'image_lg' => $imageLgPaths[$i]?? '' ,
                ]);
            }
        }

        if(count($request->category_ids) > 0) {
            $obj->categories()->sync($request->category_ids);
        }

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));

    }

    public function destroy(Product $obj)
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

    public function removeUpload(Request $request)
    {
        $obj = Product::find($request->id);
        $status = deleteUpload($obj->file);
        $obj->update([
            'file' => null,
            'file_name' => null,
        ]);
        return response()->json(compact('status'));
    }
}
