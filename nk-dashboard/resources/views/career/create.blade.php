@extends('layouts.app')
@section('content')
    <h3 class="text-white">Career Path</h3>
    <form action="{{ route('storeCareer') }}" method="post" class="text-white">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="title">Job Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Write your position">
            </div>
            <div class="form-group col-md-6">
                <label for="company">Company</label>
                <input type="text" class="form-control" name="company" id="company" placeholder="Write your company name">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="from">From Date</label>
                <input type="date" class="form-control" name="from" id="from">
            </div>
            <div class="form-group col-md-4">
                <label for="to">To Date</label>
                <input type="date" class="form-control" name="to" id="to">
            </div>
            <div class="form-group col-md-4 align-self-end">
                <label>Still working there?</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input " type="radio" name="status" id="inlineRadio1" value="1">
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"
                placeholder="Try to describe your job"></textarea>
        </div>
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <button type="submit" class="btn btn-warning btn-lg btn-block">Save</button>
    </form>
@endsection
