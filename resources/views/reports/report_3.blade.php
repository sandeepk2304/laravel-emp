@extends('layout')
@section('content')
    <div class="starter-template">
            <div class="row">
                    <div class="col-sm-12">
                    <h1 class="display-3">{{$pageTitle}}</h1>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Department</th>
                              <th>Age</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($employees->isNotEmpty())
                              @foreach($employees as $employe)
                              <tr>
                                  <td>{{$employe->id}}</td>
                                  <td>{{$employe->name}}</td>
                                  <td>{{$employe->deptName}}</td>
                                  <td>{{$employe->age}}</td>
                              </tr>
                              @endforeach
                            @else
                            <tr><td colspan="4" align="center">No Record Found</td></tr>
                            @endif
                        </tbody>
                      </table>
                    <div>
          </div>
    </div>
@endsection
