@if($texto=Session::get("mensaje"))
<div class="my-3 alert alert-danger p-2" role="alert">
{{$texto}}
</div>
@endif
