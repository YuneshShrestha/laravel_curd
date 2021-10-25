@extends('templates.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <table>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Roll</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Action</th>
                    </tr>
                    {{-- students bhaneko pass gareko value and data bhnaeko affaulae bhkhhar create graeko var joslae student ko euta euta data linxa --}}
                    @foreach ($students as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->roll }}</td>
                            <td>{{ $data->address }}</td>
                            <td>{{ $data->mobile }}</td>
                            <td><a href="">Edit</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection