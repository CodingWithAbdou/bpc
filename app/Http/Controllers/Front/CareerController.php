<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Constant;
use App\Models\InfoCareer;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Continue_;

class CareerController extends Controller
{
    public function index()
    {
        $data = InfoCareer::orderBy('order_by' , 'asc')->get();
        return view('front.careers.index' , compact('data'));
    }


    public function show(InfoCareer $obj)
    {
        $data = InfoCareer::orderBy('order_by' , 'asc')->get();

        if ($data->count() == 0 ) {
            abort(404);
        }

        $degrees = Constant::where('title_en' , "Degree")->first()->options()->orderBy('order_by' , 'asc')->get();
        $universities = Constant::where('title_en' , "The University")->first()->options()->orderBy('order_by' , 'asc')->get();
        $languages = Constant::where('title_en' , "Languages")->first()->options()->orderBy('order_by' , 'asc')->get();
        $births = Constant::where('title_en' , "Place Of Birth")->first()->options()->orderBy('order_by' , 'asc')->get();
        $marital_status = Constant::where('title_en' , "marital status")->first()->options()->orderBy('order_by' , 'asc')->get();

        $job_title = $obj;
        return view('front.careers.form' , compact('degrees' , 'universities' , 'languages' , 'births' , 'marital_status'  , 'job_title' , ));
    }

