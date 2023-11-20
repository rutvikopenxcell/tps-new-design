<form class="needs-validation" method="POST" action="{{url('/updatemenulistfrontendcms'.'/'.$countrylanguage->languageculture.'?taboption=12')}}" id="answer-form" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
    @method('put')
    @csrf
              <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="hometext">Home</label>
                       <input type="text" class="form-control" name="hometext" id="hometext"  placeholder="Home" value="<?php echo html_entity_decode($content->hometext); ?>" required="" autocomplete="off">
                        @if($errors->has('hometext'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="hometextsec">Home ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="hometextsec" id="hometextsec"  placeholder="Home ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->hometextsec); ?>" required="" autocomplete="off">
                        @if($errors->has('hometextsec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>   


                <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="login">Login</label>
                       <input type="text" class="form-control" name="login" id="login"  placeholder="Login" value="<?php echo html_entity_decode($content->login); ?>" required="" autocomplete="off">
                        @if($errors->has('login'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="loginsec">Login ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="loginsec" id="loginsec"  placeholder="Login ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->loginsec); ?>" required="" autocomplete="off">
                        @if($errors->has('loginsec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>   


                <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="aboutus">About Us</label>
                       <input type="text" class="form-control" name="aboutus" id="aboutus"  placeholder="About Us" value="<?php echo html_entity_decode($content->aboutus); ?>" required="" autocomplete="off">
                        @if($errors->has('aboutus'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="aboutussec">About Us ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="aboutussec" id="aboutussec"  placeholder="About Us ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->aboutussec); ?>" required="" autocomplete="off">
                        @if($errors->has('aboutussec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>   


                <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="whyus">Why Us</label>
                       <input type="text" class="form-control" name="whyus" id="whyus"  placeholder="Why Us" value="<?php echo html_entity_decode($content->whyus); ?>" required="" autocomplete="off">
                        @if($errors->has('whyus'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="whyussec">Why Us ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="whyussec" id="whyussec"  placeholder="Why Us ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->whyussec); ?>" required="" autocomplete="off">
                        @if($errors->has('whyussec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>   


                <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="mobileapp">Download App</label>
                       <input type="text" class="form-control" name="mobileapp" id="mobileapp"  placeholder="Download App" value="<?php echo html_entity_decode($content->mobileapp); ?>" required="" autocomplete="off">
                        @if($errors->has('mobileapp'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="mobileappsec">Download App ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="mobileappsec" id="mobileappsec"  placeholder="Download App ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->mobileappsec); ?>" required="" autocomplete="off">
                        @if($errors->has('mobileappsec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>   


                <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="blog">Blog</label>
                       <input type="text" class="form-control" name="blog" id="blog"  placeholder="Blog" value="<?php echo html_entity_decode($content->blog); ?>" required="" autocomplete="off">
                        @if($errors->has('blog'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="blogsec">Blog ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="blogsec" id="blogsec"  placeholder="Blog ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->blogsec); ?>" required="" autocomplete="off">
                        @if($errors->has('blogsec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>   


                <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="howitworkssubheader">Fill surveys, share your opinion and get paid</label>
                       <input type="text" class="form-control" name="howitworkssubheader" id="howitworkssubheader"  placeholder="Fill surveys, share your opinion and get paid" value="<?php echo html_entity_decode($content->howitworkssubheader); ?>" required="" autocomplete="off">
                        @if($errors->has('howitworkssubheader'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="howitworkssubheadersec">Fill surveys, share your opinion and get paid ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="howitworkssubheadersec" id="howitworkssubheadersec"  placeholder="Fill surveys, share your opinion and get paid ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->howitworkssubheadersec); ?>" required="" autocomplete="off">
                        @if($errors->has('howitworkssubheadersec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>   


                <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="howitworks">How It Works</label>
                       <input type="text" class="form-control" name="howitworks" id="howitworks"  placeholder="How It Works" value="<?php echo html_entity_decode($content->howitworks); ?>" required="" autocomplete="off">
                        @if($errors->has('howitworks'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="howitworkssec">How It Works ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="howitworkssec" id="howitworkssec"  placeholder="How It Works ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->howitworkssec); ?>" required="" autocomplete="off">
                        @if($errors->has('howitworkssec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>  


                <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="testimonial">Happy TPS Family</label>
                       <input type="text" class="form-control" name="testimonial" id="testimonial"  placeholder="Happy TPS Family" value="<?php echo html_entity_decode($content->testimonial); ?>" required="" autocomplete="off">
                        @if($errors->has('testimonial'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="testimonialsec">Happy TPS Family ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="testimonialsec" id="testimonialsec"  placeholder="Happy TPS Family ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->testimonialsec); ?>" required="" autocomplete="off">
                        @if($errors->has('testimonialsec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div> 


                         <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="testimonialpara">Here's what our panellists have to say</label>
                       <input type="text" class="form-control" name="testimonialpara" id="testimonialpara"  placeholder="Here's what our panellists have to say" value="<?php echo html_entity_decode($content->testimonialpara); ?>" required="" autocomplete="off">
                        @if($errors->has('testimonialpara'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="testimonialparasec">Here's what our panellists have to say ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="testimonialparasec" id="testimonialparasec"  placeholder="Here's what our panellists have to say ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->testimonialparasec); ?>" required="" autocomplete="off">
                        @if($errors->has('testimonialparasec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>   


                <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="incentivepartner">GLOBAL INCENTIVE PARTNERS</label>
                       <input type="text" class="form-control" name="incentivepartner" id="incentivepartner"  placeholder="GLOBAL INCENTIVE PARTNERS" value="<?php echo html_entity_decode($content->incentivepartner); ?>" required="" autocomplete="off">
                        @if($errors->has('incentivepartner'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="incentivepartnersec">GLOBAL INCENTIVE PARTNERS ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="incentivepartnersec" id="incentivepartnersec"  placeholder="GLOBAL INCENTIVE PARTNERS ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->incentivepartnersec); ?>" required="" autocomplete="off">
                        @if($errors->has('incentivepartnersec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>   


                <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="faq">FAQ'S</label>
                       <input type="text" class="form-control" name="faq" id="faq"  placeholder="FAQ'S" value="<?php echo html_entity_decode($content->faq); ?>" required="" autocomplete="off">
                        @if($errors->has('faq'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="faqsec">FAQ'S ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="faqsec" id="faqsec"  placeholder="FAQ'S ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->faqsec); ?>" required="" autocomplete="off">
                        @if($errors->has('faqsec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>   


                <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="privacyandpolicy">PRIVACY POLICY</label>
                       <input type="text" class="form-control" name="privacyandpolicy" id="privacyandpolicy"  placeholder="PRIVACY POLICY" value="<?php echo html_entity_decode($content->privacyandpolicy); ?>" required="" autocomplete="off">
                        @if($errors->has('privacyandpolicy'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="privacyandpolicysec">PRIVACY POLICY ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="privacyandpolicysec" id="privacyandpolicysec"  placeholder="PRIVACY POLICY ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->privacyandpolicysec); ?>" required="" autocomplete="off">
                        @if($errors->has('privacyandpolicysec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>   


                 <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="termandcondition">TERMS AND CONDITIONS</label>
                       <input type="text" class="form-control" name="termandcondition" id="termandcondition"  placeholder="TERMS AND CONDITIONS" value="<?php echo html_entity_decode($content->termandcondition); ?>" required="" autocomplete="off">
                        @if($errors->has('termandcondition'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="termandconditionsec">TERMS AND CONDITIONS ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="termandconditionsec" id="termandconditionsec"  placeholder="TERMS AND CONDITIONS ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->termandconditionsec); ?>" required="" autocomplete="off">
                        @if($errors->has('termandconditionsec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>   


                <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="copyright">Copyright &copy; <?php echo date("Y"); ?> thepanelstation. All rights reserved.</label>
                       <input type="text" class="form-control" name="copyright" id="copyright"  placeholder="Copyright &copy; <?php echo date("Y"); ?> thepanelstation. All rights reserved." value="<?php echo html_entity_decode($content->copyright); ?>" required="" autocomplete="off">
                        @if($errors->has('copyright'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="copyrightsec">Copyright &copy; <?php echo date("Y"); ?> thepanelstation. All rights reserved. ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="copyrightsec" id="copyrightsec"  placeholder="Copyright &copy; <?php echo date("Y"); ?> thepanelstation. All rights reserved. ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->copyrightsec); ?>" required="" autocomplete="off">
                        @if($errors->has('copyrightsec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>   


                <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="referafriend">REFER A FRIEND</label>
                       <input type="text" class="form-control" name="referafriend" id="referafriend"  placeholder="REFER A FRIEND" value="<?php echo html_entity_decode($content->referafriend); ?>" required="" autocomplete="off">
                        @if($errors->has('referafriend'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="referafriendsec">REFER A FRIEND ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="referafriendsec" id="referafriendsec"  placeholder="REFER A FRIEND ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->referafriendsec); ?>" required="" autocomplete="off">
                        @if($errors->has('referafriendsec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>


             <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="contact">CONTACT US</label>
                       <input type="text" class="form-control" name="contact" id="contact"  placeholder="CONTACT US" value="<?php echo html_entity_decode($content->contact); ?>" required="" autocomplete="off">
                        @if($errors->has('contact'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="contactsec">CONTACT US ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="contactsec" id="contactsec"  placeholder="CONTACT US ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->contactsec); ?>" required="" autocomplete="off">
                        @if($errors->has('contactsec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>   


                <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="partnerwithus">PARTNER WITH US</label>
                       <input type="text" class="form-control" name="partnerwithus" id="partnerwithus"  placeholder="PARTNER WITH US" value="<?php echo html_entity_decode($content->partnerwithus); ?>" required="" autocomplete="off">
                        @if($errors->has('partnerwithus'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="partnerwithussec">PARTNER WITH US ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="partnerwithussec" id="partnerwithussec"  placeholder="PARTNER WITH US ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->partnerwithussec); ?>" required="" autocomplete="off">
                        @if($errors->has('partnerwithussec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>   


                <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="send">Send</label>
                       <input type="text" class="form-control" name="send" id="send"  placeholder="Send" value="<?php echo html_entity_decode($content->send); ?>" required="" autocomplete="off">
                        @if($errors->has('send'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="sendsec">Send ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="sendsec" id="sendsec"  placeholder="Send ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->sendsec); ?>" required="" autocomplete="off">
                        @if($errors->has('sendsec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>   


                <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="name">Name</label>
                       <input type="text" class="form-control" name="name" id="name"  placeholder="Name" value="<?php echo html_entity_decode($content->name); ?>" required="" autocomplete="off">
                        @if($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="namesec">Name ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="namesec" id="namesec"  placeholder="Name ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->namesec); ?>" required="" autocomplete="off">
                        @if($errors->has('namesec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>   


                 <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="email">Email</label>
                       <input type="text" class="form-control" name="email" id="email"  placeholder="Email" value="<?php echo html_entity_decode($content->email); ?>" required="" autocomplete="off">
                        @if($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="emailsec">Email ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="emailsec" id="emailsec"  placeholder="Email ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->emailsec); ?>" required="" autocomplete="off">
                        @if($errors->has('emailsec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>   


                <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="message">Message</label>
                       <input type="text" class="form-control" name="message" id="message"  placeholder="Message" value="<?php echo html_entity_decode($content->message); ?>" required="" autocomplete="off">
                        @if($errors->has('message'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="messagesec">Message ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="messagesec" id="messagesec"  placeholder="Message ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->messagesec); ?>" required="" autocomplete="off">
                        @if($errors->has('messagesec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>


            <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="getstarted">Get Started</label>
                       <input type="text" class="form-control" name="getstarted" id="getstarted"  placeholder="Get Started" value="<?php echo html_entity_decode($content->getstarted); ?>" required="" autocomplete="off">
                        @if($errors->has('getstarted'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="getstartedsec">Get Started ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="getstartedsec" id="getstartedsec"  placeholder="Get Started ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->getstartedsec); ?>" required="" autocomplete="off">
                        @if($errors->has('getstartedsec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>            
               
            <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                    <label  class="col-form-label" for="specific_loc_content">Specific Location Content</label>
                    <input type="text" class="form-control" name="specific_loc_content" id="specific_loc_content"  placeholder="Specific Location Content" value="<?php echo html_entity_decode($content->specific_loc_content); ?>" required="" autocomplete="off">
                    @if($errors->has('specific_loc_content'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                    @endif
                </div>
                
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                    <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="specific_loc_contentsec">Specific Location Content ({{ $countrylanguage->languagename }})</label>
                        <input type="text" class="form-control" name="specific_loc_contentsec" id="specific_loc_contentsec"  placeholder="Specific Location Content ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->specific_loc_contentsec); ?>" required="" autocomplete="off">
                        @if($errors->has('specific_loc_contentsec'))
                            <span class="invalid-feedback" role="alert">
                                <strong>This value is required.</strong>
                            </span>
                        @endif
                    </div>
                @endif
            </div>   

            <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                    <label  class="col-form-label" for="register_now">Register Now</label>
                    <input type="text" class="form-control" name="register_now" id="register_now"  placeholder="Register Now" value="<?php echo html_entity_decode($content->register_now); ?>" required="" autocomplete="off">
                    @if($errors->has('register_now'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                    @endif
                </div>
                
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                    <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="register_nowsec">Register Now ({{ $countrylanguage->languagename }})</label>
                        <input type="text" class="form-control" name="register_nowsec" id="register_nowsec"  placeholder="Register Now ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->register_nowsec); ?>" required="" autocomplete="off">
                        @if($errors->has('register_nowsec'))
                            <span class="invalid-feedback" role="alert">
                                <strong>This value is required.</strong>
                            </span>
                        @endif
                    </div>
                @endif
            </div>   
             
             
        <div class="form-row">                     
                <div class="col-md-4 mb-3">                 
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <a href="{{ url('country-lang-list') }}" class="btn btn-success">Go To Back</a>
                </div>
        </div>                              
</form>  
