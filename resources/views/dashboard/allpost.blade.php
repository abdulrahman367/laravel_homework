@extends('dashboard.dashboard')
@section('dashboard-content')
<div class="dashboard-content text-white p-3">
    <h3>All Posts</h3>
    <table class=" table text-white mt-4">
        <thead>
            <th>Post Id</td>
            <th>Post Title</td>
            <th>Post Author</td>
            <th>Action</td>
        </thead>
        <tbody>
            @foreach ($news as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->post_title}}</td>
                <td>Author</td>
                <td><a href="{{ route('delete.post', ['id'=>$item->id])}}">Delete</a> <a href="">Update</a></td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection
