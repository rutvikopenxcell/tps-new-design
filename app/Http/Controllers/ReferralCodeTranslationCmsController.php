<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReferralCodeCms;
use App\Models\ReferralCodeTranslationCms;
use App\Models\Country;
use App\Models\CountryLanguage;
use App\Models\LanguageList;
use Illuminate\Support\Facades\Storage;
use Validator; 
use Auth;



class ReferralCodeTranslationCmsController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
       
    }

    /* GET   */

   public function addReferralCodeTranslation($id=NULL, Request $request){
     
      if($id==NULL){
       return redirect('/referralcode')->with('warning', 'Invalid Access...');
      }

      $data['referralcode']=ReferralCodeCms::where('id',$id)->first();
       if(empty($data['referralcode'])){
       return redirect('/referralcode')->with('warning', 'Invalid Access...');
      }

      $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languagecode','NOT LIKE','en')->select(['languagecode'])->get();

      if(empty($data['countrylanguage'][0])){
       return redirect('/referralcode')->with('warning', 'Invalid Access...');
      }

       $data['existlanguagearr']=$existlanguagearr=ReferralCodeTranslationCms::where('referralcodeid',$id)->select('languagecode')->get();

       
       $datalangarr=[];
         if(!empty($data['existlanguagearr'][0])){
         foreach($existlanguagearr as $val) {
            $datalangarr[]=$val->languagecode;
         }
       }

     
      $data['referralcodetranslation']=$referralcodetranslation=ReferralCodeTranslationCms::where('referralcodeid',$id)->get();

       $datalangarr1=[];

       foreach($countrylanguage as $val) {

        if(!in_array($val->languagecode, $datalangarr)){
          $datalangarr1[]=$val->languagecode;
         
         }
        }

          $data['languagelist']=$languagelist=LanguageList::whereIn('code',$datalangarr1)->select(['code','name'])->get();

        $data['datalangarr']=$datalangarr1;

        return view('referralcode.referralcodetranslation.create')->with($data);
   }



     /* STORE   */

        public function storeReferralCodeTranslation($id=null, Request $request){
        

             if($id===null){  
               return redirect('/referralcode')->with('warning', 'Invalid Access...');
              }

              $data['referralcode']=ReferralCodeCms::where('id',$id)->first();
               if(empty($data['referralcode'])){  
               return redirect('/referralcode')->with('warning', 'Invalid Access...');
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

              if($id!==$request->referralcodeid){
                 return redirect('/addreferralcodetranslation/'.$id)->with('warning', 'Invalid Access...');
              }


            $data['LanguageList']=$LanguageList=LanguageList::where('code',$request->languagename)->first();

              if(empty($data['LanguageList'])){
                 return redirect('/addreferralcodetranslation/'.$id)->with('warning', 'Invalid Access...');
              }

              $ReferralCodeTranslationCms=new ReferralCodeTranslationCms; 
              $ReferralCodeTranslationCms->languagename=$LanguageList->name;
              $ReferralCodeTranslationCms->languagecode=$LanguageList->code;
              $ReferralCodeTranslationCms->referralcodeid=$request->referralcodeid;             
              $ReferralCodeTranslationCms->otpsent=htmlentities($request->otpsent);
              $ReferralCodeTranslationCms->referracodeoptional=htmlentities($request->referracodeoptional);
              $ReferralCodeTranslationCms->enterreferralcode=htmlentities($request->enterreferralcode);
              $ReferralCodeTranslationCms->mobileverified=htmlentities($request->mobileverified);
              $ReferralCodeTranslationCms->referralcode=htmlentities($request->referralcode);
              $ReferralCodeTranslationCms->applyoptional=htmlentities($request->applyoptional);
              $ReferralCodeTranslationCms->referralcodeexpired=htmlentities($request->referralcodeexpired);
              $ReferralCodeTranslationCms->referralcodeapplied=htmlentities($request->referralcodeapplied);
              $ReferralCodeTranslationCms->referralcodeinvalid=htmlentities($request->referralcodeinvalid);
              $ReferralCodeTranslationCms->notreceived=htmlentities($request->notreceived);
              $ReferralCodeTranslationCms->resendotp=htmlentities($request->resendotp);
              $ReferralCodeTranslationCms->verify=htmlentities($request->verify);
              $ReferralCodeTranslationCms->save();
              
             
               return redirect('/addreferralcodetranslation/'.$id)->with('success', 'Success...');
        }




       /* EDIT   */

       public function editReferralCodeTranslation($id=null, $id1=null, Request $request){


      if($id===null||$id1===null){
       return redirect('/referralcode')->with('warning', 'Invalid Access...');
      }

      $data['referralcode']=ReferralCodeCms::where('id',$id)->first();
       if(empty($data['referralcode'])){
       return redirect('/referralcode')->with('warning', 'Invalid Access...');
      }

       $data['referralcodetranslation']=ReferralCodeTranslationCms::where('id',$id1)->where('referralcodeid',$id)->first();

        if(empty($data['referralcodetranslation'])){
           return redirect('/addreferralcodetranslation/'.$id)->with('warning', 'Invalid Access...');
        }
   
            return view('referralcode.referralcodetranslation.edit')->with($data);

    
      }



     /* UPDATE  */

       public function updateReferralCodeTranslation($id=null, $id1=null, Request $request){

             if($id===null||$id1===null){
               return redirect('/referralcode')->with('warning', 'Invalid Access...');
              }

              $data['referralcode']=ReferralCodeCms::where('id',$id)->first();
               if(empty($data['referralcode'])){
               return redirect('/referralcode')->with('warning', 'Invalid Access...');
              }

               $data['referralcodetranslation']=ReferralCodeTranslationCms::where('id',$id1)->where('referralcodeid',$id)->first();

                if(empty($data['referralcodetranslation'])){
                   return redirect('/addreferralcodetranslation/'.$id)->with('warning', 'Invalid Access...');
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

           
               $ReferralCodeTranslationCms=ReferralCodeTranslationCms::where('id',$id1)->where('referralcodeid',$id); 
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
   
              $ReferralCodeTranslationCms->update($dataupdate);
 
             return redirect('/addreferralcodetranslation/'.$id)->with('success', 'Success...');

    
      }

}
