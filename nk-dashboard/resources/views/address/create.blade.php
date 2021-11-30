@extends('layouts.app')
@section('content')
    <h3 class="text-white">Create Address</h3>
    <div class="col-md-6 p-0">
        <form action="{{ route('storeAddress') }}" method="post" class="text-white">
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address"
                    placeholder="Enter your address">
                @error('address')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <input name="_token" type="hidden" value="{{ csrf_token() }}" />
            <div class="col-md-2 p-0">
                <button type="submit" class="btn btn-warning btn-block">
                    Save
                    <i class="ri-save-3-line"></i>
                </button>
            </div>
        </form>
    </div>
@endsection
