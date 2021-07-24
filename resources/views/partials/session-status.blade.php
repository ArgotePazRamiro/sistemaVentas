@if (session('status'))
<div class="alert alert-primary d-flex align-items-center {{session('tipo') ? session("tipo") : "info"}}" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    {{session('status')}}
    
    <button type="button" class="btn-close end" data-bs-dismiss="alert" aria-label="Close"></button>
    
        
</div>


   
@endif