@extends('layouts.app')
@section('content')
    <h3 class="text-white">Career Path</h3>
    <form action="{{ route('store-career') }}" method="post" class="text-white row">
        <div class="form-row col-md-6">
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
            <div class="form-group col-md-6">
                <label for="title">Job Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    placeholder="Enter a position">
                @error('title')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="company">Company</label>
                <input type="text" class="form-control @error('company') is-invalid @enderror" name="company" id="company"
                    placeholder="Enter company name">
                @error('company')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="from">From</label>
                <input type="date" class="form-control @error('from') is-invalid @enderror" name="from" id="from">
                @error('from')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="to">To</label>
                <input type="date" class="form-control @error('to') is-invalid @enderror" name="to" id="to">
                @error('to')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-12">
                <label>Still working there? &nbsp;</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status"
                        id="inlineRadio1" value="1">
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status"
                        id="inlineRadio2" value="0">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                @error('status')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row col-md-6">
            <div class="form-group col-12">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                    id="description" cols="30" rows="10" placeholder="Describe your position"></textarea>
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
