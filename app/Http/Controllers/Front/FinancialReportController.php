<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\FileReport;
use App\Models\Page;
use Illuminate\Http\Request;

class FinancialReportController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {
            if($request->type == 'report-annual') {
                $annual =  FileReport::where('type', '0')->orderBy('order_by', 'asc')->orderBy('created_at', 'desc');
                if($request->page_annual) {
                    if($request->page_annual > 1) {
                        $annual = $annual->paginate(3 ,['*'] , 'page' , $request->page_annual );
                    }else {
                        $annual = $annual->paginate('3');
                    }
                }
                return view('front.InvestorRelations.items-annual' , compact('annual'));
            }else {
                $quarter = FileReport::where('type', '1')->orderBy('order_by', 'asc')->orderBy('created_at', 'desc');
                if($request->page_quarter) {
                    if($request->page_quarter > 1) {
                        $quarter = $quarter->paginate(3 ,['*'] , 'page' , $request->page_quarter );
                    }else {
                        $quarter = $quarter->paginate('3');
                    }
                }
                return view('front.InvestorRelations.items-quarter' , compact('quarter'));
            }
        }else {
            $data = Page::where('page_key' , 'investor-relations')->where('section_key' , 'financial-reports')->first();
            $annual = FileReport::where('type', '0')->orderBy('order_by', 'asc')->orderBy('created_at', 'desc')->paginate(3);
            $quarter = FileReport::where('type', '1')->orderBy('order_by', 'asc')->orderBy('created_at', 'desc')->paginate(3);
            $currentDateTime = now();
            $lastMonthDateTime  = $currentDateTime->subMonth();
            $lastMonthNumber = $lastMonthDateTime->month;

            return view('front.InvestorRelations.financial' , compact('data' , 'annual' , 'quarter' , 'lastMonthNumber'));
        }
    }
}
