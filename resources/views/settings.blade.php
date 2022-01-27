@extends('layout.app')
@section('content')
<body>
    <!-- Navbar -->
    @include('components.navbar')

    <!-- Component 6 (Textarea that will show the data from whatever we click on component 2) -->
    @include('components.textarea')

    <!-- Component 2 (form) -->
    @include('components.form')

    <!-- Component 3 (A dynamic table) -->
    @include('components.table')
@endsection