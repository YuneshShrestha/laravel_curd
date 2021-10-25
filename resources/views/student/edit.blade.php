@extends('templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="/student" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input id="name" class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label for="roll">Roll *</label>
                        <input id="roll" class="form-control" type="text" name="roll">
                    </div>
                    <div class="form-group">
                        <label for="address">Address *</label>
                        <input id="address" class="form-control" type="text" name="address">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile (opt)</label>
                        <input id="mobile" class="form-control" type="text" name="mobile">
                    </div>
                   
                    <button type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection