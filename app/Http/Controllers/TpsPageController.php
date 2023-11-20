<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TpsPage;
use App\TpsPageSectionName;
use App\TpsPageSection;
use View; 

class TpsPageController extends Controller
{
    public function index(){
      $data = TpsPage::first();
      return view('market.tpspage.index',compact('data'));
    }
 
    public function home(){
      $firstdata = TpsPageSectionName::with('sections')->where('id',1)->first();
      $data = TpsPageSection::first();
      $section = TpsPageSectionName::all();
      return view('market.tpspage.home',compact('firstdata','section','data'));
    }
    public function edit($id){
         $firstdata = TpsPageSectionName::with('sections')->where('id',$id)->first();
         $section = TpsPageSectionName::all();
         return view('market.tpspage.home',compact('firstdata','section'));
    }
    public function update(Request $request){
       $data =  TpsPage::first();
       $data->code = $request->code;
       $data->save();
       return redirect()->back();
    }
    public function view(){
        $data = TpsPage::first();
        $cmp_logo = TpsPageSection::where('name','cmp_logo')->first();
        $cmp_name = TpsPageSection::where('name','cmp_name')->first();
        $section_1_title = TpsPageSection::where('name','section_1_title')->first();
        $section_1_btn =  TpsPageSection::where('name','section_1_btn')->first();
        return view('market.tpspage.new',compact('cmp_name','cmp_logo','section_1_title','section_1_btn'));


       // $str1 = View::make('market.tpspage.header',compact('cmp_name','cmp_logo'));
       // $replaced2 = View::make('market.tpspage.footer');
       // $replaced = str_replace('{header}', $str1, $data->code);
       // $replaced2 = str_replace('{footer}', $str2, $replaced);
       // return view('market.tpspage.view2',compact('replaced2'));
    }
    public function sectionUpdate(Request $request){
       $data = TpsPageSection::all();
       foreach($data as $key => $val){
           $newkey = $key+1;
           $sectioname = 'section'.$newkey;
           $val->update([
             $val->text = $request->$sectioname
           ]);
       }
       return redirect()->back();

    }
}
