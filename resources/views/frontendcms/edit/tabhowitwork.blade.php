
<form class="needs-validation" method="POST" action="{{url('/updatehowitworkfrontendcms'.'/'.$countrylanguage->languageculture.'?taboption=3')}}" id="answer-form" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                    <label  class="col-form-label" for="header1text">Register Paragraph</label>
                    <textarea class="form-control summernote  {{ $errors->has('header1text') ? ' is-invalid' : '' }}" name="header1text" id="header1text"  placeholder="Enter The Register Paragraph Text" rows="5" required=""  autocomplete="off"><?php echo html_entity_decode($content->header1text); ?></textarea>      
                          
                    @if($errors->has('header1text'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
                </div>
              
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 
                    <div class="col-md-6 mb-3"> 
                            <label  class="col-form-label" for="header1textsec">Register Paragraph ({{ $countrylanguage->languagename }})</label>
                            <textarea class="form-control summernote  {{ $errors->has('header1textsec') ? ' is-invalid' : '' }}" name="header1textsec" id="header1textsec"  placeholder="Enter Register Paragraph Text" rows="5" required="" autocomplete="off"><?php echo html_entity_decode($content->header1textsec); ?></textarea>
                            @if($errors->has('header1textsec'))
                            <span class="invalid-feedback" role="alert">
                                <strong>This value is required.</strong>
                            </span>
                            @endif
                    </div>
               
                @endif 

           </div>

           <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                    <label  class="col-form-label" for="header2text">Take Surveys Paragraph</label>
                    <textarea class="form-control summernote  {{ $errors->has('header2text') ? ' is-invalid' : '' }}" name="header2text" id="header2text"  placeholder="Enter The Take Surveys Paragraph Text" rows="5" required=""  autocomplete="off"><?php echo html_entity_decode($content->header2text); ?></textarea>      
                          
                    @if($errors->has('header2text'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
                </div>
              
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 
                    <div class="col-md-6 mb-3"> 
                            <label  class="col-form-label" for="header2textsec">Take Surveys Paragraph ({{ $countrylanguage->languagename }})</label>
                            <textarea class="form-control summernote  {{ $errors->has('header2textsec') ? ' is-invalid' : '' }}" name="header2textsec" id="header2textsec"  placeholder="Enter Take Surveys Paragraph Text" rows="5" required="" autocomplete="off"><?php echo html_entity_decode($content->header2textsec); ?></textarea>
                            @if($errors->has('header2textsec'))
                            <span class="invalid-feedback" role="alert">
                                <strong>This value is required.</strong>
                            </span>
                            @endif
                    </div>
               
                @endif 

           </div> 

           <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                    <label  class="col-form-label" for="header3text">Get Rewarded - Vouchers and Cash! Paragraph</label>
                    <textarea class="form-control summernote  {{ $errors->has('header3text') ? ' is-invalid' : '' }}" name="header3text" id="header3text"  placeholder="Enter The Get Rewarded - Vouchers and Cash! Paragraph Text" rows="5" required=""  autocomplete="off"><?php echo html_entity_decode($content->header3text); ?></textarea>      
                          
                    @if($errors->has('header3text'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
                </div>
              
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 
                    <div class="col-md-6 mb-3"> 
                            <label  class="col-form-label" for="header3textsec">Get Rewarded - Vouchers and Cash! Paragraph ({{ $countrylanguage->languagename }})</label>
                            <textarea class="form-control summernote  {{ $errors->has('header3textsec') ? ' is-invalid' : '' }}" name="header3textsec" id="header3textsec"  placeholder="Enter Get Rewarded - Vouchers and Cash! Paragraph Text" rows="5" required="" autocomplete="off"><?php echo html_entity_decode($content->header3textsec); ?></textarea>
                            @if($errors->has('header3textsec'))
                            <span class="invalid-feedback" role="alert">
                                <strong>This value is required.</strong>
                            </span>
                            @endif
                    </div>
               
                @endif 

           </div>   


              <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                    <label  class="col-form-label" for="header4text">Share With Friends Paragraph</label>
                    <textarea class="form-control summernote  {{ $errors->has('header4text') ? ' is-invalid' : '' }}" name="header4text" id="header4text"  placeholder="Enter The Share With Friends Paragraph Text" rows="5" required=""  autocomplete="off"><?php echo html_entity_decode($content->header4text); ?></textarea>      
                          
                    @if($errors->has('header4text'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
                </div>
              
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 
                    <div class="col-md-6 mb-3"> 
                            <label  class="col-form-label" for="header4textsec">Share With Friends Paragraph ({{ $countrylanguage->languagename }})</label>
                            <textarea class="form-control summernote  {{ $errors->has('header4textsec') ? ' is-invalid' : '' }}" name="header4textsec" id="header4textsec"  placeholder="Enter Share With Friends Paragraph Text" rows="5" required="" autocomplete="off"><?php echo html_entity_decode($content->header4textsec); ?></textarea>
                            @if($errors->has('header4textsec'))
                            <span class="invalid-feedback" role="alert">
                                <strong>This value is required.</strong>
                            </span>
                            @endif
                    </div>
               
                @endif 

           </div> 


           <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                    <label  class="col-form-label" for="alt1text">Register Image alt Text</label>
                    <textarea class="form-control   {{ $errors->has('alt1text') ? ' is-invalid' : '' }}" name="alt1text" id="alt1text"  placeholder="Enter The Register Image alt Text Text" rows="2"   autocomplete="off"><?php echo html_entity_decode($content->alt1text); ?></textarea>      
                          
                    @if($errors->has('alt1text'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
                </div>
              
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 
                    <div class="col-md-6 mb-3"> 
                            <label  class="col-form-label" for="alt1textsec">Register Image alt Text ({{ $countrylanguage->languagename }})</label>
                            <textarea class="form-control   {{ $errors->has('alt1textsec') ? ' is-invalid' : '' }}" name="alt1textsec" id="alt1textsec"  placeholder="Enter Register Image alt Text Text" rows="2"  autocomplete="off"><?php echo html_entity_decode($content->alt1textsec); ?></textarea>
                            @if($errors->has('alt1textsec'))
                            <span class="invalid-feedback" role="alert">
                                <strong>This value is required.</strong>
                            </span>
                            @endif
                    </div>
               
                @endif 

           </div>

           <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                    <label  class="col-form-label" for="alt2text">Take Surveys alt Text</label>
                    <textarea class="form-control   {{ $errors->has('alt2text') ? ' is-invalid' : '' }}" name="alt2text" id="alt2text"  placeholder="Enter The Take Surveys alt Text Text" rows="2"   autocomplete="off"><?php echo html_entity_decode($content->alt2text); ?></textarea>      
                          
                    @if($errors->has('alt2text'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
                </div>
              
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 
                    <div class="col-md-6 mb-3"> 
                            <label  class="col-form-label" for="alt2textsec">Take Surveys alt Text ({{ $countrylanguage->languagename }})</label>
                            <textarea class="form-control   {{ $errors->has('alt2textsec') ? ' is-invalid' : '' }}" name="alt2textsec" id="alt2textsec"  placeholder="Enter Take Surveys alt Text Text" rows="2"  autocomplete="off"><?php echo html_entity_decode($content->alt2textsec); ?></textarea>
                            @if($errors->has('alt2textsec'))
                            <span class="invalid-feedback" role="alert">
                                <strong>This value is required.</strong>
                            </span>
                            @endif
                    </div>
               
                @endif 

           </div> 

           <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                    <label  class="col-form-label" for="alt3text">Get Rewarded - Vouchers and Cash! alt Text</label>
                    <textarea class="form-control   {{ $errors->has('alt3text') ? ' is-invalid' : '' }}" name="alt3text" id="alt3text"  placeholder="Enter The Get Rewarded - Vouchers and Cash! alt Text Text" rows="2"   autocomplete="off"><?php echo html_entity_decode($content->alt3text); ?></textarea>      
                          
                    @if($errors->has('alt3text'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
                </div>
              
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 
                    <div class="col-md-6 mb-3"> 
                            <label  class="col-form-label" for="alt3textsec">Get Rewarded - Vouchers and Cash! alt Text ({{ $countrylanguage->languagename }})</label>
                            <textarea class="form-control   {{ $errors->has('alt3textsec') ? ' is-invalid' : '' }}" name="alt3textsec" id="alt3textsec"  placeholder="Enter Get Rewarded - Vouchers and Cash! alt Text Text" rows="2"  autocomplete="off"><?php echo html_entity_decode($content->alt3textsec); ?></textarea>
                            @if($errors->has('alt3textsec'))
                            <span class="invalid-feedback" role="alert">
                                <strong>This value is required.</strong>
                            </span>
                            @endif
                    </div>
               
                @endif 

           </div>   


              <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                    <label  class="col-form-label" for="alt4text">Share With Friends alt Text</label>
                    <textarea class="form-control   {{ $errors->has('alt4text') ? ' is-invalid' : '' }}" name="alt4text" id="alt4text"  placeholder="Enter The Share With Friends alt Text Text" rows="2"   autocomplete="off"><?php echo html_entity_decode($content->alt4text); ?></textarea>      
                          
                    @if($errors->has('alt4text'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
                </div>
              
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 
                    <div class="col-md-6 mb-3"> 
                            <label  class="col-form-label" for="alt4textsec">Share With Friends alt Text ({{ $countrylanguage->languagename }})</label>
                            <textarea class="form-control   {{ $errors->has('alt4textsec') ? ' is-invalid' : '' }}" name="alt4textsec" id="alt4textsec"  placeholder="Enter Share With Friends alt Text Text" rows="2"  autocomplete="off"><?php echo html_entity_decode($content->alt4textsec); ?></textarea>
                            @if($errors->has('alt4textsec'))
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
