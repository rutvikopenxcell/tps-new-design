<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomePageCms;
use App\Models\CountryLanguage;
use App\Models\Sociallink;
use App\Http\Requests\FrontEndRequest;
use Validator; 


class HomePageCmsController extends Controller
{
    public  $numarr=[];
    public function __construct()
    {
        $this->middleware('auth');
        $this->numarr=['1','2','3','4','5','6','7','8','9','10','11'];
    }

    public function getFrontEndCms($languageculture=null, Request $request){
       
        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['homepagecms']=HomePageCms::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['sociallink']=Sociallink::where('languageculture' ,'LIKE',$languageculture)->first();
        if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }
        if(!isset($_GET['taboption'])){
        return redirect('/frontendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=1');
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

    public function getFrontEndCmsInvalid(Request $request){
        return redirect('country-lang-list')->with('warning','Invalid Access!');
    }

    /*
    |-------------------------------------------------------------
    | STORE FRONT END CONTENT
    |-------------------------------------------------------------
     */

    public function storeFrontEndCms($languageculture=null, Request $request){
         
           $this->numarr=['1','2','3','4','5','6','8'];
          if(!isset($_GET['taboption'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!'); 
          }elseif(!in_array($_GET['taboption'], $this->numarr)){
            return redirect('country-lang-list')->with('warning','Invalid Access!');   
          }

        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['homepagecms']=HomePageCms::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['sociallink']=Sociallink::where('languageculture' ,'LIKE',$languageculture)->first();
        if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }

   
        if(!empty($data['homepagecms'])){
            return redirect('/frontendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=1');
        }
        
         
          $taboption=$_GET['taboption'];
          if($taboption==1){                         
            $this->storeHomeContent($data,$languageculture,$request);
            return redirect('/frontendhomecms'.'/'. $data['countrylanguage']->languageculture.'?taboption=1');
          }elseif($taboption==2){                                      
              $this->storeAboutUsContent($data,$languageculture,$request);
              return redirect('/frontendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=2');
          }elseif($taboption==3){                                      
            $this->storeHowItWorkContent($data,$languageculture,$request);
            return redirect('/frontendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=3');
        }elseif($taboption==4){                                      
            $this->storeRewardsAndSweepContent($data,$languageculture,$request);
            return redirect('/frontendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=4');
        }elseif($taboption==5){                                      
            $this->storeMobileAppContent($data,$languageculture,$request);
            return redirect('/frontendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=5');
        }elseif($taboption==6){                                      
            $this->storeContactUsContent($data,$languageculture,$request);
            return redirect('/frontendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=6');
        }elseif($taboption==8){                                      
            $this->storeEmaillist($data,$languageculture,$request);
            return redirect('/frontendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=8');
        }  
      }

        public function storeHomeContent($dataarr, $languageculture,$request){
            $countrylanguage=$dataarr['countrylanguage'];
            $validatearr=[];
            if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
               if(isset($_POST['hometextsec'])){             
               $validatearr['hometextsec'] = 'required';} 

               if(isset($_POST['signupsec'])){             
               $validatearr['signupsec'] = 'required';} 

               if(isset($_POST['loginsec'])){             
               $validatearr['loginsec'] = 'required';} 

               if(isset($_POST['homebannertextsec'])){             
                $validatearr['homebannertextsec'] = 'required';} 
             }

             $validatearr['homebannertext'] = 'required';  
        
             
              $validator=Validator::make($request->all(),$validatearr)->validate();
           
            
              $homepagecms=new HomePageCms; 
              $homepagecms->languageculture=$languageculture;
              $homepagecms->languagecode=$countrylanguage->languagecode;
              $homepagecms->countrycode=$countrylanguage->countrycode;  
              $homepagecms->hometext="Home";
              $homepagecms->signup="Sign Up";
              $homepagecms->login="Login";     
              if(isset($request->hometextsec))
              $homepagecms->hometextsec=$request->hometextsec;
              if(isset($request->signupsec))
              $homepagecms->signupsec=$request->signupsec;
              if(isset($request->loginsec))
              $homepagecms->loginsec=$request->loginsec;
              $homepagecms->homebannertext=htmlentities($request->homebannertext);
              if(isset($request->homebannertextsec))
              $homepagecms->homebannertextsec=htmlentities($request->homebannertextsec);$homepagecms->save();
         }

        public function storeAboutUsContent($dataarr, $languageculture,$request){
            $countrylanguage=$dataarr['countrylanguage'];
            $validatearr=[];
            if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
               if(isset($_POST['aboutussec'])){             
               $validatearr['aboutussec'] = 'required';} 

               if(isset($_POST['aboutussubheadersec'])){             
               $validatearr['aboutussubheadersec'] = 'required';} 

               if(isset($_POST['aboutusparagraphsec1'])){             
               $validatearr['aboutusparagraphsec1'] = 'required';} 

                 if(isset($_POST['aboutusparagraphsec2'])){             
               $validatearr['aboutusparagraphsec2'] = 'required';} 
            }
             

             $validatearr['aboutussubheader'] = 'required'; 
             $validatearr['aboutusparagraph1'] = 'required'; 
             $validatearr['aboutusparagraph2'] = 'required'; 
              
        
             
              $validator=Validator::make($request->all(),$validatearr)->validate();
           
            
              $homepagecms=new HomePageCms; 
              $homepagecms->languageculture=$languageculture;
              $homepagecms->languagecode=$countrylanguage->languagecode;
              $homepagecms->countrycode=$countrylanguage->countrycode;  
              $homepagecms->aboutus="About Us";
            
              if(isset($request->aboutussec))
              $homepagecms->aboutussec=$request->aboutussec;
              $homepagecms->aboutussubheader=htmlentities($request->aboutussubheader);
              $homepagecms->aboutusparagraph1=htmlentities($request->aboutusparagraph1);
              $homepagecms->aboutusparagraph2=htmlentities($request->aboutusparagraph2);
              if(isset($request->aboutussubheadersec))
              $homepagecms->aboutussubheadersec=htmlentities($request->aboutussubheadersec);
              if(isset($request->aboutusparagraphsec1))
              $homepagecms->aboutusparagraphsec1=htmlentities($request->aboutusparagraphsec1);
              if(isset($request->aboutusparagraphsec2))
              $homepagecms->aboutusparagraphsec2=htmlentities($request->aboutusparagraphsec2);
              $homepagecms->save();
        }

