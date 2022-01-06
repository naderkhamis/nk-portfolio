@extends('layouts.app')
@section('content')
    <h3 class="text-white">Client Review</h3>
    <form action="{{ route('store-review') }}" method="post" class="text-white row" enctype="multipart/form-data">
        <div class="form-row col-md-6">
            <div class="form-group col-md-6">
                <label for="name">Client Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    placeholder="Please enter client's name">
                @error('name')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="company">Company</label>
                <input type="text" class="form-control @error('company') is-invalid @enderror" name="company" id="company"
                    placeholder="Please enter company's name">
                @error('company')
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
                <label for="image" class="control-label">Client Photo</label>
                <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" id="image">
                @error('image')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-12">
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
                <label for="review">Reveiw</label>
                <textarea class="form-control @error('review') is-invalid @enderror" name="review" id="reveiw" cols="30"
                    rows="9" placeholder="Please enter client's review"></textarea>
                @error('review')
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
