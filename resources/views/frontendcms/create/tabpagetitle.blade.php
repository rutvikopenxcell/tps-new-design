
<form class="needs-validation" method="POST" action="{{url('/storepagetitlefrontendcms'.'/'.$countrylanguage->languageculture.'?taboption=15')}}" id="answer-form" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
    @csrf
      
          
    
              <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="home">Home Page Title</label>
                       <textarea type="text" class="form-control" name="home" id="home"  placeholder="Home Page Title"  rows="3" required="" autocomplete="off">{{old('home')}}</textarea>
                        @if($errors->has('home'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="homesec">Home Page Title ({{ $countrylanguage->languagename }})</label>
                       <textarea type="text" class="form-control" name="homesec" id="homesec"  placeholder="Home Page Title ({{ $countrylanguage->languagename }})" rows="3" required="" autocomplete="off">{{old('homesec')}}</textarea>
                        @if($errors->has('homesec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>   


                <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="faq">FAQ Page Title</label>
                       <textarea type="text" class="form-control" name="faq" id="faq"  placeholder="FAQ Page Title" rows="3" required="" autocomplete="off">{{old('faq')}}</textarea>
                        @if($errors->has('faq'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="faqsec">FAQ Page Title ({{ $countrylanguage->languagename }})</label>
                       <textarea type="text" class="form-control" name="faqsec" id="faqsec"  placeholder="FAQ Page Title ({{ $countrylanguage->languagename }})"  rows="3" required="" autocomplete="off">{{old('faqsec')}}</textarea>
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
                        <label  class="col-form-label" for="aboutus">About Us Page Title</label>
                       <textarea type="text" class="form-control" name="aboutus" id="aboutus"  placeholder="About Us Page Title"  rows="3" required="" autocomplete="off">{{old('aboutus')}}</textarea>
                        @if($errors->has('aboutus'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="aboutussec">About Us Page Title ({{ $countrylanguage->languagename }})</label>
                       <textarea type="text" class="form-control" name="aboutussec" id="aboutussec"  placeholder="About Us Page Title ({{ $countrylanguage->languagename }})" rows="3" required="" autocomplete="off">{{old('aboutussec')}}</textarea>
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
                        <label  class="col-form-label" for="privacypolicy">Privacy Policy Page Title</label>
                       <textarea type="text" class="form-control" name="privacypolicy" id="privacypolicy"  placeholder="Privacy Policy Page Title" rows="3" required="" autocomplete="off">{{old('privacypolicy')}}</textarea>
                        @if($errors->has('privacypolicy'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="privacypolicysec">Privacy Policy Page Title ({{ $countrylanguage->languagename }})</label>
                       <textarea type="text" class="form-control" name="privacypolicysec" id="privacypolicysec"  placeholder="Privacy Policy Page Title ({{ $countrylanguage->languagename }})"  rows="3" required="" autocomplete="off">{{old('privacypolicysec')}}</textarea>
                        @if($errors->has('privacypolicysec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>   


                 <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="termandcondition">TERMS AND CONDITIONS Page Title</label>
                       <textarea type="text" class="form-control" name="termandcondition" id="termandcondition"  placeholder="TERMS AND CONDITIONS Page Title"  rows="3" required="" autocomplete="off">{{old('termandcondition')}}</textarea>
                        @if($errors->has('termandcondition'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="termandconditionsec">TERMS AND CONDITIONS Page Title ({{ $countrylanguage->languagename }})</label>
                       <textarea type="text" class="form-control" name="termandconditionsec" id="termandconditionsec"  placeholder="TERMS AND CONDITIONS Page Title ({{ $countrylanguage->languagename }})"  rows="3" required="" autocomplete="off">{{old('termandconditionsec')}}</textarea>
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
                        <label  class="col-form-label" for="referafriend">Refer A Friend Page Title</label>
                       <textarea type="text" class="form-control" name="referafriend" id="referafriend"  placeholder="Refer A Friend Page Title"  rows="3" required="" autocomplete="off">{{old('referafriend')}}</textarea>
                        @if($errors->has('referafriend'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="referafriendsec">Refer A Friend Page Title ({{ $countrylanguage->languagename }})</label>
                       <textarea type="text" class="form-control" name="referafriendsec" id="referafriendsec"  placeholder="Refer A Friend Page Title ({{ $countrylanguage->languagename }})"  rows="3" required="" autocomplete="off">{{old('referafriendsec')}}</textarea>
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
                        <label  class="col-form-label" for="contactus">Contact Us Page Title</label>
                       <textarea type="text" class="form-control" name="contactus" id="contactus"  placeholder="Contact Us Page Title" rows="3" required="" autocomplete="off">{{old('contactus')}}</textarea>
                        @if($errors->has('contactus'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="contactussec">Contact Us Page Title ({{ $countrylanguage->languagename }})</label>
                       <textarea type="text" class="form-control" name="contactussec" id="contactussec"  placeholder="Contact Us Page Title ({{ $countrylanguage->languagename }})" rows="3" required="" autocomplete="off">{{old('contactussec')}}</textarea>
                        @if($errors->has('contactussec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>   


                <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="partnerwithus">Partner With Us Page Title</label>
                       <textarea type="text" class="form-control" name="partnerwithus" id="partnerwithus"  placeholder="Partner With Us Page Title"  rows="3" required="" autocomplete="off">{{old('partnerwithus')}}</textarea>
                        @if($errors->has('partnerwithus'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="partnerwithussec">Partner With Us Page Title ({{ $countrylanguage->languagename }})</label>
                       <textarea type="text" class="form-control" name="partnerwithussec" id="partnerwithussec"  placeholder="Partner With Us Page Title ({{ $countrylanguage->languagename }})"  rows="3" required="" autocomplete="off">{{old('partnerwithussec')}}</textarea>
                        @if($errors->has('partnerwithussec'))
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