        public function storeHowItWorkContent($dataarr, $languageculture,$request){
            $countrylanguage=$dataarr['countrylanguage'];
            $validatearr=[];
            if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
               if(isset($_POST['howitworkssec'])){             
               $validatearr['howitworkssec'] = 'required';} 

               if(isset($_POST['howitworkssubheadersec'])){             
               $validatearr['howitworkssubheadersec'] = 'required';} 

               if(isset($_POST['howitworkssubheadersec1'])){             
               $validatearr['howitworkssubheadersec1'] = 'required';} 

              if(isset($_POST['howitworkssubheadersec2'])){             
               $validatearr['howitworkssubheadersec2'] = 'required';} 
               

               if(isset($_POST['howitworkssubheadersec3'])){             
                 $validatearr['howitworkssubheadersec3'] = 'required';} 

               if(isset($_POST['signupsec'])){             
                    $validatearr['signupsec'] = 'required';} 

                if(isset($_POST['takesurveyssec'])){             
                        $validatearr['takesurveyssec'] = 'required';} 

                if(isset($_POST['earnrewardsec'])){             
                            $validatearr['earnrewardsec'] = 'required';} 
              }
             
             

             
            
             
             
             $validatearr['howitworkssubheader'] = 'required'; 
             $validatearr['howitworkssubheader1'] = 'required'; 
             $validatearr['howitworkssubheader2'] = 'required'; 
             $validatearr['howitworkssubheader3'] = 'required'; 
              
        
             
              $validator=Validator::make($request->all(),$validatearr)->validate();
           
            
              $homepagecms=new HomePageCms; 
              $homepagecms->languageculture=$languageculture;
              $homepagecms->languagecode=$countrylanguage->languagecode;
              $homepagecms->countrycode=$countrylanguage->countrycode;  
              $homepagecms->howitworks="How it Works";
              $homepagecms->signup="Sign Up";
              $homepagecms->takesurveys="Take Surveys";
              $homepagecms->earnreward="Earn Rewards";

              if(isset($request->signupsec))
              $homepagecms->signupsec=$request->signupsec;

              if(isset($request->takesurveyssec))
              $homepagecms->takesurveyssec=$request->takesurveyssec;

              if(isset($request->earnrewardsec))
              $homepagecms->earnrewardsec=$request->earnrewardsec;
            
          
              $homepagecms->howitworkssubheader=htmlentities($request->howitworkssubheader);
              $homepagecms->howitworkssubheader1=htmlentities($request->howitworkssubheader1);
              $homepagecms->howitworkssubheader2=htmlentities($request->howitworkssubheader2);
              $homepagecms->howitworkssubheader3=htmlentities($request->howitworkssubheader3);
              
              if(isset($request->howitworkssec))
              $homepagecms->howitworkssec=$request->howitworkssec;

              if(isset($request->howitworkssubheadersec))
              $homepagecms->howitworkssubheadersec=htmlentities($request->howitworkssubheadersec);
             
              if(isset($request->howitworkssubheadersec1))
              $homepagecms->howitworkssubheadersec1=htmlentities($request->howitworkssubheadersec1);
             
              if(isset($request->howitworkssubheadersec2))
              $homepagecms->howitworkssubheadersec2=htmlentities($request->howitworkssubheadersec2);

