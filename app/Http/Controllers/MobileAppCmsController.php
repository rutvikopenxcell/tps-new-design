<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MobileAppCms;
use App\Models\CountryLanguage; 
use App\Http\Requests\FrontEndRequest;
use Validator; 


class MobileAppCmsController extends Controller
{
    public  $numarr=[];
    public function __construct()
    {
        $this->middleware('auth');
        $this->numarr=['5'];
    }

    public function getFrontEndCms($languageculture=null, Request $request){       
        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['content']=MobileAppCms::where('languageculture' ,'LIKE',$languageculture)->first();
         if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }
        if(!isset($_GET['taboption'])){
        return redirect('/frontendmobileappcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=5');
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
         
           $this->numarr=['5'];
          if(!isset($_GET['taboption'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!'); 
          }elseif(!in_array($_GET['taboption'], $this->numarr)){
            return redirect('country-lang-list')->with('warning','Invalid Access!');   
          }

        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['content']=MobileAppCms::where('languageculture' ,'LIKE',$languageculture)->first();
        
        if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }

   
      

            
            $validatearr=[];
            if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
               if(isset($_POST['headertextsec'])){             
               $validatearr['headertextsec'] = 'required';} 

                 if(isset($_POST['parasec'])){             
               $validatearr['parasec'] = 'required';}              

             
             }

             $validatearr['headertext'] = 'required';
             $validatearr['para'] = 'required';
            
           
             $validator=Validator::make($request->all(),$validatearr)->validate();
              $MobileAppCms=new MobileAppCms; 
              $MobileAppCms->languageculture=$languageculture;
              $MobileAppCms->languagecode=$countrylanguage->languagecode;
              $MobileAppCms->countrycode=$countrylanguage->countrycode;
              $MobileAppCms->headertext=htmlentities($request->headertext);
              $MobileAppCms->para=htmlentities($request->para);
              

               if(isset($request->headertextsec))
              $MobileAppCms->headertextsec=htmlentities($request->headertextsec);
             
              if(isset($request->parasec))
              $MobileAppCms->parasec=htmlentities($request->parasec);

                       
             
              $MobileAppCms->save();
             return redirect('/frontendmobileappcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=5');
        
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
        $this->numarr=['5'];
        if(!isset($_GET['taboption'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!'); 
        }elseif(!in_array($_GET['taboption'], $this->numarr)){
          return redirect('country-lang-list')->with('warning','Invalid Access!');   
        }

      if($languageculture===null){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }      
      $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();

      

      $data['content']=MobileAppCms::where('languageculture' ,'LIKE',$languageculture)->first();
     
      if(empty($data['countrylanguage'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }
      if(empty($data['content'])){
          return redirect('/frontendmobileappcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=5');
      }
      
    
    $validatearr=[];
    if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
        if(isset($_POST['headertextsec'])){             
           $validatearr['headertextsec'] = 'required';} 

         if(isset($_POST['parasec'])){             
         $validatearr['parasec'] = 'required';} 

       

       
       }

       $validatearr['headertext'] = 'required';
       $validatearr['para'] = 'required';
     
    
       $validator=Validator::make($request->all(),$validatearr)->validate(); 


      $MobileAppCms=MobileAppCms::where('languageculture','LIKE',$languageculture); 
      $dataupdate['para']=htmlentities($request->para);
      $dataupdate['headertext']=htmlentities($request->headertext);
      
   
      
      if(isset($request->headertextsec))     
      $dataupdate['headertextsec']=htmlentities($request->headertextsec);

       if(isset($request->parasec))     
      $dataupdate['parasec']=htmlentities($request->parasec);

  
     $MobileAppCms->update($dataupdate);
     return redirect('/frontendmobileappcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=5')->with('info','Success');
        
  }  


   

    /*
    |-------------------------------------------------------------
    | UPDATE FRONT END CONTENT END
    |-------------------------------------------------------------
    */
}
