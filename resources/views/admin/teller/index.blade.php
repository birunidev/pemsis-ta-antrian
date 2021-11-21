@extends('layouts.admin')

@section('content')

    <h1 class="fw-bold">Manage Teller</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Teller</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID Antrian</th>
                                        <th>Nomer Teller</th>
                                        <th>Total Antrian</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($dataantrian as $key)
                                        <tr>
                                            <td>{{$key->id_antrian}}</td>
                                            <td>{{$key->nomer_teller}}</td>
                                            <td>{{$key->total_antrian}}</td>
                                            <td>
                                                <a href="/dashboard/teller/edit/{{$key->id_antrian}}" class="btn btn-success">Edit</a>
                                                <a href="/dashboard/teller/delete/{{$key->id_antrian}}" class="btn btn-danger">
                                                    <i class="fas fa-trash"></i></a>
                                            </td>
                                    @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
