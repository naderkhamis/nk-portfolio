@extends('layouts.app')
@section('content')
    <h3 class="text-white">Create Certificate</h3>
    <form action="{{ route('store-certificate') }}" method="post" class="text-white row" enctype="multipart/form-data">
        <div class="form-row col-md-6">
            <div class="form-group col-md-6">
                <label for="title">Certificate Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    placeholder="Please enter certificate's title">
                @error('title')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="school">School</label>
                <input type="text" class="form-control @error('school') is-invalid @enderror" name="school" id="school"
                    placeholder="Please enter school name">
                @error('school')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="grade">Grade</label>
                <input type="text" class="form-control @error('grade') is-invalid @enderror" name="grade" id="grade"
                    placeholder="Please enter a grade">
                @error('grade')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="date">Date</label>
                <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" id="date">
                @error('date')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="image" class="control-label">Certificate Photo</label>
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
                    id="description" cols="30" rows="9" placeholder="Please enter certificate description"></textarea>
                @error('description')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <div class="col-md-1 pr-3 pr-md-0">
            <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                Save
                <i class="fas fa-save"></i>
            </button>
        </div>
    </form>
@endsection
