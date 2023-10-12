@extends('pemain.layout')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<div class="card">
    <div class="card-header">Data Pemain</div>
    <div class="card-body">
        <table class="table table-striped table-bordered">
            <thead class="table-light">
                <tr>
                    <th scope="col">Nama Pemain</th>
                    <th scope="col">No. Punggung</th>
                    <th scope="col">Posisi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_pemain as $data)
                <tr>
                    <td>{{ $data->nama_pemain }}</td>
                    <td>{{ $data->no_punggung }}</td>
                    <td>{{ $data->posisi }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection