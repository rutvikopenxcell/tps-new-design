<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MetaContentCms;
use App\Models\CountryLanguage; 
use App\Http\Requests\FrontEndRequest;
use Validator; 


class MetaContentCmsController extends Controller
{
    public  $numarr=[];
    public function __construct()
    {
        $this->middleware('auth');
        $this->numarr=['14'];
    }

    public function getFrontEndCms($languageculture=null, Request $request){       
        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['content']=MetaContentCms::where('languageculture' ,'LIKE',$languageculture)->first();
         if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }
        if(!isset($_GET['taboption'])){
        return redirect('/frontendmetacontentcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=14');
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
         
           $this->numarr=['14'];
          if(!isset($_GET['taboption'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!'); 
          }elseif(!in_array($_GET['taboption'], $this->numarr)){
            return redirect('country-lang-list')->with('warning','Invalid Access!');   
          }

        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['content']=MetaContentCms::where('languageculture' ,'LIKE',$languageculture)->first();
       
        if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }

   
        if(!empty($data['content'])){
            return redirect('/frontendmetacontentcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=14');
        }

            
            $validatearr=[];
            if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
               if(isset($_POST['metacontentsec'])){             
               $validatearr['metacontentsec'] = 'required';} 

              

             
             }

             $validatearr['metacontent'] = 'required';
           
             $validator=Validator::make($request->all(),$validatearr)->validate();
              $MetaContentCms=new MetaContentCms; 
              $MetaContentCms->languageculture=$languageculture;
              $MetaContentCms->languagecode=$countrylanguage->languagecode;
              $MetaContentCms->countrycode=$countrylanguage->countrycode;
              $MetaContentCms->metacontent=htmlentities($request->metacontent);
             
              if(isset($request->metacontentsec))
              $MetaContentCms->metacontentsec=htmlentities($request->metacontentsec);

                       
             
              $MetaContentCms->save();
             return redirect('/frontendmetacontentcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=14');
        
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
        $this->numarr=['14'];
        if(!isset($_GET['taboption'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!'); 
        }elseif(!in_array($_GET['taboption'], $this->numarr)){
          return redirect('country-lang-list')->with('warning','Invalid Access!');   
        }

      if($languageculture===null){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }      
      $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
      $data['content']=MetaContentCms::where('languageculture' ,'LIKE',$languageculture)->first();
      
      if(empty($data['countrylanguage'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }
      if(empty($data['content'])){
          return redirect('/frontendmetacontentcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=14');
      }
      
    
    $validatearr=[];
    if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
         if(isset($_POST['metacontentsec'])){             
         $validatearr['metacontentsec'] = 'required';} 

       

       
       }

       $validatearr['metacontent'] = 'required';
    
       $validator=Validator::make($request->all(),$validatearr)->validate(); 


      $MetaContentCms=MetaContentCms::where('languageculture','LIKE',$languageculture); 
      $dataupdate['metacontent']=htmlentities($request->metacontent);
   
      
      if(isset($request->metacontentsec))     
      $dataupdate['metacontentsec']=htmlentities($request->metacontentsec);

  
     $MetaContentCms->update($dataupdate);
     return redirect('/frontendmetacontentcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=14')->with('info','Success');
        
  }  


   

    /*
    |-------------------------------------------------------------
    | UPDATE FRONT END CONTENT END
    |-------------------------------------------------------------
    */
}