              if(isset($request->howitworkssubheadersec3))
              $homepagecms->howitworkssubheadersec3=htmlentities($request->howitworkssubheadersec3);
              $homepagecms->save();
        }


        public function storeRewardsAndSweepContent($dataarr, $languageculture,$request){
            $countrylanguage=$dataarr['countrylanguage'];
            $validatearr=[];
            if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
              
               if(isset($_POST['rewardsandsweepsec'])){             
               $validatearr['rewardsandsweepsec'] = 'required';} 

            

               if(isset($_POST['rewardsandsweepparagraphsec'])){             
                $validatearr['rewardsandsweepparagraphsec'] = 'required';} 
             }

             $validatearr['rewardsandsweepparagraph'] = 'required';  
        
             
              $validator=Validator::make($request->all(),$validatearr)->validate();          
            
              $homepagecms=new HomePageCms; 
              $homepagecms->languageculture=$languageculture;
              $homepagecms->languagecode=$countrylanguage->languagecode;
              $homepagecms->countrycode=$countrylanguage->countrycode;  
              $homepagecms->rewardsandsweep="Rewards / Sweepstakes";             
              if(isset($request->rewardsandsweepsec))
              $homepagecms->rewardsandsweepsec=$request->rewardsandsweepsec;
             
              $homepagecms->rewardsandsweepparagraph=htmlentities($request->rewardsandsweepparagraph);
              if(isset($request->rewardsandsweepparagraphsec))
              $homepagecms->rewardsandsweepparagraphsec=htmlentities($request->rewardsandsweepparagraphsec);
              $homepagecms->save();           
      }


      public function storeMobileAppContent($dataarr, $languageculture,$request){
        $countrylanguage=$dataarr['countrylanguage'];
        $validatearr=[];
        if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
          
           if(isset($_POST['mobileappsec'])){             
           $validatearr['mobileappsec'] = 'required';} 

           if(isset($_POST['mobileappsubheadersec'])){             
            $validatearr['mobileappsubheadersec'] = 'required';} 
        

           if(isset($_POST['mobileappparagraphsec'])){             
            $validatearr['mobileappparagraphsec'] = 'required';} 
         }

         $validatearr['mobileappsubheader'] = 'required';  
         $validatearr['mobileappparagraph'] = 'required';  
    
         
          $validator=Validator::make($request->all(),$validatearr)->validate();          
        
          $homepagecms=new HomePageCms; 
          $homepagecms->languageculture=$languageculture;
          $homepagecms->languagecode=$countrylanguage->languagecode;
          $homepagecms->countrycode=$countrylanguage->countrycode;  
          $homepagecms->mobileapp="Mobile App";             
          if(isset($request->mobileappsec))
          $homepagecms->mobileappsec=$request->mobileappsec;
         
          $homepagecms->mobileappsubheader=htmlentities($request->mobileappsubheader);
          $homepagecms->mobileappparagraph=htmlentities($request->mobileappparagraph);
          if(isset($request->mobileappsubheadersec))
          $homepagecms->mobileappsubheadersec=htmlentities($request->mobileappsubheadersec);
          if(isset($request->mobileappparagraphsec))
          $homepagecms->mobileappparagraphsec=htmlentities($request->mobileappparagraphsec);
          $homepagecms->save();           
  }


  public function storeContactUsContent($dataarr, $languageculture,$request){
    $countrylanguage=$dataarr['countrylanguage'];
    $validatearr=[];
    if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
      
       if(isset($_POST['contactsec'])){             
       $validatearr['contactsec'] = 'required';}            

       if(isset($_POST['contactbusinessenquirysec'])){             
       $validatearr['contactbusinessenquirysec'] = 'required';}   

       if(isset($_POST['contactwriteussec'])){             
        $validatearr['contactwriteussec'] = 'required';}   

        if(isset($_POST['contactgeneralenquirysec'])){             
        $validatearr['contactgeneralenquirysec'] = 'required';} 

       if(isset($_POST['contactaddresssec'])){             
        $validatearr['contactaddresssec'] = 'required';} 

       if(isset($_POST['contacttelandfaxsec'])){             
        $validatearr['contacttelandfaxsec'] = 'required';} 

     }

     $validatearr['contactaddress'] = 'required';  
     $validatearr['contacttelandfax'] = 'required';  
    

     
      $validator=Validator::make($request->all(),$validatearr)->validate();          
    
      $homepagecms=new HomePageCms; 
      $homepagecms->languageculture=$languageculture;
      $homepagecms->languagecode=$countrylanguage->languagecode;
      $homepagecms->countrycode=$countrylanguage->countrycode;  
      $homepagecms->contact="Contact Us"; 
      $homepagecms->contactwriteus="You can also write to us at";            
      $homepagecms->contactbusinessenquiry="For business enquiries please visit";
      $homepagecms->contactgeneralenquiry="For general queries or feedback, please write to";            
      
      if(isset($request->contactsec))
      $homepagecms->contactsec=$request->contactsec;

      if(isset($request->contactbusinessenquirysec))
      $homepagecms->contactbusinessenquirysec=$request->contactbusinessenquirysec;

      if(isset($request->contactwriteussec))
      $homepagecms->contactwriteussec=$request->contactwriteussec;

      
      if(isset($request->contactgeneralenquirysec))
      $homepagecms->contactgeneralenquirysec=htmlentities($request->contactgeneralenquirysec);

     
      $homepagecms->contactaddress=htmlentities($request->contactaddress);
      if(isset($request->contactaddresssec))
      $homepagecms->contactaddresssec=htmlentities($request->contactaddresssec);

      $homepagecms->contacttelandfax=htmlentities($request->contacttelandfax);
      if(isset($request->contacttelandfaxsec))
      $homepagecms->contacttelandfaxsec=htmlentities($request->contacttelandfaxsec);
      $homepagecms->save();           
   }


   public function storeSocialLink($languageculture=null, Request $request){

          
            if(!isset($_GET['taboption'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!'); 
            }elseif($_GET['taboption']!='7'){
            return redirect('country-lang-list')->with('warning','Invalid Access!');   
            }

            if($languageculture===null){
                return redirect('country-lang-list')->with('warning','Invalid Access!');
            }      
            $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
           
            $data['sociallink']=Sociallink::where('languageculture' ,'LIKE',$languageculture)->first();
            if(empty($data['countrylanguage'])){
                return redirect('country-lang-list')->with('warning','Invalid Access!');
            }


            if(!empty($data['sociallink'])){
                return redirect('/frontendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=7');
            }
      
     
    $validatearr=[];
    

    if(isset($_POST['facebooklink'])&&!empty($_POST['facebooklink'])){             
      $validatearr['facebooklink'] = 'url';}  


     if(isset($_POST['twitterlink'])&&!empty($_POST['twitterlink'])){             
      $validatearr['twitterlink'] = 'url';}         


     if(isset($_POST['instagramlink'])&&!empty($_POST['instagramlink'])){             
      $validatearr['instagramlink'] = 'url';} 


     if(isset($_POST['googlepluslink'])&&!empty($_POST['googlepluslink'])){             
      $validatearr['googlepluslink'] = 'url';} 


     if(isset($_POST['weibolink'])&&!empty($_POST['weibolink'])){             
      $validatearr['weibolink'] = 'url';}         


   if(isset($_POST['pinterestlink'])&&!empty($_POST['pinterestlink'])){             
      $validatearr['pinterestlink'] = 'url';}         


     if(isset($_POST['linkedinlink'])&&!empty($_POST['linkedinlink'])){             
      $validatearr['linkedinlink'] = 'url';}         

     $validator=Validator::make($request->all(),$validatearr)->validate();          
   
     $sociallink=new Sociallink; 
     $sociallink->languageculture=$languageculture;
     $sociallink->languagecode=$countrylanguage->languagecode;
     $sociallink->countrycode=$countrylanguage->countrycode;

     if(isset($_POST['facebooklink'])&&!empty($_POST['facebooklink'])){             
     $sociallink->facebooklink=$request->facebooklink;}  


     if(isset($_POST['twitterlink'])&&!empty($_POST['twitterlink'])){             
     $sociallink->twitterlink=$request->twitterlink;}         


     if(isset($_POST['instagramlink'])&&!empty($_POST['instagramlink'])){             
     $sociallink->instagramlink=$request->instagramlink;} 


     if(isset($_POST['googlepluslink'])&&!empty($_POST['googlepluslink'])){             
      $sociallink->googlepluslink=$request->googlepluslink;} 


     if(isset($_POST['weibolink'])&&!empty($_POST['weibolink'])){             
     $sociallink->weibolink=$request->weibolink;}         


     if(isset($_POST['pinterestlink'])&&!empty($_POST['pinterestlink'])){             
      $sociallink->pinterestlink=$request->pinterestlink;}         


     if(isset($_POST['linkedinlink'])&&!empty($_POST['linkedinlink'])){             
      $sociallink->linkedinlink=$request->linkedinlink;}         
      $sociallink->save();   
      return redirect('/frontendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=7');        
}

public function storeEmaillist($dataarr, $languageculture,$request){
    $countrylanguage=$dataarr['countrylanguage'];
    $validatearr=[];
    $validatearr['enquiryemail'] = 'required';  
    $validator=Validator::make($request->all(),$validatearr)->validate();
    $homepagecms=new HomePageCms; 
    $homepagecms->languageculture=$languageculture;
    $homepagecms->languagecode=$countrylanguage->languagecode;
    $homepagecms->countrycode=$countrylanguage->countrycode;  
    $homepagecms->enquiryemail=$request->enquiryemail;
    $homepagecms->save();
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
        $this->numarr=['1','2','3','4','5','6','8','9','10','11'];
        if(!isset($_GET['taboption'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!'); 
        }elseif(!in_array($_GET['taboption'], $this->numarr)){
          return redirect('country-lang-list')->with('warning','Invalid Access!');   
        }

      if($languageculture===null){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }      
      $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
      $data['homepagecms']=HomePageCms::where('languageculture' ,'LIKE',$languageculture)->first();
      $data['sociallink']=Sociallink::where('languageculture' ,'LIKE',$languageculture)->first();
      if(empty($data['countrylanguage'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }
      if(empty($data['homepagecms'])){
          return redirect('/frontendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=1');
      }
      
        $taboption=$_GET['taboption'];
        if($taboption==1){                         
          $this->updateHomeContent($data,$languageculture,$request);
          return redirect('/frontendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=1')->with('info','Success');
        }elseif($taboption==2){                                      
            $this->updateAboutUsContent($data,$languageculture,$request);
            return redirect('/frontendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=2')->with('info','Success');
        }elseif($taboption==3){                                      
            $this->updateHowItWorkContent($data,$languageculture,$request);
            return redirect('/frontendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=3')->with('info','Success');
        }elseif($taboption==4){                                      
            $this->updateRewardsAndSweepContent($data,$languageculture,$request);
            return redirect('/frontendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=4')->with('info','Success');
        }elseif($taboption==5){                                      
            $this->updateMobileAppContent($data,$languageculture,$request);
            return redirect('/frontendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=5')->with('info','Success');
        }elseif($taboption==6){                                      
            $this->updateContactUsContent($data,$languageculture,$request);
            return redirect('/frontendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=6')->with('info','Success');
        }elseif($taboption==8){                                      
            $this->updateEmaillist($data,$languageculture,$request);
            return redirect('/frontendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=8')->with('info','Success');
        }elseif($taboption==9){                                      
            $this->updateFAQ($data,$languageculture,$request);
            return redirect('/frontendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=9')->with('info','Success');
        }elseif($taboption==10){                                      
            $this->updatePrivacyPolicy($data,$languageculture,$request);
            return redirect('/frontendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=10')->with('info','Success');
        }elseif($taboption==11){                                      
            $this->updateTermsAndCondition($data,$languageculture,$request);
            return redirect('/frontendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=11')->with('info','Success');
        }        
  }  


  public function updateHomeContent($dataarr, $languageculture,$request){
    $countrylanguage=$dataarr['countrylanguage'];
    $validatearr=[];
    if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
      
       if(isset($_POST['hometextsec'])){             
       $validatearr['hometextsec'] = 'required';} 

       if(isset($_POST['signupsec'])){             
       $validatearr['signupsec'] = 'required';} 

       if(isset($_POST['loginsec'])){             
       $validatearr['loginsec'] = 'required';} 

       if(isset($_POST['homebannertextsec'])){             
        $validatearr['homebannertextsec'] = 'required';} 
     }
    
      $validatearr['homebannertext'] = 'required';  
      $validator=Validator::make($request->all(),$validatearr)->validate();
      $homepagecms=HomePageCms::where('languageculture','LIKE',$languageculture); 
      $dataupdate['hometext']="Home";
      $dataupdate['signup']="Sign Up";
      $dataupdate['login']="Login";      
      if(isset($request->hometextsec))
      $dataupdate['hometextsec']=$request->hometextsec;
      if(isset($request->signupsec))
      $dataupdate['signupsec']=$request->signupsec;
      if(isset($request->loginsec))
      $dataupdate['loginsec']=$request->loginsec;
      $dataupdate['homebannertext']=htmlentities($request->homebannertext);
      if(isset($request->homebannertextsec))
      $dataupdate['homebannertextsec']=htmlentities($request->homebannertextsec);
      $homepagecms->update($dataupdate);
     
   }


   public function updateAboutUsContent($dataarr, $languageculture,$request){
    $countrylanguage=$dataarr['countrylanguage'];
    $validatearr=[];
    if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
      
       if(isset($_POST['aboutussec'])){             
       $validatearr['aboutussec'] = 'required';} 

       if(isset($_POST['aboutussubheadersec'])){             
       $validatearr['aboutussubheadersec'] = 'required';} 

       if(isset($_POST['aboutusparagraphsec1'])){             
       $validatearr['aboutusparagraphsec1'] = 'required';} 

         if(isset($_POST['aboutusparagraphsec2'])){             
       $validatearr['aboutusparagraphsec2'] = 'required';} 
    }
     

     $validatearr['aboutussubheader'] = 'required'; 
     $validatearr['aboutusparagraph1'] = 'required'; 
     $validatearr['aboutusparagraph2'] = 'required'; 
      

     
      $validator=Validator::make($request->all(),$validatearr)->validate();
   
      $dataupdate=[];
      $homepagecms=HomePageCms::where('languageculture','LIKE',$languageculture); 
      $dataupdate['aboutus']="About Us";
      if(isset($request->aboutussec))
      $dataupdate['aboutussec']=$request->aboutussec;
      $dataupdate['aboutussubheader']=htmlentities($request->aboutussubheader);
      $dataupdate['aboutusparagraph1']=htmlentities($request->aboutusparagraph1);
      $dataupdate['aboutusparagraph2']=htmlentities($request->aboutusparagraph2);
      if(isset($request->aboutussubheadersec))
      $dataupdate['aboutussubheadersec']=htmlentities($request->aboutussubheadersec);
      if(isset($request->aboutusparagraphsec1))
      $dataupdate['aboutusparagraphsec1']=htmlentities($request->aboutusparagraphsec1);
      if(isset($request->aboutusparagraphsec2))
      $dataupdate['aboutusparagraphsec2']=htmlentities($request->aboutusparagraphsec2);
      $homepagecms->update($dataupdate);       
   }

   public function updateHowItWorkContent($dataarr, $languageculture,$request){
    $countrylanguage=$dataarr['countrylanguage'];
    $validatearr=[];
    if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
      
       if(isset($_POST['howitworkssec'])){             
       $validatearr['howitworkssec'] = 'required';} 

       if(isset($_POST['howitworkssubheadersec'])){             
       $validatearr['howitworkssubheadersec'] = 'required';} 

       if(isset($_POST['howitworkssubheadersec1'])){             
       $validatearr['howitworkssubheadersec1'] = 'required';} 

      if(isset($_POST['howitworkssubheadersec2'])){             
       $validatearr['howitworkssubheadersec2'] = 'required';} 
       

       if(isset($_POST['howitworkssubheadersec3'])){             
         $validatearr['howitworkssubheadersec3'] = 'required';} 
      
       if(isset($_POST['signupsec'])){             
            $validatearr['signupsec'] = 'required';} 

        if(isset($_POST['takesurveyssec'])){             
                $validatearr['takesurveyssec'] = 'required';} 

        if(isset($_POST['earnrewardsec'])){             
                    $validatearr['earnrewardsec'] = 'required';} 
      }
     
     

     
    
     
     
     $validatearr['howitworkssubheader'] = 'required'; 
     $validatearr['howitworkssubheader1'] = 'required'; 
     $validatearr['howitworkssubheader2'] = 'required'; 
     $validatearr['howitworkssubheader3'] = 'required'; 
      

     
      $validator=Validator::make($request->all(),$validatearr)->validate();
   
    
      $dataupdate=[];
      $homepagecms=HomePageCms::where('languageculture','LIKE',$languageculture); 
      $dataupdate['howitworks']="How it Works";
      $dataupdate['signup']="Sign Up";
      $dataupdate['takesurveys']="Take Surveys";
      $dataupdate['earnreward']="Earn Rewards";

      if(isset($request->signupsec))
      $dataupdate['signupsec']=$request->signupsec;

      if(isset($request->takesurveyssec))
      $dataupdate['takesurveyssec']=$request->takesurveyssec;

      if(isset($request->earnrewardsec))
      $dataupdate['earnrewardsec']=$request->earnrewardsec;
    
  
      $dataupdate['howitworkssubheader']=htmlentities($request->howitworkssubheader);
      $dataupdate['howitworkssubheader1']=htmlentities($request->howitworkssubheader1);
      $dataupdate['howitworkssubheader2']=htmlentities($request->howitworkssubheader2);
      $dataupdate['howitworkssubheader3']=htmlentities($request->howitworkssubheader3);
      
      if(isset($request->howitworkssec))
      $dataupdate['howitworkssec']=$request->howitworkssec;

      if(isset($request->howitworkssubheadersec))
      $dataupdate['howitworkssubheadersec']=htmlentities($request->howitworkssubheadersec);
     
      if(isset($request->howitworkssubheadersec1))
      $dataupdate['howitworkssubheadersec1']=htmlentities($request->howitworkssubheadersec1);
     
      if(isset($request->howitworkssubheadersec2))
      $dataupdate['howitworkssubheadersec2']=htmlentities($request->howitworkssubheadersec2);

      if(isset($request->howitworkssubheadersec3))
      $dataupdate['howitworkssubheadersec3']=htmlentities($request->howitworkssubheadersec3);
       $homepagecms->update($dataupdate);    
   }


   public function updateRewardsAndSweepContent($dataarr, $languageculture,$request){
    $countrylanguage=$dataarr['countrylanguage'];
    $validatearr=[];
    if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
      
       if(isset($_POST['rewardsandsweepsec'])){             
       $validatearr['rewardsandsweepsec'] = 'required';} 

    

       if(isset($_POST['rewardsandsweepparagraphsec'])){             
        $validatearr['rewardsandsweepparagraphsec'] = 'required';} 
     }
    
      $validatearr['rewardsandsweepparagraph'] = 'required';  
      $validator=Validator::make($request->all(),$validatearr)->validate();
      $homepagecms=HomePageCms::where('languageculture','LIKE',$languageculture); 
      $dataupdate['rewardsandsweep']="Rewards / Sweepstakes";
        
      if(isset($request->rewardsandsweepsec))
      $dataupdate['rewardsandsweepsec']=$request->rewardsandsweepsec;
     
      $dataupdate['rewardsandsweepparagraph']=htmlentities($request->rewardsandsweepparagraph);
      if(isset($request->rewardsandsweepparagraphsec))
      $dataupdate['rewardsandsweepparagraphsec']=htmlentities($request->rewardsandsweepparagraphsec);
      $homepagecms->update($dataupdate);
     
   }


   public function updateMobileAppContent($dataarr, $languageculture,$request){
    $countrylanguage=$dataarr['countrylanguage'];
    $validatearr=[];
    if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
      
       if(isset($_POST['mobileappsec'])){             
       $validatearr['mobileappsec'] = 'required';} 

       if(isset($_POST['mobileappsubheadersec'])){             
        $validatearr['mobileappsubheadersec'] = 'required';} 

       if(isset($_POST['mobileappparagraphsec'])){             
        $validatearr['mobileappparagraphsec'] = 'required';} 
     }
    
      $validatearr['mobileappsubheader'] = 'required';  
      $validatearr['mobileappparagraph'] = 'required';  
      $validator=Validator::make($request->all(),$validatearr)->validate();
      $homepagecms=HomePageCms::where('languageculture','LIKE',$languageculture); 
      $dataupdate['mobileapp']="Mobile App";
        
      if(isset($request->mobileappsec))
      $dataupdate['mobileappsec']=$request->mobileappsec;
     
      $dataupdate['mobileappsubheader']=htmlentities($request->mobileappsubheader);
      $dataupdate['mobileappparagraph']=htmlentities($request->mobileappparagraph);
      if(isset($request->mobileappsubheadersec))
      $dataupdate['mobileappsubheadersec']=htmlentities($request->mobileappsubheadersec);
      if(isset($request->mobileappparagraphsec))
      $dataupdate['mobileappparagraphsec']=htmlentities($request->mobileappparagraphsec);
      $homepagecms->update($dataupdate);
     
   }
   

   public function updateContactUsContent($dataarr, $languageculture,$request){
    $countrylanguage=$dataarr['countrylanguage'];
    $validatearr=[];
    if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1){  
      
       if(isset($_POST['contactsec'])){             
               $validatearr['contactsec'] = 'required';}
               
               if(isset($_POST['contactbusinessenquirysec'])){             
                $validatearr['contactbusinessenquirysec'] = 'required';}   

              if(isset($_POST['contactwriteussec'])){             
               $validatearr['contactwriteussec'] = 'required';}   

                if(isset($_POST['contactgeneralenquirysec'])){             
                $validatearr['contactgeneralenquirysec'] = 'required';} 

               if(isset($_POST['contactaddresssec'])){             
                $validatearr['contactaddresssec'] = 'required';} 

               if(isset($_POST['contacttelandfaxsec'])){             
                $validatearr['contacttelandfaxsec'] = 'required';} 

       }

       $validatearr['contactaddress'] = 'required';  
       $validatearr['contacttelandfax'] = 'required';  
     

      $validator=Validator::make($request->all(),$validatearr)->validate();
      $homepagecms=HomePageCms::where('languageculture','LIKE',$languageculture); 
      $dataupdate['contact']="Contact Us";
      $dataupdate['contactwriteus']="You can also write to us at";
      $dataupdate['contactbusinessenquiry']="For business enquiries please visit"; 
      $dataupdate['contactgeneralenquiry']="For general queries or feedback, please write to";
        
      if(isset($request->contactsec))
      $dataupdate['contactsec']=$request->contactsec;

      if(isset($request->contactbusinessenquirysec))
      $dataupdate['contactbusinessenquirysec']=$request->contactbusinessenquirysec;

      if(isset($request->contactwriteussec))
      $dataupdate['contactwriteussec']=$request->contactwriteussec;

     
      if(isset($request->contactgeneralenquirysec))
      $dataupdate['contactgeneralenquirysec']=htmlentities($request->contactgeneralenquirysec);

     
      $dataupdate['contactaddress']=htmlentities($request->contactaddress);
      if(isset($request->contactaddresssec))
      $dataupdate['contactaddresssec']=htmlentities($request->contactaddresssec);


      $dataupdate['contacttelandfax']=htmlentities($request->contacttelandfax);
      if(isset($request->contacttelandfaxsec))
      $dataupdate['contacttelandfaxsec']=htmlentities($request->contacttelandfaxsec);

      $homepagecms->update($dataupdate);
     
   }

   public function updateSocialLink($languageculture=null, Request $request){

    if(!isset($_GET['taboption'])){
        return redirect('country-lang-list')->with('warning','Invalid Access!'); 
        }elseif($_GET['taboption']!='7'){
        return redirect('country-lang-list')->with('warning','Invalid Access!');   
        }

        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
       
        $data['sociallink']=Sociallink::where('languageculture' ,'LIKE',$languageculture)->first();
        if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }


        if(empty($data['sociallink'])){
            return redirect('/frontendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=7');
        }
     
         $validatearr=[];
   
          if(isset($_POST['facebooklink'])&&!empty($_POST['facebooklink'])){             
           $validatearr['facebooklink'] = 'url';}  


          if(isset($_POST['twitterlink'])&&!empty($_POST['twitterlink'])){             
           $validatearr['twitterlink'] = 'url';}         


          if(isset($_POST['instagramlink'])&&!empty($_POST['instagramlink'])){             
           $validatearr['instagramlink'] = 'url';} 


          if(isset($_POST['googlepluslink'])&&!empty($_POST['googlepluslink'])){             
           $validatearr['googlepluslink'] = 'url';} 


          if(isset($_POST['weibolink'])&&!empty($_POST['weibolink'])){             
           $validatearr['weibolink'] = 'url';}         


        if(isset($_POST['pinterestlink'])&&!empty($_POST['pinterestlink'])){             
           $validatearr['pinterestlink'] = 'url';}         


          if(isset($_POST['linkedinlink'])&&!empty($_POST['linkedinlink'])){             
           $validatearr['linkedinlink'] = 'url';}         

         $validator=Validator::make($request->all(),$validatearr)->validate();
         $dataupdate=[];
         $sociallink=Sociallink::where('languageculture','LIKE',$languageculture); 
         
          if(isset($_POST['facebooklink'])&&!empty($_POST['facebooklink'])){             
            $dataupdate['facebooklink']=$request->facebooklink;}  


            if(isset($_POST['twitterlink'])&&!empty($_POST['twitterlink'])){             
           $dataupdate['twitterlink']=$request->twitterlink;}         


            if(isset($_POST['instagramlink'])&&!empty($_POST['instagramlink'])){             
           $dataupdate['instagramlink']=$request->instagramlink;} 


            if(isset($_POST['googlepluslink'])&&!empty($_POST['googlepluslink'])){             
            $dataupdate['googlepluslink']=$request->googlepluslink;} 


            if(isset($_POST['weibolink'])&&!empty($_POST['weibolink'])){             
           $dataupdate['weibolink']=$request->weibolink;}         


            if(isset($_POST['pinterestlink'])&&!empty($_POST['pinterestlink'])){             
            $dataupdate['pinterestlink']=$request->pinterestlink;}         


            if(isset($_POST['linkedinlink'])&&!empty($_POST['linkedinlink'])){             
            $dataupdate['linkedinlink']=$request->linkedinlink;}  
            if(!empty($dataupdate)){
           $sociallink->update($dataupdate);}
           return redirect('/frontendcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=7')->with('info','Success'); 
     
   }

   public function updateEmaillist($dataarr, $languageculture,$request){
    $validatearr=[];
    $validatearr['enquiryemail'] = 'required';  
    $validator=Validator::make($request->all(),$validatearr)->validate();
    $homepagecms=HomePageCms::where('languageculture','LIKE',$languageculture); 
    $dataupdate['enquiryemail']=$request->enquiryemail;
    $homepagecms->update($dataupdate);
 }


 public function updateFAQ($dataarr, $languageculture,$request){
    $validatearr=[];
    $validatearr['faqsec'] = 'required';  
    $validatearr['faqparagraph'] = 'required';  
    $validatearr['faqparagraphsec'] = 'required';  
    $validator=Validator::make($request->all(),$validatearr)->validate();
    $homepagecms=HomePageCms::where('languageculture','LIKE',$languageculture); 
    $dataupdate['faq']='FAQ';
    $dataupdate['faqsec']=$request->faqsec;
    $dataupdate['faqparagraph']=htmlentities($request->faqparagraph);
    $dataupdate['faqparagraphsec']=htmlentities($request->faqparagraphsec);   
    $homepagecms->update($dataupdate);
 }


 public function updatePrivacyPolicy($dataarr, $languageculture,$request){
    
    $validatearr=[];
    $validatearr['privacyandpolicysec'] = 'required';  
    $validatearr['privacyandpolicyparagraph'] = 'required';  
    $validatearr['privacyandpolicyparagraphsec'] = 'required';  
    $validator=Validator::make($request->all(),$validatearr)->validate();
    $homepagecms=HomePageCms::where('languageculture','LIKE',$languageculture); 
    $dataupdate['privacyandpolicy']='Privacy Policy';
    $dataupdate['privacyandpolicysec']=$request->privacyandpolicysec;
    $dataupdate['privacyandpolicyparagraph']=htmlentities($request->privacyandpolicyparagraph);
    $dataupdate['privacyandpolicyparagraphsec']=htmlentities($request->privacyandpolicyparagraphsec);  
    $homepagecms->update($dataupdate);
 }


 public function updateTermsAndCondition($dataarr, $languageculture,$request){
    $validatearr=[];
    $validatearr['termandconditionsec'] = 'required';  
    $validatearr['termandconditionparagraph'] = 'required';  
    $validatearr['termandconditionparagraphsec'] = 'required';  
    $validator=Validator::make($request->all(),$validatearr)->validate();
    $homepagecms=HomePageCms::where('languageculture','LIKE',$languageculture); 
    $dataupdate['termandcondition']='Terms And Condition';
    $dataupdate['termandconditionsec']=$request->termandconditionsec;
    $dataupdate['termandconditionparagraph']=htmlentities($request->termandconditionparagraph);
    $dataupdate['termandconditionparagraphsec']=htmlentities($request->termandconditionparagraphsec);   
    $homepagecms->update($dataupdate);
 }


    /*
    |-------------------------------------------------------------
    | UPDATE FRONT END CONTENT END
    |-------------------------------------------------------------
    */
}
