@extends('layouts.app')
@section('content')
    <!-- Header -->
    <h3 class="text-white">Edit Skill</h3>
    <!-- /Header -->
    @if ($skill)
        <div class="card card-warning card-outline card-body bg-dark col-md-4 mt-3">
            <form action="{{ route('update-skill') }}" method="post">
                <!-- Skill-Id-Hidden-Input -->
                <input type="hidden" name="id" id="name" value="{{ $skill->id }}">
                <!-- /Skill-Id-Hidden-Input -->
                <!-- Skill-Name-Input -->
                <div class="form-group">
                    <label for="name">Skill Name</label>
                    <input type="text" name="name" id="name"
                        class="form-control  @error('name') is-invalid @enderror" placeholder="Please enter skill name"
                        value="{{ $skill->name }}">
                    <!-- Error-Message -->
                    @error('name')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                    <!-- /Error-Message -->
                </div>
                <!-- /Skill-Name-Input -->
                <!-- Skill-Category-Select -->
                <div class="form-group">
                    <label for="name">
                        Category
                    </label>
                    <span class="float-right text-warning">
                        {{ $skill->category->name }}
                    </span>
                    <select name="category" id="category" class="custom-select  @error('category') is-invalid @enderror">
                        <option disabled selected>Please select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <!-- Error-Message -->
                    @error('cat_id')
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
                        placeholder="Please enter skill performance" value="{{ $skill->performance }}">
                    <!-- Error-Message -->
                    @error('performance')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                    <!-- /Error-Message -->
                </div>
                <!-- /Skill-Performace-Input -->
                <!-- TOKEN -->
                <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                <!-- /TOKEN -->
                <!-- Form-Submit-Button -->
                <div class="col-md-4 p-0">
                    <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                        Update
                        <i class="fas fa-sync-alt"></i>
                    </button>
                </div>
                <!-- /Form-Submit-Button -->
            </form>
        </div>
    @else
        <!-- Alert -->
        <div class="col-md-6 p-0">
            <!-- Alert -->
            <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                <strong>Sorry! </strong>There is no such as skill.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <!-- /Alert -->
    @endif

@endsection
