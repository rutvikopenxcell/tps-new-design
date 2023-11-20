@extends('common.main') 
@section('css')
@include('common.includefile.css.datatable')
@include('common.includefile.css.select2')
@include('common.includefile.css.parsley')
@endsection
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Refferral Code & OTP Translation [ID : {{$referralcode->id}} ] <a href="{{url('referralcode')}}" class="btn btn-outline-success btn-sm" role="button"> <i class="fa fa-plus-square-o"></i> Go Back</a></h5>
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
                @if(!empty($languagelist[0]))
                <form class="needs-validation" method="POST" action="{{ url('storereferralcodetranslation/'.$referralcode->id) }}" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
                @csrf
                
                     <div class="form-row">   
                        <div class="col-md-4 mb-3"> 
                              <select class="singleselect form-control" name="languagename" required="">
                                    <option value="">Select Language</option>
                                    @foreach($languagelist as $val)    
                                    <option value="{{$val->code}}">{{$val->name.' ('.$val->code.')'}}</option> 
                                     @endforeach
                                </select>
                        </div>
                    </div>
                      <div class="form-row">   
                        <div class="col-md-6 mb-3">                               
                                <input type="text" class="form-control" name="otpsent" id="otpsent" placeholder="OTP has been sent to" value="" required="" autocomplete="off">
                                <input type="hidden" name="referralcodeid" value="{{$referralcode->id}}">   
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
                @endif

                 <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" style="font-size:12px">
                        <thead>
                            <tr>                              
                                <th>Action</th>                              
                                <th>Language </th>                                                        
                                <th>Updated At</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(!empty($referralcodetranslation))
                         <?php foreach($referralcodetranslation as $val){ ?>                       
                         <tr>                               
                               <td>                                    
                                <a href="{{url('editreferralcodetranslation/'.$val->referralcodeid.'/'.$val->id)}}" title="Edit"><i class="fa fa-edit"></i></a>
                             
                               </td>
                                <td>                                    
                              {{$val->languagename.' ('.$val->languagecode.')'}}
                               </td>                                                        
                                 <td>{{ Carbon\Carbon::parse($val->updated_at)->format('d-M-Y H:i:s A') }}</td>
                                <td>{{ Carbon\Carbon::parse($val->created_at)->format('d-M-Y H:i:s A') }}</td>
                              
                             </tr>
                            <?php } ?>
                            @else 
                        <div>
                            No Records found.
                        </div>
                            @endif 
                        </tbody>
                        <tfoot>
                             <tr>                              
                                <th>Action</th>                                                            
                                <th>Updated At</th>
                                <th>Created At</th>
                              </tr>
                        </tfoot>
                    </table>
                </div>      
        </div>
   </div>
</div>
</div>
</div>
@endsection
@section('script')
@include('common.includefile.js.select2')
@include('common.includefile.js.datatable')
@include('common.includefile.js.parsley')
@endsection
 