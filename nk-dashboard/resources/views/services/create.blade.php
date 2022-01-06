@extends('layouts.app')
@section('content')
    <h3 class="text-white">Create Service</h3>
    <form action="{{ route('store-service') }}" method="post" class="text-white row" enctype="multipart/form-data">
        <div class="form-row col-md-6">
            <div class="form-group col-12">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    placeholder="Please enter service name.">
                @error('name')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-12">
                <label for="icon">Icon</label>
                <input type="text" class="form-control @error('icon') is-invalid @enderror" name="icon" id="icon"
                    placeholder="Please enter service icon name.">
                @error('icon')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="image" class="control-label">Image</label>
                <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" id="image">
                @error('image')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="developer">Developer</label>
                <select name="dev_id" id="developer" class="custom-select @error('dev_id') is-invalid @enderror">
                    <option selected disabled>Select a developer</option>
                    @foreach ($developers as $developer)
                        <option value="{{ $developer->id }}">{{ $developer->name }}</option>
                    @endforeach
                </select>
                @error('dev_id')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row col-md-6">
            <div class="form-group col">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                    id="description" cols="30" rows="9" placeholder="Please enter service description."></textarea>
                @error('description')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <div class="col-md-1 p-0">
            <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                Save
                <i class="fas fa-save"></i>
            </button>
        </div>
    </form>
@endsection
