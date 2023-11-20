<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sociallink;
use App\Models\CountryLanguage; 
use App\Http\Requests\FrontEndRequest;
use Validator; 


class SocialCmsController extends Controller
{
    public  $numarr=[];
    public function __construct()
    {
        $this->middleware('auth');
        $this->numarr=['7'];
    }

    public function getFrontEndCms($languageculture=null, Request $request){       
        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['content']=Sociallink::where('languageculture' ,'LIKE',$languageculture)->first();
         if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }
        if(!isset($_GET['taboption'])){
        return redirect('/frontendsocialcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=7');
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
         
           $this->numarr=['7'];
          if(!isset($_GET['taboption'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!'); 
          }elseif(!in_array($_GET['taboption'], $this->numarr)){
            return redirect('country-lang-list')->with('warning','Invalid Access!');   
          }

        if($languageculture===null){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }      
        $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
        $data['content']=Sociallink::where('languageculture' ,'LIKE',$languageculture)->first();
        
        if(empty($data['countrylanguage'])){
            return redirect('country-lang-list')->with('warning','Invalid Access!');
        }

   
        if(!empty($data['content'])){
            return redirect('/frontendsocialcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=7');
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
             return redirect('/frontendsocialcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=7');
        
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
        $this->numarr=['7'];
        if(!isset($_GET['taboption'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!'); 
        }elseif(!in_array($_GET['taboption'], $this->numarr)){
          return redirect('country-lang-list')->with('warning','Invalid Access!');   
        }

      if($languageculture===null){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }      
      $data['countrylanguage']=$countrylanguage=CountryLanguage::where('languageculture' ,'LIKE',$languageculture)->first();
      $data['content']=Sociallink::where('languageculture' ,'LIKE',$languageculture)->first();
     
      if(empty($data['countrylanguage'])){
          return redirect('country-lang-list')->with('warning','Invalid Access!');
      }
      if(empty($data['content'])){
          return redirect('/frontendsocialcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=7');
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
         
                 
            $dataupdate['facebooklink']=$request->facebooklink;          
            $dataupdate['twitterlink']=$request->twitterlink;         


                      
           $dataupdate['instagramlink']=$request->instagramlink; 

                   
            $dataupdate['googlepluslink']=$request->googlepluslink; 

           
           $dataupdate['weibolink']=$request->weibolink;           
            $dataupdate['pinterestlink']=$request->pinterestlink;            
            $dataupdate['linkedinlink']=$request->linkedinlink;  
           
           $sociallink->update($dataupdate); 
           return redirect('/frontendsocialcms'.'/'. $data['countrylanguage']->languageculture.'?taboption=7')->with('info','Success');
        
  }  


   

    /*
    |-------------------------------------------------------------
    | UPDATE FRONT END CONTENT END
    |-------------------------------------------------------------
    */
}
