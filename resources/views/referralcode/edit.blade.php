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
                <h5>Referral Code & OTP (English)</h5>
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
                <form class="needs-validation" method="POST" action="{{ url('updatereferralcode/'.$content->id) }}" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
                @method('put')
                @csrf
                       <div class="form-row">   
                        <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="otpsent" id="otpsent" placeholder="OTP has been sent to" value="{{$content->otpsent}}" required="" autocomplete="off">  
                        </div> 

                          <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="referracodeoptional" id="referracodeoptional" placeholder="Referral Code (Optional)" value="{{$content->referracodeoptional}}" required="" autocomplete="off">  
                         </div>    

                    </div>

                     <div class="form-row">   
                        <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="enterreferralcode" id="enterreferralcode" placeholder="Enter Referral Code" value="{{$content->enterreferralcode}}" required="" autocomplete="off">  
                        </div> 

                          <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="mobileverified" id="mobileverified" placeholder="Mobile number verified" value="{{$content->mobileverified}}" required="" autocomplete="off">  
                         </div>    

                    </div>  

                     <div class="form-row">   
                        <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="referralcode" id="referralcode" placeholder="Referral Code" value="{{$content->referralcode}}" required="" autocomplete="off">  
                        </div> 

                          <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="applyoptional" id="applyoptional" placeholder="Apply (Optional)" value="{{$content->applyoptional}}" required="" autocomplete="off">  
                         </div>    

                    </div> 


                    <div class="form-row">   
                        <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="referralcodeexpired" id="referralcodeexpired" placeholder="Referral code expired !!" value="{{$content->referralcodeexpired}}" required="" autocomplete="off">  
                        </div> 

                          <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="referralcodeapplied" id="referralcodeapplied" placeholder="Referral Code Applied Sucessfully" value="{{$content->referralcodeapplied}}" required="" autocomplete="off">  
                         </div>    

                    </div>  

                     <div class="form-row">   
                        <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="referralcodeinvalid" id="referralcodeinvalid" placeholder="Referral code invalid" value="{{$content->referralcodeinvalid}}" required="" autocomplete="off">  
                        </div> 

                          <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="notreceived" id="notreceived" placeholder="Not received your code?" value="{{$content->notreceived}}" required="" autocomplete="off">  
                         </div>    

                    </div> 


                     <div class="form-row">   
                        <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="resendotp" id="resendotp" placeholder="Resend OTP" value="{{$content->resendotp}}" required="" autocomplete="off">  
                        </div> 

                          <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="verify" id="verify" placeholder="Verify" value="{{$content->verify}}" required="" autocomplete="off">  
                         </div>    

                    </div>      
                    
                    <div class="form-row">                     
                            <div class="col-md-4 mb-3">                 
                                <button class="btn btn-primary" type="submit">Submit</button>
                                  <a href="{{url('addreferralcodetranslation/'.$content->id)}}" title="Add Translation" class="btn btn-primary" role="button" target="_blank"><i class="fa fa-plus"></i>Add Translation</a>
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
<script type="text/javascript">

    $('.custom-file-input').on('change', function() {
   let fileName = $(this).val().split('\\').pop();
   $(this).next('.custom-file-label').addClass("selected").html(fileName);
}); 
    function ValidateExtension(){ 
            
        var allowedFiles = [".png"];
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$"); 
        var check=true; 
        if(document.getElementById("logo").files.length != 0){      
        
          if (!regex.test($("#logo").val().toLowerCase())){               
                alert("Please upload files having extensions: " + allowedFiles.join(', ') + " only.");
                check=false;
          } 
        
        if(check===true){
            return true;
        }else{
            return false;
        }
      }
    }   
</script>
@include('common.includefile.js.datatable')
@include('common.includefile.js.parsley')
@endsection
 