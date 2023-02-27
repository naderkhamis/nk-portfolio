@extends('layouts.app')

@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 mb-2 d-flex justify-content-between align-items-center">
            <h1>Contact Information</h1>
            <!-- Create-New-Contact -->
            <div class="d-md-none">
                <a href="#form-create" class="btn btn-warning font-weight-bold rounded-pill">
                    New
                    <i class="fas fa-plus"></i>
                </a>
            </div>
            <!-- /Create-New-Contact -->
        </div>
        <!-- /Header -->
        <!-- Contact-Information-Form -->
        <div id="form-create" class="col-md-6 col-xl-3 order-2 order-md-1">
            <!-- New-Contacts-Form -->
            <div class="card card-warning card-outline card-body bg-dark">
                <!-- Form-Header -->
                <div class="card-header text-warning px-0 border-0">
                    <h3 class="card-title">Create Contact</h3>
                </div>
                <!-- /Form-Header -->
                <form action="{{ route('store-contact-info') }}" method="post">
                    <!-- TOKEN -->
                    @csrf
                    <!-- /TOKEN -->
                    <!-- Address-Input -->
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address"
                            class="form-control  @error('address') is-invalid @enderror"
                            placeholder="Please enter an address" autocomplete="new-password">
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
                                    placeholder="Please enter email address" autocomplete="new-password">
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
                                <input type="tel" name="phone[]" id="phone"
                                    class="form-control  @error('phone') is-invalid @enderror"
                                    placeholder="Please enter phone number" autocomplete="new-password">
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
                    <!-- Form-Submit-Button -->
                    <div class="col-lg-6 p-0">
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
            <div class="col-md-6 col-xl-9 order-1 order-md-2">
                <!-- Contacts-Container -->
                <div class="row row-cols-1 row-cols-xl-3">
                    @foreach ($contacts as $contact)
                        <!-- Contacts-Card -->
                        <div class="px-2">
                            <div class="card card-warning card-outline bg-dark">
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
                                <!-- Contact-Actions -->
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
                                <!-- /Contact-Actions -->
                            </div>
                        </div>
                        <!-- /Contacts-Card -->
                    @endforeach
                </div>
                <!-- /Contacts-Container -->
            </div>
        @else
            <!-- Contacts-Alert -->
            <div class="col-12 order-0">
                <div class="col-md-8 col-lg-6 alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no contact information to show!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- /Contacts-Alert -->
        @endif
        <!-- /Contact-Information-Section -->
    </div>
@endsection
