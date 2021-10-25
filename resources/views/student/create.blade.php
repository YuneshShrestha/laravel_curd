@extends('templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="/student" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}">
                    </div>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="form-group">
                        <label for="roll">Roll *</label>
                        <input id="roll" class="form-control" type="text" name="roll" value="{{ old('roll') }}">
                    </div>
                    @error('roll')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="form-group">
                        <label for="address">Address *</label>
                        <input id="address" class="form-control" type="text" name="address" value="{{ old('address') }}">
                    </div>
                    @error('address')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="form-group">
                        <label for="mobile">Mobile (opt)</label>
                        <input id="mobile" class="form-control" type="text" name="mobile" value="{{ old('mobile') }}">
                    </div>
                   
                    <button type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection