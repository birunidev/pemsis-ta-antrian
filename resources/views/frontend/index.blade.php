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

  <div id="app">
    <div class="container">
      <div class="text-center mt-4">
        <img src="{{asset('logo-bri.png')}}" width="200" alt="">
      </div>
    </div>
    <div style="background: url({{asset('iklan.jpg')}}); height: 339px" class="mt-4">
    </div>
    <div class="container">
      <div class="row">
        <div v-if="isLoading" class="col-md-12 py-5 text-center d-flex justify-content-center">
          <div class="spinner-border text-primary text-center " role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>
        <div v-else class="col-md-6 text-center mt-3" v-for="(antrian,key) in antrians" :key="antrian.id_antrian">
          <p class="h1 font-weight-bold">Teller [[antrian.nomer_teller]]</p>
          <div class="teller-box ">
            [[antrian.antrian_aktif]]
          </div>
        </div>

      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script>
    let vm = new Vue({
      el: '#app',
      data(){
        return {
          antrians: [],
          isLoading: true
        }
      },
      delimiters: ['[[', ']]'],
      created(){
        fetch('/get-antrian').then(res => res.json()).then(data => {
          console.log(data);
          this.antrians = data.data;
          this.isLoading = false;
        });
      },
      updated(){
        setTimeout(() => {
          fetch('/get-antrian').then(res => res.json()).then(data => {
          console.log(data);
          this.antrians = data.data;
          this.isLoading = false;
        });
        }, 100);
      }
    })
  </script>
</body>

</html>