@extends('layouts.app')
<h1 class="card-header" align="center">Employee Information Form</h1>
<form action="{{route('employee.register')}}" class="needs-validation" method="post" novalidate enctype="multipart/form-data">
    @csrf  
    <div class="container">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group col-md-6">
                <label >Email</label>
                <input type="email" name="email"class="form-control" placeholder="Email">
            </div>

            <div class="form-group col-md-6">
                <label >DOB</label>
                <input type="date" name="dob" class="form-control" placeholder="DOB">
            </div>
            <div class="form-group col-md-6">
                <label>Gender</label>
                <input type="text" name="gender" class="form-control" placeholder="Gender">
            </div>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address"class="form-control" placeholder="1234 Main St">
            </div>
            <div class="form-group">
                <label >Phone</label>
                <input type="number" name="phone" class="form-control" placeholder="98-000-000-00">
            </div>
            <div class="form-group">
                <label>Salary</label>
                <input type="number" name="salary" class="form-control" placeholder="10000000">
            </div>
            
  <button type="submit" class="btn btn-primary" align="center">Register</button>
  </div>
</form>