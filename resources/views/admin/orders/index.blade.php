@extends('admin.layouts.app')
@section('title', 'Orders')
@section('content')
    <div class="card">
        <div class="card-header">
            Orders List
        </div>
        <div class="card-body">
            <table class='table table-striped' id="table1">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Order ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>123456</td>
                    <td>John Snow</td>
                    <td>Dragonstone</td>
                    <td>$123</td>
                    <td>
                        <span class="badge bg-primary">Details</span>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>123456</td>
                    <td>John Snow</td>
                    <td>Dragonstone</td>
                    <td>$123</td>
                    <td>
                        <span class="badge bg-primary">Details</span>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
