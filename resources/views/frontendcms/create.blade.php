@extends('common.main') 
@section('css')
 @include('common.includefile.css.parsley')
 @include('common.includefile.css.datatable')
 @include('common.includefile.css.summernote')
@endsection
@section('content')
<?php 
$menuhome=$menuaboutus=$menuhowitwork=$menuwhyus=$menumobileapp=$menucontactus=$menusociallink=$menupartnerwithus=$menufaq=$menuprivacypolicy=$menucookiepolicy=$menutermandcondition=$menulist=$menumetacontent=$menureferafriend=$menupagetitle=$menufooter='';
$booleanhome=$booleanaboutus=$booleanhowitwork=$booleanwhyus=$booleanmobileapp=$booleancontactus=$booleansociallink=$booleanpartnerwithus=$booleanfaq=$booleancookiepolicy=$booleanprivacypolicy=$booleantermandcondition=$booleanmenulist=$booleanmetacontent=$booleanreferafriend=$booleanpagetitle=$booleanfooter='false';
if(!isset($taboption)){
$menuhome='active';
$booleanhome='true';
}else if($taboption==1){
$menuhome='active';
$booleanhome='true';
}else if($taboption==2){
$menuaboutus='active';
$booleanaboutus='true';
}else if($taboption==3){
$menuhowitwork='active';
$booleanhowitwork='true';
}else if($taboption==4){
$menuwhyus='active';
$booleanwhyus='true';
}else if($taboption==5){
$menumobileapp='active';
$booleanmobileapp='true';
}else if($taboption==6){
$menucontactus='active';
$booleancontactus='true';
}else if($taboption==7){
$menusociallink='active';
$booleansociallink='true';
}else if($taboption==8){
$menupartnerwithus='active';
$booleanpartnerwithus='true';
}else if($taboption==9){
$menufaq='active';
$booleanfaq='true';
}else if($taboption==10){
$menuprivacypolicy='active';
$booleanprivacypolicy='true';
}else if($taboption==11){
$menutermandcondition='active';
$booleantermandcondition='true';
}else if($taboption==12){
$menulist='active';
$booleanmenulist='true';
}else if($taboption==13){
$menureferafriend='active';
$booleanreferafriend='true';
}else if($taboption==14){
$menumetacontent='active';
$booleanmetacontent='true';
}else if($taboption==15){
$menupagetitle='active';
$booleanpagetitle='true';
}else if($taboption==16){
$menufooter='active';
$booleanfooter='true';
}
else if($taboption==17){
$menucookiepolicy='active';
$booleancookiepolicy='true';
}else{
$menuhome='active';
$booleanhome='true';
}
?>
 
 <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Manage Front End Content  - Country : {{$countrylanguage->languagename}} <small>[ Language Culture : <b>{{$countrylanguage->languageculture}}</b>      | Dual Option : 
                             @if($countrylanguage->languagecode!='en')
                               @if($countrylanguage->dualoption==0) 
                               <span style="color:red"><b>N/A</b></span>
                                @else  
                                    <span style="color:red"><b>Active</b></span>
                                @endif  
                              @else
                              <span style="color:red"><b>N/A</b></span>                 
                              @endif ]</small></h5>
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
                      
                         @include('frontendcms.menu')
                        <div class="tab-content mt-3" id="myTabContent">
                                <div class="tab-pane fade show active">
                                        @include('./common.alert')
                                        @include('./common.error')
                                     @include('frontendcms.create.includefile')
                                </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            </div>
          
@endsection

@section('script')
 @include('common.includefile.js.parsley')
 @include('common.includefile.js.datatable') 
 @include('common.includefile.js.summernote')  
@endsection