@if( $message = Session::get('success') )
    <div class="alert-success-div">
        <p>{{ $message }}</p>
    </div>
@endif

@if( $message = Session::get('danger') )
    <div class="alert-danger-div">
        <p>{{ $message }}</p>
    </div>
@endif
