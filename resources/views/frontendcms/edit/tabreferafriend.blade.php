
<form class="needs-validation" method="POST" action="{{url('/updatereferafriendfrontendcms'.'/'.$countrylanguage->languageculture.'?taboption=13') }}" id="answer-form" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
    @method('put')
    @csrf   

            <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="headertext">Refer A Friend</label>
                       <input type="text" class="form-control" name="headertext" id="headertext"  placeholder="Refer A Friend" value="<?php echo html_entity_decode($content->headertext); ?>" required="" autocomplete="off">
                        @if($errors->has('headertext'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="headertextsec">Refer A Friend ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="headertextsec" id="headertextsec"  placeholder="Refer A Friend ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->headertextsec); ?>" required="" autocomplete="off">
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
                        <label  class="col-form-label" for="subheadertext">Register, Refer, Earn!  It’s that simple!!</label>
                       <input type="text" class="form-control" name="subheadertext" id="subheadertext"  placeholder="Register, Refer, Earn!  It’s that simple!!" value="<?php echo html_entity_decode($content->subheadertext); ?>" required="" autocomplete="off">
                        @if($errors->has('subheadertext'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="subheadertextsec">Register, Refer, Earn!  It’s that simple!! ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="subheadertextsec" id="subheadertextsec"  placeholder="Register, Refer, Earn!  It’s that simple!! ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->subheadertextsec); ?>" required="" autocomplete="off">
                        @if($errors->has('subheadertextsec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>

                <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="login">Login</label>
                       <input type="text" class="form-control" name="login" id="login"  placeholder="Login" value="<?php echo html_entity_decode($content->login); ?>" required="" autocomplete="off">
                        @if($errors->has('login'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="loginsec">Login ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="loginsec" id="loginsec"  placeholder="Login ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->loginsec); ?>" required="" autocomplete="off">
                        @if($errors->has('loginsec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>   


                <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="signup">Sign-Up</label>
                       <input type="text" class="form-control" name="signup" id="signup"  placeholder="Sign-Up" value="<?php echo html_entity_decode($content->signup); ?>" required="" autocomplete="off">
                        @if($errors->has('signup'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
              
               </div>  @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 <div class="col-md-6 mb-3"> 
                        <label  class="col-form-label" for="signupsec">Sign-Up ({{ $countrylanguage->languagename }})</label>
                       <input type="text" class="form-control" name="signupsec" id="signupsec"  placeholder="Sign-Up ({{ $countrylanguage->languagename }})" value="<?php echo html_entity_decode($content->signupsec); ?>" required="" autocomplete="off">
                        @if($errors->has('signupsec'))
                        <span class="invalid-feedback" role="alert">
                            <strong>This value is required.</strong>
                        </span>
                        @endif
                 </div>
                @endif   

               </div>   
         
    
           <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                    <label  class="col-form-label" for="mobilepara">Mobile Paragraph</label>
                    <textarea class="form-control summernote {{ $errors->has('mobilepara') ? ' is-invalid' : '' }}" name="mobilepara" id="mobilepara"  placeholder="Enter The Mobile Paragraph" rows="5" required=""  autocomplete="off"><?php echo html_entity_decode($content->mobilepara); ?></textarea>      
                          
                    @if($errors->has('mobilepara'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
                </div>
                
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 
                    <div class="col-md-6 mb-3"> 
                            <label  class="col-form-label" for="mobileparasec">Mobile Paragraph ({{ $countrylanguage->languagename }})</label>
                            <textarea class="form-control summernote {{ $errors->has('mobileparasec') ? ' is-invalid' : '' }}" name="mobileparasec" id="mobileparasec"  placeholder="Enter Mobile Paragraph" rows="5" required="" autocomplete="off"><?php echo html_entity_decode($content->mobileparasec); ?></textarea>
                            @if($errors->has('mobileparasec'))
                            <span class="invalid-feedback" role="alert">
                                <strong>This value is required.</strong>
                            </span>
                            @endif
                    </div>
                   
                @endif 

             </div>  

     
              <div class="form-row">  
                <div class="col-md-6 mb-3"> 
                    <label  class="col-form-label" for="para">Book Paragraph</label>
                    <textarea class="form-control summernote {{ $errors->has('para') ? ' is-invalid' : '' }}" name="para" id="para"  placeholder="Enter The Book Paragraph" rows="5" required=""  autocomplete="off"><?php echo html_entity_decode($content->para); ?></textarea>      
                          
                    @if($errors->has('para'))
                    <span class="invalid-feedback" role="alert">
                        <strong>This value is required.</strong>
                    </span>
                    @endif
                </div>
                
                @if($countrylanguage->languagecode!='en' && $countrylanguage->dualoption==1)
                 
                    <div class="col-md-6 mb-3"> 
                            <label  class="col-form-label" for="parasec">Book Paragraph ({{ $countrylanguage->languagename }})</label>
                            <textarea class="form-control summernote {{ $errors->has('parasec') ? ' is-invalid' : '' }}" name="parasec" id="parasec"  placeholder="Enter Book Paragraph" rows="5" required="" autocomplete="off"><?php echo html_entity_decode($content->parasec); ?></textarea>
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
                    <a href="{{url('country-lang-list); ?>" class="btn btn-success">Go To Back</a>
                </div>
        </div>                              
</form>  
