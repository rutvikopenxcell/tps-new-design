<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PartnerWithUsCms;
use App\Models\CountryLanguage; 
use App\Http\Requests\FrontEndRequest;
use Validator; 


class PartnerWithUsCmsController extends Controller
{
    public  $numarr=[];
    public function __construct()
    {
        $this->middleware('auth');
        $this->numarr=['8'];
    }

    public function getFrontEndCms($languageculture=null, Request $request){       
        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['content']=PartnerWithUsCms::where('languageculture' ,'LIKE',$languageculture)->first();
         if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }
        if(!isset($_GET['taboption'])){
        return redirect('/frontendpartnerwithuscms'.'/'. $data['countrylanguage']->languageculture.'?taboption=8');
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
         
           $this->numarr=['8'];
          if(!isset($_GET['taboption'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!'); 
          }elseif(!in_array($_GET['taboption'], $this->numarr)){
            return redirect('country-lang-list')->with('warning','Invalid Access!');   
          }

        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['content']=PartnerWithUsCms::where('languageculture' ,'LIKE',$languageculture)->first();
        
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
             $validatearr['email'] = 'required';
           
             $validator=Validator::make($request->all(),$validatearr)->validate();
              $PartnerWithUsCms=new PartnerWithUsCms; 
              $PartnerWithUsCms->languageculture=$languageculture;
              $PartnerWithUsCms->languagecode=$countrylanguage->languagecode;
              $PartnerWithUsCms->countrycode=$countrylanguage->countrycode;
              $PartnerWithUsCms->headertext=htmlentities($request->headertext);
              $PartnerWithUsCms->para=htmlentities($request->para);
              $PartnerWithUsCms->email=htmlentities($request->email);

               if(isset($request->headertextsec))
              $PartnerWithUsCms->headertextsec=htmlentities($request->headertextsec);
             
              if(isset($request->parasec))
              $PartnerWithUsCms->parasec=htmlentities($request->parasec);

                       
             
              $PartnerWithUsCms->save();
             return redirect('/frontendpartnerwithuscms'.'/'. $data['countrylanguage']->languageculture.'?taboption=8');
        
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
        $this->numarr=['8'];
        if(!isset($_GET['taboption'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!'); 
        }elseif(!in_array($_GET['taboption'], $this->numarr)){
          return redirect('country-lang-list')->with('warning','Invalid Access!');   
        }

      if($languageculture===null){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }      
      $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();

      

      $data['content']=PartnerWithUsCms::where('languageculture' ,'LIKE',$languageculture)->first();
     
      if(empty($data['countrylanguage'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }
      if(empty($data['content'])){
          return redirect('/frontendpartnerwithuscms'.'/'. $data['countrylanguage']->languageculture.'?taboption=8');
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
       $validatearr['email'] = 'required';
    
       $validator=Validator::make($request->all(),$validatearr)->validate(); 


      $PartnerWithUsCms=PartnerWithUsCms::where('languageculture','LIKE',$languageculture); 
      $dataupdate['para']=htmlentities($request->para);
      $dataupdate['headertext']=htmlentities($request->headertext);
      $dataupdate['email']=htmlentities($request->email);
   
      
      if(isset($request->headertextsec))     
      $dataupdate['headertextsec']=htmlentities($request->headertextsec);

       if(isset($request->parasec))     
      $dataupdate['parasec']=htmlentities($request->parasec);

  
     $PartnerWithUsCms->update($dataupdate);
     return redirect('/frontendpartnerwithuscms'.'/'. $data['countrylanguage']->languageculture.'?taboption=8')->with('info','Success');
        
  }  


   

    /*
    |-------------------------------------------------------------
    | UPDATE FRONT END CONTENT END
    |-------------------------------------------------------------
    */
}
