@extends('layout')
@section('content')  
<div class="container">  
<div class="row">
        <div class="col-md-8 col-md-offset-2">
           <h1>{{$pageTitle}}</h1>
         <div>
           @if ($errors->any())
             <div class="alert alert-danger">
               <ul>
                   @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                   @endforeach
               </ul>
             </div><br />
           @endif
             <form method="post" enctype="multipart/form-data" action="{{ route('employees.store') }}" class="form-horizontal">
                 @csrf
                 @include('employee._fields')                         
                 <button type="submit" class="btn btn-primary">Add</button>
             </form>
         </div>
       </div>
       </div>
</div>
@endsection
