<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BRI Queue Show</title>

  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>

  <div class="container">
    <div class="text-center mt-4">
      <img src="{{asset('logo-bri.png')}}" width="200" alt="">
    </div>
  </div>
  <div style="background: url({{asset('iklan.jpg')}}); height: 339px" class="mt-4">
  </div>
  <div class="container">
    <div class="row ">
    @@foreach ($collection as $item)

    @endforeach
      <div class="col-md-6 text-center mt-3">
        <p class="h1 font-weight-bold">Teller 1</p>
        <div class="teller-box ">
          5a
        </div>
      </div>
      <div class="col-md-6 text-center mt-3">
        <p class="h1 font-weight-bold">Teller 2</p>
        <div class=" teller-box">
          4a
        </div>
      </div>
    </div>
  </div>


</body>

</html>
