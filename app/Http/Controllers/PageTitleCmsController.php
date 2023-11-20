<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageTitleCms;
use App\Models\CountryLanguage;
 
use App\Http\Requests\FrontEndRequest;
use Validator; 


class PageTitleCmsController extends Controller
{
    public  $numarr=[];
    public function __construct()
    {
        $this->middleware('auth');
        $this->numarr=['15'];
    }

    public function getFrontEndCms($languageculture=null, Request $request){       
        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['content']=PageTitleCms::where('languageculture' ,'LIKE',$languageculture)->first();
         if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }
        if(!isset($_GET['taboption'])){
        return redirect('/frontendpagetitlecms'.'/'. $data['countrylanguage']->languageculture.'?taboption=15');
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
         // dd($_POST);
           $this->numarr=['15'];
          if(!isset($_GET['taboption'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!'); 
          }elseif(!in_array($_GET['taboption'], $this->numarr)){
            return redirect('country-lang-list')->with('warning','Invalid Access!');   
          }

        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['content']=PageTitleCms::where('languageculture' ,'LIKE',$languageculture)->first();
         
        if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }

   
        if(!empty($data['content'])){
            return redirect('/frontendpagetitlecms'.'/'. $data['countrylanguage']->languageculture.'?taboption=15');
        }

            
              $validatearr=[];
           
                 if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
               if(isset($_POST['homesec'])){             
                $validatearr['homesec'] = 'required'; } 

            

                if(isset($_POST['aboutussec'])){  
                $validatearr['aboutussec'] = 'required'; } 
 
                if(isset($_POST['faqsec'])){  
                $validatearr['faqsec'] = 'required'; }

                if(isset($_POST['privacypolicysec'])){  
                $validatearr['privacypolicysec'] = 'required'; }

                 if(isset($_POST['termandconditionsec'])){  
                $validatearr['termandconditionsec'] = 'required'; }

             

                 if(isset($_POST['referafriendsec'])){  
                $validatearr['referafriendsec'] = 'required'; } 

                if(isset($_POST['contactussec'])){  
                $validatearr['contactussec'] = 'required'; } 

                if(isset($_POST['partnerwithussec'])){  
                $validatearr['partnerwithussec'] = 'required'; }

              } 

         
                        
              $validatearr['home'] = 'required';
            
              $validatearr['aboutus'] = 'required';
            
              $validatearr['faq'] = 'required';
              $validatearr['privacypolicy'] = 'required';
              $validatearr['termandcondition'] = 'required';
             
              $validatearr['referafriend'] = 'required';
              $validatearr['contactus'] = 'required';
              $validatearr['partnerwithus'] = 'required';
             
           
              $validator=Validator::make($request->all(),$validatearr)->validate();
              $PageTitleCms=new PageTitleCms; 
              $PageTitleCms->languageculture=$languageculture;
              $PageTitleCms->languagecode=$countrylanguage->languagecode;
              $PageTitleCms->countrycode=$countrylanguage->countrycode;

              $PageTitleCms->home=htmlentities($request->home);
             
             $PageTitleCms->aboutus=htmlentities($request->aboutus);
             
         
             $PageTitleCms->faq=htmlentities($request->faq);
             $PageTitleCms->privacypolicy=htmlentities($request->privacypolicy);
             $PageTitleCms->termandcondition=htmlentities($request->termandcondition);
            
             $PageTitleCms->referafriend=htmlentities($request->referafriend);
             $PageTitleCms->contactus=htmlentities($request->contactus);
             $PageTitleCms->partnerwithus=htmlentities($request->partnerwithus);
            


              if(isset($request->homesec))
             $PageTitleCms->homesec=htmlentities($request->homesec);

            

             if(isset($request->aboutussec))
             $PageTitleCms->aboutussec=htmlentities($request->aboutussec);

        
             if(isset($request->faqsec))
             $PageTitleCms->faqsec=htmlentities($request->faqsec);

             if(isset($request->privacypolicysec))
             $PageTitleCms->privacypolicysec=htmlentities($request->privacypolicysec);

             if(isset($request->termandconditionsec))
             $PageTitleCms->termandconditionsec=htmlentities($request->termandconditionsec);

          
             if(isset($request->referafriendsec))
             $PageTitleCms->referafriendsec=htmlentities($request->referafriendsec);

             if(isset($request->contactussec))
             $PageTitleCms->contactussec=htmlentities($request->contactussec);

             if(isset($request->partnerwithussec))
             $PageTitleCms->partnerwithussec=htmlentities($request->partnerwithussec);
 
                       
             
              $PageTitleCms->save();
             return redirect('/frontendpagetitlecms'.'/'. $data['countrylanguage']->languageculture.'?taboption=15');
        
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
        $this->numarr=['15'];
        if(!isset($_GET['taboption'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!'); 
        }elseif(!in_array($_GET['taboption'], $this->numarr)){
          return redirect('country-lang-list')->with('warning','Invalid Access!');   
        }

      if($languageculture===null){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }      
      $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
      $data['content']=PageTitleCms::where('languageculture' ,'LIKE',$languageculture)->first();
     
      if(empty($data['countrylanguage'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }
      if(empty($data['content'])){
          return redirect('/frontendpagetitlecms'.'/'. $data['countrylanguage']->languageculture.'?taboption=15');
      }
      
    
        if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
               if(isset($_POST['homesec'])){             
                $validatearr['homesec'] = 'required'; } 
 

                if(isset($_POST['aboutussec'])){  
                $validatearr['aboutussec'] = 'required'; } 

           
              

                if(isset($_POST['faqsec'])){  
                $validatearr['faqsec'] = 'required'; }

                if(isset($_POST['privacypolicysec'])){  
                $validatearr['privacypolicysec'] = 'required'; }

                 if(isset($_POST['termandconditionsec'])){  
                $validatearr['termandconditionsec'] = 'required'; }

             

                 if(isset($_POST['referafriendsec'])){  
                $validatearr['referafriendsec'] = 'required'; } 

                if(isset($_POST['contactussec'])){  
                $validatearr['contactussec'] = 'required'; } 

                if(isset($_POST['partnerwithussec'])){  
                $validatearr['partnerwithussec'] = 'required'; }

              

              }
                        
              $validatearr['home'] = 'required';
            
              $validatearr['aboutus'] = 'required';
             
             
              $validatearr['faq'] = 'required';
              $validatearr['privacypolicy'] = 'required';
              $validatearr['termandcondition'] = 'required';
             
              $validatearr['referafriend'] = 'required';
              $validatearr['contactus'] = 'required';
              $validatearr['partnerwithus'] = 'required';
            
    
       $validator=Validator::make($request->all(),$validatearr)->validate(); 


      $PageTitleCms=PageTitleCms::where('languageculture','LIKE',$languageculture); 
      

         $dataupdate['home'] = htmlentities($request->home);
         
           $dataupdate['aboutus'] = htmlentities($request->aboutus);
       
           $dataupdate['faq'] = htmlentities($request->faq);
           $dataupdate['privacypolicy'] = htmlentities($request->privacypolicy);
           $dataupdate['termandcondition'] = htmlentities($request->termandcondition);
         
           $dataupdate['referafriend'] = htmlentities($request->referafriend);
           $dataupdate['contactus'] = htmlentities($request->contactus);
           $dataupdate['partnerwithus'] = htmlentities($request->partnerwithus);
         


              if(isset($request->homesec))
           $dataupdate['homesec'] = htmlentities($request->homesec);

        

             if(isset($request->aboutussec))
           $dataupdate['aboutussec'] = htmlentities($request->aboutussec);

         


             if(isset($request->faqsec))
           $dataupdate['faqsec'] = htmlentities($request->faqsec);

             if(isset($request->privacypolicysec))
           $dataupdate['privacypolicysec'] = htmlentities($request->privacypolicysec);

             if(isset($request->termandconditionsec))
           $dataupdate['termandconditionsec'] = htmlentities($request->termandconditionsec);

         

             if(isset($request->referafriendsec))
           $dataupdate['referafriendsec'] = htmlentities($request->referafriendsec);

             if(isset($request->contactussec))
           $dataupdate['contactussec'] = htmlentities($request->contactussec);

             if(isset($request->partnerwithussec))
           $dataupdate['partnerwithussec'] = htmlentities($request->partnerwithussec);

        


  
     $PageTitleCms->update($dataupdate);
     return redirect('/frontendpagetitlecms'.'/'. $data['countrylanguage']->languageculture.'?taboption=15')->with('info','Success');
        
  }  


   

    /*
    |-------------------------------------------------------------
    | UPDATE FRONT END CONTENT END
    |-------------------------------------------------------------
    */
}
