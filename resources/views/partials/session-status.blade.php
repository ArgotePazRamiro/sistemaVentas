@if (session('status'))
<div class="alert alert-primary d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>

    {{session('status')}}
    <button type="button" class="btn-close btn-close-black" data-dismisss="alert" aria-label="Close"></button>
        
</div>


   
@endif