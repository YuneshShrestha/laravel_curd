@extends('templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table class="table table-striped">
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Action</th>
                        </tr>
                        {{-- students bhaneko pass gareko value and data bhnaeko affaulae bhkhhar create graeko var joslae student ko euta euta data linxa --}}
                        @foreach ($students as  $count=> $data)
                           
                            <tr>
                                <td>{{ ++$count }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->roll }}</td>
                                <td>{{ $data->address }}</td>
                                <td>{{ $data->mobile }}</td>
                                <td>
                                    <form action="student/{{ $data->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <a href="student/{{ $data->id }}/edit" class="btn btn-success">Edit</a>
                                        <a href="/student/{{ $data->id }}" class="btn btn-secondary">View</a>
                               
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection