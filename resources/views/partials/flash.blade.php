
@if(session()->has('flash_message'))
<div class="alert alert-{{session('flash_level_message')}}" role="alert">
    {{ session('flash_message') }}
</div>
@endif