@extends('dashboard.dashboard')
@section('dashboard-content')
@guest
            @if (Route::has('login'))
                <h2></h2>
            @endif
        @else
    <h3 class="text-white mt-3">Add New Post</h3>
        @if(Session::has('post_msg'))
            <div class="alert alert-seccess text-white" role="alert">
                {{Session::get('post_msg')}}
            </div>
        @endif
    <form action="{{route('create.post')}}" method="post" class="text-white bg-transparent" enctype="multipart/form-data">
        @csrf
            <div class="form-group position-relative">
                <input type="text" name="title" id="title" class="text-white" placeholder="Post Title">
                <textarea name="description" id="description" cols="30" rows="10" placeholder="Post something..."></textarea>
                <input type="file" name="img" id="img" class="form-control-file ">
                <button type="submit">Upload</button>
            </div>
    </form>
    @endguest
@endsection
