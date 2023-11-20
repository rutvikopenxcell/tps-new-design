<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
use Illuminate\Http\Request;
use App\MadMimiMail\MadMimi;

Route::get('/changepassword', 'HomeController@changePassword');
Route::put('/password_update/{id}', 'HomeController@passwordUpdate');
Route::get('/newuser', 'HomeController@newuser');
Route::post('/newuserregister', 'HomeController@newuserregister');
 






Auth::routes([
  'register' => false,  
  'reset' => false,  
  'verify' => false, 
   
]);




/*
|----------------------------------------------------
| MARKET & COUNTRY LIST START
|----------------------------------------------------
 */
Route::get('/', 'MarketDetailsController@getCountryLanguageList');
Route::get('/home', 'MarketDetailsController@getCountryLanguageList')->name('home');
Route::get('/country-list', 'MarketDetailsController@getCountryList');
Route::get('/language-list', 'MarketDetailsController@getLanguageList');
Route::get('/country-lang-list', 'MarketDetailsController@getCountryLanguageList');
Route::get('/create-country-lang-list', 'MarketDetailsController@createCountryLang');
Route::post('/create-country-lang-list', 'MarketDetailsController@storeCountryLang');
// Route::get('/update-dualoption/{id}/{option}', 'MarketDetailsController@updateCountryLangDualOption');
Route::get('/frontendcms', 'HomePageCmsController@getFrontEndCmsInvalid');
Route::get('/frontendcms/{languageculture}', 'HomePageCmsController@getFrontEndCms');
Route::post('/storefrontendcms/{languageculture}', 'HomePageCmsController@storeFrontEndCms');
Route::put('/updatefrontendcms/{languageculture}', 'HomePageCmsController@updateFrontEndCms');

Route::post('/storesociallink/{languageculture}', 'HomePageCmsController@storeSocialLink');

Route::put('/updatesociallink/{languageculture}', 'HomePageCmsController@updateSocialLink');



/*Home CMS*/

Route::get('/frontendhomecms/{languageculture}', 'HomeCmsController@getFrontEndCms');
Route::post('/storehomefrontendcms/{languageculture}', 'HomeCmsController@storeFrontEndCms');
Route::put('/updatehomefrontendcms/{languageculture}', 'HomeCmsController@updateFrontEndCms');

/*Home CMS*/


/*About Us CMS*/

Route::get('/frontendaboutuscms/{languageculture}', 'AboutUsCmsController@getFrontEndCms');
Route::post('/storeaboutusfrontendcms/{languageculture}', 'AboutUsCmsController@storeFrontEndCms');
Route::put('/updateaboutusfrontendcms/{languageculture}', 'AboutUsCmsController@updateFrontEndCms');

/*About Us CMS*/



/*Privacy Policy CMS*/

Route::get('/frontendprivacypolicycms/{languageculture}', 'PrivacyPolicyCmsController@getFrontEndCms');
Route::post('/storeprivacypolicyfrontendcms/{languageculture}', 'PrivacyPolicyCmsController@storeFrontEndCms');
Route::put('/updateprivacypolicyfrontendcms/{languageculture}', 'PrivacyPolicyCmsController@updateFrontEndCms');

/*Privacy Policy CMS*/



/*Terms And Condition CMS*/

Route::get('/frontendtermsandconditioncms/{languageculture}', 'TermsAndConditionCmsController@getFrontEndCms');
Route::post('/storetermsandconditionfrontendcms/{languageculture}', 'TermsAndConditionCmsController@storeFrontEndCms');
Route::put('/updatetermsandconditionfrontendcms/{languageculture}', 'TermsAndConditionCmsController@updateFrontEndCms');

/*Terms And Condition CMS*/

/* 
|---------------------------------------------------------------
|                Cookie policy  By Vinay 
|---------------------------------------------------------------
*/

Route::get('/frontendcookiepolicycms/{languageculture}', 'CookiePolicyController@getFrontEndCms');
Route::post('/storecookiepolicyfrontendcms/{languageculture}', 'CookiePolicyController@storeFrontEndCms');
Route::put('/updatecookiepolicyfrontendcms/{languageculture}', 'CookiePolicyController@updateFrontEndCms');


