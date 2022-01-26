@extends('layout.app')
@section('content')
<body>
    @include('components.navbar')

    <!-- Component 6 (Textarea that will show the data from whatever we click on component 2) -->
    <div class="container bg-light mt-5 p-5" role="main">
        <div class="jumbotron">
            <h2>Selected user</h2>
            <textarea cols="50" rows="5" id="compSix" class="text-center">

            </textarea>
        </div>
    </div>

    <!-- Component 2 (A form that when submited will add the fields to our table at comp3) -->
    <div class="container bg-light mt-5 p-5" role="main">
        <div class="jumbotron">
        <h2>Add User</h2>
        <p>This will add a user to our users table.</p>
        <form id="userForm" class="card p-5">
            <label for="userFormName">My Name:</label>
            <input type="text" min="1" max="25" id="userFormName">
            <br/>
            <label for="userFormAge">My age::</label>
            <input type="number" min="1" max="150" id="userFormAge">
            <br/>
            <button class="btn btn-primary mt-3 limited-width-btn">Add</button>
        </form>
        </div>
    </div>
        
    <!-- Component 3 (A dynamic table) -->
    <div class="container bg-light mt-5 p-5" role="main">
        <div class="jumbotron">
        <h2>Users</h2>
        
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">username</th>
            </tr>
            </thead>
            <tbody id="usersTable">
                @foreach($table_data as $user)
                    <tr>
                    <th scope="row">{{ $user->name }}</th>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->username }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection