@extends('layout.app')
@section('content')
<body>
  <!-- Navbar -->
  @include('components.navbar')

  <!-- Component 1 (Buttons) -->
  @include('components.multibtn')

  <!-- Component 2 (form) -->
  @include('components.form')

  <!-- Component 3 (A static table with data from our controller) -->
  @include('components.table')

@endsection