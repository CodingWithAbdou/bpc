<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsLetter;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{

    public $model;

    public function __construct()
    {
        $this->model = ProjectModel::where('route_key', 'news-letter')->first();
        view()->share('model', $this->model);
    }

    public function index()
    {
        $data = NewsLetter::first();
        return view('admin.news-letter.index' , compact('data'));
    }
    public function edit()
    {
        $data = NewsLetter::first();
        return view('admin.news-letter.form' , compact('data'));
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'message_ar' => 'required',
            'message_en' => 'required',
            'file' =>'required',
        ]);

        $input = $request->all();

        if ($request->file) {
            $input['file'] = generalUpload($this->model->model, $request->file);
            $input['file_name'] = $request->file->getClientOriginalName();
        }

        NewsLetter::first()->update($input);

        $status = true;
        $msg = __('dash.updated successfully');
        $url = route('dashboard.'.$this->model->route_key.'.index');

        return response()->json(compact('status', 'msg', 'url'));
    }

    public function removeUpload(Request $request)
    {
        $obj = NewsLetter::find($request->id);
        $status = deleteUpload($obj->file);
        $obj->update([
            'file' => null,
            'file_name' => null,
        ]);
        return response()->json(compact('status'));
    }


}
