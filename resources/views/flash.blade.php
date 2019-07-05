@if (session('status') === true)
    <div class="alert alert-success"> {{ session('msg') }} </div>
@endif