@extends('admin.layouts.app')
@section('title', 'Users')
@section('content')
    <div class="card">
        <div class="card-header">
            User List
        </div>
        <div class="card-body">
            <table class='table table-striped' id="table1">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Test User</td>
                    <td>test@email.com</td>
                    <td>
                        <span class="badge bg-primary">Details</span>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
