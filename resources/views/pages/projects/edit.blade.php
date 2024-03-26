@extends('layouts.app')

@section('content')

    <h1>Edit this Project</h1>

    @if ($errors->any())
        <div class="alert alert-danger ">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
        
    @endif

    <form action="{{ route('dashboard.projects.update', $project->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="New title: max 4 words" value="{{old('title', $project->title)}}">
        </div>

        <div class="mb-3">
            <label for="img" class="form-label">Image</label>
            <input type="text" class="form-control" id="img" name="img" placeholder="Image URL" value="{{old('img', $project->img)}}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Insert a description">{{old('description', $project->description)}}</textarea>
          </div>

        <div class="mb-3">
            <label for="software" class="form-label">Softwares utilised</label>
            <input type="text" class="form-control" id="software" name="software" placeholder="New title: max 4 words" value="{{old('software', $project->software)}}">
        </div>

        <button class="btn btn-primary " type="submit">Save changes</button>
    </form>
@endsection