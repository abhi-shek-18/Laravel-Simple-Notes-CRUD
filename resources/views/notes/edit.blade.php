@extends('notes.layout')

@section('content')

<div class="card mt-5">
    <h2 class="card-header">Update {{$note->title}} Note</h2>
    <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ route('notes.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>

        <form action="{{ route('notes.update', $note->id) }}" method="post">
            @csrf 
            <div class="mb-3">
            <label for="inputTitle" class="form-label"><strong>Title:</strong></label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"  id="inputTitle" 
            placeholder="Title" value="{{$note->title}}">
            @error('title')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="mb-3">
            <label for="inputContent" class="form-label"><strong>Content:</strong></label>
            <input type="textArea" name="content" class="form-control @error('content') is-invalid @enderror"  id="inputContent" 
            placeholder="content" value="{{$note->content}}">
            @error('content')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
            </div>
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
        </form>
        </div>
        </div>

        @endsection
    