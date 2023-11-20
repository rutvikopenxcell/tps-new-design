<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CookiePolicyCms;
use App\Models\CountryLanguage;
use App\Models\Sociallink;
use App\Http\Requests\FrontEndRequest;
use Validator;

class CookiePolicyController extends Controller
{
    public  $numarr = [];
    public function __construct()
    {
        $this->middleware('auth');
        $this->numarr = ['17'];
    }

    public function getFrontEndCms($languageculture = null, Request $request)
    {

        if ($languageculture === null) {
            return redirect('country-lang-list')->with('warning', 'Invalid Access!');
        }
        $data['countrylanguage'] = CountryLanguage::where('languageculture', 'LIKE', $languageculture)->first();
        $data['content'] = CookiePolicyCms::where('languageculture', 'LIKE', $languageculture)->first();
        if (empty($data['countrylanguage'])) {
            return redirect('country-lang-list')->with('warning', 'Invalid Access!');
        }
        if (!isset($_GET['taboption'])) {
            return redirect('/frontendcookiepolicycms' . '/' . $data['countrylanguage']->languageculture . '?taboption=17');
        } else if (!in_array($_GET['taboption'], $this->numarr)) {
            return redirect('country-lang-list')->with('warning', 'Invalid Access!');
        } else {
            $data['taboption'] = $_GET['taboption'];
        }


        if (empty($data['content'])) {
            return view('frontendcms.create')->with($data);
        } else {
            return view('frontendcms.edit')->with($data);
        }
    }


    /*
    |-------------------------------------------------------------
    | STORE FRONT END CONTENT
    |-------------------------------------------------------------
     */

    public function storeFrontEndCms($languageculture = null, Request $request)
    {

        $this->numarr = ['17'];
        if (!isset($_GET['taboption'])) {
            return redirect('country-lang-list')->with('warning', 'Invalid Access!');
        } elseif (!in_array($_GET['taboption'], $this->numarr)) {
            return redirect('country-lang-list')->with('warning', 'Invalid Access!');
        }

        if ($languageculture === null) {
            return redirect('country-lang-list')->with('warning', 'Invalid Access!');
        }
        $data['countrylanguage'] = $countrylanguage = CountryLanguage::where('languageculture', 'LIKE', $languageculture)->first();
        $data['content'] = CookiePolicyCms::where('languageculture', 'LIKE', $languageculture)->first();
        $data['sociallink'] = Sociallink::where('languageculture', 'LIKE', $languageculture)->first();
        if (empty($data['countrylanguage'])) {
            return redirect('country-lang-list')->with('warning', 'Invalid Access!');
        }


        if (!empty($data['content'])) {
            return redirect('/frontendcookiepolicycms' . '/' . $data['countrylanguage']->languageculture . '?taboption=17');
        }


        $validatearr = [];
        if ($countrylanguage->languagecode != 'en' && $countrylanguage->dualoption == 1) {

            if (isset($_POST['termsandconditiontextsec'])) {
                $validatearr['termsandconditiontextsec'] = 'required';
            }
        }

        $validatearr['termsandconditiontext'] = 'required';

        $validator = Validator::make($request->all(), $validatearr)->validate();
        $CookiePolicyCms = new CookiePolicyCms;
        $CookiePolicyCms->languageculture = $languageculture;
        $CookiePolicyCms->languagecode = $countrylanguage->languagecode;
        $CookiePolicyCms->countrycode = $countrylanguage->countrycode;
        $CookiePolicyCms->termsandconditiontext = htmlentities($request->termsandconditiontext);

        if (isset($request->termsandconditiontextsec))
            $CookiePolicyCms->termsandconditiontextsec = htmlentities($request->termsandconditiontextsec);



        $CookiePolicyCms->save();
        return redirect('/frontendcookiepolicycms' . '/' . $data['countrylanguage']->languageculture . '?taboption=17');
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

    public function updateFrontEndCms($languageculture = null, Request $request)
    {
        $this->numarr = ['17'];
        if (!isset($_GET['taboption'])) {
            return redirect('country-lang-list')->with('warning', 'Invalid Access!');
        } elseif (!in_array($_GET['taboption'], $this->numarr)) {
            return redirect('country-lang-list')->with('warning', 'Invalid Access!');
        }

        if ($languageculture === null) {
            return redirect('country-lang-list')->with('warning', 'Invalid Access!');
        }
        $data['countrylanguage'] = $countrylanguage = CountryLanguage::where('languageculture', 'LIKE', $languageculture)->first();
        $data['content'] = CookiePolicyCms::where('languageculture', 'LIKE', $languageculture)->first();
        $data['sociallink'] = Sociallink::where('languageculture', 'LIKE', $languageculture)->first();
        if (empty($data['countrylanguage'])) {
            return redirect('country-lang-list')->with('warning', 'Invalid Access!');
        }
        if (empty($data['content'])) {
            return redirect('/frontendcookiepolicycms' . '/' . $data['countrylanguage']->languageculture . '?taboption=16');
        }


        $validatearr = [];
        if ($countrylanguage->languagecode != 'en' && $countrylanguage->dualoption == 1) {

            if (isset($_POST['termsandconditiontextsec'])) {
                $validatearr['termsandconditiontextsec'] = 'required';
            }
        }

        $validatearr['termsandconditiontext'] = 'required';

        $validator = Validator::make($request->all(), $validatearr)->validate();


        $CookiePolicyCms = CookiePolicyCms::where('languageculture', 'LIKE', $languageculture);
        $dataupdate['termsandconditiontext'] = htmlentities($request->termsandconditiontext);


        if (isset($request->termsandconditiontextsec))
            $dataupdate['termsandconditiontextsec'] = htmlentities($request->termsandconditiontextsec);


        $CookiePolicyCms->update($dataupdate);
        return redirect('/frontendcookiepolicycms' . '/' . $data['countrylanguage']->languageculture . '?taboption=17')->with('info', 'Success');
    }




    /*
    |-------------------------------------------------------------
    | UPDATE FRONT END CONTENT END
    |-------------------------------------------------------------
    */
}
