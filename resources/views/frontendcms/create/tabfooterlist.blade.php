
<form class="needs-validation" method="POST" action="{{url('/storefooterlistfrontendcms'.'/'.$countrylanguage->languageculture.'?taboption=16')}}" id="answer-form" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
    @csrf
     
                <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="aboutus">aboutus</label>
                       <input type="text" class="form-control" name="aboutus" id="aboutus"  placeholder="aboutus" value="{{old('aboutus')}}" required="" autocomplete="off">
                        @if($errors->has('aboutus'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="aboutussec">aboutus ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="aboutussec" id="aboutussec"  placeholder="aboutus ({{ $countrylanguage->languagename }})" value="{{old('aboutussec')}}" required="" autocomplete="off">
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
                        <label  class="col-form-label" for="faq">faq</label>
                       <input type="text" class="form-control" name="faq" id="faq"  placeholder="faq" value="{{old('faq')}}" required="" autocomplete="off">
                        @if($errors->has('faq'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="faqsec">faq ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="faqsec" id="faqsec"  placeholder="faq ({{ $countrylanguage->languagename }})" value="{{old('faqsec')}}" required="" autocomplete="off">
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
                        <label  class="col-form-label" for="privacyandpolicy">privacypolicy</label>
                       <input type="text" class="form-control" name="privacyandpolicy" id="privacyandpolicy"  placeholder="privacypolicy" value="{{old('privacyandpolicy')}}" required="" autocomplete="off">
                        @if($errors->has('privacyandpolicy'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="privacyandpolicysec">privacypolicy ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="privacyandpolicysec" id="privacyandpolicysec"  placeholder="privacypolicy ({{ $countrylanguage->languagename }})" value="{{old('privacyandpolicysec')}}" required="" autocomplete="off">
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
                        <label  class="col-form-label" for="termandcondition">termsandconditions</label>
                       <input type="text" class="form-control" name="termandcondition" id="termandcondition"  placeholder="termsandconditions" value="{{old('termandcondition')}}" required="" autocomplete="off">
                        @if($errors->has('termandcondition'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="termandconditionsec">termsandconditions ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="termandconditionsec" id="termandconditionsec"  placeholder="termsandconditions ({{ $countrylanguage->languagename }})" value="{{old('termandconditionsec')}}" required="" autocomplete="off">
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
                        <label  class="col-form-label" for="contact">contactus</label>
                       <input type="text" class="form-control" name="contact" id="contact"  placeholder="contactus" value="{{old('contact')}}" required="" autocomplete="off">
                        @if($errors->has('contact'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="contactsec">contactus ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="contactsec" id="contactsec"  placeholder="contactus ({{ $countrylanguage->languagename }})" value="{{old('contactsec')}}" required="" autocomplete="off">
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
                        <label  class="col-form-label" for="partnerwithus">partnerwithus</label>
                       <input type="text" class="form-control" name="partnerwithus" id="partnerwithus"  placeholder="partnerwithus" value="{{old('partnerwithus')}}" required="" autocomplete="off">
                        @if($errors->has('partnerwithus'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="partnerwithussec">partnerwithus ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="partnerwithussec" id="partnerwithussec"  placeholder="partnerwithus ({{ $countrylanguage->languagename }})" value="{{old('partnerwithussec')}}" required="" autocomplete="off">
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
