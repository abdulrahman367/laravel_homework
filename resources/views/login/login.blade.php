@extends('layout.master')
 @section('title')
     Login page
 @endsection
 @section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-3"></div>
         <div class="col-md-6  mt-5 pt-5 ml-5 h-100">
             <div class="login text-white ">
                  <h2 >Login </h2>
                 <form action="{{route('login.auth')}}" method="post" class="text-white bg-transparent" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="username" id="title" class="text-white" placeholder=" Your Username">
                        <input type="text" name="password" id="title" class="text-white" placeholder=" Your Password">
                        <button type="submit">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>

    </div>
 @endsection