    public function store(Request $request ,InfoCareer $obj)
    {
        $data = InfoCareer::orderBy('order_by' , 'asc')->get();

        if ($data->count() == 0 ) {
            abort(404);
        }

        $customMessages = [
            'Degree.*.required_with' => 'The degree field is required when any of the related fields are present.',
            'specialization.*.required_with' => 'The specialization field is required when any of the related fields are present.',
            'university.*.required_with' => 'The university field is required when any of the related fields are present.',
            'dob.*.required_with' => 'The date of birth field is required when any of the related fields are present.',

            'language.*.required_with' => 'The language field is required when any of the related fields are present.',
            'reading.*.required_with' => 'The reading field is required when any of the related fields are present.',
            'writing.*.required_with' => 'The writing field is required when any of the related fields are present.',
            'speaking.*.required_with' => 'The speaking field is required when any of the related fields are present.',

            'programs.*.required_with' => 'The programs field is required when any of the related fields are present.',
            'experience.*.required_with' => 'The experience field is required when any of the related fields are present.',
            'course_names.*.required_with' => 'The course names field is required when any of the related fields are present.',
            'institute.*.required_with' => 'The institute field is required when any of the related fields are present.',
            'period.*.required_with' => 'The period field is required when any of the related fields are present.',

            'company_name.*.required_with' => 'The company name field is required when any of the related fields are present.',
            'company_address.*.required_with' => 'The company address field is required when any of the related fields are present.',
            'company_number.*.required_with' => 'The company number field is required when any of the related fields are present.',
            'salary_starting.*.required_with' => 'The starting salary field is required when any of the related fields are present.',
            'salary_ending.*.required_with' => 'The ending salary field is required when any of the related fields are present.',
            'period_from.*.required_with' => 'The period from field is required when any of the related fields are present.',
            'period_to.*.required_with' => 'The period to field is required when any of the related fields are present.',
            'reason_for_leave.*.required_with' => 'The reason for leave field is required when any of the related fields are present.',
        ];
        $this->validate($request, [
            'image' => 'required|max:' . getMaxSize() . '|mimes:' . acceptImageType(0),
            'full_name' => 'required',
            'position' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'place_of_birth' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'passport_no' => 'required',
            'marital_status' => 'required',

            'Degree.*' => 'nullable|required_with:specialization.*,university.*,dob.*',
            'specialization.*' => 'nullable|required_with:Degree.*,university.*,dob.*',
            'university.*' => 'nullable|required_with:Degree.*,specialization.*,dob.*',
            'dob.*' => 'nullable|required_with:Degree.*,specialization.*,university.*',

            'language.*' => 'nullable|distinct|required_with:reading.*,writing.*,speaking.*',
            'reading.*' => 'nullable|required_with:language.*',
            'writing.*' => 'nullable|required_with:language.*',
            'speaking.*' => 'nullable|required_with:language.*',

            'programs.*' => 'nullable|required_with:experience.*',
            'experience.*' => 'nullable|required_with:programs.*',

            'course_names.*' => 'nullable|required_with:institute.*,period.*',
            'institute.*' => 'nullable|required_with:course_names.*,period.*',
            'period.*' => 'nullable|required_with:course_names.*,institute.*',

            'company_name.*' => 'nullable|required_with:company_address.*,company_number.*,salary_starting.*,salary_ending.*,period_from.*,period_to.*,reason_for_leave.*',
            'company_address.*' => 'nullable|required_with:company_name.*,company_number.*,salary_starting.*,salary_ending.*,period_from.*,period_to.*,reason_for_leave.*',
            'company_number.*' => 'nullable|required_with:company_name.*,company_address.*,salary_starting.*,salary_ending.*,period_from.*,period_to.*,reason_for_leave.*',
            'salary_starting.*' => 'nullable|required_with:company_name.*,company_address.*,company_number.*,salary_ending.*,period_from.*,period_to.*,reason_for_leave.*',
            'salary_ending.*' => 'nullable|required_with:company_name.*,company_address.*,company_number.*,salary_starting.*,period_from.*,period_to.*,reason_for_leave.*',
            'period_from.*' => 'nullable|required_with:company_name.*,company_address.*,company_number.*,salary_starting.*,salary_ending.*,period_to.*,reason_for_leave.*',
            'period_to.*' => 'nullable|required_with:company_name.*,company_address.*,company_number.*,salary_starting.*,salary_ending.*,period_from.*,reason_for_leave.*',
            'reason_for_leave.*' => 'nullable|required_with:company_name.*,company_address.*,company_number.*,salary_starting.*,salary_ending.*,period_from.*,period_to.*',

            'has_suffer' => 'required',
            'desc_suffer' => 'required_if:has_suffer,1',
            'has_allergy' => 'required',
            'smoke' => 'required',

            'is_agree' => 'required',
    ],[
        'is_agree.required' => __('validation.you shoud agree'),
        "desc_suffer.required_if" =>  __('validation.You must fill out this field'),
    ]);


        $inputs = $request->all();
        $inputs['image'] =  generalUpload('InvestorService', $request->image);
        if($request->is_agree == 'on') {
            $inputs['is_agree'] = 1;
        }

        $career = Career::create($inputs);

        if($request->Degree ) {
            foreach($request->Degree as $key=>$degree) {
                if($degree == null) continue;
                $career->universities()->create([
                    'career_id' => $career->id,
                    'degree' => $degree ,
                    'degree_specialization' => $request->specialization[$key] ,
                    'degree_university' => $request->university[$key],
                    'degree_date' => $request->dob[$key] ,
                ]);
            }
        }

        if($request->language) {
            foreach($request->language as $key=>$lang) {
                if($lang == null) continue;
                $career->languages()->create([
                    'career_id' => $career->id,
                    'language' => $lang ,
                    'reading' => $request->reading[$key] ,
                    'writing' => $request->writing[$key],
                    'speaking' => $request->speaking[$key] ,
                ]);
            }
        }

        if($request->programs) {
            foreach($request->programs as $key=>$program) {
                if($program == null) continue;
                $career->computerSkill()->create([
                    'career_id' => $career->id,
                    'name' => $program ,
                    'Experience' => $request->experience[$key],
                ]);
            }
        }

        if($request->course_names) {
            foreach($request->course_names as $key=>$course) {
                if($course == null) continue;
                $career->trainings()->create([
                    'career_id' => $career->id,
                    'name' => $course ,
                    'training_institute' => $request->institute[$key],
                    'Period' => $request->period[$key],
                ]);
            }
        }

        if($request->company_name ) {
            foreach($request->company_name as $key=>$company) {
                if($company == null) continue;
                $career->experiences()->create([
                    'career_id' => $career->id,
                    'company_name' =>  $company ,
                    'company_address' => $request->company_address[$key] ,
                    'company_tel' => $request->company_number[$key] ,
                    'salary_start' => $request->salary_starting[$key] ,
                    'salary_end' => $request->salary_ending[$key] ,
                    'period_from' => $request->period_from[$key],
                    'period_to' => $request->period_to[$key],
                    'reason_for_leaving' => $request->reason_for_leave[$key] ,
                ]);
            }
        }

        $status = true;
        $msg = __('front.application_success');

        return response()->json(compact('status', 'msg'));

    }
}
