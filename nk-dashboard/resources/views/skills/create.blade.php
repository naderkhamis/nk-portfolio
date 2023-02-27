@extends('layouts.app')

@section('content')
    <!-- Header -->
    <div class="col-12 mb-2 d-flex justify-content-between align-items-center">
        <h1>Skills</h1>
    </div>
    <!-- /Header -->
    <!-- New-Skill-Form -->
    <div class="col-lg-6 col-xl-3 p-0 pr-md-2 pt-3">
        <div class="card card-warning card-outline card-body bg-dark">
            <form action="{{ route('store-skill') }}" method="post">
                <!-- TOKEN -->
                @csrf
                <!-- /TOKEN -->
                <!-- Skill-Name-Input -->
                <div class="form-group">
                    <label for="name">Skill Name</label>
                    <input type="text" name="name" id="name"
                        class="form-control  @error('name') is-invalid @enderror" placeholder="Please enter skill name">
                    <!-- Error-Message -->
                    @error('name')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                    <!-- /Error-Message -->
                </div>
                <!-- /Skill-Name-Input -->
                <!-- Skill-Category-Select -->
                <div class="form-group">
                    <label for="name">Category</label>
                    <select name="category" id="category" class="custom-select  @error('category') is-invalid @enderror">
                        <option disabled selected>Please select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <!-- Error-Message -->
                    @error('category')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                    <!-- /Error-Message -->
                </div>
                <!-- /Skill-Category-Select -->
                <!-- Skill-Performace-Input -->
                <div class="form-group">
                    <label for="performance">Skill Performance</label>
                    <input type="text" name="performance" id="performance"
                        class="form-control  @error('performance') is-invalid @enderror"
                        placeholder="Please enter skill performance">
                    <!-- Error-Message -->
                    @error('performance')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                    <!-- /Error-Message -->
                </div>
                <!-- /Skill-Performace-Input -->
                <!-- Form-Submit-Button -->
                <div class="col-md-4 p-0">
                    <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                        Save
                        <i class="fas fa-save"></i>
                    </button>
                </div>
                <!-- /Form-Submit-Button -->
            </form>
        </div>
    </div>
    <!-- /New-Skill-Form -->
@endsection
