@extends('layout.app')
@section('content')
<body>
  @include('components.navbar')

  <!-- Component 1 (Buttons) -->
  <div class="container bg-light mt-5 p-5" role="main">
    <div class="jumbotron">

      <!-- Color changing button -->
      <h2 class="pb-2">Change color button</h2>
      <button id="changeColorBtn" type="button" class="btn btn-primary">Change Color</button>

      <div class="spacer"></div>

      <!-- A button that adds another button -->
      <h2 class="pb-2">Add Button</h2>
      <button id="addBtn" type="button" class="btn btn-info"></button>
      <div id="dynamicBtnHolder"></div>

    </div>
  </div>

  <!-- Component 2 (A form that when submited will refresh the page and write in the console the submited inputs) -->
  <div class="container bg-light mt-5 p-5" role="main">
    <div class="jumbotron">
      <h2>Fake form</h2>
      <p>This will submit the form via jquery, will <b>not</b> refresh the page and write the submited fields to the console.</p>
      <form id="fakeForm" class="card p-5">
        <label for="firstName">First name:</label>
        <input type="text" min="1" max="25" id="firstName">
        <br/>
        <label for="lastName">Last name:</label>
        <input type="text" min="1" max="25" id="lastName">
        <br/>
        <button class="btn btn-primary mt-3 limited-width-btn">Submit</button>
      </form>
    </div>
  </div>
    
  <!-- Component 3 (A static table with data from our controller) -->
  <div class="container bg-light mt-5 p-5" role="main">
    <div class="jumbotron">
      <h2>Static table</h2>
     
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Company</th>
            <th scope="col">Contact</th>
            <th scope="col">Country</th>
          </tr>
        </thead>
        <tbody>
          @foreach($table_data as $company)
            <tr>
              <th scope="row">{{ $company->company_name }}</th>
              <td>{{ $company->contact }}</td>
              <td>{{ $company->country }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection