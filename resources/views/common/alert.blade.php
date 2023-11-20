@if(session('status'))
<div class="alert-dismiss">
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('status')}}
   <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
</div>
</div>
@elseif(session('success'))
<div class="alert-dismiss">
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}}
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
</div>
</div>
@elseif(session('info'))
<div class="alert-dismiss">
<div class="alert alert-info alert-dismissible fade show" role="alert">
    {{session('info')}}
   <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
</div>
</div>
@elseif(session('warning'))
<div class="alert-dismiss">
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{session('warning')}}
   <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
</div>
</div>
@elseif(session('error'))
<div class="alert-dismiss">
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{session('error')}}
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
</div>
</div>
@endif