@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $blog->title }}</h1>
    <p>{{ $blog->content }}</p>
    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-secondary">Edit</a>
    <form method="POST" action="{{ route('blogs.destroy', $blog->id) }}" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('blogs.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection
