<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HowItWorkCms;
use App\Models\CountryLanguage;
use App\Models\Sociallink;
use App\Http\Requests\FrontEndRequest;
use Validator; 


class HowItWorkCmsController extends Controller
{
    public  $numarr=[];
    public function __construct()
    {
        $this->middleware('auth');
        $this->numarr=['3'];
    }

    public function getFrontEndCms($languageculture=null, Request $request){       
        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['content']=HowItWorkCms::where('languageculture' ,'LIKE',$languageculture)->first();
         if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }
        if(!isset($_GET['taboption'])){
        return redirect('/frontendhowitworkcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=3');
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
         
           $this->numarr=['3'];
          if(!isset($_GET['taboption'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!'); 
          }elseif(!in_array($_GET['taboption'], $this->numarr)){
            return redirect('country-lang-list')->with('warning','Invalid Access!');   
          }

        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['content']=HowItWorkCms::where('languageculture' ,'LIKE',$languageculture)->first();
        
        if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }

   
        if(!empty($data['content'])){
            return redirect('/frontendhowitworkcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=3');
        }

            
            $validatearr=[];
            if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
               if(isset($_POST['header1textsec'])){             
               $validatearr['header1textsec'] = 'required';} 


                if(isset($_POST['header2textsec'])){             
               $validatearr['header2textsec'] = 'required';} 

                if(isset($_POST['header3textsec'])){             
               $validatearr['header3textsec'] = 'required';} 

                if(isset($_POST['header4textsec'])){             
               $validatearr['header4textsec'] = 'required';} 

             


              

             
             }

             $validatearr['header1text'] = 'required';
             $validatearr['header2text'] = 'required';
             $validatearr['header3text'] = 'required';
             $validatearr['header4text'] = 'required';
            
           
            $validator=Validator::make($request->all(),$validatearr)->validate();
            $HowItWorkCms=new HowItWorkCms; 
            $HowItWorkCms->languageculture=$languageculture;
            $HowItWorkCms->languagecode=$countrylanguage->languagecode;
            $HowItWorkCms->countrycode=$countrylanguage->countrycode;
            

             $HowItWorkCms->header1text =htmlentities($request->header1text);
             $HowItWorkCms->header2text =htmlentities($request->header2text);
             $HowItWorkCms->header3text =htmlentities($request->header3text);
             $HowItWorkCms->header4text =htmlentities($request->header4text);
             
           
              
              if(isset($request->header1textsec))     
             $HowItWorkCms->header1textsec =htmlentities($request->header1textsec);

               if(isset($request->header2textsec))     
             $HowItWorkCms->header2textsec =htmlentities($request->header2textsec);

               if(isset($request->header3textsec))     
             $HowItWorkCms->header3textsec =htmlentities($request->header3textsec);

               if(isset($request->header4textsec))     
             $HowItWorkCms->header4textsec =htmlentities($request->header4textsec);


            $HowItWorkCms->alt1text =htmlentities($request->alt1text);
             $HowItWorkCms->alt2text =htmlentities($request->alt2text);
             $HowItWorkCms->alt3text =htmlentities($request->alt3text);
             $HowItWorkCms->alt4text =htmlentities($request->alt4text);
             
            $HowItWorkCms->alt1textsec =htmlentities($request->alt1textsec);
            $HowItWorkCms->alt2textsec =htmlentities($request->alt2textsec);
            $HowItWorkCms->alt3textsec =htmlentities($request->alt3textsec);
            $HowItWorkCms->alt4textsec =htmlentities($request->alt4textsec);

             
             
              $HowItWorkCms->save();
             return redirect('/frontendhowitworkcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=3');
        
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
        $this->numarr=['3'];
        if(!isset($_GET['taboption'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!'); 
        }elseif(!in_array($_GET['taboption'], $this->numarr)){
          return redirect('country-lang-list')->with('warning','Invalid Access!');   
        }

      if($languageculture===null){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }      
      $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
      $data['content']=HowItWorkCms::where('languageculture' ,'LIKE',$languageculture)->first();
      $data['sociallink']=Sociallink::where('languageculture' ,'LIKE',$languageculture)->first();
      if(empty($data['countrylanguage'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }
      if(empty($data['content'])){
          return redirect('/frontendhowitworkcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=3');
      }
      
    
    $validatearr=[];
    if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
         if(isset($_POST['header1textsec'])){             
               $validatearr['header1textsec'] = 'required';} 


                if(isset($_POST['header2textsec'])){             
               $validatearr['header2textsec'] = 'required';} 

                if(isset($_POST['header3textsec'])){             
               $validatearr['header3textsec'] = 'required';} 

                if(isset($_POST['header4textsec'])){             
               $validatearr['header4textsec'] = 'required';} 

              

              

             
             }

             $validatearr['header1text'] = 'required';
             $validatearr['header2text'] = 'required';
             $validatearr['header3text'] = 'required';
             $validatearr['header4text'] = 'required';
             
    
       $validator=Validator::make($request->all(),$validatearr)->validate(); 


      $HowItWorkCms=HowItWorkCms::where('languageculture','LIKE',$languageculture); 
      $dataupdate['header1text']=htmlentities($request->header1text);
      $dataupdate['header2text']=htmlentities($request->header2text);
      $dataupdate['header3text']=htmlentities($request->header3text);
      $dataupdate['header4text']=htmlentities($request->header4text);
      
   
      
      if(isset($request->header1textsec))     
      $dataupdate['header1textsec']=htmlentities($request->header1textsec);

       if(isset($request->header2textsec))     
      $dataupdate['header2textsec']=htmlentities($request->header2textsec);

       if(isset($request->header3textsec))     
      $dataupdate['header3textsec']=htmlentities($request->header3textsec);

       if(isset($request->header4textsec))     
      $dataupdate['header4textsec']=htmlentities($request->header4textsec);



      $dataupdate['alt1text']=htmlentities($request->alt1text);
      $dataupdate['alt2text']=htmlentities($request->alt2text);
      $dataupdate['alt3text']=htmlentities($request->alt3text);
      $dataupdate['alt4text']=htmlentities($request->alt4text);
      
   
      
      
      $dataupdate['alt1textsec']=htmlentities($request->alt1textsec);

     
      $dataupdate['alt2textsec']=htmlentities($request->alt2textsec);

         
      $dataupdate['alt3textsec']=htmlentities($request->alt3textsec);

          
      $dataupdate['alt4textsec']=htmlentities($request->alt4textsec);

     

  
     $HowItWorkCms->update($dataupdate);
     return redirect('/frontendhowitworkcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=3')->with('info','Success');
        
  }  


   

    /*
    |-------------------------------------------------------------
    | UPDATE FRONT END CONTENT END
    |-------------------------------------------------------------
    */
}
