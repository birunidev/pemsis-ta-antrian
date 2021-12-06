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
  <div id="monitor-app">
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

      <div v-if="isLoading" class="col-md-12 py-5 text-center d-flex justify-content-center">
        <div class="spinner-border text-primary text-center " role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>
      <div class="row text-center mt-4" v-for="(antrian,index) in antrians" :key="antrian.id_antrian" v-else>

        <div class="col-md-3">
          <p class="display-3 font-weight-bold">Teller [[antrian.nomer_teller]]</p>
        </div>
        <div class="col-md-3">
          <p class="h4 font-weight-bolde">Saat ini</p>
          <div class="teller-box">
            [[antrian.antrian_aktif]]
          </div>
          <button v-on:click="handleNextAntrian(antrian.id_antrian, antrian.antrian_aktif)"
            class="btn btn-warning py-3 font-weight-bold w-100 mt-4 rounded-3">Selanjutnya</button>
        </div>
        <div class="col-md-3">
          <p class="h4 font-weight-bolde">Total Antrian</p>
          <div class="teller-box bg-secondary">
            [[antrian.total_antrian]]
          </div>
          <button v-on:click="handleAddAntrian(antrian.id_antrian, antrian.total_antrian)"
            class="btn btn-warning py-3 font-weight-bold w-100 mt-4 rounded-3">Selanjutnya</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script>
    let vm = new Vue({
      el:'#monitor-app',
      delimeters: ['[[', ']]'],
      data(){
        return {
          antrians: [],
          isLoading: true
        }
      },
      delimiters: ['[[', ']]'],
      methods: {
        handleNextAntrian(id_antrian, antrian_aktif){
          fetch('/next-antrian', {
            method: 'POST',
            headers: {
              "Content-Type": "Application/json",
              
            },
            body: JSON.stringify({
              id_antrian,antrian_aktif
            })
          }).then(res => res.json()).then(data=> {
            console.log(data);
            let antrian_copy = [...this.antrians];
            antrian_copy.forEach((item)=> {
              
              if(item.id_antrian == id_antrian){
                item.antrian_aktif= data.data.antrian_aktif
              }
            })
            console.log(antrian_copy);
            this.antrians = antrian_copy;
          })
        },
        handleAddAntrian(id_antrian, total_antrian){
          fetch('/tambah-antrian', {
            method: 'POST',
            headers: {
              "Content-Type": "Application/json",
              
            },
            body: JSON.stringify({
              id_antrian,total_antrian
            })
          }).then(res => res.json()).then(data=> {
            console.log(data);
            let antrian_copy = [...this.antrians];
            antrian_copy.forEach((item)=> {
              
              if(item.id_antrian == id_antrian){
                item.total_antrian= data.data.total_antrian
              }
            })
            console.log(antrian_copy);
            this.antrians = antrian_copy;
          })
        }
      },
      created(){
        fetch('/get-antrian').then(res => res.json()).then(data => {
          console.log(data);
          this.antrians = data.data;
          this.isLoading = false;
        });
      },
      
    })
  </script>


</body>

</html>