@extends('layouts.app')

@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 mb-2">
            <h1>Edit Contact Information</h1>
        </div>
        <!-- /Header -->
        @if ($contact)
            <!-- Contact-Information-Form -->
            <div id="form-create" class="col-md-8 col-xl-5">
                <!-- Edit-Contact-Form -->
                <div class="card card-warning card-outline card-body bg-dark">
                    <!-- Form-Header -->
                    <div class="card-header text-warning px-0 border-0">
                        <h3 class="card-title">Edit Contact</h3>
                    </div>
                    <!-- /Form-Header -->
                    <form action="{{ route('update-contact') }}" method="post">
                        <!-- TOKEN -->
                        @csrf
                        <!-- /TOKEN -->
                        <!-- Contact-ID -->
                        <input type="hidden" name="id" id="id" value="{{ $contact->id }}">
                        <!-- /Contact-ID -->
                        <!-- Address-Input -->
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address"
                                class="form-control  @error('address') is-invalid @enderror"
                                placeholder="Please enter an address" value="{{ $contact->address }}"
                                autocomplete="new-password">
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
                                <?php
                                $emails = explode(',', $contact->email);
                                ?>
                                @if (count($emails) < 2)
                                    <div class="col-11">
                                    @else
                                        <div class="col-12">
                                @endif
                                @foreach ($emails as $email)
                                    <input type="email" name="email[]" id="email"
                                        class="form-control  @error('email') is-invalid @enderror mb-2"
                                        placeholder="Please enter email address" value="{{ $email }}"
                                        autocomplete="new-password">
                                @endforeach
                            </div>
                            @if (count($emails) < 2)
                                <div class="col-1">
                                    <button id="new-email" class="new-input btn btn-warning rounded-circle mr-md-2">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            @endif
                            <!-- Error-Message -->
                            @error('email')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                            <!-- /Error-Message -->
                        </div>
                </div>
                <!-- /Emial-Input -->
                <!-- Phone-Input -->
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <div class="form-row">
                        <?php
                        $phones = explode(',', $contact->phone);
                        ?>
                        @if (count($phones) < 2)
                            <div class="col-11">
                            @else
                                <div class="col-12">
                        @endif
                        @foreach ($phones as $phone)
                            <input type="phone" name="phone[]" id="phone"
                                class="form-control  @error('phone') is-invalid @enderror mb-2"
                                placeholder="Please enter phone number" value="{{ $phone }}"
                                autocomplete="new-password">
                        @endforeach
                    </div>
                    @if (count($phones) < 2)
                        <div class="col-1">
                            <button id="new-phone" class="new-input btn btn-warning rounded-circle mr-md-2">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    @endif
                    <!-- Error-Message -->
                    @error('phone')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                    <!-- /Error-Message -->
                </div>
            </div>
            <!-- /Phone-Input -->
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
@else
    <!-- Contacts-Alert -->
    <div class="col-12 order-0">
        <div class="col-md-8 col-lg-6 alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
            <strong>Sorry! </strong>There is no such as contact to edit!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <!-- /Contacts-Alert -->
    @endif
    </div>
@endsection
