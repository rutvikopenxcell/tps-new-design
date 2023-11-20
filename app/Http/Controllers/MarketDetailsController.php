<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\CountryLanguage;
use App\Models\LanguageList;

use Illuminate\Http\Request;
use DB;
use Auth;

class MarketDetailsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getCountryList(){
        $data['countrylist']=Country::all();
        return view('market.countrylist')->with($data); 
    }

    public function getLanguageList(){
        $data['languagelist']=LanguageList::all();
        return view('market.languagelist')->with($data); 
    }

    public function getCountryLanguageList(){
        $countrylanglist=DB::table('countrylanguage')->orderBy('updated_at','ASC')->get();
        $data['countrylanglist']=$countrylanglist->toArray();
        return view('market.countrylanglist')->with($data); 
    }

    public function createCountryLang(){
        $data['countrylist']=Country::all();
        $data['languagelist']=LanguageList::all();       
        return view('market.create_countrylang')->with($data); 
    }


    public function storeCountryLang(Request $request){       
        $countrydet = Country::where('iso',$request->market)->first();
        $LanguageList = LanguageList::where('code',$request->languagecode)->first();
        if(empty($countrydet) || empty($LanguageList)){
            return redirect('/country-lang-list')->with('warning',  'Please Try After SomeTimes...'); 
        }
        $languagename=$LanguageList->name.' ('.$countrydet->name.')';
        $CountryLanguageList = CountryLanguage::where('languagename',$languagename)->first();
        if(!empty($CountryLanguageList)){
            return redirect('/country-lang-list')->with('warning',  $languagename.'    Already Exist...'); 
        }
        
        
        $countryLanguage = new CountryLanguage;
        $countryLanguage->languagecode = $request->languagecode;       
        $countryLanguage->languagename = $languagename;       
        $countryLanguage->languageculture = $LanguageList->code.'-'.$countrydet->iso;       
        $countryLanguage->countrycode = $countrydet->iso;       
        $countryLanguage->countryname = $countrydet->name;       
        $countryLanguage->dualoption = '0';       
        $countryLanguage->save();
        $insertid=$countryLanguage->id;
        if($insertid){  
             return redirect('/country-lang-list')->with('info',  $LanguageList->name.' ('.$countrydet->name.')'.' : Country Language has been created');
        }else{
            return redirect('/country-lang-list')->with('warning',  'Please Try After SomeTimes...');
        } 
    }


    public function updateCountryLangDualOption($id=null,$option=null,Request $request){
        
        $optionarr=['0','1'];
        if($id===null || $option===null){
            return redirect('/country-lang-list')->with('warning',  'invalid access');
        }
        if(!in_array($option,$optionarr)){
          return redirect('/country-lang-list')->with('warning',  'invalid access');
         }

         $countryLanguage = CountryLanguage::where('id',$id)->first();
         if(empty($countryLanguage)){
            return redirect('/country-lang-list')->with('warning',  'invalid access');
         }

         if($countryLanguage->languagecode=='en'){
            return redirect('/country-lang-list')->with('warning',  'invalid access');
         }


         $countryLanguage = CountryLanguage::findOrFail($id);
         $countryLanguage->dualoption = $option;       
         if($countryLanguage->save()){
             if($option==1){
                 $msg=$countryLanguage->languageculture." : Dual Option has been activated";
             }
             else{
                 $msg=$countryLanguage->languageculture." : Dual Option has been deactivated";
             }
            return redirect('/country-lang-list')->with('success',  $msg);
         }else{
            return redirect('/country-lang-list')->with('warning',  'Please Try After SomeTimes...'); 
         }
    }
}
