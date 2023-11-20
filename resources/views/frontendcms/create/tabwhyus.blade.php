
<form class="needs-validation" method="POST" action="{{url('/storewhyusfrontendcms'.'/'.$countrylanguage->languageculture.'?taboption=4')}}" id="answer-form" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
    @csrf
        <div class="form-row">  
                <div class="col-md-12 mb-3"> 
                    <label  class="col-form-label" for="whyustext">Why Us Paragraph</label>
                    <textarea class="form-control summernote {{ $errors->has('whyustext') ? ' is-invalid' : '' }}" name="whyustext" id="whyustext"  placeholder="Enter The Why Us Paragraph Text" rows="5" required=""  autocomplete="off">{{ old('whyustext') }}</textarea>      
                          
                    @if($errors->has('whyustext'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
                </div>
                </div>
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="form-row"> 
                    <div class="col-md-12 mb-3"> 
                            <label  class="col-form-label" for="whyustextsec">Why Us Paragraph ({{ $countrylanguage->languagename }})</label>
                            <textarea class="form-control summernote {{ $errors->has('whyustextsec') ? ' is-invalid' : '' }}" name="whyustextsec" id="whyustextsec"  placeholder="Enter Why Us Paragraph Text" rows="5" required="" autocomplete="off">{{ old('whyustextsec') }}</textarea>
                            @if($errors->has('whyustextsec'))
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
