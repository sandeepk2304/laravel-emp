@extends('layout')
@section('content')
    <div class="starter-template">
            <div class="row">
                    <div class="col-sm-12">
                    <h1 class="display-3">{{$pageTitle}}</h1>
                    <a href="{{route('employees.create')}}" class="btn btn-primary">Add New</a> 
                      <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Dob</th>
                                <th>phone</th>
                                <th>salary</th>
                                <th>status</th>
                                <th colspan = 2>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($employees->isNotEmpty())
                              @foreach($employees as $employe)
                              <tr>
                                  <td>{{$employe->id}}</td>
                                  <td>{{$employe->name}}</td>
                                  <td>{{$employe->email}}</td>
                                  <td>{{$employe->deptName}}</td>
                                  <td>{{$employe->dob}}</td>
                                  <td>{{$employe->phone}}</td>
                                  <td>{{$employe->salary}}</td>
                                  <td>{{$employe->status}}</td>
                                  <td>
                                      <a href="{{ route('employees.edit',$employe->id)}}" class="btn btn-primary">Edit</a>
                                  </td>
                                  <td>
                                      <form action="{{ route('employees.destroy', $employe->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                      </form>
                                  </td>
                              </tr>
                              @endforeach
                            @else
                                <tr><td colspan="9">No Record Found</td></tr>
                            @endif
                            
                        </tbody>
                      </table>
                      {{ $employees->links() }}
                    <div>
                    </div>
    </div>
@endsection
