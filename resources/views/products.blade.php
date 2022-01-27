@extends('layout.app')
@section('content')
<body>
    <!-- Navbar -->
    @include('components.navbar')

    <!-- Component 4 (color btn) -->
    @include('components.colorbtn')

    <!-- Component 2 (form) -->
    @include('components.form')
        
    <!-- Component 3 (A static table with data from our controller) -->
    @include('components.table')

@endsection