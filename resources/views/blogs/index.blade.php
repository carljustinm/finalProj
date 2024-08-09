@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Blogs</h1>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Create Blog</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <ul>
        @foreach($blogs as $blog)
            <li>
                <a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
