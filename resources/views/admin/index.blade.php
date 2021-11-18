<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <header>
    <div class="container">
      <div class="row justify-content-between py-4">
        <div class="col-md-4">
          <img src="{{asset('logo-bri.png')}}" width="100" alt="">
        </div>
        <div class="col-md-4 text-right">
          <a href="/dashboard" class="d-block">Menuju ke Dashboard</a>
        </div>
      </div>
    </div>
  </header>
  <div class="container mb-5">
    <div class="row mb-5 text-center">
      <div class="col-md-3">
        <p class="display-3 font-weight-bold">Teller 1</p>
      </div>
      <div class="col-md-3">
        <p class="h4 font-weight-bolde">Saat ini</p>
        <div class="teller-box">
          4
        </div>
        <button class="btn btn-warning py-3 font-weight-bold w-100 mt-4 rounded-3">Selanjutnya</button>
      </div>
      <div class="col-md-3">
        <p class="h4 font-weight-bolde">Total Antrian</p>
        <div class="teller-box bg-secondary">
          121
        </div>
        <button class="btn btn-warning py-3 font-weight-bold w-100 mt-4 rounded-3">Selanjutnya</button>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-3">
        <p class="display-3 font-weight-bold">Teller 2</p>
      </div>
      <div class="col-md-3">
        <p class="h4 font-weight-bolde">Saat ini</p>
        <div class="teller-box">
          4
        </div>
        <button class="btn btn-warning py-3 font-weight-bold w-100 mt-4 rounded-3">Selanjutnya</button>
      </div>
      <div class="col-md-3">
        <p class="h4 font-weight-bolde">Total Antrian</p>
        <div class="teller-box bg-secondary">
          121
        </div>
        <button class="btn btn-warning py-3 font-weight-bold w-100 mt-4 rounded-3">Selanjutnya</button>
      </div>
    </div>
  </div>

</body>

</html>