/**
 * ------------------------------------
 *  END COOKIE POLICY
 * ------------------------------------
 */

/*FAQ CMS*/

Route::get('/frontendfaqcms/{languageculture}', 'FaqCmsController@getFrontEndCms');
Route::post('/storefaqfrontendcms/{languageculture}', 'FaqCmsController@storeFrontEndCms');
Route::get('/editfaqfrontendcms/{languageculture}/{id}', 'FaqCmsController@editFrontEndCms');
Route::put('/updatefaqfrontendcms/{languageculture}/{id}', 'FaqCmsController@updateFrontEndCms');

/*FAQ CMS*/



/*How It Work CMS*/

Route::get('/frontendhowitworkcms/{languageculture}', 'HowItWorkCmsController@getFrontEndCms');
Route::post('/storehowitworkfrontendcms/{languageculture}', 'HowItWorkCmsController@storeFrontEndCms');
Route::put('/updatehowitworkfrontendcms/{languageculture}', 'HowItWorkCmsController@updateFrontEndCms');

/*How It Work CMS*/


/*Why Us CMS*/

Route::get('/frontendwhyuscms/{languageculture}', 'WhyUsCmsController@getFrontEndCms');
Route::post('/storewhyusfrontendcms/{languageculture}', 'WhyUsCmsController@storeFrontEndCms');
Route::put('/updatewhyusfrontendcms/{languageculture}', 'WhyUsCmsController@updateFrontEndCms');

/*Why Us CMS*/


/*Why Us CMS*/

Route::get('/frontendsocialcms/{languageculture}', 'SocialCmsController@getFrontEndCms');
Route::post('/storesocialfrontendcms/{languageculture}', 'SocialCmsController@storeFrontEndCms');
Route::put('/updatesocialfrontendcms/{languageculture}', 'SocialCmsController@updateFrontEndCms');

/*Why Us CMS*/


 



/*Contact Us CMS*/

Route::get('/frontendcontactuscms/{languageculture}', 'ContactUsCmsController@getFrontEndCms');
Route::post('/storecontactusfrontendcms/{languageculture}', 'ContactUsCmsController@storeFrontEndCms');
Route::put('/updatecontactusfrontendcms/{languageculture}', 'ContactUsCmsController@updateFrontEndCms');

/*Contact Us CMS*/



/*Partner With Us CMS*/

Route::get('/frontendpartnerwithuscms/{languageculture}', 'PartnerWithUsCmsController@getFrontEndCms');
Route::post('/storepartnerwithusfrontendcms/{languageculture}', 'PartnerWithUsCmsController@storeFrontEndCms');
Route::put('/updatepartnerwithusfrontendcms/{languageculture}', 'PartnerWithUsCmsController@updateFrontEndCms');

/*Partner With Us CMS*/



/*Menu List CMS*/

Route::get('/frontendmenulistcms/{languageculture}', 'MenuListCmsController@getFrontEndCms');
Route::post('/storemenulistfrontendcms/{languageculture}', 'MenuListCmsController@storeFrontEndCms');
Route::put('/updatemenulistfrontendcms/{languageculture}', 'MenuListCmsController@updateFrontEndCms');

/*Menu List  CMS*/



/*Mobile App CMS*/

Route::get('/frontendmobileappcms/{languageculture}', 'MobileAppCmsController@getFrontEndCms');
Route::post('/storemobileappfrontendcms/{languageculture}', 'MobileAppCmsController@storeFrontEndCms');
Route::put('/updatemobileappfrontendcms/{languageculture}', 'MobileAppCmsController@updateFrontEndCms');

/*Mobile App  CMS*/



/*Testimonial CMS*/

Route::get('/testimonial', 'TestimonialCmsController@getTestimonial');
Route::post('/storetestimonial', 'TestimonialCmsController@storeTestimonial');
Route::get('/edittestimonial/{id}', 'TestimonialCmsController@editTestimonial');
Route::put('/updatetestimonial/{id}', 'TestimonialCmsController@updateTestimonial');
Route::get('/managetestimonial/{id}/{option}', 'TestimonialCmsController@manageTestimonialStatus');

/*Testimonial CMS*/

