<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    @if ($address)
        <h3 class="text-white">Edit Address</h3>
        <div class="col-md-6 p-0">
            <form action="{{ route('updateAddress'), $address->id }}" method="post" class="text-white">
                <input type="hidden" name="id" id="id" value="{{ $address->id }}">
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                        id="address" placeholder="Enter your address" value="{{ $address->address }}">
                    @error('address')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                {{-- Confirmation-Modal --}}
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content bg-dark border-warning">
                            <div class="modal-header bg-warning border-warning">
                                <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                            </div>
                            <div class="modal-body text-white">
                                Are you sure?
                            </div>
                            <div class="modal-footer border-warning d-flex justify-content-center">
                                <button type="submit" class="btn btn-success">Update <i
                                        class="ri-refresh-line"></i></button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close <i
                                        class="ri-close-circle-line"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- /Confirmation-Modal --}}
            </form>
        </div>
        <div class="col-md-2 p-0">
            <button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#exampleModal">Update
                <i class="ri-refresh-line"></i></button>
        </div>
        </form>
        <div class="col-md-2 p-0">
            <a href="{{ route('addressIndex') }}" class="btn btn-warning btn-block mt-3">Go Back <i
                    class="ri-arrow-go-back-fill"></i></a>
        </div>
    @endif
@endsection
