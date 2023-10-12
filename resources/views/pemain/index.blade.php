@extends('pemain.layout')

@section('content')
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <caption><h3>Data Pemain</h3></caption>
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

@endsection