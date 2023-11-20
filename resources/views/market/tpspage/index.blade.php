@extends('common.main')
@section('css')
@section('content')
<div class="container">
<form method="post" action="tpspage/update">
<button type="submit" class="btn btn-primary">Update</button>
<a class="btn btn-primary" href="tpspageview" target="_blank" >View</a>

<br></br>
    @csrf
 <textarea name="code" style="
    width: -webkit-fill-available;
    height: 2000px;
">
{!! $data->code !!}
</textarea>
<form>
</div>
@endsection
@section('script')
@endsection