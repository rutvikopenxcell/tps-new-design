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

        $section_2_title = TpsPageSection::where('name','section_2_title')->first();
        $section_2_text = TpsPageSection::where('name','section_2_text')->first();

        $section_3_title = TpsPageSection::where('name','section_3_title')->first();
        $section_3_image = TpsPageSection::where('name','section_3_image')->first();
        $section_3_text = TpsPageSection::where('name','section_3_text')->first();
 
        $section_4_title = TpsPageSection::where('name','section_4_title')->first();
        $section_4_image = TpsPageSection::where('name','section_4_image')->first();
        $section_4_text = TpsPageSection::where('name','section_4_text')->first();

        $section_step_1_title = TpsPageSection::where('name','section_step_1_title')->first();
        $section_step_1_image = TpsPageSection::where('name','section_step_1_image')->first();
        $section_step_1_text = TpsPageSection::where('name','section_step_1_text')->first();

        $section_step_2_title = TpsPageSection::where('name','section_step_2_title')->first();
        $section_step_2_image = TpsPageSection::where('name','section_step_2_image')->first();
        $section_step_2_text = TpsPageSection::where('name','section_step_2_text')->first();

        $section_step_3_title = TpsPageSection::where('name','section_step_3_title')->first();
        $section_step_3_image = TpsPageSection::where('name','section_step_3_image')->first();
        $section_step_3_text = TpsPageSection::where('name','section_step_3_text')->first();
      

        $section_enroll_title = TpsPageSection::where('name','section_enroll_title')->first();

        $section_form_title = TpsPageSection::where('name','section_form_title')->first();

        $section_bottom_title = TpsPageSection::where('name','section_bottom_title')->first();
        $section_bottom_text = TpsPageSection::where('name','section_bottom_text')->first();
        $section_bottom_image = TpsPageSection::where('name','section_bottom_image')->first();

        return view('market.tpspage.new',compact('cmp_name','cmp_logo','section_1_title','section_1_btn','section_2_title','section_2_text','section_3_title','section_3_image','section_3_text','section_4_title','section_4_image','section_4_text'
       ,'section_step_1_title','section_step_1_image','section_step_1_text','section_step_2_title','section_step_2_image','section_step_2_text',
      'section_step_3_title','section_step_3_image','section_step_3_text','section_enroll_title','section_form_title','section_bottom_title','section_bottom_text','section_bottom_image'));


       // $str1 = View::make('market.tpspage.header',compact('cmp_name','cmp_logo'));
       // $replaced2 = View::make('market.tpspage.footer');
       // $replaced = str_replace('{header}', $str1, $data->code);
       // $replaced2 = str_replace('{footer}', $str2, $replaced);
       // return view('market.tpspage.view2',compact('replaced2'));
    }
    public function sectionUpdate(Request $request){
       $data = TpsPageSection::all();
    // dd($request->all());
       foreach($data as $key => $val){
         
           $newkey = $val->id;
           $sectioname = 'section'.$newkey;
           $var1 = str_replace('<p>', '', $request->$sectioname);
           $var2 = str_replace('</p>', '', $var1);
           $val->update([
             $val->text = $var2
           ]);
       }
       return redirect()->back();

    }
}
