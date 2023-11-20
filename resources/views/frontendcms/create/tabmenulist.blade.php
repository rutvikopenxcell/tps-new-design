
<form class="needs-validation" method="POST" action="{{url('/storemenulistfrontendcms'.'/'.$countrylanguage->languageculture.'?taboption=12')}}" id="answer-form" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
    @csrf
      
          
    
              <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="hometext">Home</label>
                       <input type="text" class="form-control" name="hometext" id="hometext"  placeholder="Home" value="{{old('hometext')}}" required="" autocomplete="off">
                        @if($errors->has('hometext'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="hometextsec">Home ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="hometextsec" id="hometextsec"  placeholder="Home ({{ $countrylanguage->languagename }})" value="{{old('hometextsec')}}" required="" autocomplete="off">
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
                       <input type="text" class="form-control" name="login" id="login"  placeholder="Login" value="{{old('login')}}" required="" autocomplete="off">
                        @if($errors->has('login'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="loginsec">Login ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="loginsec" id="loginsec"  placeholder="Login ({{ $countrylanguage->languagename }})" value="{{old('loginsec')}}" required="" autocomplete="off">
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
                       <input type="text" class="form-control" name="aboutus" id="aboutus"  placeholder="About Us" value="{{old('aboutus')}}" required="" autocomplete="off">
                        @if($errors->has('aboutus'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="aboutussec">About Us ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="aboutussec" id="aboutussec"  placeholder="About Us ({{ $countrylanguage->languagename }})" value="{{old('aboutussec')}}" required="" autocomplete="off">
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
                       <input type="text" class="form-control" name="whyus" id="whyus"  placeholder="Why Us" value="{{old('whyus')}}" required="" autocomplete="off">
                        @if($errors->has('whyus'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="whyussec">Why Us ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="whyussec" id="whyussec"  placeholder="Why Us ({{ $countrylanguage->languagename }})" value="{{old('whyussec')}}" required="" autocomplete="off">
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
                       <input type="text" class="form-control" name="mobileapp" id="mobileapp"  placeholder="Download App" value="{{old('mobileapp')}}" required="" autocomplete="off">
                        @if($errors->has('mobileapp'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="mobileappsec">Download App ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="mobileappsec" id="mobileappsec"  placeholder="Download App ({{ $countrylanguage->languagename }})" value="{{old('mobileappsec')}}" required="" autocomplete="off">
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
                       <input type="text" class="form-control" name="blog" id="blog"  placeholder="Blog" value="{{old('blog')}}" required="" autocomplete="off">
                        @if($errors->has('blog'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="blogsec">Blog ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="blogsec" id="blogsec"  placeholder="Blog ({{ $countrylanguage->languagename }})" value="{{old('blogsec')}}" required="" autocomplete="off">
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
                       <input type="text" class="form-control" name="howitworkssubheader" id="howitworkssubheader"  placeholder="Fill surveys, share your opinion and get paid" value="{{ old('howitworkssubheader')}}" required="" autocomplete="off">
                        @if($errors->has('howitworkssubheader'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="howitworkssubheadersec">Fill surveys, share your opinion and get paid ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="howitworkssubheadersec" id="howitworkssubheadersec"  placeholder="Fill surveys, share your opinion and get paid ({{ $countrylanguage->languagename }})" value="{{ old('howitworkssubheadersec')}}" required="" autocomplete="off">
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
                       <input type="text" class="form-control" name="howitworks" id="howitworks"  placeholder="How It Works" value="{{ old('howitworks')}}" required="" autocomplete="off">
                        @if($errors->has('howitworks'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="howitworkssec">How It Works ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="howitworkssec" id="howitworkssec"  placeholder="How It Works ({{ $countrylanguage->languagename }})" value="{{ old('howitworkssec')}}" required="" autocomplete="off">
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
                       <input type="text" class="form-control" name="testimonial" id="testimonial"  placeholder="Happy TPS Family" value="{{old('testimonial')}}" required="" autocomplete="off">
                        @if($errors->has('testimonial'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="testimonialsec">Happy TPS Family ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="testimonialsec" id="testimonialsec"  placeholder="Happy TPS Family ({{ $countrylanguage->languagename }})" value="{{old('testimonialsec')}}" required="" autocomplete="off">
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
                       <input type="text" class="form-control" name="testimonialpara" id="testimonialpara"  placeholder="Here's what our panellists have to say" value="{{old('testimonialpara')}}" required="" autocomplete="off">
                        @if($errors->has('testimonialpara'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="testimonialparasec">Here's what our panellists have to say ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="testimonialparasec" id="testimonialparasec"  placeholder="Here's what our panellists have to say ({{ $countrylanguage->languagename }})" value="{{old('testimonialparasec')}}" required="" autocomplete="off">
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
                       <input type="text" class="form-control" name="incentivepartner" id="incentivepartner"  placeholder="GLOBAL INCENTIVE PARTNERS" value="{{old('incentivepartner')}}" required="" autocomplete="off">
                        @if($errors->has('incentivepartner'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="incentivepartnersec">GLOBAL INCENTIVE PARTNERS ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="incentivepartnersec" id="incentivepartnersec"  placeholder="GLOBAL INCENTIVE PARTNERS ({{ $countrylanguage->languagename }})" value="{{old('incentivepartnersec')}}" required="" autocomplete="off">
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
                       <input type="text" class="form-control" name="faq" id="faq"  placeholder="FAQ'S" value="{{old('faq')}}" required="" autocomplete="off">
                        @if($errors->has('faq'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="faqsec">FAQ'S ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="faqsec" id="faqsec"  placeholder="FAQ'S ({{ $countrylanguage->languagename }})" value="{{old('faqsec')}}" required="" autocomplete="off">
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
                       <input type="text" class="form-control" name="privacyandpolicy" id="privacyandpolicy"  placeholder="PRIVACY POLICY" value="{{old('privacyandpolicy')}}" required="" autocomplete="off">
                        @if($errors->has('privacyandpolicy'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="privacyandpolicysec">PRIVACY POLICY ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="privacyandpolicysec" id="privacyandpolicysec"  placeholder="PRIVACY POLICY ({{ $countrylanguage->languagename }})" value="{{old('privacyandpolicysec')}}" required="" autocomplete="off">
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
                       <input type="text" class="form-control" name="termandcondition" id="termandcondition"  placeholder="TERMS AND CONDITIONS" value="{{old('termandcondition')}}" required="" autocomplete="off">
                        @if($errors->has('termandcondition'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="termandconditionsec">TERMS AND CONDITIONS ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="termandconditionsec" id="termandconditionsec"  placeholder="TERMS AND CONDITIONS ({{ $countrylanguage->languagename }})" value="{{old('termandconditionsec')}}" required="" autocomplete="off">
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
                       <input type="text" class="form-control" name="copyright" id="copyright"  placeholder="Copyright &copy; <?php echo date("Y"); ?> thepanelstation. All rights reserved." value="{{old('copyright')}}" required="" autocomplete="off">
                        @if($errors->has('copyright'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="copyrightsec">Copyright &copy; <?php echo date("Y"); ?> thepanelstation. All rights reserved. ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="copyrightsec" id="copyrightsec"  placeholder="Copyright &copy; <?php echo date("Y"); ?> thepanelstation. All rights reserved. ({{ $countrylanguage->languagename }})" value="{{old('copyrightsec')}}" required="" autocomplete="off">
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
                       <input type="text" class="form-control" name="referafriend" id="referafriend"  placeholder="REFER A FRIEND" value="{{old('referafriend')}}" required="" autocomplete="off">
                        @if($errors->has('referafriend'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="referafriendsec">REFER A FRIEND ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="referafriendsec" id="referafriendsec"  placeholder="REFER A FRIEND ({{ $countrylanguage->languagename }})" value="{{old('referafriendsec')}}" required="" autocomplete="off">
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
                       <input type="text" class="form-control" name="contact" id="contact"  placeholder="CONTACT US" value="{{old('contact')}}" required="" autocomplete="off">
                        @if($errors->has('contact'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="contactsec">CONTACT US ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="contactsec" id="contactsec"  placeholder="CONTACT US ({{ $countrylanguage->languagename }})" value="{{old('contactsec')}}" required="" autocomplete="off">
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
                       <input type="text" class="form-control" name="partnerwithus" id="partnerwithus"  placeholder="PARTNER WITH US" value="{{old('partnerwithus')}}" required="" autocomplete="off">
                        @if($errors->has('partnerwithus'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="partnerwithussec">PARTNER WITH US ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="partnerwithussec" id="partnerwithussec"  placeholder="PARTNER WITH US ({{ $countrylanguage->languagename }})" value="{{old('partnerwithussec')}}" required="" autocomplete="off">
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
                       <input type="text" class="form-control" name="send" id="send"  placeholder="Send" value="{{old('send')}}" required="" autocomplete="off">
                        @if($errors->has('send'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="sendsec">Send ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="sendsec" id="sendsec"  placeholder="Send ({{ $countrylanguage->languagename }})" value="{{old('sendsec')}}" required="" autocomplete="off">
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
                       <input type="text" class="form-control" name="name" id="name"  placeholder="Name" value="{{old('name')}}" required="" autocomplete="off">
                        @if($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="namesec">Name ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="namesec" id="namesec"  placeholder="Name ({{ $countrylanguage->languagename }})" value="{{old('namesec')}}" required="" autocomplete="off">
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
                       <input type="text" class="form-control" name="email" id="email"  placeholder="Email" value="{{old('email')}}" required="" autocomplete="off">
                        @if($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="emailsec">Email ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="emailsec" id="emailsec"  placeholder="Email ({{ $countrylanguage->languagename }})" value="{{old('emailsec')}}" required="" autocomplete="off">
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
                       <input type="text" class="form-control" name="message" id="message"  placeholder="Message" value="{{old('message')}}" required="" autocomplete="off">
                        @if($errors->has('message'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="messagesec">Message ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="messagesec" id="messagesec"  placeholder="Message ({{ $countrylanguage->languagename }})" value="{{old('messagesec')}}" required="" autocomplete="off">
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
                       <input type="text" class="form-control" name="getstarted" id="getstarted"  placeholder="Get Started" value="{{old('getstarted')}}" required="" autocomplete="off">
                        @if($errors->has('getstarted'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="getstartedsec">Get Started ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="getstartedsec" id="getstartedsec"  placeholder="Get Started ({{ $countrylanguage->languagename }})" value="{{old('getstartedsec')}}" required="" autocomplete="off">
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
                    <label  class="col-form-label" for="getstarted">Get Started</label>
                    <input type="text" class="form-control" name="getstarted" id="getstarted"  placeholder="Get Started" value="{{old('getstarted')}}" required="" autocomplete="off">
                    @if($errors->has('getstarted'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                    @endif
                </div>  
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                    <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="getstartedsec">Get Started ({{ $countrylanguage->languagename }})</label>
                        <input type="text" class="form-control" name="getstartedsec" id="getstartedsec"  placeholder="Get Started ({{ $countrylanguage->languagename }})" value="{{old('getstartedsec')}}" required="" autocomplete="off">
                        @if($errors->has('getstartedsec'))
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
                    <a href="{{url('country-lang-list')}}" class="btn btn-success">Go To Back</a>
                </div>
        </div>                              
</form>  
