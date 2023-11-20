<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUsCms;
use App\Models\CountryLanguage;
use App\Models\Sociallink;
use App\Http\Requests\FrontEndRequest;
use Validator; 


class AboutUsCmsController extends Controller
{
    public  $numarr=[];
    public function __construct()
    {
        $this->middleware('auth');
        $this->numarr=['2'];
    }

    public function getFrontEndCms($languageculture=null, Request $request){       
        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['homepagecms']=AboutUsCms::where('languageculture' ,'LIKE',$languageculture)->first();
         if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }
        if(!isset($_GET['taboption'])){
        return redirect('/frontendaboutuscms'.'/'. $data['countrylanguage']->languageculture.'?taboption=2');
        }else if(!in_array($_GET['taboption'], $this->numarr)){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }else{
            $data['taboption']=$_GET['taboption'];
        } 

        
       if(empty($data['homepagecms'])) {      
       return view('frontendcms.create')->with($data);  
       }else{
       return view('frontendcms.edit')->with($data);
       }  
    } 

   
    /*
    |-------------------------------------------------------------
    | STORE FRONT END CONTENT
    |-------------------------------------------------------------
     */

    public function storeFrontEndCms($languageculture=null, Request $request){
         
           $this->numarr=['2'];
          if(!isset($_GET['taboption'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!'); 
          }elseif(!in_array($_GET['taboption'], $this->numarr)){
            return redirect('country-lang-list')->with('warning','Invalid Access!');   
          }

        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['homepagecms']=AboutUsCms::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['sociallink']=Sociallink::where('languageculture' ,'LIKE',$languageculture)->first();
        if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }

   
        if(!empty($data['homepagecms'])){
            return redirect('/frontendaboutuscms'.'/'. $data['countrylanguage']->languageculture.'?taboption=2');
        }

            
            $validatearr=[];
            if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
               if(isset($_POST['aboutustextsec'])){             
               $validatearr['aboutustextsec'] = 'required';} 

              

             
             }

             $validatearr['aboutustext'] = 'required';
           
             $validator=Validator::make($request->all(),$validatearr)->validate();
              $AboutUsCms=new AboutUsCms; 
              $AboutUsCms->languageculture=$languageculture;
              $AboutUsCms->languagecode=$countrylanguage->languagecode;
              $AboutUsCms->countrycode=$countrylanguage->countrycode;
              $AboutUsCms->aboutustext=htmlentities($request->aboutustext);
             
              if(isset($request->aboutustextsec))
              $AboutUsCms->aboutustextsec=htmlentities($request->aboutustextsec);

                       
             
              $AboutUsCms->save();
             return redirect('/frontendaboutuscms'.'/'. $data['countrylanguage']->languageculture.'?taboption=2');
        
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

     public function updateFrontEndCms($languageculture=null, Request $request){
        $this->numarr=['2'];
        if(!isset($_GET['taboption'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!'); 
        }elseif(!in_array($_GET['taboption'], $this->numarr)){
          return redirect('country-lang-list')->with('warning','Invalid Access!');   
        }

      if($languageculture===null){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }      
      $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
      $data['homepagecms']=AboutUsCms::where('languageculture' ,'LIKE',$languageculture)->first();
      $data['sociallink']=Sociallink::where('languageculture' ,'LIKE',$languageculture)->first();
      if(empty($data['countrylanguage'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }
      if(empty($data['homepagecms'])){
          return redirect('/frontendaboutuscms'.'/'. $data['countrylanguage']->languageculture.'?taboption=2');
      }
      
    
    $validatearr=[];
    if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
         if(isset($_POST['aboutustextsec'])){             
         $validatearr['aboutustextsec'] = 'required';} 

       

       
       }

       $validatearr['aboutustext'] = 'required';
    
       $validator=Validator::make($request->all(),$validatearr)->validate(); 


      $AboutUsCms=AboutUsCms::where('languageculture','LIKE',$languageculture); 
      $dataupdate['aboutustext']=htmlentities($request->aboutustext);
   
      
      if(isset($request->aboutustextsec))     
      $dataupdate['aboutustextsec']=htmlentities($request->aboutustextsec);

  
     $AboutUsCms->update($dataupdate);
     return redirect('/frontendaboutuscms'.'/'. $data['countrylanguage']->languageculture.'?taboption=2')->with('info','Success');
        
  }  


   

    /*
    |-------------------------------------------------------------
    | UPDATE FRONT END CONTENT END
    |-------------------------------------------------------------
    */
}
