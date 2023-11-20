<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestimonialCms;
use App\Models\TestimoniaTranslationCms;
use App\Models\Country;
use App\Models\CountryLanguage;
use App\Models\LanguageList;
use Illuminate\Support\Facades\Storage;
use Validator; 
use Auth;



class TestimoniaTranslationCmsController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
       
    }

    /* GET   */

   public function addTestimonialTranslation($id=NULL, Request $request){
     
      if($id==NULL){
       return redirect('/testimonial')->with('warning', 'Invalid Access...');
      }

      $data['testimonial']=TestimonialCms::where('id',$id)->first();
       if(empty($data['testimonial'])){
       return redirect('/testimonial')->with('warning', 'Invalid Access...');
      }

      $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languagecode','NOT LIKE','en')->select(['languagecode'])->get();

      if(empty($data['countrylanguage'][0])){
       return redirect('/testimonial')->with('warning', 'Invalid Access...');
      }

       $data['existlanguagearr']=$existlanguagearr=TestimoniaTranslationCms::where('testimonialid',$id)->select('languagecode')->get();

       
       $datalangarr=[];
         if(!empty($data['existlanguagearr'][0])){
         foreach($existlanguagearr as $val) {
            $datalangarr[]=$val->languagecode;
         }
       }

     
      $data['testimonialtranslation']=$testimonialtranslation=TestimoniaTranslationCms::where('testimonialid',$id)->get();

       $datalangarr1=[];

       foreach($countrylanguage as $val) {

        if(!in_array($val->languagecode, $datalangarr)){
          $datalangarr1[]=$val->languagecode;
         
         }
        }

          $data['languagelist']=$languagelist=LanguageList::whereIn('code',$datalangarr1)->select(['code','name'])->get();

        $data['datalangarr']=$datalangarr1;

        return view('testimonial.testimonialtranslation.create')->with($data);
   }



     /* STORE   */

        public function storeTestimonialTranslation($id=null, Request $request){


             if($id==NULL){
               return redirect('/testimonial')->with('warning', 'Invalid Access...');
              }

              $data['testimonial']=TestimonialCms::where('id',$id)->first();
               if(empty($data['testimonial'])){
               return redirect('/testimonial')->with('warning', 'Invalid Access...');
              }

           

             $validatearr=[];            
             $validatearr['message'] = 'required';
             $validatearr['name'] = 'required';
             $validatearr['languagename'] = 'required';
             $validatearr['testimonial'] = 'required';

          
           
             $validator=Validator::make($request->all(),$validatearr)->validate();

              if($id!==$request->testimonial){
                 return redirect('/addtestimonialtranslation/'.$id)->with('warning', 'Invalid Access...');
              }


            $data['LanguageList']=$LanguageList=LanguageList::where('code',$request->languagename)->first();

              if(empty($data['LanguageList'])){
                 return redirect('/addtestimonialtranslation/'.$id)->with('warning', 'Invalid Access...');
              }

              $TestimoniaTranslationCms=new TestimoniaTranslationCms; 
              $TestimoniaTranslationCms->languagename=$LanguageList->name;
              $TestimoniaTranslationCms->languagecode=$LanguageList->code;
              $TestimoniaTranslationCms->testimonialid=$request->testimonial;
             
              $TestimoniaTranslationCms->message=htmlentities($request->message);
              $TestimoniaTranslationCms->name=htmlentities($request->name);
               $TestimoniaTranslationCms->save();
              
             
               return redirect('/addtestimonialtranslation/'.$id)->with('success', 'Success...');
        }




       /* EDIT   */

       public function editTestimonialTranslation($id=null, $id1=null, Request $request){


      if($id===null||$id1===null){
       return redirect('/testimonial')->with('warning', 'Invalid Access...');
      }

      $data['testimonial']=TestimonialCms::where('id',$id)->first();
       if(empty($data['testimonial'])){
       return redirect('/testimonial')->with('warning', 'Invalid Access...');
      }

       $data['testimonialtranslation']=TestimoniaTranslationCms::where('id',$id1)->where('testimonialid',$id)->first();

        if(empty($data['testimonialtranslation'])){
           return redirect('/addtestimonialtranslation/'.$id)->with('warning', 'Invalid Access...');
        }
   
            return view('testimonial.testimonialtranslation.edit')->with($data);

    
      }



     /* UPDATE  */

       public function updateTestimonialTranslation($id=null, $id1=null, Request $request){

             if($id===null||$id1===null){
               return redirect('/testimonial')->with('warning', 'Invalid Access...');
              }

              $data['testimonial']=TestimonialCms::where('id',$id)->first();
               if(empty($data['testimonial'])){
               return redirect('/testimonial')->with('warning', 'Invalid Access...');
              }

               $data['testimonialtranslation']=TestimoniaTranslationCms::where('id',$id1)->where('testimonialid',$id)->first();

                if(empty($data['testimonialtranslation'])){
                   return redirect('/addtestimonialtranslation/'.$id)->with('warning', 'Invalid Access...');
                }
           

             $validatearr=[];            
             $validatearr['message'] = 'required';
             $validatearr['name'] = 'required';
       

             $validator=Validator::make($request->all(),$validatearr)->validate();

           
               $TestimoniaTranslationCms=TestimoniaTranslationCms::where('id',$id1)->where('testimonialid',$id); 
               $dataupdate['name']=htmlentities($request->name);
              $dataupdate['message']=htmlentities($request->message);
   
              $TestimoniaTranslationCms->update($dataupdate);
 
             return redirect('/addtestimonialtranslation/'.$id)->with('success', 'Success...');

    
      }

}
