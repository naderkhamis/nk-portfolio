@extends('layouts.app')
@section('content')
    @if ($process)
        <h3 class="text-white">Edit Process</h3>
        <form action="{{ route('update-process', $process->id) }}" method="post" class="text-white row">
            <input type="hidden" name="id" id="id" value="{{ $process->id }}">
            <div class="form-row col-md-6">
                <!-- PROCESS NAME -->
                <div class="form-group col-12">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                        placeholder="Please enter service name." value="{{ $process->name }}">
                    @error('name')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- /PROCESS NAME -->
                <!-- PROCESS ICON -->
                <div class="form-group col-12">
                    <label for="icon">Icon</label>
                    <span class="text-warning float-right">
                        <i class="fas fa-{{ $process->icon }}"></i>
                    </span>
                    <input type="text" class="form-control @error('icon') is-invalid @enderror" name="icon" id="icon"
                        placeholder="Please enter service icon." value="{{ $process->icon }}">
                    @error('icon')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- /PROCESS ICON -->
                <!-- PROCESS DEVELOPER -->
                <div class="form-group col-12">
                    <label for="developer">Developer</label>
                    <span class="text-warning float-right">{{ $process->developer->name }}</span>
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
                <!-- /PROCESS DEVELOPER -->
            </div>
            <!-- PROCESS DESCRIPTION -->
            <div class="form-row col-md-6">
                <div class="form-group col">
                    <label for="description">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                        id="description" cols="30" rows="9"
                        placeholder="Please enter service description.">{{ $process->description }}</textarea>
                    @error('description')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- /PROCESS DESCRIPTION -->
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
