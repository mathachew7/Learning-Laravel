@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>List of Registered Employee</h4>
                    <span data-href="/demo/public/file-import-export" id="export" class="btn btn-success btn-sm" onclick="exportTasks(event.target);">Import-Export</span> 
                          
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>DOB</th>
                                <th>Phone</th>
                                <th>Salary</th>
                                <th>Address</th>
                                <th>Created Date</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employee as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>{{ $item->dob }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->salary }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                
                                    <form method="POST" action="{{route('employee.update',$item->id)}}">
                                    @csrf
                                    <button type="submit" class="btn btn-primary" data-toggle="modal" name="edit_btn">Edit</button>
                                
                                    </form>
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('employee.delete', $item->id) }}">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            Delete
                                            <i data-feather="delete"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
