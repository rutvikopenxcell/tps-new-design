<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReferAFriendCms;
use App\Models\CountryLanguage;
use App\Http\Requests\FrontEndRequest;
use Validator; 


class ReferAFriendCmsController extends Controller
{
    public  $numarr=[];
    public function __construct()
    {
        $this->middleware('auth');
        $this->numarr=['13'];
    }

    public function getFrontEndCms($languageculture=null, Request $request){       
        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['content']=ReferAFriendCms::where('languageculture' ,'LIKE',$languageculture)->first();
         if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }
        if(!isset($_GET['taboption'])){
        return redirect('/frontendreferafriendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=13');
        }else if(!in_array($_GET['taboption'], $this->numarr)){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }else{
            $data['taboption']=$_GET['taboption'];
        } 

        // dd($data['content']);
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
         
           $this->numarr=['13'];
          if(!isset($_GET['taboption'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!'); 
          }elseif(!in_array($_GET['taboption'], $this->numarr)){
            return redirect('country-lang-list')->with('warning','Invalid Access!');   
          }

        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['content']=ReferAFriendCms::where('languageculture' ,'LIKE',$languageculture)->first();
        if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }

   
        if(!empty($data['content'])){
            return redirect('/frontendreferafriendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=13');
        }

            
            $validatearr=[];
            if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
               if(isset($_POST['headertextsec'])){             
               $validatearr['headertextsec'] = 'required';} 

                 if(isset($_POST['subheadertextsec'])){             
               $validatearr['subheadertextsec'] = 'required';} 

                 if(isset($_POST['loginsec'])){             
               $validatearr['loginsec'] = 'required';} 

                 if(isset($_POST['signupsec'])){             
               $validatearr['signupsec'] = 'required';} 

                 if(isset($_POST['parasec'])){             
               $validatearr['parasec'] = 'required';} 

                 if(isset($_POST['mobileparasec'])){             
               $validatearr['mobileparasec'] = 'required';} 


              

             
             }

             $validatearr['headertext'] = 'required';
             $validatearr['subheadertext'] = 'required';
             $validatearr['login'] = 'required';
             $validatearr['signup'] = 'required';
             $validatearr['para'] = 'required';
             $validatearr['mobilepara'] = 'required';
           
             $validator=Validator::make($request->all(),$validatearr)->validate();
              $ReferAFriendCms=new ReferAFriendCms; 
              $ReferAFriendCms->languageculture=$languageculture;
              $ReferAFriendCms->languagecode=$countrylanguage->languagecode;
              $ReferAFriendCms->countrycode=$countrylanguage->countrycode;
              $ReferAFriendCms->headertext=htmlentities($request->headertext);
              $ReferAFriendCms->subheadertext=htmlentities($request->subheadertext);
              $ReferAFriendCms->login=htmlentities($request->login);
              $ReferAFriendCms->signup=htmlentities($request->signup);
              $ReferAFriendCms->para=htmlentities($request->para);
              $ReferAFriendCms->mobilepara=htmlentities($request->mobilepara);
             
              if(isset($request->headertextsec))
              $ReferAFriendCms->headertextsec=htmlentities($request->headertextsec);

              if(isset($request->subheadertextsec))
              $ReferAFriendCms->subheadertextsec=htmlentities($request->subheadertextsec);

             if(isset($request->loginsec))
              $ReferAFriendCms->loginsec=htmlentities($request->loginsec);

             if(isset($request->signupsec))
              $ReferAFriendCms->signupsec=htmlentities($request->signupsec);

             if(isset($request->parasec))
              $ReferAFriendCms->parasec=htmlentities($request->parasec);

             if(isset($request->mobileparasec))
              $ReferAFriendCms->mobileparasec=htmlentities($request->mobileparasec);

                       
             
              $ReferAFriendCms->save();
             return redirect('/frontendreferafriendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=13');
        
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
        $this->numarr=['13'];
        if(!isset($_GET['taboption'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!'); 
        }elseif(!in_array($_GET['taboption'], $this->numarr)){
          return redirect('country-lang-list')->with('warning','Invalid Access!');   
        }

      if($languageculture===null){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }      
      $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
      $data['content']=ReferAFriendCms::where('languageculture' ,'LIKE',$languageculture)->first();
     
      if(empty($data['countrylanguage'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }
      if(empty($data['content'])){
          return redirect('/frontendreferafriendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=13');
      }
      
    
    $validatearr=[];
    if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
          if(isset($_POST['headertextsec'])){             
               $validatearr['headertextsec'] = 'required';} 

                 if(isset($_POST['subheadertextsec'])){             
               $validatearr['subheadertextsec'] = 'required';} 

                 if(isset($_POST['loginsec'])){             
               $validatearr['loginsec'] = 'required';} 

                 if(isset($_POST['signupsec'])){             
               $validatearr['signupsec'] = 'required';} 

                 if(isset($_POST['parasec'])){             
               $validatearr['parasec'] = 'required';} 

                 if(isset($_POST['mobileparasec'])){             
               $validatearr['mobileparasec'] = 'required';} 


              

             
             }

             $validatearr['headertext'] = 'required';
             $validatearr['subheadertext'] = 'required';
             $validatearr['login'] = 'required';
             $validatearr['signup'] = 'required';
             $validatearr['para'] = 'required';
             $validatearr['mobilepara'] = 'required';
    
       $validator=Validator::make($request->all(),$validatearr)->validate(); 


      $ReferAFriendCms=ReferAFriendCms::where('languageculture','LIKE',$languageculture); 
      $dataupdate['headertext'] = htmlentities($request->headertext);
        $dataupdate['subheadertext'] = htmlentities($request->subheadertext);
        $dataupdate['login'] = htmlentities($request->login);
        $dataupdate['signup'] = htmlentities($request->signup);
        $dataupdate['para'] = htmlentities($request->para);
        $dataupdate['mobilepara'] = htmlentities($request->mobilepara);
       
        if(isset($request->headertextsec))
        $dataupdate['headertextsec'] = htmlentities($request->headertextsec);

        if(isset($request->subheadertextsec))
        $dataupdate['subheadertextsec'] = htmlentities($request->subheadertextsec);

       if(isset($request->loginsec))
        $dataupdate['loginsec'] = htmlentities($request->loginsec);

       if(isset($request->signupsec))
        $dataupdate['signupsec'] = htmlentities($request->signupsec);

       if(isset($request->parasec))
        $dataupdate['parasec'] = htmlentities($request->parasec);

       if(isset($request->mobileparasec))
        $dataupdate['mobileparasec'] = htmlentities($request->mobileparasec);

  
     $ReferAFriendCms->update($dataupdate);
     return redirect('/frontendreferafriendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=13')->with('info','Success');
        
  }  


   

    /*
    |-------------------------------------------------------------
    | UPDATE FRONT END CONTENT END
    |-------------------------------------------------------------
    */
}
