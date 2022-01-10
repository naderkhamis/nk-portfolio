@extends('layouts.app')
@section('content')
    <h3 class="text-white">Create Process</h3>
    <!-- Create-Process-Form -->
    <form action="{{ route('store-process') }}" method="post" class="text-white row">
        <div class="form-row col-md-6">
            <!-- PROCESS-NAME -->
            <div class="form-group col-12">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    placeholder="Please enter process name.">
                @error('name')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- /PROCESS-NAME -->
            <!-- PROCESS-ICON -->
            <div class="form-group col-12">
                <label for="icon">Icon</label>
                <input type="text" class="form-control @error('icon') is-invalid @enderror" name="icon" id="icon"
                    placeholder="Please enter process icon name.">
                @error('icon')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- /PROCESS-ICON -->
            <!-- PROCESS-DEVELOPER -->
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
            <!-- /PROCESS-DEVELOPER -->
        </div>
        <div class="form-row col-md-6">
            <!-- PROCESS-DESCRIPTION -->
            <div class="form-group col">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                    id="description" cols="30" rows="9" placeholder="Please enter process description."></textarea>
                @error('description')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- /PROCESS-DESCRIPTION -->
        </div>
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <div class="col-md-1 p-0">
            <!-- Save-Button -->
            <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                Save
                <i class="fas fa-save"></i>
            </button>
            <!-- /Save-Button -->
        </div>
    </form>
    <!-- /Create-Process-Form -->
@endsection
