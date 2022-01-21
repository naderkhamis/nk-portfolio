@extends('layouts.app')

@section('content')
    <div class="row">
        <!-- Contact-Information-Form -->
        <div class="col-xl-3 p-0 mb-4 mr-xl-5">
            <!-- Header -->
            <div class="col-12 p-0 mb-3">
                <h1>Contact Information</h1>
            </div>
            <!-- /Header -->
            <!-- New-Contacts-Form -->
            <div class="card card-warning card-outline card-body bg-dark">
                <form action="{{ route('store-contact') }}" method="post">
                    <!-- Contacts-Developer-Select -->
                    <div class="form-group">
                        <label for="icon">Developer</label>
                        @if ($developers)
                            <select name="dev_id" id="developer"
                                class="custom-select  @error('dev_id') is-invalid @enderror">
                                <option selected disabled>Please select a developer</option>
                                @foreach ($developers as $developer)
                                    <option value="{{ $developer->id }}">{{ $developer->name }}</option>
                                @endforeach
                            </select>
                            <!-- Error-Message -->
                            @error('dev_id')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                            <!-- /Error-Message -->
                        @endif
                    </div>
                    <!-- /Contacts-Developer-Select -->
                    <!-- Address-Input -->
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address"
                            class="form-control  @error('address') is-invalid @enderror"
                            placeholder="Please enter an address">
                        <!-- Error-Message -->
                        @error('address')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                        <!-- /Error-Message -->
                    </div>
                    <!-- /Address-Input -->
                    <!-- Emial-Input -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="row">
                            <div class="col-10">
                                <input type="email" name="email[]" id="email"
                                    class="form-control  @error('email') is-invalid @enderror"
                                    placeholder="Please enter email address">
                            </div>
                            <div class="col-2">
                                <button id="new-email" class="new-input btn btn-warning rounded-circle mr-md-2">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Error-Message -->
                        @error('email')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                        <!-- /Error-Message -->
                    </div>
                    <!-- /Emial-Input -->
                    <!-- Phone-Input -->
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <div class="row">
                            <div class="col-10">
                                <input type="phone" name="phone[]" id="phone"
                                    class="form-control  @error('phone') is-invalid @enderror"
                                    placeholder="Please enter phone number">
                            </div>
                            <div class="col-2">
                                <button id="new-phone" class="btn btn-warning rounded-circle mr-md-2">
                                    <i class="fas fa-plus"></i>
                            </div>
                            </button>
                        </div>
                        <!-- Error-Message -->
                        @error('phone')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                        <!-- /Error-Message -->
                    </div>
                    <!-- /Phone-Input -->
                    <!-- TOKEN -->
                    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                    <!-- /TOKEN -->
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
            <!-- /New-Contacts-Form -->
        </div>
        <!-- /Contact-Information-Form -->
        <!-- Contact-Information-Section -->
        @if (count($contacts))
            <div class="col-xl-8 p-0 pt-lg-5">
                <!-- Contacts-Container -->
                <div class="row">
                    @foreach ($contacts as $contact)
                        <!-- Contacts-Card -->
                        <div class="col-md-5 col-lg-4 pt-3">
                            <div class="card card-warning card-outline bg-dark p-0">
                                <!-- Contacts-Developer-Image -->
                                {{-- <img src="{{ asset($contact->developer->image) }}" class="card-img-top"
                                    alt="Project-Image"> --}}
                                <!-- /Contacts-Developer-Image -->
                                <div class="card-body box-profile">
                                    <!-- Contacts-Developer-Name -->
                                    <h5 class="card-title text-warning py-2">{{ $contact->developer->name }}</h5>
                                    <!-- /Contacts-Developer-Name -->
                                </div>
                                <!-- Contact-Information -->
                                <div class="px-4">
                                    <ul class="list-group list-group-unbordered">
                                        <li class="list-group-item bg-dark">
                                            <h5 class="text-warning">
                                                <i class="fas fa-map-marker-alt"></i>
                                                Address
                                            </h5>
                                            <p>{{ $contact->address }}</p>
                                        </li>
                                        <li class="list-group-item bg-dark">
                                            <h5 class="text-warning">
                                                <i class="fas fa-envelope"></i>
                                                Emails
                                            </h5>
                                            <?php
                                            $emails = explode(',', $contact->email);
                                            ?>
                                            @foreach ($emails as $email)
                                                <p>{{ $email }}</p>
                                            @endforeach
                                        </li>
                                        <li class="list-group-item bg-dark">
                                            <h5 class="text-warning">
                                                <i class="fas fa-phone-alt"></i>
                                                Phones
                                            </h5>
                                            <?php
                                            $phones = explode(',', $contact->phone);
                                            ?>
                                            @foreach ($phones as $phone)
                                                <p>{{ $phone }}</p>
                                            @endforeach
                                        </li>
                                    </ul>
                                </div>
                                <!-- /Contact-Information -->
                                <!-- Contacts-Actions -->
                                <div class="card-footer">
                                    <a href="{{ route('edit-contact', $contact->id) }}"
                                        class="btn btn-success rounded-circle mr-md-2">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <a href="{{ route('delete-contact', $contact->id) }}"
                                        class="btn btn-danger rounded-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                                <!-- /Contacts-Actions -->
                            </div>
                        </div>
                        <!-- /Project-Card -->
                    @endforeach
                </div>
                <!-- /Statistics-Container -->
            </div>
        @else
            <!-- Contacts-Alert -->
            <div class="col-md-4 p-0">
                <!-- Alert -->
                <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no contact information to show!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- /Alert -->
            </div>
            <!-- /Contacts-Alert -->
        @endif
        <!-- /Contact-Information-Section -->
    </div>
@endsection
