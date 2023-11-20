<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FaqCms;
use App\Models\CountryLanguage;
use App\Models\Sociallink;
use App\Http\Requests\FrontEndRequest;
use Validator; 


class FaqCmsController extends Controller
{
    public  $numarr=[];
    public function __construct()
    {
        $this->middleware('auth');
        $this->numarr=['9'];
    }

    public function getFrontEndCms($languageculture=null, Request $request){       
        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['content']=FaqCms::where('languageculture' ,'LIKE',$languageculture)->exclude(['faqpara', 'faqparasec'])->get();
         if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }
        if(!isset($_GET['taboption'])){
        return redirect('/frontendfaqcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=9');
        }else if(!in_array($_GET['taboption'], $this->numarr)){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }else{
            $data['taboption']=$_GET['taboption'];
        } 

        return view('frontendcms.create')->with($data);       
    } 

   
    /*
    |-------------------------------------------------------------
    | STORE FRONT END CONTENT
    |-------------------------------------------------------------
     */

    public function storeFrontEndCms($languageculture=null, Request $request){
         
           $this->numarr=['9'];
          if(!isset($_GET['taboption'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!'); 
          }elseif(!in_array($_GET['taboption'], $this->numarr)){
            return redirect('country-lang-list')->with('warning','Invalid Access!');   
          }

        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['content']=FaqCms::where('languageculture' ,'LIKE',$languageculture)->first();
        
        if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }

   
      

            
            $validatearr=[];
            if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
               if(isset($_POST['faqheadertextsec'])){             
               $validatearr['faqheadertextsec'] = 'required';} 

                 if(isset($_POST['faqparasec'])){             
               $validatearr['faqparasec'] = 'required';}              

             
             }

             $validatearr['faqheadertext'] = 'required';
             $validatearr['faqpara'] = 'required';
           
             $validator=Validator::make($request->all(),$validatearr)->validate();
              $FaqCms=new FaqCms; 
              $FaqCms->languageculture=$languageculture;
              $FaqCms->languagecode=$countrylanguage->languagecode;
              $FaqCms->countrycode=$countrylanguage->countrycode;
              $FaqCms->faqheadertext=htmlentities($request->faqheadertext);
              $FaqCms->faqpara=htmlentities($request->faqpara);

               if(isset($request->faqheadertextsec))
              $FaqCms->faqheadertextsec=htmlentities($request->faqheadertextsec);
             
              if(isset($request->faqparasec))
              $FaqCms->faqparasec=htmlentities($request->faqparasec);

                       
             
              $FaqCms->save();
             return redirect('/frontendfaqcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=9');
        
      }

       
 
    /*
    |-------------------------------------------------------------
    | STORE FRONT END CONTENT END
    |-------------------------------------------------------------
    */


    /*
    |-------------------------------------------------------------
    | UPDATE FRONT END CONTENT  START
    |-------------------------------------------------------------
    */



     public function editFrontEndCms($languageculture=null, $id=null, Request $request){ 

        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        } 
       
        $data['countrylanguage']=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
       
         if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }

         if($id===null){
            return redirect('/frontendfaqcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=9');
        }     
        if(!isset($_GET['taboption'])){
        return redirect('/frontendfaqcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=9');
        }else if(!in_array($_GET['taboption'], $this->numarr)){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }else{
            $data['taboption']=$_GET['taboption'];
        } 


         $data['content']=FaqCms::where('id', $id)->where('languageculture' ,'LIKE',$languageculture)->first();

         if(empty($data['content'])){
              return redirect('/frontendfaqcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=9')->with('warning','Invalid Access!');;
         }

        return view('frontendcms.edit')->with($data);       
    } 


     public function updateFrontEndCms($languageculture=null, $id, Request $request){
        $this->numarr=['9'];
        if(!isset($_GET['taboption'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!'); 
        }elseif(!in_array($_GET['taboption'], $this->numarr)){
          return redirect('country-lang-list')->with('warning','Invalid Access!');   
        }

      if($languageculture===null){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }      
      $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();

      if($id===null){
            return redirect('/frontendfaqcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=9');
      } 

      $data['content']=FaqCms::where('id', $id)->where('languageculture' ,'LIKE',$languageculture)->first();
     
      if(empty($data['countrylanguage'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }
      if(empty($data['content'])){
          return redirect('/frontendfaqcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=9');
      }
      
    
    $validatearr=[];
    if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
        if(isset($_POST['faqheadertextsec'])){             
           $validatearr['faqheadertextsec'] = 'required';} 

         if(isset($_POST['faqparasec'])){             
         $validatearr['faqparasec'] = 'required';} 

       

       
       }

       $validatearr['faqpara'] = 'required';
    
       $validator=Validator::make($request->all(),$validatearr)->validate(); 


      $FaqCms=FaqCms::where('id', $id)->where('languageculture','LIKE',$languageculture); 
      $dataupdate['faqpara']=htmlentities($request->faqpara);
      $dataupdate['faqheadertext']=htmlentities($request->faqheadertext);
   
      
      if(isset($request->faqheadertextsec))     
      $dataupdate['faqheadertextsec']=htmlentities($request->faqheadertextsec);

       if(isset($request->faqparasec))     
      $dataupdate['faqparasec']=htmlentities($request->faqparasec);

  
     $FaqCms->update($dataupdate);
     return redirect('/frontendfaqcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=9')->with('info','Success');
        
  }  


   

    /*
    |-------------------------------------------------------------
    | UPDATE FRONT END CONTENT END
    |-------------------------------------------------------------
    */
}
