
<form class="needs-validation" method="POST" action="{{url('/storeprivacypolicyfrontendcms'.'/'.$countrylanguage->languageculture.'?taboption=10')}}" id="answer-form" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
    @csrf
      
          
    
             <div class="form-row">  
                <div class="col-md-12 mb-3"> 
                    <label  class="col-form-label" for="privacypolicytext">Privacy Policy Paragraph</label>
                    <textarea class="form-control summernote {{ $errors->has('privacypolicytext') ? ' is-invalid' : '' }}" name="privacypolicytext" id="privacypolicytext"  placeholder="Enter The Privacy Policy Paragraph Text" rows="5" required=""  autocomplete="off">{{ old('privacypolicytext') }}</textarea>      
                          
                    @if($errors->has('privacypolicytext'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
                </div>
                </div>
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="form-row"> 
                    <div class="col-md-12 mb-3"> 
                            <label  class="col-form-label" for="privacypolicytextsec">Privacy Policy Paragraph ({{ $countrylanguage->languagename }})</label>
                            <textarea class="form-control summernote {{ $errors->has('privacypolicytextsec') ? ' is-invalid' : '' }}" name="privacypolicytextsec" id="privacypolicytextsec"  placeholder="Enter Privacy Policy Paragraph Text" rows="5" required="" autocomplete="off">{{ old('privacypolicytextsec') }}</textarea>
                            @if($errors->has('privacypolicytextsec'))
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
