<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    @if ($career)
        <div class="row px-2">
            <!-- Header -->
            <div class="col-12 p-0 mb-1">
                <h1>Career</h1>
            </div>
            <!-- /Header -->
            <!-- Career-Card -->
            <div class="card card-warning bg-dark col-lg-8 p-0">
                <!-- Job-Title -->
                <div class="card-header h6">
                    {{ $career->id }}. {{ $career->title }}
                </div>
                <!-- /Job-Title -->
                <div class="card-body">
                    <!-- Career-Company -->
                    <h5 class="card-title text-warning pb-2">{{ $career->company }}</h5>
                    <!-- /Career-Company -->
                    <!-- Career-Description -->
                    <p class="card-text mb-3">{{ $career->description }}</p>
                    <!-- /Career-Description -->
                    <!-- Career-From-Date -->
                    <div>
                        <strong class="badge badge-warning p-2 mb-2 font-italic">
                            From:
                            {{ Carbon::createFromFormat('Y-m-d H:i:s', $career->from_date)->format('d M Y') }}
                        </strong>
                    </div>
                    <!-- /Career-From-Date -->
                    <!-- Career-To-Date -->
                    <div>
                        <strong class="badge badge-warning p-2 font-italic">
                            @if ($career->status === 0)
                                To:
                                {{ Carbon::createFromFormat('Y-m-d H:i:s', $career->to_date)->format('d M Y') }}
                            @else
                                Till now
                            @endif
                        </strong>
                    </div>
                    <!-- /Career-To-Date -->
                </div>
                <!-- Career-Actions -->
                <div class="card-footer border-top border-warning d-flex justify-content-start">
                    <a href="{{ route('edit-career', $career->id) }}" class="btn btn-success rounded-circle mr-2">
                        <i class="fas fa-pen"></i>
                    </a>
                    <a href="{{ route('delete-career', $career->id) }}" class="btn btn-danger rounded-circle">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
                <!-- /Career-Actions -->
            </div>
            <!-- /Career-Card -->
        </div>
    @else
        <!-- Alert -->
        <div class="alert alert-danger alert-dismissible fade show col-md-6" role="alert">
            <strong>Sorry! </strong> There is no such as career.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!-- Alert -->
    @endif
@endsection
