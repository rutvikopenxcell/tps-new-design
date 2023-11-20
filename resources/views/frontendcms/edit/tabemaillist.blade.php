<form class="needs-validation" method="POST" action="{{url('/updateemaillistfrontendcms'.'/'.$countrylanguage->languageculture.'?taboption=8') }}" id="answer-form" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
    @method('put')
    @csrf
       <div class="form-row">  
                 <div class="col-md-4 mb-3"> 
                    <label  class="col-form-label" for="contactusemail">Contact Us Email</label>
                   <input type="email" class="form-control" name="contactusemail" id="contactusemail"  placeholder="Enter Contact Us Email" value="<?php echo html_entity_decode($content->contactusemail); ?>" required="" autocomplete="off">
                    @if($errors->has('contactusemail'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
            </div>
            <div class="col-md-4 mb-3"> 
                    <label  class="col-form-label" for="partnerwithusemail">Partner With Us Us Email</label>
                   <input type="email" class="form-control" name="partnerwithusemail" id="partnerwithusemail"  placeholder="Enter Partner With Us Us Email" value="<?php echo html_entity_decode($content->partnerwithusemail); ?>" required="" autocomplete="off">
                    @if($errors->has('partnerwithusemail'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
             </div>  
             </div>
             <div class="form-row">                 
                <div class="col-md-4 mb-3">                 
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <a href="{{url('country-lang-list); ?>" class="btn btn-success">Go To Back</a>
                </div>
        </div>                              
</form>  
