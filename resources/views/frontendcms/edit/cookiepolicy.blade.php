<form class="needs-validation" method="POST" action="{{url('/updatecookiepolicyfrontendcms'.'/'.$countrylanguage->languageculture.'?taboption=17')}}" id="answer-form" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
    @method('put')
    @csrf

    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label class="col-form-label" for="termsandconditiontext">Cookie & Policy</label>
            <textarea class="form-control summernote {{ $errors->has('termsandconditiontext') ? ' is-invalid' : '' }}" name="termsandconditiontext" id="termsandconditiontext" placeholder="Enter The Terms And Condition Paragraph Text" rows="5" required="" autocomplete="off"><?php echo html_entity_decode($content->termsandconditiontext); ?></textarea>

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
            <label class="col-form-label" for="termsandconditiontextsec">Terms And Condition Paragraph ({{ $countrylanguage->languagename }})</label>
            <textarea class="form-control summernote {{ $errors->has('termsandconditiontextsec') ? ' is-invalid' : '' }}" name="termsandconditiontextsec" id="termsandconditiontextsec" placeholder="Enter Terms And Condition Paragraph Text" rows="5" required="" autocomplete="off"><?php echo html_entity_decode($content->termsandconditiontextsec); ?></textarea>
            @if($errors->has('termsandconditiontextsec'))
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