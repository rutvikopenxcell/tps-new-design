<form class="needs-validation" method="POST" action="{{url('/updatefaqfrontendcms'.'/'.$countrylanguage->languageculture.'/'.$content->id.'?taboption=9')}}" id="answer-form" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
    @method('put')
    @csrf
            
    <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                    <label  class="col-form-label" for="faqheadertext">FAQ Header</label>
                    <textarea class="form-control  {{ $errors->has('faqheadertext') ? ' is-invalid' : '' }}" name="faqheadertext" id="faqheadertext"  placeholder="Enter The FAQ Header Text" rows="5" required=""  autocomplete="off"><?php echo html_entity_decode($content->faqheadertext); ?></textarea>      
                          
                    @if($errors->has('faqheadertext'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
                </div>
              
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 
                    <div class="col-md-6 mb-3"> 
                            <label  class="col-form-label" for="faqheadertextsec">FAQ Header ({{ $countrylanguage->languagename }})</label>
                            <textarea class="form-control  {{ $errors->has('faqheadertextsec') ? ' is-invalid' : '' }}" name="faqheadertextsec" id="faqheadertextsec"  placeholder="Enter FAQ Header Text" rows="5" required="" autocomplete="off"><?php echo html_entity_decode($content->faqheadertextsec); ?></textarea>
                            @if($errors->has('faqheadertextsec'))
                            <span class="invalid-feedback" role="alert">
                                <strong>This value is required.</strong>
                            </span>
                            @endif
                    </div>
               
                @endif 

                 </div>       

              <div class="form-row">  
                <div class="col-md-12 mb-3"> 
                    <label  class="col-form-label" for="faqpara">FAQ Paragraph</label>
                    <textarea class="form-control summernote {{ $errors->has('faqpara') ? ' is-invalid' : '' }}" name="faqpara" id="faqpara"  placeholder="Enter The FAQ Paragraph Text" rows="5" required=""  autocomplete="off"><?php echo html_entity_decode($content->faqpara); ?></textarea>      
                          
                    @if($errors->has('faqpara'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
                </div>
                </div>
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="form-row"> 
                    <div class="col-md-12 mb-3"> 
                            <label  class="col-form-label" for="faqparasec">FAQ Paragraph ({{ $countrylanguage->languagename }})</label>
                            <textarea class="form-control summernote {{ $errors->has('faqparasec') ? ' is-invalid' : '' }}" name="faqparasec" id="faqparasec"  placeholder="Enter FAQ Paragraph Text" rows="5" required="" autocomplete="off"><?php echo html_entity_decode($content->faqparasec); ?></textarea>
                            @if($errors->has('faqparasec'))
                            <span class="invalid-feedback" role="alert">
                                <strong>This value is required.</strong>
                            </span>
                            @endif
                    </div>
                    </div>
                @endif                          
 
<div class="row my-4 mx-auto"> 
    <div class="col-md-12">
        <button name="submit" type="submit" class="btn btn-success">Submit</button>
    </div>
</div>
</form>      
 