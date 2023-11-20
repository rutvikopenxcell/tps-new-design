<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuListCms;
use App\Models\CountryLanguage;
 
use App\Http\Requests\FrontEndRequest;
use Validator; 


class MenuListCmsController extends Controller
{
    public  $numarr=[];
    public function __construct()
    {
        $this->middleware('auth');
        $this->numarr=['12'];
    }

    public function getFrontEndCms($languageculture=null, Request $request){       
        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['content']=MenuListCms::where('languageculture' ,'LIKE',$languageculture)->first();
         if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }
        if(!isset($_GET['taboption'])){
        return redirect('/frontendmenulistcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=12');
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
           $this->numarr=['12'];
          if(!isset($_GET['taboption'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!'); 
          }elseif(!in_array($_GET['taboption'], $this->numarr)){
            return redirect('country-lang-list')->with('warning','Invalid Access!');   
          }

        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['content']=MenuListCms::where('languageculture' ,'LIKE',$languageculture)->first();
         
        if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }

   
        if(!empty($data['content'])){
            return redirect('/frontendmenulistcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=12');
        }

            
              $validatearr=[];
           
                 if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
               if(isset($_POST['hometextsec'])){             
                $validatearr['hometextsec'] = 'required'; } 

                if(isset($_POST['loginsec'])){  
                $validatearr['loginsec'] = 'required'; } 

                if(isset($_POST['aboutussec'])){  
                $validatearr['aboutussec'] = 'required'; } 

                if(isset($_POST['whyussec'])){  
                $validatearr['whyussec'] = 'required'; } 

                if(isset($_POST['mobileappsec'])){  
                $validatearr['mobileappsec'] = 'required'; } 

                if(isset($_POST['blogsec'])){  
                $validatearr['blogsec'] = 'required'; } 

                if(isset($_POST['howitworkssubheadersec'])){  
                $validatearr['howitworkssubheadersec'] = 'required'; } 

                if(isset($_POST['testimonialsec'])){  
                $validatearr['testimonialsec'] = 'required'; } 

                if(isset($_POST['testimonialparasec'])){  
                $validatearr['testimonialparasec'] = 'required'; }

                 if(isset($_POST['incentivepartnersec'])){  
                $validatearr['incentivepartnersec'] = 'required'; } 

                if(isset($_POST['faqsec'])){  
                $validatearr['faqsec'] = 'required'; }

                if(isset($_POST['privacyandpolicysec'])){  
                $validatearr['privacyandpolicysec'] = 'required'; }

                 if(isset($_POST['termandconditionsec'])){  
                $validatearr['termandconditionsec'] = 'required'; }

                 if(isset($_POST['copyrightsec'])){  
                $validatearr['copyrightsec'] = 'required'; }

                 if(isset($_POST['referafriendsec'])){  
                $validatearr['referafriendsec'] = 'required'; } 

                if(isset($_POST['contactsec'])){  
                $validatearr['contactsec'] = 'required'; } 

                if(isset($_POST['partnerwithussec'])){  
                $validatearr['partnerwithussec'] = 'required'; }

                 if(isset($_POST['sendsec'])){  
                $validatearr['sendsec'] = 'required'; }

                 if(isset($_POST['namesec'])){  
                $validatearr['namesec'] = 'required'; } 

                if(isset($_POST['emailsec'])){  
                $validatearr['emailsec'] = 'required'; }

                 if(isset($_POST['messagesec'])){  
                $validatearr['messagesec'] = 'required'; } 


                  if(isset($_POST['howitworkssec'])){  
                $validatearr['howitworkssec'] = 'required'; } 

                  if(isset($_POST['getstartedsec'])){  
                $validatearr['getstartedsec'] = 'required'; }
                
                if(isset($_POST['specific_loc_contentsec'])){  
                  $validatearr['specific_loc_contentsec'] = 'required'; 
                }

                if(isset($_POST['register_nowsec'])){  
                  $validatearr['register_nowsec'] = 'required'; 
                }

              }
                        
              $validatearr['hometext'] = 'required';
              $validatearr['login'] = 'required';
              $validatearr['aboutus'] = 'required';
              $validatearr['whyus'] = 'required';
              $validatearr['mobileapp'] = 'required';
              $validatearr['blog'] = 'required';
              $validatearr['howitworkssubheader'] = 'required';
              $validatearr['testimonial'] = 'required';
              $validatearr['testimonialpara'] = 'required';
              $validatearr['incentivepartner'] = 'required';
              $validatearr['faq'] = 'required';
              $validatearr['privacyandpolicy'] = 'required';
              $validatearr['termandcondition'] = 'required';
              $validatearr['copyright'] = 'required';
              $validatearr['referafriend'] = 'required';
              $validatearr['contact'] = 'required';
              $validatearr['partnerwithus'] = 'required';
              $validatearr['send'] = 'required';
              $validatearr['name'] = 'required';
              $validatearr['email'] = 'required';
              $validatearr['message'] = 'required';
               $validatearr['howitworks'] = 'required';
               $validatearr['getstarted'] = 'required';
               $validatearr['specific_loc_content'] = 'required';
               $validatearr['register_now'] = 'required';
           
              $validator=Validator::make($request->all(),$validatearr)->validate();
              $MenuListCms=new MenuListCms; 
              $MenuListCms->languageculture=$languageculture;
              $MenuListCms->languagecode=$countrylanguage->languagecode;
              $MenuListCms->countrycode=$countrylanguage->countrycode;

              $MenuListCms->hometext=htmlentities($request->hometext);
             $MenuListCms->login=htmlentities($request->login);
             $MenuListCms->aboutus=htmlentities($request->aboutus);
             $MenuListCms->whyus=htmlentities($request->whyus);
             $MenuListCms->mobileapp=htmlentities($request->mobileapp);
             $MenuListCms->blog=htmlentities($request->blog);
             $MenuListCms->howitworkssubheader=htmlentities($request->howitworkssubheader);
             $MenuListCms->testimonial=htmlentities($request->testimonial);
             $MenuListCms->testimonialpara=htmlentities($request->testimonialpara);
             $MenuListCms->incentivepartner=htmlentities($request->incentivepartner);
             $MenuListCms->faq=htmlentities($request->faq);
             $MenuListCms->privacyandpolicy=htmlentities($request->privacyandpolicy);
             $MenuListCms->termandcondition=htmlentities($request->termandcondition);
             $MenuListCms->copyright=htmlentities($request->copyright);
             $MenuListCms->referafriend=htmlentities($request->referafriend);
             $MenuListCms->contact=htmlentities($request->contact);
             $MenuListCms->partnerwithus=htmlentities($request->partnerwithus);
             $MenuListCms->send=htmlentities($request->send);
             $MenuListCms->name=htmlentities($request->name);
             $MenuListCms->email=htmlentities($request->email);
             $MenuListCms->message=htmlentities($request->message);
             $MenuListCms->howitworks=htmlentities($request->howitworks);
             $MenuListCms->getstarted=htmlentities($request->getstarted);
             $MenuListCms->specific_loc_content=htmlentities($request->specific_loc_content);
             $MenuListCms->register_now=htmlentities($request->register_now);


              if(isset($request->hometextsec))
             $MenuListCms->hometextsec=htmlentities($request->hometextsec);

             if(isset($request->loginsec))
             $MenuListCms->loginsec=htmlentities($request->loginsec);

             if(isset($request->aboutussec))
             $MenuListCms->aboutussec=htmlentities($request->aboutussec);

             if(isset($request->whyussec))
             $MenuListCms->whyussec=htmlentities($request->whyussec);

             if(isset($request->mobileappsec))
             $MenuListCms->mobileappsec=htmlentities($request->mobileappsec);

             if(isset($request->blogsec))
             $MenuListCms->blogsec=htmlentities($request->blogsec);

               if(isset($request->howitworkssec))
             $MenuListCms->howitworkssec=htmlentities($request->howitworkssec);

             if(isset($request->howitworkssubheadersec))
             $MenuListCms->howitworkssubheadersec=htmlentities($request->howitworkssubheadersec);

             if(isset($request->testimonialsec))
             $MenuListCms->testimonialsec=htmlentities($request->testimonialsec);

             if(isset($request->testimonialparasec))
             $MenuListCms->testimonialparasec=htmlentities($request->testimonialparasec);

             if(isset($request->incentivepartnersec))
             $MenuListCms->incentivepartnersec=htmlentities($request->incentivepartnersec);


             if(isset($request->faqsec))
             $MenuListCms->faqsec=htmlentities($request->faqsec);

             if(isset($request->privacyandpolicysec))
             $MenuListCms->privacyandpolicysec=htmlentities($request->privacyandpolicysec);

             if(isset($request->termandconditionsec))
             $MenuListCms->termandconditionsec=htmlentities($request->termandconditionsec);

             if(isset($request->copyrightsec))
             $MenuListCms->copyrightsec=htmlentities($request->copyrightsec);

             if(isset($request->referafriendsec))
             $MenuListCms->referafriendsec=htmlentities($request->referafriendsec);

             if(isset($request->contactsec))
             $MenuListCms->contactsec=htmlentities($request->contactsec);

             if(isset($request->partnerwithussec))
             $MenuListCms->partnerwithussec=htmlentities($request->partnerwithussec);

             if(isset($request->sendsec))
             $MenuListCms->sendsec=htmlentities($request->sendsec);

             if(isset($request->namesec))
             $MenuListCms->namesec=htmlentities($request->namesec);

             if(isset($request->emailsec)) 
             $MenuListCms->emailsec=htmlentities($request->emailsec);

             if(isset($request->messagesec))
             $MenuListCms->messagesec=htmlentities($request->messagesec);

               if(isset($request->getstartedsec))
             $MenuListCms->getstartedsec=htmlentities($request->getstartedsec);

            if(isset($request->specific_loc_contentsec))
              $MenuListCms->specific_loc_contentsec=htmlentities($request->specific_loc_contentsec);
            
            if(isset($request->register_nowsec))
              $MenuListCms->register_nowsec=htmlentities($request->register_nowsec);           
             
              $MenuListCms->save();
             return redirect('/frontendmenulistcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=12');
        
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
        $this->numarr=['12'];
        if(!isset($_GET['taboption'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!'); 
        }elseif(!in_array($_GET['taboption'], $this->numarr)){
          return redirect('country-lang-list')->with('warning','Invalid Access!');   
        }

      if($languageculture===null){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }      
      $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
      $data['content']=MenuListCms::where('languageculture' ,'LIKE',$languageculture)->first();
     
      if(empty($data['countrylanguage'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }
      if(empty($data['content'])){
          return redirect('/frontendmenulistcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=12');
      }
      
    
        if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
               if(isset($_POST['hometextsec'])){             
                $validatearr['hometextsec'] = 'required'; } 

                if(isset($_POST['loginsec'])){  
                $validatearr['loginsec'] = 'required'; } 

                if(isset($_POST['aboutussec'])){  
                $validatearr['aboutussec'] = 'required'; } 

                if(isset($_POST['whyussec'])){  
                $validatearr['whyussec'] = 'required'; } 

                if(isset($_POST['mobileappsec'])){  
                $validatearr['mobileappsec'] = 'required'; } 

                if(isset($_POST['blogsec'])){  
                $validatearr['blogsec'] = 'required'; } 

                if(isset($_POST['howitworkssubheadersec'])){  
                $validatearr['howitworkssubheadersec'] = 'required'; } 

                if(isset($_POST['testimonialsec'])){  
                $validatearr['testimonialsec'] = 'required'; } 

                if(isset($_POST['testimonialparasec'])){  
                $validatearr['testimonialparasec'] = 'required'; }

                 if(isset($_POST['incentivepartnersec'])){  
                $validatearr['incentivepartnersec'] = 'required'; } 

                if(isset($_POST['faqsec'])){  
                $validatearr['faqsec'] = 'required'; }

                if(isset($_POST['privacyandpolicysec'])){  
                $validatearr['privacyandpolicysec'] = 'required'; }

                 if(isset($_POST['termandconditionsec'])){  
                $validatearr['termandconditionsec'] = 'required'; }

                 if(isset($_POST['copyrightsec'])){  
                $validatearr['copyrightsec'] = 'required'; }

                 if(isset($_POST['referafriendsec'])){  
                $validatearr['referafriendsec'] = 'required'; } 

                if(isset($_POST['contactsec'])){  
                $validatearr['contactsec'] = 'required'; } 

                if(isset($_POST['partnerwithussec'])){  
                $validatearr['partnerwithussec'] = 'required'; }

                 if(isset($_POST['sendsec'])){  
                $validatearr['sendsec'] = 'required'; }

                 if(isset($_POST['namesec'])){  
                $validatearr['namesec'] = 'required'; } 

                if(isset($_POST['emailsec'])){  
                $validatearr['emailsec'] = 'required'; }

                 if(isset($_POST['messagesec'])){  
                $validatearr['messagesec'] = 'required'; } 

                  if(isset($_POST['howitworkssec'])){  
                $validatearr['howitworkssec'] = 'required'; } 

                 if(isset($_POST['getstartedsec'])){  
                $validatearr['getstartedsec'] = 'required'; } 

                if(isset($_POST['specific_loc_contentsec'])){  
                  $validatearr['specific_loc_contentsec'] = 'required'; } 

                if(isset($_POST['register_nowsec'])){  
                    $validatearr['register_nowsec'] = 'required'; } 

              }
                        
              $validatearr['hometext'] = 'required';
              $validatearr['login'] = 'required';
              $validatearr['aboutus'] = 'required';
              $validatearr['whyus'] = 'required';
              $validatearr['mobileapp'] = 'required';
              $validatearr['blog'] = 'required';
              $validatearr['howitworkssubheader'] = 'required';
              $validatearr['testimonial'] = 'required';
              $validatearr['testimonialpara'] = 'required';
              $validatearr['incentivepartner'] = 'required';
              $validatearr['faq'] = 'required';
              $validatearr['privacyandpolicy'] = 'required';
              $validatearr['termandcondition'] = 'required';
              $validatearr['copyright'] = 'required';
              $validatearr['referafriend'] = 'required';
              $validatearr['contact'] = 'required';
              $validatearr['partnerwithus'] = 'required';
              $validatearr['send'] = 'required';
              $validatearr['name'] = 'required';
              $validatearr['email'] = 'required';
              $validatearr['message'] = 'required'; 
               $validatearr['howitworks'] = 'required';
               $validatearr['getstarted'] = 'required';
               $validatearr['specific_loc_content'] = 'required';
               $validatearr['register_now'] = 'required';
    
       $validator=Validator::make($request->all(),$validatearr)->validate(); 


      $MenuListCms=MenuListCms::where('languageculture','LIKE',$languageculture); 
      

         $dataupdate['hometext'] = htmlentities($request->hometext);
           $dataupdate['login'] = htmlentities($request->login);
           $dataupdate['aboutus'] = htmlentities($request->aboutus);
           $dataupdate['whyus'] = htmlentities($request->whyus);
           $dataupdate['mobileapp'] = htmlentities($request->mobileapp);
           $dataupdate['blog'] = htmlentities($request->blog);
           $dataupdate['howitworkssubheader'] = htmlentities($request->howitworkssubheader);
           $dataupdate['testimonial'] = htmlentities($request->testimonial);
           $dataupdate['testimonialpara'] = htmlentities($request->testimonialpara);
           $dataupdate['incentivepartner'] = htmlentities($request->incentivepartner);
           $dataupdate['faq'] = htmlentities($request->faq);
           $dataupdate['privacyandpolicy'] = htmlentities($request->privacyandpolicy);
           $dataupdate['termandcondition'] = htmlentities($request->termandcondition);
           $dataupdate['copyright'] = htmlentities($request->copyright);
           $dataupdate['referafriend'] = htmlentities($request->referafriend);
           $dataupdate['contact'] = htmlentities($request->contact);
           $dataupdate['partnerwithus'] = htmlentities($request->partnerwithus);
           $dataupdate['send'] = htmlentities($request->send);
           $dataupdate['name'] = htmlentities($request->name);
           $dataupdate['email'] = htmlentities($request->email);
           $dataupdate['message'] = htmlentities($request->message);
           $dataupdate['howitworks'] =htmlentities($request->howitworks);
           $dataupdate['getstarted'] =htmlentities($request->getstarted);
           $dataupdate['specific_loc_content'] =htmlentities($request->specific_loc_content);
           $dataupdate['register_now'] =htmlentities($request->register_now);


              if(isset($request->hometextsec))
           $dataupdate['hometextsec'] = htmlentities($request->hometextsec);

             if(isset($request->loginsec))
           $dataupdate['loginsec'] = htmlentities($request->loginsec);

             if(isset($request->aboutussec))
           $dataupdate['aboutussec'] = htmlentities($request->aboutussec);

             if(isset($request->whyussec))
           $dataupdate['whyussec'] = htmlentities($request->whyussec);

             if(isset($request->mobileappsec))
           $dataupdate['mobileappsec'] = htmlentities($request->mobileappsec);

             if(isset($request->blogsec))
           $dataupdate['blogsec'] = htmlentities($request->blogsec);

           if(isset($request->howitworkssec))
            $dataupdate['howitworkssec'] =htmlentities($request->howitworkssec);

             if(isset($request->howitworkssubheadersec))
           $dataupdate['howitworkssubheadersec'] = htmlentities($request->howitworkssubheadersec);

             if(isset($request->testimonialsec))
           $dataupdate['testimonialsec'] = htmlentities($request->testimonialsec);

             if(isset($request->testimonialparasec))
           $dataupdate['testimonialparasec'] = htmlentities($request->testimonialparasec);

             if(isset($request->incentivepartnersec))
           $dataupdate['incentivepartnersec'] = htmlentities($request->incentivepartnersec);


             if(isset($request->faqsec))
           $dataupdate['faqsec'] = htmlentities($request->faqsec);

             if(isset($request->privacyandpolicysec))
           $dataupdate['privacyandpolicysec'] = htmlentities($request->privacyandpolicysec);

             if(isset($request->termandconditionsec))
           $dataupdate['termandconditionsec'] = htmlentities($request->termandconditionsec);

             if(isset($request->copyrightsec))
           $dataupdate['copyrightsec'] = htmlentities($request->copyrightsec);

             if(isset($request->referafriendsec))
           $dataupdate['referafriendsec'] = htmlentities($request->referafriendsec);

             if(isset($request->contactsec))
           $dataupdate['contactsec'] = htmlentities($request->contactsec);

             if(isset($request->partnerwithussec))
           $dataupdate['partnerwithussec'] = htmlentities($request->partnerwithussec);

             if(isset($request->sendsec))
           $dataupdate['sendsec'] = htmlentities($request->sendsec);

             if(isset($request->namesec))
           $dataupdate['namesec'] = htmlentities($request->namesec);

             if(isset($request->emailsec))
           $dataupdate['emailsec'] = htmlentities($request->emailsec);

             if(isset($request->messagesec))
           $dataupdate['messagesec'] = htmlentities($request->messagesec);


             if(isset($request->getstartedsec))
            $dataupdate['getstartedsec']=htmlentities($request->getstartedsec);

          if(isset($request->specific_loc_contentsec))
            $dataupdate['specific_loc_contentsec']=htmlentities($request->specific_loc_contentsec);

          if(isset($request->register_nowsec))
            $dataupdate['register_nowsec']=htmlentities($request->register_nowsec);


  
     $MenuListCms->update($dataupdate);
     return redirect('/frontendmenulistcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=12')->with('info','Success');
        
  }  


   

    /*
    |-------------------------------------------------------------
    | UPDATE FRONT END CONTENT END
    |-------------------------------------------------------------
    */
}
