<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'contacts')->first();
        view()->share('model', $this->model);
    }

    public function index()
    {
        $data = Contact::orderBy('created_at', 'desc')->get();
        return view('admin.contact.index' , compact('data') );
    }

    public function destroy(Contact $obj)
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
