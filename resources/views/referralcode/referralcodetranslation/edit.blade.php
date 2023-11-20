@extends('common.main') 
@section('css')
@include('common.includefile.css.datatable')
@include('common.includefile.css.parsley')
@endsection
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Update Refferral Code & OTP  [ID : {{$referralcode->id}} ] Translation in  {{ $referralcodetranslation->languagename.' ('.$referralcodetranslation->languagecode.')' }} 
                  <a href="{{url('addreferralcodetranslation/'.$referralcode->id)}}" class="btn btn-outline-success btn-sm" role="button"> <i class="fa fa-plus-square-o"></i> Go Back</a></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                   <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
         <div class="ibox-content">
                @include('./common.alert')
                @include('./common.error')
                <form class="needs-validation" method="POST" action="{{ url('updatereferralcodetranslation/'.$referralcodetranslation->referralcodeid.'/'.$referralcodetranslation->id) }}" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
                @method('put')
                @csrf

                         <div class="form-row">   
                        <div class="col-md-6 mb-3"> 
                               <label for="otpsent"><?php echo html_entity_decode($referralcode->otpsent); ?></label> 
                               <input type="text" class="form-control" name="otpsent" id="otpsent" placeholder="OTP has been sent to" value="<?php echo html_entity_decode($referralcodetranslation->otpsent); ?>" required="" autocomplete="off">  
                        </div> 

                          <div class="col-md-6 mb-3">       
                               <label for="referracodeoptional"><?php echo html_entity_decode($referralcode->referracodeoptional); ?></label> 

                                <input type="text" class="form-control" name="referracodeoptional" id="referracodeoptional" placeholder="Referral Code (Optional)" value="<?php echo html_entity_decode($referralcodetranslation->referracodeoptional); ?>" required="" autocomplete="off">  
                         </div>    

                    </div>

                     <div class="form-row">   
                        <div class="col-md-6 mb-3">  
                               <label for="enterreferralcode"><?php echo html_entity_decode($referralcode->enterreferralcode); ?></label> 

                                <input type="text" class="form-control" name="enterreferralcode" id="enterreferralcode" placeholder="Enter Referral Code" value="<?php echo html_entity_decode($referralcodetranslation->enterreferralcode); ?>" required="" autocomplete="off">  
                        </div> 

                          <div class="col-md-6 mb-3">   
                               <label for="mobileverified"><?php echo html_entity_decode($referralcode->mobileverified); ?></label> 

                                <input type="text" class="form-control" name="mobileverified" id="mobileverified" placeholder="Mobile number verified" value="<?php echo html_entity_decode($referralcodetranslation->mobileverified); ?>" required="" autocomplete="off">  
                         </div>    

                    </div>  

                     <div class="form-row">   
                        <div class="col-md-6 mb-3"> 
                               <label for="referralcode"><?php echo html_entity_decode($referralcode->referralcode); ?></label> 

                                <input type="text" class="form-control" name="referralcode" id="referralcode" placeholder="Referral Code" value="<?php echo html_entity_decode($referralcodetranslation->referralcode); ?>" required="" autocomplete="off">  
                        </div> 

                          <div class="col-md-6 mb-3">     
                            <label for="applyoptional"><?php echo html_entity_decode($referralcode->applyoptional); ?></label>                           
                                <input type="text" class="form-control" name="applyoptional" id="applyoptional" placeholder="Apply (Optional)" value="<?php echo html_entity_decode($referralcodetranslation->applyoptional); ?>" required="" autocomplete="off">  
                         </div>    

                    </div> 


                    <div class="form-row">   
                        <div class="col-md-6 mb-3">
                            <label for="referralcodeexpired"><?php echo html_entity_decode($referralcode->referralcodeexpired); ?></label>                           

                                <input type="text" class="form-control" name="referralcodeexpired" id="referralcodeexpired" placeholder="Referral code expired !!" value="<?php echo html_entity_decode($referralcodetranslation->referralcodeexpired); ?>" required="" autocomplete="off">  
                        </div> 

                          <div class="col-md-6 mb-3">  
                            <label for="referralcodeapplied"><?php echo html_entity_decode($referralcode->referralcodeapplied); ?></label>                           

                                <input type="text" class="form-control" name="referralcodeapplied" id="referralcodeapplied" placeholder="Referral Code Applied Sucessfully" value="<?php echo html_entity_decode($referralcodetranslation->referralcodeapplied); ?>" required="" autocomplete="off">  
                         </div>    

                    </div>  

                     <div class="form-row">   
                        <div class="col-md-6 mb-3"> 
                            <label for="referralcodeinvalid"><?php echo html_entity_decode($referralcode->referralcodeinvalid); ?></label>                           

                                <input type="text" class="form-control" name="referralcodeinvalid" id="referralcodeinvalid" placeholder="Referral code invalid" value="<?php echo html_entity_decode($referralcodetranslation->referralcodeinvalid); ?>" required="" autocomplete="off">  
                        </div> 

                          <div class="col-md-6 mb-3"> 
                            <label for="notreceived"><?php echo html_entity_decode($referralcode->notreceived); ?></label>                           

                                <input type="text" class="form-control" name="notreceived" id="notreceived" placeholder="Not received your code?" value="<?php echo html_entity_decode($referralcodetranslation->notreceived); ?>" required="" autocomplete="off">  
                         </div>    

                    </div> 


                     <div class="form-row">   
                        <div class="col-md-6 mb-3">   
                        <label for="resendotp"><?php echo html_entity_decode($referralcode->resendotp); ?></label>                            
                                <input type="text" class="form-control" name="resendotp" id="resendotp" placeholder="Resend OTP" value="<?php echo html_entity_decode($referralcodetranslation->resendotp); ?>" required="" autocomplete="off">  
                        </div> 

                          <div class="col-md-6 mb-3">  
                               <label for="verify"><?php echo html_entity_decode($referralcode->verify); ?></label>                            

                                <input type="text" class="form-control" name="verify" id="verify" placeholder="Verify" value="<?php echo html_entity_decode($referralcodetranslation->verify); ?>" required="" autocomplete="off">  
                         </div>    

                    </div>  
                    <div class="form-row">                     
                            <div class="col-md-4 mb-3">                 
                                <button class="btn btn-primary" type="submit">Submit</button>
                             </div>
                    </div> 
                </form>  


                  
        </div>
   </div>
</div>
</div>
</div>
@endsection 
@section('script')
@include('common.includefile.js.datatable')
@include('common.includefile.js.parsley')
@endsection
 