<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeCms;
use App\Models\CountryLanguage;
use App\Models\Sociallink;
use App\Http\Requests\FrontEndRequest;
use Validator; 


class HomeCmsController extends Controller
{
    public  $numarr=[];
    public function __construct()
    {
        $this->middleware('auth');
        $this->numarr=['1'];
    }

    public function getFrontEndCms($languageculture=null, Request $request){       
        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['homepagecms']=HomeCms::where('languageculture' ,'LIKE',$languageculture)->first();
         if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }
        if(!isset($_GET['taboption'])){
        return redirect('/frontendhomecms'.'/'. $data['countrylanguage']->languageculture.'?taboption=1');
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
         // dd($_POST);
           $this->numarr=['1'];
          if(!isset($_GET['taboption'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!'); 
          }elseif(!in_array($_GET['taboption'], $this->numarr)){
            return redirect('country-lang-list')->with('warning','Invalid Access!');   
          }

        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['homepagecms']=HomeCms::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['sociallink']=Sociallink::where('languageculture' ,'LIKE',$languageculture)->first();
        if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }

   
        if(!empty($data['homepagecms'])){
            return redirect('/frontendhomecms'.'/'. $data['countrylanguage']->languageculture.'?taboption=1');
        }

            
            $validatearr=[];
            if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
               if(isset($_POST['homebannertext1sec'])){             
               $validatearr['homebannertext1sec'] = 'required';} 

                if(isset($_POST['homebannertext2sec'])){             
               $validatearr['homebannertext2sec'] = 'required';} 

              if(isset($_POST['homebannertext3sec'])){             
               $validatearr['homebannertext3sec'] = 'required';} 

               if(isset($_POST['registernowtextsec'])){             
               $validatearr['registernowtextsec'] = 'required';}

                 if(isset($_POST['joinusnowsec'])){             
               $validatearr['joinusnowsec'] = 'required';}

                 if(isset($_POST['banneralttexsec'])){             
               $validatearr['banneralttexsec'] = 'required';}

             
             }

             $validatearr['homebannertext1'] = 'required';
             $validatearr['homebannertext2'] = 'required';
             $validatearr['homebannertext3'] = 'required';
             $validatearr['registernowtext'] = 'required';
             $validatearr['joinusnow'] = 'required';
             $validatearr['banneralttex'] = 'required';
             $validator=Validator::make($request->all(),$validatearr)->validate();
              $HomeCms=new HomeCms; 
              $HomeCms->languageculture=$languageculture;
              $HomeCms->languagecode=$countrylanguage->languagecode;
              $HomeCms->countrycode=$countrylanguage->countrycode;
              $HomeCms->homebannertext1=htmlentities($request->homebannertext1);
              $HomeCms->homebannertext2=htmlentities($request->homebannertext2);
              $HomeCms->homebannertext3=htmlentities($request->homebannertext3);
              $HomeCms->registernowtext=htmlentities($request->registernowtext);
              $HomeCms->joinusnow=htmlentities($request->joinusnow);
              // $HomeCms->banneralttex=htmlentities($request->banneralttex);

              if(isset($request->homebannertext1sec))
              $HomeCms->homebannertext1sec=htmlentities($request->homebannertext1sec);

             if(isset($request->homebannertext2sec))
              $HomeCms->homebannertext2sec=htmlentities($request->homebannertext2sec);

             if(isset($request->homebannertext3sec))
              $HomeCms->homebannertext3sec=htmlentities($request->homebannertext3sec);

              if(isset($request->registernowtextsec))
              $HomeCms->registernowtextsec=htmlentities($request->registernowtextsec); 

                 if(isset($request->banneralttex))
              $HomeCms->banneralttex=htmlentities($request->banneralttex); 

               if(isset($request->banneralttexsec))
              $HomeCms->banneralttexsec=htmlentities($request->banneralttexsec);   

               if(isset($request->banneralttex))
              $HomeCms->banneralttex=htmlentities($request->banneralttex); 

               if(isset($request->joinusnowsec))
              $HomeCms->joinusnowsec=htmlentities($request->joinusnowsec);              
             
              $HomeCms->save();
             return redirect('/frontendhomecms'.'/'. $data['countrylanguage']->languageculture.'?taboption=1');
        
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
        $this->numarr=['1'];
        if(!isset($_GET['taboption'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!'); 
        }elseif(!in_array($_GET['taboption'], $this->numarr)){
          return redirect('country-lang-list')->with('warning','Invalid Access!');   
        }

      if($languageculture===null){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }      
      $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
      $data['homepagecms']=HomeCms::where('languageculture' ,'LIKE',$languageculture)->first();
      $data['sociallink']=Sociallink::where('languageculture' ,'LIKE',$languageculture)->first();
      if(empty($data['countrylanguage'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }
      if(empty($data['homepagecms'])){
          return redirect('/frontendhomecms'.'/'. $data['countrylanguage']->languageculture.'?taboption=1');
      }
      
    
    $validatearr=[];
    if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
         if(isset($_POST['homebannertext1sec'])){             
         $validatearr['homebannertext1sec'] = 'required';} 

          if(isset($_POST['homebannertext2sec'])){             
         $validatearr['homebannertext2sec'] = 'required';} 

        if(isset($_POST['homebannertext3sec'])){             
         $validatearr['homebannertext3sec'] = 'required';} 

         if(isset($_POST['registernowtextsec'])){             
         $validatearr['registernowtextsec'] = 'required';}

      if(isset($_POST['joinusnowsec'])){             
           $validatearr['joinusnowsec'] = 'required';}

             if(isset($_POST['banneralttexsec'])){             
           $validatearr['banneralttexsec'] = 'required';}

         
         }

         $validatearr['homebannertext1'] = 'required';
         $validatearr['homebannertext2'] = 'required';
         $validatearr['homebannertext3'] = 'required';
         $validatearr['registernowtext'] = 'required';
         $validatearr['joinusnow'] = 'required';
         $validatearr['banneralttex'] = 'required';
       $validator=Validator::make($request->all(),$validatearr)->validate(); 


      $HomeCms=HomeCms::where('languageculture','LIKE',$languageculture); 
      $dataupdate['homebannertext1']=htmlentities($request->homebannertext1);
      $dataupdate['homebannertext2']=htmlentities($request->homebannertext2);
      $dataupdate['homebannertext3']=htmlentities($request->homebannertext3);
      $dataupdate['registernowtext']=htmlentities($request->registernowtext);
      $dataupdate['joinusnow']=htmlentities($request->joinusnow);
      $dataupdate['banneralttex']=htmlentities($request->banneralttex);
      
      if(isset($request->homebannertext1sec))     
      $dataupdate['homebannertext1sec']=htmlentities($request->homebannertext1sec);

      if(isset($request->homebannertext2sec))     
      $dataupdate['homebannertext2sec']=htmlentities($request->homebannertext2sec);

     if(isset($request->homebannertext3sec))     
      $dataupdate['homebannertext3sec']=htmlentities($request->homebannertext3sec);

     if(isset($request->registernowtextsec))     
      $dataupdate['registernowtextsec']=htmlentities($request->registernowtextsec);

      if(isset($request->joinusnowsec))     
      $dataupdate['joinusnowsec']=htmlentities($request->joinusnowsec);

      if(isset($request->banneralttexsec))     
      $dataupdate['banneralttexsec']=htmlentities($request->banneralttexsec);

     $HomeCms->update($dataupdate);
     return redirect('/frontendhomecms'.'/'. $data['countrylanguage']->languageculture.'?taboption=1')->with('info','Success');
        
  }  


   

    /*
    |-------------------------------------------------------------
    | UPDATE FRONT END CONTENT END
    |-------------------------------------------------------------
    */
}
