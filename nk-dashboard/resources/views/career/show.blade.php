<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    @if ($career)
        <div class="row">
            <div class="col-md-8 mb-3">
                <div class="card card-warning bg-dark">
                    <div class="card-header h6">
                        {{ $career->id }}. {{ $career->title }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title pb-2">{{ $career->company }}</h5>
                        <p class="card-text mb-3">{{ $career->description }}</p>
                        <div>
                            <strong class="badge badge-warning p-2 mb-2 font-italic">
                                From:
                                {{ Carbon::createFromFormat('Y-m-d H:i:s', $career->from_date)->format('d M Y') }}
                            </strong>
                        </div>
                        <div>
                            <strong class="badge badge-warning p-2 font-italic">
                                @if ($career->status === 0)
                                    To:
                                    {{ Carbon::createFromFormat('Y-m-d H:i:s', $career->to_date)->format('d M Y') }}
                                @else
                                    Till now
                                @endif
                            </strong>
                        </div>
                    </div>
                    <div class="card-footer border-top border-warning d-flex justify-content-start">
                        <a href="{{ route('edit-career', $career->id) }}" class="btn btn-success rounded-circle mr-2">
                            <i class="fas fa-pen"></i>
                        </a>
                        <a href="{{ route('delete-career', $career->id) }}" class="btn btn-danger rounded-circle">
                            <i class="fas fa-trash"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
