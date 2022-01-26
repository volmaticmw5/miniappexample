@extends('layout.app')
@section('content')
<body class="text-center">
    <!-- Include alerts -->
    <div class="login-alerts-holder">
        @include('alerts.error')
        @include('alerts.succ')
    </div>

    <!-- Our actual content -->
    <main class="form-signin">
        <i class="las la-user la-5x"></i>
        <form action="" method="POST">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Login</h1>
            <div class="form-floating">
                <input name="username" id="username" class="form-control" type="text" placeholder="Username" min="4" max="24" required>
                <label for="username">Username</label>
            </div>
            <div class="form-floating">
                <input name="password" id="password" class="form-control" type="password" placeholder="Password" min="4" max="24" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" name="login" class="w-100 btn btn-lg btn-success login-btn" value="Sign in">
        </form>
    </main>
    
</body>
@endsection