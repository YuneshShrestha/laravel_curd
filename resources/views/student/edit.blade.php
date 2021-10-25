@extends('templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="/student/{{ $student->id }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input id="name" class="form-control" type="text" name="name" value="{{ $student->name }}">
                    </div>
                    <div class="form-group">
                        <label for="roll">Roll *</label>
                        <input id="roll" class="form-control" type="text" name="roll" value="{{ $student->roll }}">
                    </div>
                    <div class="form-group">
                        <label for="address">Address *</label>
                        <input id="address" class="form-control" type="text" name="address" value="{{ $student->address }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile (opt)</label>
                        <input id="mobile" class="form-control" type="text" name="mobile" value="{{ $student->mobile }}">
                    </div>
                   
                    <button type="submit" class="btn btn-success">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection