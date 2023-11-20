
<form class="needs-validation" method="POST" action="{{url('/updateaboutusfrontendcms'.'/'.$countrylanguage->languageculture.'?taboption=2')}}" id="answer-form" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
    @method('put')
    @csrf
      <div class="form-row">  
                <div class="col-md-12 mb-3"> 
                    <label  class="col-form-label" for="aboutustext">About Us Paragraph</label>
                    <textarea class="form-control summernote {{ $errors->has('aboutustext') ? ' is-invalid' : '' }}" name="aboutustext" id="aboutustext"  placeholder="Enter The About Us Paragraph Text" rows="5" required=""  autocomplete="off"><?php echo html_entity_decode($homepagecms->aboutustext); ?></textarea>      
                          
                    @if($errors->has('aboutustext'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
                </div>
                </div>
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="form-row"> 
                    <div class="col-md-12 mb-3"> 
                            <label  class="col-form-label" for="aboutustextsec">About Us Paragraph ({{ $countrylanguage->languagename }})</label>
                            <textarea class="form-control summernote {{ $errors->has('aboutustextsec') ? ' is-invalid' : '' }}" name="aboutustextsec" id="aboutustextsec"  placeholder="Enter About Us Paragraph Text" rows="5" required="" autocomplete="off"><?php echo html_entity_decode($homepagecms->aboutustextsec); ?></textarea>
                            @if($errors->has('aboutustextsec'))
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
