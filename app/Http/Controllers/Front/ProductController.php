<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductTranslation;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\search;

class ProductController extends Controller
{
    // public $search = false;
    // public $products = '';

    public function index(Request $request ,$type)
    {
        if($request->ajax()) {
            if($request->type == 'all' || $request->type == 'brand') {
                $products = Product::select('*');
            }else {
                $product_type = ProductType::where('title' , $request->type)->first();
                $products = $product_type->products();
            }
            if($request->categories) {
                $categoryId = $request->categories;
                $categories = Category::whereIn('id' , $categoryId)->get();
                $array = [];

                foreach ($categories as  $category) {
                    $products_ss = $category->products;
                    $array = array_merge($array, $products_ss->toArray());
                }
                $product_ids = [];
                for($i= 0 ; $i < count($array) ; $i++) {
                    $product_ids[] =  $array[$i]['id'];
                }
                $products = $products->whereIn('id',$product_ids );
            }
            if($request->search == null){
                $products = $products;
            }else {
                $search = $request->search;
                $productTranslations =  ProductTranslation::where('name' , 'like' , "%$search%")->get();
                $productIds = $productTranslations->pluck('product_id')->toArray();
                $products = $products->whereIn('id', $productIds);
            }
            if($request->brand and  $request->brand != '') {
                $brand = $request->brand;
                $productTranslations = ProductTranslation::where('name', 'LIKE', $brand . '%')
                ->orWhere('name', 'LIKE', strtoupper($brand) . '%')
                ->orWhere('name', 'LIKE', strtolower($brand) . '%')
                ->get();
                $productIds = $productTranslations->pluck('product_id')->toArray();
                $products = $products->whereIn('id', $productIds);
            }
            if($request->sort == 'product_asc'){
                $products = $products->orderBy('created_at', 'asc');
            }elseif($request->sort == 'product_desc') {
                $products = $products->orderBy('created_at', 'desc');
            }
            $paginate = 0;
            if($request->page != '1') {
                $fo = $request->page - 1;
                $paginate -= 12 * $fo;
            }
            $products = $products->get();

            return view('front.products.product_items' , compact('products' , 'paginate'));

        }else {
            if($type == 'all' || $type == 'brand') {
                $products = Product::select('*')->get();
            }else {
                $product_type = ProductType::where('title' , $type)->first();
                $products = $product_type->products()->get();
            }
            $product_types = ProductType::get();
            $paginate = 0;
            return view('front.products.index' , compact('products' , 'product_types' , 'type' , 'paginate'));
        }
    }

    public function show($id)
    {
        $product = Product::where('id' , $id)->first();
        $products = Product::select('*')->latest()->paginate(5)->shuffle();
        return view('front.products.show' , compact('product' , 'products'));
    }

}
