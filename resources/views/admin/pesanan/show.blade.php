@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">pesanan {{ $pesanan->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/pesanan') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/pesanan/' . $pesanan->id . '/edit') }}" title="Edit pesanan"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/pesanan' . '/' . $pesanan->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete pesanan" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pesanan->id }}</td>
                                    </tr>
                                    <tr><th> Id Pesanan </th><td> {{ $pesanan->id_pesanan }} </td></tr><tr><th> Jumlah Produk </th><td> {{ $pesanan->jumlah_produk }} </td></tr><tr><th> Nama Produk </th><td> {{ $pesanan->nama_produk }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
