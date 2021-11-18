@extends('layouts.admin')

@section('content')

<h1 class="fw-bold">Tambah Teller</h1>
<div class="container-fluid">
  <form action="">
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for=""> ID Teller </label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for=""> Nomer Teller </label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for=""> Total Antrian </label>
          <input type="text" class="form-control">
        </div>
        <div class="my-3">
          <button class="btn btn-primary" type="submit">Submit</button>
        </div>
      </div>
    </div>
  </form>
</div>

@endsection