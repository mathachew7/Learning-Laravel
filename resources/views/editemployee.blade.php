@extends('layouts.app')
<h1 class="card-header" align="center">Edit Employee Information</h1>
<form action="{{route('employee.update.data')}}" class="needs-validation" method="post" novalidate enctype="multipart/form-data">
    @csrf  
    <div class="container">
        <div class="form-row">
        <div class="form-group col-md-6">
                <label>ID</label>
                <input type="text" name="id" class="form-control" value={{$emp->id}} readonly>
            </div>
            <div class="form-group col-md-6">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value={{$emp->name}}>
            </div>
            <div class="form-group col-md-6">
                <label >Email</label>
                <input type="email" name="email"class="form-control" value={{$emp->email}}>
            </div>

            <div class="form-group col-md-6">
                <label >DOB</label>
                <input type="date" name="dob" class="form-control" value={{$emp->dob}}>
            </div>
            <div class="form-group col-md-6">
                <label>Gender</label>
                <input type="text" name="gender" class="form-control" value={{$emp->gender}}>
            </div>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address"class="form-control" value={{$emp->address}}>
            </div>
            <div class="form-group">
                <label >Phone</label>
                <input type="number" name="phone" class="form-control" value={{$emp->phone}} >
            </div>
            <div class="form-group">
                <label>Salary</label>
                <input type="number" name="salary" class="form-control" value={{$emp->salary}}>
            </div>
            
  <button type="submit" class="btn btn-primary" align="center">Update</button>
  </div>
</form>