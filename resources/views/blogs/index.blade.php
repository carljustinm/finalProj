@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Blogs</h1>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Create Blog</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <ul class="list-group mt-3">
        @foreach($blogs as $blog)
            <li class="list-group-item">
                <h5>{{ $blog->title }}</h5>
                <p>{{ $blog->content }}</p>
                <a href="{{ route('blogs.edit', $blog) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('blogs.destroy', $blog) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
