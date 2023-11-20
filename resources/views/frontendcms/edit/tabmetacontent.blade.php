
<form class="needs-validation" method="POST" action="{{url('/updatemetacontentfrontendcms'.'/'.$countrylanguage->languageculture.'?taboption=14')}}" id="answer-form" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
    @method('put')
    @csrf       
        <div class="form-row">  
                <div class="col-md-12 mb-3"> 
                    <label  class="col-form-label" for="metacontent">Meta Content</label>
                    <textarea class="form-control  {{ $errors->has('metacontent') ? ' is-invalid' : '' }}" name="metacontent" id="metacontent"  placeholder="Enter The Meta Content" rows="15" required=""  autocomplete="off"><?php echo html_entity_decode($content->metacontent); ?></textarea>      
                          
                    @if($errors->has('metacontent'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
                </div>
                </div>
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="form-row"> 
                    <div class="col-md-12 mb-3"> 
                            <label  class="col-form-label" for="metacontentsec">Meta Content ({{ $countrylanguage->languagename }})</label>
                            <textarea class="form-control  {{ $errors->has('metacontentsec') ? ' is-invalid' : '' }}" name="metacontentsec" id="metacontentsec"  placeholder="Enter Meta Content" rows="15" required="" autocomplete="off"><?php echo html_entity_decode($content->metacontentsec); ?></textarea>
                            @if($errors->has('metacontentsec'))
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
