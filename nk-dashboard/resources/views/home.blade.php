<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')

    <div class="container">

        <div class="row justify-content-around">

            <div class="col-12 px-md-3 pb-md-2">
                <h1>Profile</h1>
            </div>

            <!-- Profile Image -->
            <div class="card card-warning card-outline col-md-5 col-lg-4 bg-dark">

                <div class="card-body box-profile">

                    <!-- Image -->
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="{{ asset($developer->image) }}"
                            alt="User profile picture">
                    </div>
                    <!-- /Image -->

                    <h3 class="profile-username text-center">{{ $developer->name }}</h3>

                    <p class="text-muted text-center">{{ $currentPosition->title }}</p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item bg-dark">
                            <b>Age</b> <a class="float-right">{{ $developer_age }}</a>
                        </li>
                        <li class="list-group-item bg-dark">
                            <b>Nationality</b> <a class="float-right">{{ $developer->nationality }}</a>
                        </li>
                        <li class="list-group-item bg-dark">
                            <b>Location</b> <a class="float-right">{{ $location->address }}</a>
                        </li>
                    </ul>

                    <a href="https://www.linkedin.com/in/naderkhamisabdelaziz/" class="btn btn-warning btn-block">
                        <b>Follow</b>
                    </a>
                </div>

            </div>
            <!-- /Profile Image -->

            <!-- About Me Box -->
            <div class="card card-warning col-md-6 col-lg-7 p-0 border-0 bg-dark">

                <!-- Card Header -->
                <div class="card-header">
                    <h3 class="card-title">About Me</h3>
                </div>
                <!-- Card Header -->

                <!-- Card Body -->
                <div class="card-body">

                    <!-- Education -->
                    <strong>
                        <i class="fas fa-book mr-1"></i>
                        Education
                    </strong>

                    <p class="text-muted">
                        {{ $certificate->title }}
                    </p>
                    <!-- /Education -->

                    <hr>

                    <!-- Experience -->
                    <strong>
                        <i class="fas fa-medal mr-1"></i>
                        Experience
                    </strong>

                    <p class="text-muted">
                        @foreach ($positions as $position)
                            <span class="tag tag-danger">{{ $position->title }}, </span>
                        @endforeach
                    </p>
                    <!-- /Experience -->

                    <hr>

                    <!-- Skills -->
                    <strong>
                        <i class="fas fa-star mr-1"></i>
                        Skills
                    </strong>

                    <p class="text-muted">
                        @foreach ($skills as $skill)
                            <span class="tag tag-danger">{{ $skill->name }}</span>
                        @endforeach
                    </p>
                    <!-- /Skills -->

                    <hr>

                    <!-- Notes -->
                    <strong>
                        <i class="fas fa-file-alt mr-1"></i>
                        Intro
                    </strong>

                    <p class="text-muted">
                        {{ $developer->introduction }}
                    </p>
                    <!-- /Notes -->
                </div>
                <!-- /Card Body -->

            </div>
            <!-- /About Me Box -->

        </div>

    </div>

@endsection
