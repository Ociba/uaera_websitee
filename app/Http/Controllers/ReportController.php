<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Report;

class ReportController extends Controller
{
  protected function viewReport(){
      $get_reports =DB::table('reports')->get();
      return view('themes.reports',compact('get_reports'));
  }
  /** 
   * This function saves report in file
  */
  private function saveReport(){
    $report = request()->report;
    $file_path = $report->getClientOriginalName();
    $report->move('Reports/',$file_path);
    return $file_path;
  }
  /** 
   * This function creates report
  */
  protected function addReport(){
     $report_obj =new Report;
     $report_obj->title =request()->title;
     $report_obj->report =$this->saveReport();
     $report_obj->save();
     return redirect()->back()->with('Operation Successfull');
  }
  /**
   * This function gets reports
   */
  protected function getReports(){
      $get_reports =Report::get();
      return view('admin.report', compact('get_reports'));
  }
  /**
   * This function edits reports
   */
  protected function editReport($report_id){
    $get_report_to_edit =Report::where('id',$report_id)->get();
    return view('admin.edit-report',compact('get_report_to_edit'));
}
protected function updateReport($report_id){
    Report::where('id',$report_id)->update(array(
        'title' =>request()->title,
        'report'  =>request()->report,
    ));
    return redirect()->back()->with('msg','You have Updated  Info Successfully');
}
protected function deleteReport($report_id){
    Report::where('id',$report_id)->delete();
    return redirect()->back()->with('msg','You have Deleted Team Member Successfully');
}
}
