@extends('common.main') 
@section('css')
@include('common.includefile.css.datatable')
@endsection
@section('content')
   <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Country Language List   <a href="{{url('create-country-lang-list')}}" class="btn btn-outline-secondary btn-sm" role="button"> <i class="fa fa-plus-square-o"></i> Add New Records</a></h5>
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
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" style="font-size:12px">
                        <thead>
                            <tr>                              
                                <th>Action</th>
                                <th>Language Culture</th>
                                <th>Language Name</th>
                                <th>Language Code</th>
                                <th>Country</th>
                                <th>Country Code</th>
                                <th>Updated At</th>
                                <th>Created At</th>
                              </tr>
                        </thead>
                        <tbody>
                        @if(!empty($countrylanglist))
                         <?php foreach($countrylanglist as $val){ ?>					   
                         <tr>
                               
                               <td>
                                    
                                @if($val->languagecode!='en')

                                 @if($val->dualoption==0)
                                       <?php /*?>                        

                                   <a href="{{url('update-dualoption/'.$val->id.'/1')}}" title="Activate Dual Option"><i class="fa fa-check"></i></a>
                                 <?php  */?>     


                                 @else
                                  <?php /*?>  
                                 <a href="{{url('update-dualoption/'.$val->id.'/0')}}" title="Deactivate Dual Option"><i class="fa fa-remove"></i></a>
                                 <?php  */?>     
                                 <button class="btn btn-success btn-xs mb-2" style="font-size: 8px;">Dual</button>
                                 @endif
                                 <br>
                                @endif                               
                               
                                <a href="{{url('frontendhomecms/'.$val->languageculture)}}" class="btn btn-warning btn-sm mb-2" role="button" style="padding: 2px 4px;font-size: 9px;font-weight: 500" target="_blank">Add/Update <br>FrontEnd Content </a>
                               </td>
                               <td>{{$val->languageculture}}</td>
                               <td>{{$val->languagename}}</td>
                               <td>{{$val->languagecode}}</td>
                               <td>{{$val->countryname}}</td>
                                <td>{{$val->countrycode}}</td> 
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
                                <th>Language Culture</th>
                                <th>Language Name</th>
                                <th>Language Code</th>
                                <th>Country</th>
                                <th>Country Code</th>
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
@include('common.includefile.js.datatable') 
@endsection