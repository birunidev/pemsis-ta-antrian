@extends('layouts.admin')

@section('content')

    <h1 class="fw-bold">Tambah Teller</h1>
    <div class="container-fluid">
        <form action="/dashboard/teller/create/store" method="Post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for=""> ID Teller </label>
                        <input type="text" name="id_teller" class="form-control">
                        @if ($errors->has('id_teller'))
                            <div class="text-danger">
                                {{ $errors->first('id_teller') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for=""> Nomer Teller </label>
                        <input type="text" name="nomer_teller" class="form-control">
                        @if ($errors->has('id_teller'))
                            <div class="text-danger">
                                {{ $errors->first('id_teller') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for=""> Total Antrian </label>
                        <input type="text" name="total_antrian" class="form-control">
                        @if ($errors->has('id_teller'))
                            <div class="text-danger">
                                {{ $errors->first('id_teller') }}
                            </div>
                        @endif
                    </div>
                    <div class="my-3">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
