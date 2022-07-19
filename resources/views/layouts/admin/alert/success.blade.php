@if(session('success') ?? '' )
<div class="alert alert-success ">
    <span class="font-weight-semibold">{{__('home.Well done')}}</span> {{session('success') ?? ''}}.
</div>
@endif
