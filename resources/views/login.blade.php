@extends('master')
@section('content')
<div class="container">
   <div class="row justify-content-center mt-5">
      <div class="col-sm-4 ">

      <div class="card " style="background: lightgrey;">
      <form class="mx-3 mt-3" action="{{url('login')}}" method="post">
      @csrf
            <!-- Email input -->
            <div class="form-outline mb-4">
            
              <input type="email" name="email" id="email" class="form-control" />
              <label class="form-label" name="email" for="email">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" name="password" id="password" class="form-control" />
              <label class="form-label" for="password">Password</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
              <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                  <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
              </div>

              <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
              </div>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Login</button>

            <!-- Register buttons -->
            <div class="text-center my-1">
              <p>Not a member? <a href="#!">Register</a></p>
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github"></i>
              </button>
            </div>
          </form>

          </div>


      </div>

   </div>
</div>

@endsection