/*Testimonial Translation CMS*/

Route::get('/addtestimonialtranslation/{id}', 'TestimoniaTranslationCmsController@addTestimonialTranslation');

Route::post('/storetestimonialtranslation/{id}', 'TestimoniaTranslationCmsController@storeTestimonialTranslation');

Route::get('/edittestimonialtranslation/{id}/{id1}', 'TestimoniaTranslationCmsController@editTestimonialTranslation');
Route::put('/updatetestimonialtranslation/{id}/{id1}', 'TestimoniaTranslationCmsController@updateTestimonialTranslation');



/*Testimonial Translation CMS*/




/*Refer A Friend CMS*/

Route::get('/frontendreferafriendcms/{languageculture}', 'ReferAFriendCmsController@getFrontEndCms');
Route::post('/storereferafriendfrontendcms/{languageculture}', 'ReferAFriendCmsController@storeFrontEndCms');
Route::put('/updatereferafriendfrontendcms/{languageculture}', 'ReferAFriendCmsController@updateFrontEndCms');

/*Refer A Friend CMS*/


/*Meta Content CMS*/

Route::get('/frontendmetacontentcms/{languageculture}', 'MetaContentCmsController@getFrontEndCms');
Route::post('/storemetacontentfrontendcms/{languageculture}', 'MetaContentCmsController@storeFrontEndCms');
Route::put('/updatemetacontentfrontendcms/{languageculture}', 'MetaContentCmsController@updateFrontEndCms');

/*Meta Content CMS*/



/*Page Title CMS*/

Route::get('/frontendpagetitlecms/{languageculture}', 'PageTitleCmsController@getFrontEndCms');
Route::post('/storepagetitlefrontendcms/{languageculture}', 'PageTitleCmsController@storeFrontEndCms');
Route::put('/updatepagetitlefrontendcms/{languageculture}', 'PageTitleCmsController@updateFrontEndCms');

/*Page Title CMS*/



/*ReferralCode CMS*/

Route::get('/referralcode', 'ReferralCodeCmsController@getReferralCode');
Route::post('/storereferralcode', 'ReferralCodeCmsController@storeReferralCode');
Route::get('/editreferralcode/{id}', 'ReferralCodeCmsController@editReferralCode');
Route::put('/updatereferralcode/{id}', 'ReferralCodeCmsController@updateReferralCode');
Route::get('/managereferralcode/{id}/{option}', 'ReferralCodeCmsController@manageReferralCodeStatus');

/*ReferralCode CMS*/

/*ReferralCode Translation CMS*/
 
Route::get('/addreferralcodetranslation/{id}', 'ReferralCodeTranslationCmsController@addReferralCodeTranslation');

Route::post('/storereferralcodetranslation/{id}', 'ReferralCodeTranslationCmsController@storeReferralCodeTranslation');

Route::get('/editreferralcodetranslation/{id}/{id1}', 'ReferralCodeTranslationCmsController@editReferralCodeTranslation');
Route::put('/updatereferralcodetranslation/{id}/{id1}', 'ReferralCodeTranslationCmsController@updateReferralCodeTranslation');



/*ReferralCode Translation CMS*/


/*Footer List CMS*/

Route::get('/frontendfooterlistcms/{languageculture}', 'FooterLinkCmsController@getFrontEndCms');
Route::post('/storefooterlistfrontendcms/{languageculture}', 'FooterLinkCmsController@storeFrontEndCms');
Route::put('/updatefooterlistfrontendcms/{languageculture}', 'FooterLinkCmsController@updateFrontEndCms');

/*Footer List  CMS*/


/*
|----------------------------------------------------
| MARKET & COUNTRY LIST END
|----------------------------------------------------
 */




 //tps new page
 Route::get('/tpspage', 'TpsPageController@index');
 Route::get('/tpspage/section', 'TpsPageController@home');
 Route::post('/tpspage/update', 'TpsPageController@update');
 Route::get('/tpspageview', 'TpsPageController@view');
 Route::get('/tpsection', 'TpsPageController@edit')->name('section.edit');
 Route::post('/tpsection/store', 'TpsPageController@sectionUpdate')->name('section.post');

