@extends('layouts.app')
@section('content')
    @if ($service)
        <h3 class="text-white">Edit Service</h3>
        <form action="{{ route('update-service', $service->id) }}" method="post" class="text-white row"
            enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="{{ $service->id }}">
            <div class="form-row col-md-6">
                <div class="form-group col-12">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                        placeholder="Please enter service name." value="{{ $service->name }}">
                    @error('name')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-12">
                    <label for="icon">Icon</label>
                    <input type="text" class="form-control @error('icon') is-invalid @enderror" name="icon" id="icon"
                        placeholder="Please enter service icon." value="{{ $service->icon }}">
                    @error('icon')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="image" class="control-label">Image</label>
                    <input type="file" class="form-control-file align-self-center m-0 @error('image') is-invalid @enderror"
                        name="image" id="image">
                    @error('image')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="developer">Developer</label>
                    <span class="text-warning float-right">{{ $service->developer->name }}</span>
                    <select name="dev_id" id="developer" class="form-control">
                        <option selected disabled>Please select a developer.</option>
                        @foreach ($developers as $developer)
                            <option value="{{ $developer->id }}">{{ $developer->name }}</option>
                        @endforeach
                    </select>
                    @error('dev_id')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <div class="p-0">
                        <img src="{{ asset($service->image) }}" class="img-fluid border border-warning rounded"
                            alt="Service Image">
                    </div>
                </div>
            </div>
            <div class="form-row col-md-6">
                <div class="form-group col">
                    <label for="description">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                        id="description" cols="30" rows="9"
                        placeholder="Please enter service description.">{{ $service->description }}</textarea>
                    @error('description')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <input name="_token" type="hidden" value="{{ csrf_token() }}" />
            <div class="col-md-2 p-0">
                <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                    Update
                    <i class="fas fa-sync-alt"></i>
                </button>
            </div>
        </form>
    @endif
@endsection
