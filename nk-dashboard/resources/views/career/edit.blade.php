<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    @if ($career)
        <h3 class="text-white">Career Path</h3>
        <form action="{{ route('update-career', $career->id) }}" method="post" class="text-white row">
            <input type="hidden" name="id" id="id" value="{{ $career->id }}">
            <div class="form-row col-md-6">
                <div class="form-group col-12">
                    <label for="developer">Developer</label>
                    <select name="dev_id" id="developer" class="form-control">
                        @foreach ($developers as $developer)
                            <option value="{{ $developer->id }}" selected>{{ $developer->name }}</option>
                        @endforeach
                    </select>
                    @error('developer')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="title">Job Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $career->title }}"
                        placeholder="Enter a position">
                </div>
                <div class="form-group col-md-6">
                    <label for="company">Company</label>
                    <input type="text" class="form-control" name="company" id="company" value="{{ $career->company }}"
                        placeholder="Enter company name">
                </div>
                <div class="form-group col-md-6">
                    <label for="from">From Date</label>
                    <input type="date" class="form-control" name="from" id="from"
                        value="{{ Carbon::createFromFormat('Y-m-d H:i:s', $career->from_date)->format('Y-m-d') }}">
                </div>
                @if ($career->status === 0)
                    <div class="form-group col-md-6">
                        <label for="to">To Date</label>
                        <input type="date" class="form-control" name="to" id="to"
                            value="{{ Carbon::createFromFormat('Y-m-d H:i:s', $career->to_date)->format('Y-m-d') }}">
                    </div>
                    <div class="form-group col-12">
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
                    <div class="form-group col-md-6">
                        <label for="to">To Date</label>
                        <input type="date" class="form-control" name="to" id="to" value="{{ $currentDate }}">
                    </div>
                    <div class="form-group col-md-12">
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
            <div class="form-group col-md-6">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"
                    placeholder="Try to describe your job">{{ $career->description }}</textarea>
            </div>
            <input name="_token" type="hidden" value="{{ csrf_token() }}" />
            <div class="col-md-2">
                <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                    Update
                    <i class="fas fa-sync-alt"></i>
                </button>
            </div>
        </form>
    @endif
@endsection
