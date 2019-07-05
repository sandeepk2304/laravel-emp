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
            <img src="{{asset('images/'.$employee->photo)}}">
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
            <option value="{{ $department['id'] }}">{{ $department['name'] }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" name="email"/>
</div>
<div class="form-group">
        <label for="country">Phone:</label>
        <input type="text" class="form-control" name="phone"/>
</div>
<div class="form-group">
    <label for="city">DOB:</label>
    <input type="text" class="form-control" name="dob"/>
</div>
<div class="form-group">
    <label for="country">Salary:</label>
    <input type="text" class="form-control" name="country"/>
</div>
<div class="form-group">
        <label for="country">Phone:</label>
        <input type="text" class="form-control" name="phone"/>
</div>
<div class="form-group">
        <label for="status">Status:</label>
        <select class="form-control" name="status">
            <option value="1">Active</option>
            <option value="0">InActive</option>
        </select>
    </div>