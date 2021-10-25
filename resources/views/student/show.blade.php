@extends('templates.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Details</h5>
            <p class="card-text">Name: {{ $student->name }}</p>
            <p class="card-text">Roll: {{ $student->roll }}</p>
            <p class="card-text">Address: {{ $student->address }}</p>
            <p class="card-text">Mobile: {{ $student->mobile ?? 'N/A' }}</p>
            {{-- The null-coalescing operator ?? returns the value of its left-hand operand if it isn't null; otherwise, it evaluates the right-hand operand and returns its resul --}}
        </div>
    </div>
@endsection