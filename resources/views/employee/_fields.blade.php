<?php
$statusArray = [
    'Active',
    'Inactive'
] 
?>
<div class="form-group">    
    <label for="photo">Photo:</label>
    <input type="file" class="form-control" name="photo"/>
    @if( !empty( $employee->photo ) )
        <div class="clearfix m-b-sm">
            <img src="{{asset('images/'.$employee->photo)}}" width="150">
        </div>
    @endif
</div>

<div class="form-group">    
    <label for="first_name">Name:</label>
    <input type="text" class="form-control" name="name" value="{{  !empty( $employee->name ) ? $employee->name : old('name') }}"/>
</div>

<div class="form-group">
    <label for="department_id">Department:</label>
    <select class="form-control" name="department_id">
        <option value="">--Select--</option>
        @foreach ($departments as $department)
            <option {{  !empty( $employee->department_id ) && $employee->department_id == $department->id ? 'selected="selected"' : '' }} value="{{ $department->id }}">{{ $department->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" name="email" value="{{  !empty( $employee->email ) ? $employee->email : old('email') }}"/>
</div>
<div class="form-group">
        <label for="country">Phone:</label>
        <input type="text" class="form-control" name="phone" value="{{  !empty( $employee->phone ) ? $employee->phone : old('phone') }}"/>
</div>
<div class="form-group">
    <label for="city">DOB:</label>
    <input type="text" class="form-control dob" name="dob" value="{{  !empty( $employee->dob ) ? date('d-m-Y',strtotime($employee->dob)) : old('dob') }}"/>
</div>
<div class="form-group">
    <label for="country">Salary:</label>
    <input type="text" class="form-control" name="salary" value="{{  !empty( $employee->salary ) ? $employee->salary : old('salary') }}"/>
</div>
<div class="form-group">
        <label for="status">Status:</label>
        <select class="form-control" name="status">
            <option value="1" {{  $employee && $employee->status == 1 ? 'selected="selected"' : '' }}>Active</option>
            <option value="0" {{  $employee && $employee->status == 0 ? 'selected="selected"' : '' }}>InActive</option>
        </select>
</div>
@section('style')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $('.dob').datepicker({
                dateFormat: 'dd-mm-yy'
            });        
        });
    </script>    
@endsection
