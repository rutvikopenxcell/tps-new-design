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
                        <h5>Language List</h5>
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
                                <th>ISO Code</th>
                                <th>Language Name</th>
                              </tr>
                        </thead>
                        <tbody>
                           @forelse($languagelist as $key=>$val)						   
                           <tr>
                               <td>{{$val->code}}</td>
                                <td>{{$val->name}}</td>
                             </tr>
                            @empty
                        <div>
                            No Records found.
                        </div>
                        @endforelse
                        </tbody>
                        <tfoot>
                           <th>ISO Code</th>
                           <th>Language Name</th>
                        </tfoot>
                    </table>
                </div>
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