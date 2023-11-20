 
@extends('common.main') 
@section('css')
<link href="{{ asset('public/assets/datatable/css/bootstrap.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('public/assets/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('public/assets/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('public/assets/datatable/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('public/assets/datatable/css/responsive.bootstrap.min.css') }}" rel="stylesheet" media="all">
@endsection
@section('content')
<?php 
$menuhome=$menuaboutus=$menuhowitwork=$menurewardssweep=$menumobileapp=$menucontactus=$menusociallink=$menuemaillist='';
if(!isset($taboption))
$menuhome='active';
else if($taboption==1)
$menuhome='active';
else if($taboption==2)
$menuaboutus='active';
else if($taboption==3)
$menuhowitwork='active';
else if($taboption==4)
$menurewardssweep='active';
else if($taboption==5)
$menumobileapp='active';
else if($taboption==6)
$menucontactus='active';
else if($taboption==7)
$menusociallink='active';
else if($taboption==8)
$menuemaillist='active';
else
$menuhome='active';
?>

<div class="row"> 
        <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3" style="    text-transform: none;">Manage Front End Content  - Country : {{$countrylanguage->languagename}} <small>[ Language Culture : <b>{{$countrylanguage->languageculture}}</b>      | Dual Option : 
                             @if($countrylanguage->languagecode!='en')
                               @if($countrylanguage->dualoption==0) 
                               <span style="color:red"><b>N/A</b></span>
                                @else  
                                    <span style="color:red"><b>Active</b></span>
                                @endif  
                              @else
                              <span style="color:red"><b>N/A</b></span>                 @endif ]</small> </h4>
                        <ul class="nav nav-tabs nav-pills nav-fill" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link {{$menuhome}}" id="menuhome-tab" data-toggle="tab" href="#menuhome" role="tab" aria-controls="menuhome" aria-selected="true">Home</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link {{$menuaboutus}}" id="menuaboutus-tab" data-toggle="tab" href="#menuaboutus" role="tab" aria-controls="menuaboutus" aria-selected="false">About Us</a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link {{$menuhowitwork}}" id="menuhowitwork-tab" data-toggle="tab" href="#menuhowitwork" role="tab" aria-controls="menuhowitwork" aria-selected="false">How it Works</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{$menurewardssweep}}" id="menurewardssweep-tab" data-toggle="tab" href="#menurewardssweep" role="tab" aria-controls="menurewardssweep" aria-selected="false">Rewards / Sweepstakes</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link {{$menumobileapp}}" id="menumobileapp-tab" data-toggle="tab" href="#menumobileapp" role="tab" aria-controls="menumobileapp" aria-selected="false">Mobile App</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link {{$menucontactus}}" id="menucontactus-tab" data-toggle="tab" href="#menucontactus" role="tab" aria-controls="menucontactus" aria-selected="false">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link {{$menusociallink}}" id="menusociallink-tab" data-toggle="tab" href="#menusociallink" role="tab" aria-controls="menusociallink" aria-selected="false">Social Link</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link {{$menuemaillist}}" id="menuemaillist-tab" data-toggle="tab" href="#menuemaillist" role="tab" aria-controls="menuemaillist" aria-selected="false">Email List</a>
                            </li>
                        </ul>
                        <div class="tab-content mt-3" id="myTabContent">
                            <div class="tab-pane fade show active" id="menuhome" role="tabpanel" aria-labelledby="menuhome-tab">
                            @if($countrylanguage->languagecode=='en')
                            <form class="needs-validation" method="POST" action="{{url('/storefrontendcms'.'/'.$countrylanguage->languageculture.'?taboption=1')}}" id="answer-form" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">  
                                                <div class="col-md-6 mb-3"> 
                                                <label  class="col-form-label" for="homebannertext1">Home Banner Text</label>
                                                   <textarea class="form-control" name="homebannertext1" id="homebannertext1"  placeholder="Enter The Home Banner Text" rows="5" required="" autocomplete="off"></textarea>
                                                </div>
                                                                             
                                             </div>  
                                             <div class="form-row">                     
                                                    <div class="col-md-4 mb-3">                 
                                                        <button class="btn btn-primary" type="submit">Submit</button>
                                                        <a href="{{url('country-lang-list')}}" class="btn btn-success">Go To Back</a>
                                                    </div>
                                                </div>                                   
                                         
                                    </form>  
                                    @else
                                    <form class="needs-validation" method="POST" action="" id="answer-form" novalidate="" data-parsley-validate="" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group"> 
                                            <label for="hometext" class="label-control">Home</label>
                                            <div class="col-md-4 mb-3">  
                                                <input type="text" class="form-control" name="hometext" id="hometext"  placeholder="Enter The " value="" required="" autocomplete="off">
                                            </div>
                                         </div>
                
                                                <div class="col-md-4 mb-3">
                                                        <input type="text" class="form-control" name="sec_answertag[]"  placeholder="Enter Other Language Value" value="" required="" autocomplete="off">
                                                 </div>
                                               <div class="col-md-4 mb-3">                 
                                                       <a onclick="addNewRow(this)" class="mr-3" title="Add"><i class="fa fa-plus fa-2x"></i></a>
                                               </div>
                                         </div>    
                                    </form>
                                    @endif
                            </div>
                            <div class="tab-pane fade" id="menuaboutus" role="tabpanel" aria-labelledby="menuaboutus-tab">
                                <p>About Us</p>
                            </div>
                            <div class="tab-pane fade" id="menuhowitwork" role="tabpanel" aria-labelledby="menuhowitwork-tab">
                                <p>How it Works</p>
                            </div>
                            <div class="tab-pane fade" id="menuhowitwork" role="tabpanel" aria-labelledby="menuhowitwork-tab">
                                    <p>Rewards / Sweepstakes</p>
                            </div>
                            <div class="tab-pane fade" id="menumobileapp" role="tabpanel" aria-labelledby="menumobileapp-tab">
                                    <p>Mobile App</p>
                            </div>
                            <div class="tab-pane fade" id="menucontactus" role="tabpanel" aria-labelledby="menucontactus-tab">
                                    <p>Contact Us</p>
                            </div>
                            <div class="tab-pane fade" id="menusociallink" role="tabpanel" aria-labelledby="menusociallink-tab">
                                    <p>Social Link</p>
                            </div>
                            <div class="tab-pane fade" id="menuemaillist" role="tabpanel" aria-labelledby="menuemaillist-tab">
                                    <p>Email List</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
@endsection

@section('script')
 <!-- Parsley Js Include -->
<script src="{{ asset('public/assets/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('public/assets/datatable/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('public/assets/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('public/assets/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('public/assets/datatable/js/jszip.min.js')}}"></script>
<script src="{{ asset('public/assets/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{ asset('public/assets/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{ asset('public/assets/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('public/assets/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('public/assets/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{ asset('public/assets/datatable/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{ asset('public/assets/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('public/assets/datatable/js/responsive.bootstrap.min.js')}}"></script>
<script src="{{ asset('public/assets/js/parsley.js')}}"></script>
<script>
$(document).ready(function() {
    var table = $('#table1').DataTable( {
        // lengthChange: false,
        // buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
        buttons: ['excel','csv']
    } );
 
    table.buttons().container()
        .appendTo( '#table1_wrapper .col-md-6:eq(0)' );
} );

</script>
@endsection