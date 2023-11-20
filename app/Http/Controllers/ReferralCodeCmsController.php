<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReferralCodeCms;
use App\Models\Country;
use App\Models\CountryLanguage;
use App\Models\LanguageList;
use Illuminate\Support\Facades\Storage;
use Validator; 
use Auth;



class ReferralCodeCmsController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
       
    }

    public function getReferralCode(Request $request){       
      
        $data['content']=ReferralCodeCms::where('languagecode','en')->first();
         
        return view('referralcode.create')->with($data);       
    } 

   
    /*
    |-------------------------------------------------------------
    | STORE FRONT END CONTENT
    |-------------------------------------------------------------
     */

    public function storeReferralCode(Request $request){
       
          
            $validatearr=[];
            
              $validatearr['otpsent'] = 'required';
              $validatearr['referracodeoptional'] = 'required';
              $validatearr['enterreferralcode'] = 'required';
              $validatearr['mobileverified'] = 'required';
              $validatearr['referralcode'] = 'required';
              $validatearr['applyoptional'] = 'required';
              $validatearr['referralcodeexpired'] = 'required';
              $validatearr['referralcodeapplied'] = 'required';
              $validatearr['referralcodeinvalid'] = 'required';
              $validatearr['notreceived'] = 'required';
              $validatearr['resendotp'] = 'required';
              $validatearr['verify'] = 'required'; 
           
             $validator=Validator::make($request->all(),$validatearr)->validate();

            

              $ReferralCodeCms=new ReferralCodeCms; 
              $ReferralCodeCms->languagename='English';
              $ReferralCodeCms->languagecode='en';
             
              $ReferralCodeCms->otpsent=htmlentities($request->otpsent);
              $ReferralCodeCms->referracodeoptional=htmlentities($request->referracodeoptional);
              $ReferralCodeCms->enterreferralcode=htmlentities($request->enterreferralcode);
              $ReferralCodeCms->mobileverified=htmlentities($request->mobileverified);
              $ReferralCodeCms->referralcode=htmlentities($request->referralcode);
              $ReferralCodeCms->applyoptional=htmlentities($request->applyoptional);
              $ReferralCodeCms->referralcodeexpired=htmlentities($request->referralcodeexpired);
              $ReferralCodeCms->referralcodeapplied=htmlentities($request->referralcodeapplied);
              $ReferralCodeCms->referralcodeinvalid=htmlentities($request->referralcodeinvalid);
              $ReferralCodeCms->notreceived=htmlentities($request->notreceived);
              $ReferralCodeCms->resendotp=htmlentities($request->resendotp);
              $ReferralCodeCms->verify=htmlentities($request->verify);
              $ReferralCodeCms->save();
              
             
             return redirect('/referralcode');
        
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



     public function editReferralCode($id=null, Request $request){ 

       

         if($id===null){
            return redirect('/referralcode')->with('warning','Invalid Access!');
        }     
        

         $data['content']=ReferralCodeCms::where('id', $id)->first();

         if(empty($data['content'])){
              return redirect('/referralcode')->with('warning','Invalid Access!');
         }

        return view('referralcode.edit')->with($data);       
    } 


     public function updateReferralCode($id, Request $request){
       
      if($id===null){
            return redirect('/referralcode')->with('warning','Invalid Access!');
      } 

      $data['content']=ReferralCodeCms::where('id', $id)->first();
     
   
      if(empty($data['content'])){
          return redirect('/referralcode')->with('warning','Invalid Access!');
      }
      
    
       $validatearr=[];
   
        $validatearr['otpsent'] = 'required';
        $validatearr['referracodeoptional'] = 'required';
        $validatearr['enterreferralcode'] = 'required';
        $validatearr['mobileverified'] = 'required';
        $validatearr['referralcode'] = 'required';
        $validatearr['applyoptional'] = 'required';
        $validatearr['referralcodeexpired'] = 'required';
        $validatearr['referralcodeapplied'] = 'required';
        $validatearr['referralcodeinvalid'] = 'required';
        $validatearr['notreceived'] = 'required';
        $validatearr['resendotp'] = 'required';
        $validatearr['verify'] = 'required'; 
      
    
       $validator=Validator::make($request->all(),$validatearr)->validate(); 


      $ReferralCodeCms=ReferralCodeCms::where('id',$id); 
      $dataupdate['otpsent'] = htmlentities($request->otpsent);
      $dataupdate['referracodeoptional'] = htmlentities($request->referracodeoptional);
      $dataupdate['enterreferralcode'] = htmlentities($request->enterreferralcode);
      $dataupdate['mobileverified'] = htmlentities($request->mobileverified);
      $dataupdate['referralcode'] = htmlentities($request->referralcode);
      $dataupdate['applyoptional'] = htmlentities($request->applyoptional);
      $dataupdate['referralcodeexpired'] = htmlentities($request->referralcodeexpired);
      $dataupdate['referralcodeapplied'] = htmlentities($request->referralcodeapplied);
      $dataupdate['referralcodeinvalid'] = htmlentities($request->referralcodeinvalid);
      $dataupdate['notreceived'] = htmlentities($request->notreceived);
      $dataupdate['resendotp'] = htmlentities($request->resendotp);
      $dataupdate['verify'] = htmlentities($request->verify);
     return redirect('/referralcode')->with('info','Success');
        
  }  



  public function manageReferralCodeStatus($id = null, $option = null)
    {

        $optionarr = ['0', '1'];
        if ($id === null || $option === null) {
            return redirect('/referralcode')->with('warning', 'invalid access');
        }
        if (!in_array($option, $optionarr)) {
            return redirect('/referralcode')->with('warning', 'invalid access');
        }

        $ReferralCodeCms = ReferralCodeCms::where('id', $id);
        $data['ReferralCodeCms'] = $ReferralCodeCms->first();

        if (empty($data['ReferralCodeCms'])) {
            return redirect('/referralcode')->with('warning', 'Invalid Access...');
        }

        if ($ReferralCodeCms->update(['status' => $option])) {
            if ($option == 1) {
                $msg = "ReferralCode has been activated";
            } else {
                $msg = "ReferralCode has been deactivated";
            }
            return redirect('/referralcode')->with('success', $msg);
        } else {
            return redirect('/referralcode')->with('warning', 'Please Try After SomeTimes...');
        }
  }


 

  

    /*
    |-------------------------------------------------------------
    | UPDATE FRONT END CONTENT END
    |-------------------------------------------------------------
    */
}
