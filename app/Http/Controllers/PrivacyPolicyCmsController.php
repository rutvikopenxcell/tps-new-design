<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrivacyPolicyCms;
use App\Models\CountryLanguage;
use App\Models\Sociallink;
use App\Http\Requests\FrontEndRequest;
use Validator; 


class PrivacyPolicyCmsController extends Controller
{
    public  $numarr=[];
    public function __construct()
    {
        $this->middleware('auth');
        $this->numarr=['10'];
    }

    public function getFrontEndCms($languageculture=null, Request $request){       
        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['content']=PrivacyPolicyCms::where('languageculture' ,'LIKE',$languageculture)->first();
         if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }
        if(!isset($_GET['taboption'])){
        return redirect('/frontendprivacypolicycms'.'/'. $data['countrylanguage']->languageculture.'?taboption=10');
        }else if(!in_array($_GET['taboption'], $this->numarr)){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }else{
            $data['taboption']=$_GET['taboption'];
        } 

        
       if(empty($data['content'])) {      
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
         
           $this->numarr=['10'];
          if(!isset($_GET['taboption'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!'); 
          }elseif(!in_array($_GET['taboption'], $this->numarr)){
            return redirect('country-lang-list')->with('warning','Invalid Access!');   
          }

        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['content']=PrivacyPolicyCms::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['sociallink']=Sociallink::where('languageculture' ,'LIKE',$languageculture)->first();
        if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }

   
        if(!empty($data['content'])){
            return redirect('/frontendprivacypolicycms'.'/'. $data['countrylanguage']->languageculture.'?taboption=10');
        }

            
            $validatearr=[];
            if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
               if(isset($_POST['privacypolicytextsec'])){             
               $validatearr['privacypolicytextsec'] = 'required';} 

              

             
             }

             $validatearr['privacypolicytext'] = 'required';
           
             $validator=Validator::make($request->all(),$validatearr)->validate();
              $PrivacyPolicyCms=new PrivacyPolicyCms; 
              $PrivacyPolicyCms->languageculture=$languageculture;
              $PrivacyPolicyCms->languagecode=$countrylanguage->languagecode;
              $PrivacyPolicyCms->countrycode=$countrylanguage->countrycode;
              $PrivacyPolicyCms->privacypolicytext=htmlentities($request->privacypolicytext);
             
              if(isset($request->privacypolicytextsec))
              $PrivacyPolicyCms->privacypolicytextsec=htmlentities($request->privacypolicytextsec);

                       
             
              $PrivacyPolicyCms->save();
             return redirect('/frontendprivacypolicycms'.'/'. $data['countrylanguage']->languageculture.'?taboption=10');
        
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
        $this->numarr=['10'];
        if(!isset($_GET['taboption'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!'); 
        }elseif(!in_array($_GET['taboption'], $this->numarr)){
          return redirect('country-lang-list')->with('warning','Invalid Access!');   
        }

      if($languageculture===null){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }      
      $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
      $data['content']=PrivacyPolicyCms::where('languageculture' ,'LIKE',$languageculture)->first();
      $data['sociallink']=Sociallink::where('languageculture' ,'LIKE',$languageculture)->first();
      if(empty($data['countrylanguage'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }
      if(empty($data['content'])){
          return redirect('/frontendprivacypolicycms'.'/'. $data['countrylanguage']->languageculture.'?taboption=10');
      }
      
    
    $validatearr=[];
    if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
         if(isset($_POST['privacypolicytextsec'])){             
         $validatearr['privacypolicytextsec'] = 'required';} 

       

       
       }

       $validatearr['privacypolicytext'] = 'required';
    
       $validator=Validator::make($request->all(),$validatearr)->validate(); 


      $PrivacyPolicyCms=PrivacyPolicyCms::where('languageculture','LIKE',$languageculture); 
      $dataupdate['privacypolicytext']=htmlentities($request->privacypolicytext);
   
      
      if(isset($request->privacypolicytextsec))     
      $dataupdate['privacypolicytextsec']=htmlentities($request->privacypolicytextsec);

  
     $PrivacyPolicyCms->update($dataupdate);
     return redirect('/frontendprivacypolicycms'.'/'. $data['countrylanguage']->languageculture.'?taboption=10')->with('info','Success');
        
  }  


   

    /*
    |-------------------------------------------------------------
    | UPDATE FRONT END CONTENT END
    |-------------------------------------------------------------
    */
}
