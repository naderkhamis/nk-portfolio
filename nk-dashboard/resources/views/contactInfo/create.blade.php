@extends('layouts.app')
@section('content')
    <h3 class="text-white">Client Opinion</h3>
    <form action="{{ route('storeOpinion') }}" method="post" class="text-white" enctype="multipart/form-data">
        <div class="form-row">
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <div class="form-group">
                    <label for="title">Client Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                        placeholder="Enter client's name">
                    @error('name')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="company">Company Name</label>
                    <input type="text" class="form-control @error('company') is-invalid @enderror" name="company"
                        id="company" placeholder="Enter company's or project's name">
                    @error('company')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control @error('from') is-invalid @enderror" name="date" id="date">
                    @error('date')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title">Client Image</label>
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image"
                        id="image" placeholder="Please select customer's image">
                    @error('image')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="opinion">Client's Opinion</label>
                    <textarea class="form-control @error('opinion') is-invalid @enderror" name="opinion" id="opinion"
                        cols="30" rows="8" placeholder="Enter customer's feedback"></textarea>
                    @error('opinion')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <div class="col-md-2 p-0">
            <button type="submit" class="btn btn-warning btn-lg btn-block">Save <i class="ri-save-3-line"></i></button>
        </div>
    </form>
@endsection
