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
                        <img class="profile-user-img img-fluid img-circle" src="{{ asset('images/headerdarklogo.png') }}"
                            alt="User profile picture">
                    </div>
                    <!-- /Image -->

                    <h3 class="profile-username text-center">Nader Khamis</h3>

                    <p class="text-muted text-center">Web Developer</p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item bg-dark">
                            <b>Age</b> <a class="float-right">27</a>
                        </li>
                        <li class="list-group-item bg-dark">
                            <b>Nationality</b> <a class="float-right">Egypt</a>
                        </li>
                        <li class="list-group-item bg-dark">
                            <b>Location</b> <a class="float-right">Riyadh, Saudi Arabia</a>
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
                        B.S. in Computer Science from the University of Tennessee at Knoxville
                    </p>
                    <!-- /Education -->

                    <hr>

                    <!-- Experience -->
                    <strong>
                        <i class="fas fa-medal mr-1"></i>
                        Experience
                    </strong>

                    <p class="text-muted">
                        Malibu, California
                    </p>
                    <!-- /Experience -->

                    <hr>

                    <!-- Skills -->
                    <strong>
                        <i class="fas fa-star mr-1"></i>
                        Skills
                    </strong>

                    <p class="text-muted">
                        <span class="tag tag-danger">UI Design</span>
                        <span class="tag tag-success">Coding</span>
                        <span class="tag tag-info">Javascript</span>
                        <span class="tag tag-warning">PHP</span>
                        <span class="tag tag-primary">Node.js</span>
                    </p>
                    <!-- /Skills -->

                    <hr>

                    <!-- Notes -->
                    <strong>
                        <i class="fas fa-file-alt mr-1"></i>
                        Notes
                    </strong>

                    <p class="text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                        fermentum enim neque.
                    </p>
                    <!-- /Notes -->
                </div>
                <!-- /Card Body -->

            </div>
            <!-- /About Me Box -->

        </div>

    </div>

@endsection
