@extends('layouts.main')

@section('css')
<style>
  html, body {
    top: 0;
  }
   .login-dark {
    height: 800px;
    width: 450px
    background-size: cover;
    position: relative;
  }
  
  .login-dark form {
    max-width: 320px;
    width: 90%;
    background-color: #a7b4ee;
    padding: 40px;
    border-radius: 4px;
    transform: translate(-50%, -50%);
    position: relative;
    top: 50%;
    left: 50%;
    color: #fff;
    box-shadow: 3px 3px 4px rgba(0,0,0,0.2);
  }
  
  .login-dark .illustration {
    text-align: center;
    padding: 15px 0 20px;
    font-size: 100px;
    color: #3f49d4;
  }
  
  .login-dark form .form-control {
    background: none;
    border: none;
    border-bottom: 1px solid #3a08c5;
    border-radius: 0;
    box-shadow: none;
    outline: none;
    color: inherit;
  }
  
  .login-dark form .btn-primary {
    background: #3547af;
    border: none;
    border-radius: 4px;
    padding: 11px;
    box-shadow: none;
    margin-top: 26px;
    text-shadow: none;
    outline: none;
  }
  
  .login-dark form .btn-primary:hover, .login-dark form .btn-primary:active {
    background: #5b75cc;
    outline: none;
  }
  
  .login-dark form .forgot {
    display: block;
    text-align: center;
    font-size: 12px;
    color: #6f7a85;
    opacity: 0.9;
    text-decoration: none;
  }
  
  .login-dark form .forgot:hover, .login-dark form .forgot:active {
    opacity: 1;
    text-decoration: none;
  }
  
  .login-dark form .btn-primary:active {
    transform: translateY(1px);
  }
</style>
@endsection

@section('content')
<section class="login-dark">

  <form action="{{ url('api/login') }}" method="post">
    @csrf
      <h2 class="visually-hidden">Login Form</h2>
      <div class="illustration"><i class="fa fa-lock" aria-hidden="true"></i></div>
      <div class="mb-3"><input class="form-control" name="email" placeholder="Username"></div>
      <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
      @if(session('errors'))
      <span style="font-color: 'black' !important;" >{{ session()->get('errors') }}</span>
      @endif
      {{-- <div class="mb-3"><a href="student\home.html"><button class="btn btn-primary d-block w-100">Log In</button></a></div> --}}
      <button class="btn btn-primary d-block w-100" id="login" type="submit">Log In</button>
  </form>
</section>
@endsection

@section('js')
{{-- <script>
  $(function() {
    $('#login').on('click', function(e) {
      $.post('http://localhost:8000/api/login', {
        username: $('input[name="username"]').val(),
        password: $('input[name="password"]').val()
      });
      e.preventDefault();
    })
  })
</script> --}}
@endsection