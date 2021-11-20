@extends('layouts.app')
@section('content')
    @if ($career)
        <h3 class="text-white">Career Path</h3>
        <form action="{{ route('updateCareer', $career->id) }}" method="post" class="text-white">
            <input type="hidden" name="id" id="id" value="{{ $career->id }}">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="title">Job Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $career->title }}"
                        placeholder="Write your position">
                </div>
                <div class="form-group col-md-6">
                    <label for="company">Company</label>
                    <input type="text" class="form-control" name="company" id="company" value="{{ $career->company }}"
                        placeholder="Write your company name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="from">From Date</label>
                    <input type="date" class="form-control" name="from" id="from" value="{{ $career->from_date }}">
                </div>
                @if ($career->status === 0)
                    <div class="form-group col-md-4">
                        <label for="to">To Date</label>
                        <input type="date" class="form-control" name="to" id="to" value="{{ $career->to_date }}">
                    </div>
                    <div class="form-group col-md-4 align-self-end">
                        <label>Still working there?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input " type="radio" name="status" id="inlineRadio1" value="1">
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0" checked>
                            <label class="form-check-label" for="inlineRadio2">No</label>
                        </div>
                    </div>
                @else
                    <div class="form-group col-md-4">
                        <label for="to">To Date</label>
                        <input type="date" class="form-control" name="to" id="to" value="{{ $currentDate }}">
                    </div>
                    <div class="form-group col-md-4 align-self-end">
                        <label>Still working there?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input " type="radio" name="status" id="inlineRadio1" value="1" checked>
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0">
                            <label class="form-check-label" for="inlineRadio2">No</label>
                        </div>
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"
                    placeholder="Try to describe your job">{{ $career->description }}</textarea>
            </div>
            <input name="_token" type="hidden" value="{{ csrf_token() }}" />
            {{-- Confirmation-Modal --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-dark border-warning">
                        <div class="modal-header bg-warning border-warning">
                            <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                        </div>
                        <div class="modal-body text-white">
                            Are you sure?
                        </div>
                        <div class="modal-footer border-warning">
                            <button type="button" class="btn btn-warning rounded-pill" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-secondary rounded-pill">Update</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- /Confirmation-Modal --}}
            <button type="button" class="btn btn-warning rounded-pill" data-toggle="modal"
                data-target="#exampleModal">Update</button>
        </form>
    @endif
@endsection
