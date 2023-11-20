<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WhyUsCms;
use App\Models\CountryLanguage;
use App\Models\Sociallink;
use App\Http\Requests\FrontEndRequest;
use Validator; 


class WhyUsCmsController extends Controller
{
    public  $numarr=[];
    public function __construct()
    {
        $this->middleware('auth');
        $this->numarr=['4'];
    }

    public function getFrontEndCms($languageculture=null, Request $request){       
        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['homepagecms']=WhyUsCms::where('languageculture' ,'LIKE',$languageculture)->first();
         if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }
        if(!isset($_GET['taboption'])){
        return redirect('/frontendwhyuscms'.'/'. $data['countrylanguage']->languageculture.'?taboption=4');
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
         
           $this->numarr=['4'];
          if(!isset($_GET['taboption'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!'); 
          }elseif(!in_array($_GET['taboption'], $this->numarr)){
            return redirect('country-lang-list')->with('warning','Invalid Access!');   
          }

        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['homepagecms']=WhyUsCms::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['sociallink']=Sociallink::where('languageculture' ,'LIKE',$languageculture)->first();
        if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }

   
        if(!empty($data['homepagecms'])){
            return redirect('/frontendwhyuscms'.'/'. $data['countrylanguage']->languageculture.'?taboption=4');
        }

            
            $validatearr=[];
            if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
               if(isset($_POST['whyustextsec'])){             
               $validatearr['whyustextsec'] = 'required';} 

              

             
             }

             $validatearr['whyustext'] = 'required';
           
             $validator=Validator::make($request->all(),$validatearr)->validate();
              $WhyUsCms=new WhyUsCms; 
              $WhyUsCms->languageculture=$languageculture;
              $WhyUsCms->languagecode=$countrylanguage->languagecode;
              $WhyUsCms->countrycode=$countrylanguage->countrycode;
              $WhyUsCms->whyustext=htmlentities($request->whyustext);
             
              if(isset($request->whyustextsec))
              $WhyUsCms->whyustextsec=htmlentities($request->whyustextsec);

                       
             
              $WhyUsCms->save();
             return redirect('/frontendwhyuscms'.'/'. $data['countrylanguage']->languageculture.'?taboption=4');
        
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
        $this->numarr=['4'];
        if(!isset($_GET['taboption'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!'); 
        }elseif(!in_array($_GET['taboption'], $this->numarr)){
          return redirect('country-lang-list')->with('warning','Invalid Access!');   
        }

      if($languageculture===null){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }      
      $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
      $data['homepagecms']=WhyUsCms::where('languageculture' ,'LIKE',$languageculture)->first();
      $data['sociallink']=Sociallink::where('languageculture' ,'LIKE',$languageculture)->first();
      if(empty($data['countrylanguage'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }
      if(empty($data['homepagecms'])){
          return redirect('/frontendwhyuscms'.'/'. $data['countrylanguage']->languageculture.'?taboption=4');
      }
      
    
    $validatearr=[];
    if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
         if(isset($_POST['whyustextsec'])){             
         $validatearr['whyustextsec'] = 'required';} 

       

       
       }

       $validatearr['whyustext'] = 'required';
    
       $validator=Validator::make($request->all(),$validatearr)->validate(); 


      $WhyUsCms=WhyUsCms::where('languageculture','LIKE',$languageculture); 
      $dataupdate['whyustext']=htmlentities($request->whyustext);
   
      
      if(isset($request->whyustextsec))     
      $dataupdate['whyustextsec']=htmlentities($request->whyustextsec);

  
     $WhyUsCms->update($dataupdate);
     return redirect('/frontendwhyuscms'.'/'. $data['countrylanguage']->languageculture.'?taboption=4')->with('info','Success');
        
  }  


   

    /*
    |-------------------------------------------------------------
    | UPDATE FRONT END CONTENT END
    |-------------------------------------------------------------
    */
}
