
<form class="needs-validation" method="POST" action="{{url('/storehomefrontendcms'.'/'.$countrylanguage->languageculture.'?taboption=1')}}" id="answer-form" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
            @csrf
              <div class="form-row">  
                    <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="homebannertext1">Home Banner Text 1</label>
                        <textarea class="form-control {{ $errors->has('homebannertext1') ? ' is-invalid' : '' }}" name="homebannertext1" id="homebannertext1"  placeholder="Enter The Home Banner Text 1" rows="5"  required="" autocomplete="off">{{ old('homebannertext1') }}</textarea>      
                              
                        @if($errors->has('homebannertext1'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                    </div>
                    @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                        <div class="col-md-6 mb-3"> 
                                <label  class="col-form-label" for="homebannertext1sec">Home Banner Text 1 ({{ $countrylanguage->languagename }})</label>
                                <textarea class="form-control {{ $errors->has('homebannertext1sec') ? ' is-invalid' : '' }}" name="homebannertext1sec" id="homebannertext1sec"  placeholder="Enter The Home Banner Text 1" rows="5" required="" autocomplete="off">{{ old('homebannertext1sec') }}</textarea>
                                @if($errors->has('homebannertext1sec'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>This value is required.</strong>
                                </span>
                                @endif
                        </div>
                    @endif                             
                 </div> 
                   <div class="form-row">  
                    <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="homebannertext2">Home Banner Text 2</label>
                        <textarea class="form-control {{ $errors->has('homebannertext2') ? ' is-invalid' : '' }}" name="homebannertext2" id="homebannertext2"  placeholder="Enter The Home Banner Text 2" rows="5"  required="" autocomplete="off">{{ old('homebannertext2') }}</textarea>      
                              
                        @if($errors->has('homebannertext2'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                    </div>
                    @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                        <div class="col-md-6 mb-3"> 
                                <label  class="col-form-label" for="homebannertext2sec">Home Banner Text 2 ({{ $countrylanguage->languagename }})</label>
                                <textarea class="form-control {{ $errors->has('homebannertext2sec') ? ' is-invalid' : '' }}" name="homebannertext2sec" id="homebannertext2sec"  placeholder="Enter The Home Banner Text 2" rows="5" required="" autocomplete="off">{{ old('homebannertext2sec') }}</textarea>
                                @if($errors->has('homebannertext2sec'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>This value is required.</strong>
                                </span>
                                @endif
                        </div>
                    @endif                             
                 </div> 


                 <div class="form-row">  
                    <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="homebannertext3">Home Banner Text 3</label>
                        <textarea class="form-control {{ $errors->has('homebannertext3') ? ' is-invalid' : '' }}" name="homebannertext3" id="homebannertext3"  placeholder="Enter The Home Banner Text 3" rows="5"  required="" autocomplete="off">{{ old('homebannertext3') }}</textarea>      
                              
                        @if($errors->has('homebannertext3'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                    </div>
                    @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                        <div class="col-md-6 mb-3"> 
                                <label  class="col-form-label" for="homebannertext3sec">Home Banner Text 3 ({{ $countrylanguage->languagename }})</label>
                                <textarea class="form-control {{ $errors->has('homebannertext3sec') ? ' is-invalid' : '' }}" name="homebannertext3sec" id="homebannertext3sec"  placeholder="Enter The Home Banner Text 3" rows="5" required="" autocomplete="off">{{ old('homebannertext3sec') }}</textarea>
                                @if($errors->has('homebannertext3sec'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>This value is required.</strong>
                                </span>
                                @endif
                        </div>
                    @endif                             
                 </div>  


                 <div class="form-row">  
                    <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="registernowtext">Register Now Text</label>
                        <textarea class="form-control {{ $errors->has('registernowtext') ? ' is-invalid' : '' }}" name="registernowtext" id="registernowtext"  placeholder="Enter The Register Now Text" rows="5"  required=""  autocomplete="off">{{ old('registernowtext') }}</textarea>      
                              
                        @if($errors->has('registernowtext'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                    </div>
                    @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                        <div class="col-md-6 mb-3"> 
                                <label  class="col-form-label" for="registernowtextsec">Register Now Text ({{ $countrylanguage->languagename }})</label>
                                <textarea class="form-control {{ $errors->has('registernowtextsec') ? ' is-invalid' : '' }}" name="registernowtextsec" id="registernowtextsec"  placeholder="Enter The Register Now Text" rows="5" required="" autocomplete="off">{{ old('registernowtextsec') }}</textarea>
                                @if($errors->has('registernowtextsec'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>This value is required.</strong>
                                </span>
                                @endif
                        </div>
                    @endif                             
                 </div>  


                 <div class="form-row">  
                    <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="joinusnow">Join Us Now! Now Text</label>
                        <textarea class="form-control {{ $errors->has('joinusnow') ? ' is-invalid' : '' }}" name="joinusnow" id="joinusnow"  placeholder="Enter The Join Us Now! Now Text" rows="2"  required=""  autocomplete="off">{{ old('joinusnow') }}</textarea>      
                              
                        @if($errors->has('joinusnow'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                    </div>
                    @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                        <div class="col-md-6 mb-3"> 
                                <label  class="col-form-label" for="joinusnowsec">Join Us Now! Now Text ({{ $countrylanguage->languagename }})</label>
                                <textarea class="form-control {{ $errors->has('joinusnowsec') ? ' is-invalid' : '' }}" name="joinusnowsec" id="joinusnowsec"  placeholder="Enter The Join Us Now! Now Text" rows="2" required="" autocomplete="off">{{ old('joinusnowsec') }}</textarea>
                                @if($errors->has('joinusnowsec'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>This value is required.</strong>
                                </span>
                                @endif
                        </div>
                    @endif                             
                 </div>  



                  <div class="form-row">  
                    <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="banneralttex">Banner alt Text</label>
                        <textarea class="form-control {{ $errors->has('banneralttex') ? ' is-invalid' : '' }}" name="banneralttex" id="banneralttex"  placeholder="Enter The Banner alt Text" rows="2"  required=""  autocomplete="off">{{ old('banneralttex') }}</textarea>      
                              
                        @if($errors->has('banneralttex'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                    </div>
                    @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                        <div class="col-md-6 mb-3"> 
                                <label  class="col-form-label" for="banneralttexsec">Banner alt Text ({{ $countrylanguage->languagename }})</label>
                                <textarea class="form-control {{ $errors->has('banneralttexsec') ? ' is-invalid' : '' }}" name="banneralttexsec" id="banneralttexsec"  placeholder="Enter The Banner alt Text" rows="2" required="" autocomplete="off">{{ old('banneralttexsec') }}</textarea>
                                @if($errors->has('banneralttexsec'))
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
