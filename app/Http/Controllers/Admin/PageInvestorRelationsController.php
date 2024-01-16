<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class PageInvestorRelationsController extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'investor-relations')->first();
        view()->share('model', $this->model);
    }

    public function index()
    {
        $data = Page::where('page_key' , 'investor-relations')->get();
        return view('admin.InvestorRelations.index',compact('data'));
    }
}
