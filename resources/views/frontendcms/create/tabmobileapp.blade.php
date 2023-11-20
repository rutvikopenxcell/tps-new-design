
<form class="needs-validation" method="POST" action="{{url('/storemobileappfrontendcms'.'/'.$countrylanguage->languageculture.'?taboption=5')}}" id="answer-form" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
    @csrf
     <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                    <label  class="col-form-label" for="headertext">DOWNLOAD THE PANEL STATION APP</label>
                    <textarea class="form-control  {{ $errors->has('headertext') ? ' is-invalid' : '' }}" name="headertext" id="headertext"  placeholder="Enter The DOWNLOAD THE PANEL STATION APP Text" rows="2" required=""  autocomplete="off">{{ old('headertext') }}</textarea>      
                          
                    @if($errors->has('headertext'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
                </div>
                
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 
                    <div class="col-md-6 mb-3"> 
                            <label  class="col-form-label" for="headertextsec">DOWNLOAD THE PANEL STATION APP ({{ $countrylanguage->languagename }})</label>
                            <textarea class="form-control  {{ $errors->has('headertextsec') ? ' is-invalid' : '' }}" name="headertextsec" id="headertextsec"  placeholder="Enter DOWNLOAD THE PANEL STATION APP Text" rows="2" required="" autocomplete="off">{{ old('headertextsec') }}</textarea>
                            @if($errors->has('headertextsec'))
                            <span class="invalid-feedback" role="alert">
                                <strong>This value is required.</strong>
                            </span>
                            @endif
                    </div>
                   
                @endif
                 </div>


             
                 <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                    <label  class="col-form-label" for="para">DOWNLOAD APP Paragraph</label>
                    <textarea class="form-control  {{ $errors->has('para') ? ' is-invalid' : '' }}" name="para" id="para"  placeholder="Enter The DOWNLOAD APP Paragraph" rows="2" required=""  autocomplete="off">{{ old('para') }}</textarea>      
                          
                    @if($errors->has('para'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
                </div>
                
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 
                    <div class="col-md-6 mb-3"> 
                            <label  class="col-form-label" for="parasec">DOWNLOAD APP Paragraph ({{ $countrylanguage->languagename }})</label>
                            <textarea class="form-control  {{ $errors->has('parasec') ? ' is-invalid' : '' }}" name="parasec" id="parasec"  placeholder="Enter DOWNLOAD APP Paragraph Text" rows="2" required="" autocomplete="off">{{ old('parasec') }}</textarea>
                            @if($errors->has('parasec'))
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
