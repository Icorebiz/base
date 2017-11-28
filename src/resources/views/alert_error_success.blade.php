@if(Session::has('message_success'))
    <div class="alert alert-success alert-hide fade in text-align-center">
        <button class="close" data-dismiss="alert">
            ×
        </button>
        {{Session::get('message_success')}}
    </div>
@endif
@if(Session::has('message_error'))
    <div class="alert alert-danger alert-hide fade in text-align-center">
        <button class="close" data-dismiss="alert">
            ×
        </button>
        <strong>Error!</strong> {{Session::get('message_error')}}
    </div>
@endif