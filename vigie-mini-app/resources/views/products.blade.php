@extends('layout.app')
@section('content')
<body>
    @include('components.navbar')

    <!-- Component 4 (Buttons, again) -->
    <div class="container bg-light mt-5 p-5" role="main">
        <div class="jumbotron">

            <!-- Color changing button -->
            <h2 class="pb-2">Change color button</h2>
            <button id="changeColorBtn" type="button" class="btn btn-primary">Button Change Color</button>

        </div>
    </div>

    <!-- Component 2 (A form that when submited will refresh the page and write in the console the submited inputs) -->
    <div class="container bg-light mt-5 p-5" role="main">
        <div class="jumbotron">
        <h2>Product form</h2>
        <p>This will submit the form via jquery, will <b>not</b> refresh the page and write the submited fields to the console.</p>
        <form id="productForm" class="card p-5">
            <label for="productName">Product name:</label>
            <input type="text" min="1" max="25" id="productName">
            <br/>
            <label for="productSerial">Serial Number:</label>
            <input type="text" min="1" max="25" id="productSerial">
            <br/>
            <button class="btn btn-primary mt-3 limited-width-btn">Submit</button>
        </form>
        </div>
    </div>
        
    <!-- Component 3 (A static table with data from our controller) -->
    <div class="container bg-light mt-5 p-5" role="main">
        <div class="jumbotron">
        <h2>Products</h2>
        
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Serial Number</th>
                <th scope="col">Date</th>
            </tr>
            </thead>
            <tbody>
                @foreach($table_data as $product)
                    <tr>
                    <th scope="row">{{ $product->name }}</th>
                    <td>{{ $product->serial }}</td>
                    <td>{{ $product->date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection