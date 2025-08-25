@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Post</h2>

    <form action="{{ route('post.update', $row->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- Title --}}
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $row->title) }}">
        </div>

        {{-- Subtitle --}}
        <div class="mb-3">
            <label for="sub_title" class="form-label">Subtitle</label>
            <input type="text" name="sub_title" class="form-control" value="{{ old('sub_title', $row->sub_title) }}">
        </div>

        {{-- Description --}}
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control">{{ old('description', $row->description) }}</textarea>
        </div>

        {{-- Content --}}
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" class="form-control">{{ old('content', $row->content) }}</textarea>
        </div>

        {{-- Active --}}
        <div class="mb-3">
            <label for="active" class="form-label">Active</label>
            <input type="text" name="active" class="form-control" value="{{ old('active', $row->active) }}">
        </div>

        {{-- Image --}}
       <div class="mb-3">
            <label for="image" class="form-label"><strong>Image:</strong></label>
            <input 
                type="file" 
                name="image" 
                class="form-control @error('image') is-invalid @enderror" 
                id="inputImage">
                @error('image')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>
@endsection
