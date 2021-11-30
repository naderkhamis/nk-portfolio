@extends('layouts.app')
@section('content')
    <div class="col-md-6">
        @if (count($addresses))
            <table class="table table-hover table-dark table-bordered">
                <thead class="bg-warning text-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Address</th>
                        <th scope="col" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($addresses as $add)
                        <tr>
                            <td>{{ $add->id }}</td>
                            <td>{{ $add->address }}</td>
                            <td>
                                <div class="d-flex justify-content-around">
                                    <a href="{{ route('editAddress', $add->id) }}" class="btn btn-success">
                                        <i class="ri-edit-box-line"></i></a>
                                    <button type="button" class="btn btn-danger m-0" data-toggle="modal"
                                        data-target="#exampleModal">
                                        <i class="ri-delete-bin-4-line"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    {{-- Confirmation-Modal --}}
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content bg-dark border-warning">
                                <div class="modal-header bg-warning border-warning">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-white">
                                    Are you sure?
                                </div>
                                <div class="modal-footer border-warning d-flex justify-content-center">
                                    <div>
                                        <a href="{{ route('deleteAddress', $add->id) }}" class="btn btn-block btn-danger">
                                            Delete
                                            <i class="ri-delete-bin-4-line"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-block btn-success" data-dismiss="modal">
                                            Close
                                            <i class="ri-close-circle-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- /Confirmation-Modal --}}
                </tbody>
            </table>
        @else
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Sorry! </strong>There is no available Addresses.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="col-md-4 p-0">
            <a href="{{ route('createAddress') }}" class="btn btn-block btn-warning">
                New Address
                <i class="ri-add-circle-line"></i>
            </a>
        </div>
    </div>
@endsection
