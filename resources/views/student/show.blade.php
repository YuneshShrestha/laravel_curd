@extends('templates.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Details</h5>
            <p class="card-text">Name: {{ $student->name }}</p>
            <p class="card-text">Roll: {{ $student->roll }}</p>
            <p class="card-text">Address: {{ $student->address }}</p>
            <p class="card-text">Mobile: {{ $student->mobile }}</p>
        </div>
    </div>
@endsection