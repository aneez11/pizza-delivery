@extends('admin.layouts.app')
@section('title', 'Products')
@section('content')
    <div class="card">
        <div class="card-header">
            Product List
        </div>
        <div class="card-body">
            <table class='table table-striped' id="table1">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Product ID</th>
                    <th>Name</th>
                    <th>Unit Cost</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>123456</td>
                    <td>Pepe Pizza</td>
                    <td>$123</td>
                    <td>4</td>
                    <td>
                        <span class="badge bg-primary">Details</span>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>123456</td>
                    <td>Pepe Pizza</td>
                    <td>$123</td>
                    <td>4</td>
                    <td>
                        <span class="badge bg-primary">Details</span>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
