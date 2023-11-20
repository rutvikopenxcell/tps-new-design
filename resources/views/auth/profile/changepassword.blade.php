@extends('common.main')
@section('content')
@section('css')
@include('common.includefile.css.parsley')
@endsection
<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Change Password</h5>
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
                  <div class="panel-body">         
					 @include('./common.alert')
                	 @include('./common.error')
					<form action="{{url('/password_update/').'/'.Auth::user()->id}}" method="post" enctype="multipart/form-data" data-parsley-validate="">
						@csrf
                        @method('put')
						<fieldset>
							<div class="row form-group">
								<label class="col-sm-3 control-label"><strong>Current Password</strong></label>
								<div class="col-sm-5">
									<input type="text"  class='form-control' name="cpassword" autocomplete="off" required="">
								</div>
							</div>
							<div class="row form-group">
								<label class="col-sm-3 control-label"><strong>New Password</strong></label>
								<div class="col-sm-5">
									<input class="form-control" type="password" name="password" value="" required="">
								</div>
							</div>
							<div class="row form-group">
								<label class="col-sm-3 control-label"><strong>Confirm Password</strong></label>
								<div class="col-sm-5">
									<input class="form-control" type="password" name="passconf" value="" required="">
									<small class="help-inline" id="passcon">(Must be same with 'New Password')</small>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-3"></div>
								<div class="col-sm-5">
									<button type="submit" class="ladda-button btn btn-outline-primary mr-2" data-style="expand-right">Update</button>
									  <a href="{{url('/')}}" title="Click here to go back" data-rel="tooltip"  class="ladda-button btn btn-outline-warning" data-style="expand-right">Back</a>
								</div>
							</div>
						</fieldset>
					</form>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection
@section('script')
@include('common.includefile.js.parsley')
@endsection