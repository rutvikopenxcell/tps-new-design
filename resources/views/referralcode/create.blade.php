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
                <h5>ReferralCode & OTP (English)</h5>
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
                 @if(empty($content))
                <form class="needs-validation" method="POST" action="{{ url('storereferralcode') }}" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
                @csrf
                  
                    <div class="form-row">   
                        <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="otpsent" id="otpsent" placeholder="OTP has been sent to" value="" required="" autocomplete="off">  
                        </div> 

                          <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="referracodeoptional" id="referracodeoptional" placeholder="Referral Code (Optional)" value="" required="" autocomplete="off">  
                         </div>    

                    </div>

                     <div class="form-row">   
                        <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="enterreferralcode" id="enterreferralcode" placeholder="Enter Referral Code" value="" required="" autocomplete="off">  
                        </div> 

                          <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="mobileverified" id="mobileverified" placeholder="Mobile number verified" value="" required="" autocomplete="off">  
                         </div>    

                    </div>  

                     <div class="form-row">   
                        <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="referralcode" id="referralcode" placeholder="Referral Code" value="" required="" autocomplete="off">  
                        </div> 

                          <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="applyoptional" id="applyoptional" placeholder="Apply (Optional)" value="" required="" autocomplete="off">  
                         </div>    

                    </div> 


                    <div class="form-row">   
                        <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="referralcodeexpired" id="referralcodeexpired" placeholder="Referral code expired !!" value="" required="" autocomplete="off">  
                        </div> 

                          <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="referralcodeapplied" id="referralcodeapplied" placeholder="Referral Code Applied Sucessfully" value="" required="" autocomplete="off">  
                         </div>    

                    </div>  

                     <div class="form-row">   
                        <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="referralcodeinvalid" id="referralcodeinvalid" placeholder="Referral code invalid" value="" required="" autocomplete="off">  
                        </div> 

                          <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="notreceived" id="notreceived" placeholder="Not received your code?" value="" required="" autocomplete="off">  
                         </div>    

                    </div> 


                     <div class="form-row">   
                        <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="resendotp" id="resendotp" placeholder="Resend OTP" value="" required="" autocomplete="off">  
                        </div> 

                          <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="verify" id="verify" placeholder="Verify" value="" required="" autocomplete="off">  
                         </div>    

                    </div>      
                    
                    <div class="form-row">                     
                            <div class="col-md-4 mb-3">                 
                                <button class="btn btn-primary" type="submit">Submit</button>
                             </div>
                    </div> 
                </form>  
                @else

                         <div class="form-row">   
                        <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" value="{{$content->otpsent}}" readonly="readonly">  
                        </div> 

                          <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" value="{{$content->referracodeoptional}}" readonly="readonly">  
                         </div>    

                    </div>

                     <div class="form-row">   
                        <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" value="{{$content->enterreferralcode}}" readonly="readonly">  
                        </div> 

                          <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" value="{{$content->mobileverified}}" readonly="readonly">  
                         </div>    

                    </div>  

                     <div class="form-row">   
                        <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" value="{{$content->referralcode}}" readonly="readonly">  
                        </div> 

                          <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" value="{{$content->applyoptional}}" readonly="readonly">  
                         </div>    

                    </div> 


                    <div class="form-row">   
                        <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" value="{{$content->referralcodeexpired}}" readonly="readonly">  
                        </div> 

                          <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" value="{{$content->referralcodeapplied}}" readonly="readonly">  
                         </div>    

                    </div>  

                     <div class="form-row">   
                        <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control"  value="{{$content->referralcodeinvalid}}" readonly="readonly">  
                        </div> 

                          <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" value="{{$content->notreceived}}" readonly="readonly">  
                         </div>    

                    </div> 


                     <div class="form-row">   
                        <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control"  value="{{$content->resendotp}}" readonly="readonly">  
                        </div> 

                          <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control"  value="{{$content->verify}}" readonly="readonly">  
                         </div>    

                    </div>      
                    
                    <div class="form-row">                     
                            <div class="col-md-4 mb-3">  
                             <a href="{{url('editreferralcode/'.$content->id)}}" class="btn btn-primary" title="Edit" role="button"><i class="fa fa-edit"></i> Edit</a>  
                              <a href="{{url('addreferralcodetranslation/'.$content->id)}}" title="Add Translation" class="btn btn-primary" role="button"><i class="fa fa-plus"></i>Add Translation</a>             
                             </div>
                    </div>  
                 
                @endif 


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
 