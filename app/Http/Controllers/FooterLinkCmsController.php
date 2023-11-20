<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FooterLinkListCms;
use App\Models\CountryLanguage;
 
use App\Http\Requests\FrontEndRequest;
use Validator; 


class FooterLinkCmsController extends Controller
{
    public  $numarr=[];
    public function __construct()
    {
        $this->middleware('auth');
        $this->numarr=['16'];
    }

    public function getFrontEndCms($languageculture=null, Request $request){       
        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['content']=FooterLinkListCms::where('languageculture' ,'LIKE',$languageculture)->first();
         if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }
        if(!isset($_GET['taboption'])){
        return redirect('/frontendfooterlistcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=16');
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
           $this->numarr=['16'];
          if(!isset($_GET['taboption'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!'); 
          }elseif(!in_array($_GET['taboption'], $this->numarr)){
            return redirect('country-lang-list')->with('warning','Invalid Access!');   
          }

        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['content']=FooterLinkListCms::where('languageculture' ,'LIKE',$languageculture)->first();
         
        if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }

   
        if(!empty($data['content'])){
            return redirect('/frontendfooterlistcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=16');
        }

            
              $validatearr=[];
           
                 if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
             

                if(isset($_POST['aboutussec'])){  
                $validatearr['aboutussec'] = 'required'; } 

               

              
                if(isset($_POST['faqsec'])){  
                $validatearr['faqsec'] = 'required'; }

                if(isset($_POST['privacyandpolicysec'])){  
                $validatearr['privacyandpolicysec'] = 'required'; }

                 if(isset($_POST['termandconditionsec'])){  
                $validatearr['termandconditionsec'] = 'required'; }

             

                if(isset($_POST['contactsec'])){  
                $validatearr['contactsec'] = 'required'; } 

                if(isset($_POST['partnerwithussec'])){  
                $validatearr['partnerwithussec'] = 'required'; }

               

              }
                        
            
              $validatearr['aboutus'] = 'required';
             
              $validatearr['faq'] = 'required';
              $validatearr['privacyandpolicy'] = 'required';
              $validatearr['termandcondition'] = 'required';
             
              $validatearr['contact'] = 'required';
              $validatearr['partnerwithus'] = 'required';
            
           
              $validator=Validator::make($request->all(),$validatearr)->validate();
              $FooterLinkListCms=new FooterLinkListCms; 
              $FooterLinkListCms->languageculture=$languageculture;
              $FooterLinkListCms->languagecode=$countrylanguage->languagecode;
              $FooterLinkListCms->countrycode=$countrylanguage->countrycode;

            
             $FooterLinkListCms->aboutus=htmlentities($request->aboutus);
           
             $FooterLinkListCms->faq=htmlentities($request->faq);
             $FooterLinkListCms->privacyandpolicy=htmlentities($request->privacyandpolicy);
             $FooterLinkListCms->termandcondition=htmlentities($request->termandcondition);
             
             $FooterLinkListCms->contact=htmlentities($request->contact);
             $FooterLinkListCms->partnerwithus=htmlentities($request->partnerwithus);
              


         

             if(isset($request->aboutussec))
             $FooterLinkListCms->aboutussec=htmlentities($request->aboutussec);

           
             if(isset($request->faqsec))
             $FooterLinkListCms->faqsec=htmlentities($request->faqsec);

             if(isset($request->privacyandpolicysec))
             $FooterLinkListCms->privacyandpolicysec=htmlentities($request->privacyandpolicysec);

             if(isset($request->termandconditionsec))
             $FooterLinkListCms->termandconditionsec=htmlentities($request->termandconditionsec);

          

             if(isset($request->contactsec))
             $FooterLinkListCms->contactsec=htmlentities($request->contactsec);

             if(isset($request->partnerwithussec))
             $FooterLinkListCms->partnerwithussec=htmlentities($request->partnerwithussec);


                       
             
              $FooterLinkListCms->save();
             return redirect('/frontendfooterlistcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=16');
        
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
        $this->numarr=['16'];
        if(!isset($_GET['taboption'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!'); 
        }elseif(!in_array($_GET['taboption'], $this->numarr)){
          return redirect('country-lang-list')->with('warning','Invalid Access!');   
        }

      if($languageculture===null){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }      
      $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
      $data['content']=FooterLinkListCms::where('languageculture' ,'LIKE',$languageculture)->first();
     
      if(empty($data['countrylanguage'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }
      if(empty($data['content'])){
          return redirect('/frontendfooterlistcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=16');
      }
      
    
        if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
           

                if(isset($_POST['aboutussec'])){  
                $validatearr['aboutussec'] = 'required'; } 

               

                if(isset($_POST['faqsec'])){  
                $validatearr['faqsec'] = 'required'; }

                if(isset($_POST['privacyandpolicysec'])){  
                $validatearr['privacyandpolicysec'] = 'required'; }

                 if(isset($_POST['termandconditionsec'])){  
                $validatearr['termandconditionsec'] = 'required'; }

               

                if(isset($_POST['contactsec'])){  
                $validatearr['contactsec'] = 'required'; } 

                if(isset($_POST['partnerwithussec'])){  
                $validatearr['partnerwithussec'] = 'required'; }

               

                

              }
                        
           
              $validatearr['aboutus'] = 'required';
            
              $validatearr['faq'] = 'required';
              $validatearr['privacyandpolicy'] = 'required';
              $validatearr['termandcondition'] = 'required';
             
              $validatearr['contact'] = 'required';
              $validatearr['partnerwithus'] = 'required';
             
    
       $validator=Validator::make($request->all(),$validatearr)->validate(); 


      $FooterLinkListCms=FooterLinkListCms::where('languageculture','LIKE',$languageculture); 
      

       
           $dataupdate['aboutus'] = htmlentities($request->aboutus);
         
           $dataupdate['faq'] = htmlentities($request->faq);
           $dataupdate['privacyandpolicy'] = htmlentities($request->privacyandpolicy);
           $dataupdate['termandcondition'] = htmlentities($request->termandcondition);
          
           $dataupdate['contact'] = htmlentities($request->contact);
           $dataupdate['partnerwithus'] = htmlentities($request->partnerwithus);
           


           

             if(isset($request->aboutussec))
           $dataupdate['aboutussec'] = htmlentities($request->aboutussec);

         

             if(isset($request->faqsec))
           $dataupdate['faqsec'] = htmlentities($request->faqsec);

             if(isset($request->privacyandpolicysec))
           $dataupdate['privacyandpolicysec'] = htmlentities($request->privacyandpolicysec);

             if(isset($request->termandconditionsec))
           $dataupdate['termandconditionsec'] = htmlentities($request->termandconditionsec);

           

             if(isset($request->contactsec))
           $dataupdate['contactsec'] = htmlentities($request->contactsec);

             if(isset($request->partnerwithussec))
           $dataupdate['partnerwithussec'] = htmlentities($request->partnerwithussec);

         


          

  
        $FooterLinkListCms->update($dataupdate);
     return redirect('/frontendfooterlistcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=16')->with('info','Success');
        
  }  


   

    /*
    |-------------------------------------------------------------
    | UPDATE FRONT END CONTENT END
    |-------------------------------------------------------------
    */
}
