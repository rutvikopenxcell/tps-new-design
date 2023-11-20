
<form class="needs-validation" method="POST" action="{{url('/updatecontactusfrontendcms'.'/'.$countrylanguage->languageculture.'?taboption=6')}}" id="answer-form" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
    @method('put')
    @csrf


           <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                    <label  class="col-form-label" for="headertext">Contact Us Header</label>
                    <textarea class="form-control  {{ $errors->has('headertext') ? ' is-invalid' : '' }}" name="headertext" id="headertext"  placeholder="Enter The Contact Us Header Text" rows="5" required=""  autocomplete="off"><?php echo html_entity_decode($content->headertext); ?></textarea>      
                          
                    @if($errors->has('headertext'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
                </div>
                
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 
                    <div class="col-md-6 mb-3"> 
                            <label  class="col-form-label" for="headertextsec">Contact Us Header ({{ $countrylanguage->languagename }})</label>
                            <textarea class="form-control  {{ $errors->has('headertextsec') ? ' is-invalid' : '' }}" name="headertextsec" id="headertextsec"  placeholder="Enter Contact Us Header Text" rows="5" required="" autocomplete="off"><?php echo html_entity_decode($content->headertextsec); ?></textarea>
                            @if($errors->has('headertextsec'))
                            <span class="invalid-feedback" role="alert">
                                <strong>This value is required.</strong>
                            </span>
                            @endif
                    </div>
                   
                @endif
                 </div>


                    <div class="form-row">  
                             <div class="col-md-4 mb-3"> 
                                <label  class="col-form-label" for="email">Contact Us Email</label>
                               <input type="email" class="form-control" name="email" id="email"  placeholder="Enter Contact Us Email" value="<?php echo html_entity_decode($content->email); ?>" required="" autocomplete="off">
                                @if($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>This value is required.</strong>
                                </span>
                                @endif
                        </div>
                   </div>


                 <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                    <label  class="col-form-label" for="para">Contact Us Paragraph</label>
                    <textarea class="form-control summernote {{ $errors->has('para') ? ' is-invalid' : '' }}" name="para" id="para"  placeholder="Enter The Contact Us Paragraph Text" rows="5" required=""  autocomplete="off"><?php echo html_entity_decode($content->para); ?></textarea>      
                          
                    @if($errors->has('para'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
                </div>
                
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 
                    <div class="col-md-6 mb-3"> 
                            <label  class="col-form-label" for="parasec">Contact Us Paragraph ({{ $countrylanguage->languagename }})</label>
                            <textarea class="form-control summernote {{ $errors->has('parasec') ? ' is-invalid' : '' }}" name="parasec" id="parasec"  placeholder="Enter Contact Us Paragraph Text" rows="5" required="" autocomplete="off"><?php echo html_entity_decode($content->parasec); ?></textarea>
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
