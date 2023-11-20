
<form class="needs-validation" method="POST" action="{{url('/storetermsandconditionfrontendcms'.'/'.$countrylanguage->languageculture.'?taboption=11')}}" id="answer-form" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
    @csrf
      
          
    
             <div class="form-row">  
                <div class="col-md-12 mb-3"> 
                    <label  class="col-form-label" for="termsandconditiontext">Terms And Condition Paragraph</label>
                    <textarea class="form-control summernote {{ $errors->has('termsandconditiontext') ? ' is-invalid' : '' }}" name="termsandconditiontext" id="termsandconditiontext"  placeholder="Enter The Terms And Condition Paragraph Text" rows="5" required=""  autocomplete="off">{{ old('termsandconditiontext') }}</textarea>      
                          
                    @if($errors->has('termsandconditiontext'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
                </div>
                </div>
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="form-row"> 
                    <div class="col-md-12 mb-3"> 
                            <label  class="col-form-label" for="termsandconditiontextsec">Terms And Condition Paragraph ({{ $countrylanguage->languagename }})</label>
                            <textarea class="form-control summernote {{ $errors->has('termsandconditiontextsec') ? ' is-invalid' : '' }}" name="termsandconditiontextsec" id="termsandconditiontextsec"  placeholder="Enter Terms And Condition Paragraph Text" rows="5" required="" autocomplete="off">{{ old('termsandconditiontextsec') }}</textarea>
                            @if($errors->has('termsandconditiontextsec'))
                            <span class="invalid-feedback" role="alert">
                                <strong>This value is required.</strong>
                            </span>
                            @endif
                    </div>
                    </div>
                @endif                             
             
             
        <div class="form-row">                     
                <div class="col-md-4 mb-3">                 
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <a href="{{url('country-lang-list')}}" class="btn btn-success">Go To Back</a>
                </div>
        </div>                              
</form>  
