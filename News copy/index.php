<!DOCTYPE html>
<html>
<head>
  <title>Vue Bootstrap</title>
  <!-- Load required Bootstrap and BootstrapVue CSS -->
  <link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap/dist/css/bootstrap.min.css" />
  <link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css" />
   <link rel="stylesheet" type="text/css" href="assets/css/main2.css">

  <!-- Load polyfills to support older browsers -->
  <script src="//polyfill.io/v3/polyfill.min.js?features=es2015%2CIntersectionObserver" crossorigin="anonymous"></script>

  <!-- Load Vue followed by BootstrapVue -->
  <script src="//unpkg.com/vue@latest/dist/vue.min.js"></script>
  <script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js"></script>	
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.js"></script>
</head>
<body>
    <nav>
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="Game.html">Game</a></li>
<li><a href="Update%20Log.html">Update Log</a></li>
<li><a href="Store.html">Store</a></li>
</ul></nav>
  <div id="app">
    <b-container class='mt-5'>
      <b-form @submit='onSubmit'>
        <b-row class='my-1'>
          <b-col cols='2'>
            <label for='type-text'>Text: </label>
          </b-col>
          <b-col cols='8'>
            <b-form-input v-model='enteredData.plainText' id='type-text' type='text'></b-form-input>
          </b-col>
        </b-row>

        <b-row class='my-1'>
          <b-col cols='2'>
            <label for='type-password'>Password: </label>
          </b-col>
          <b-col cols='8'>
            <b-form-input v-model='enteredData.password' id='type-password' type='password'></b-form-input>
          </b-col>
        </b-row>

        <b-row class='my-1'>
          <b-col cols='2'>
            <label for='type-email'>Email: </label>
          </b-col>
          <b-col cols='8'>
            <b-form-input v-model='enteredData.email' id='type-email' type='email'></b-form-input>
          </b-col>
        </b-row>

        <b-row class='my-1'>
          <b-col cols='2'>
            <label for='type-date'>Date: </label>
          </b-col>
          <b-col cols='8'>
            <b-form-input v-model='enteredData.date' id='type-date' type='date'></b-form-input>
          </b-col>
        </b-row>

        <b-row class='pt-3'>
          <b-col cols='2'></b-col>
          <b-col cols='8' class='text-center'>
            <b-button type='submit' variant='primary'>Submit</b-button>
          </b-col>
        </b-row>

        <b-row>
          <b-col cols='10'>
            <b-card class='mt-3'
              header='Form Data Result'>
              <pre class="m-0">{{enteredData}}</pre>
            </b-card>
          </b-col>
        </b-row>
      </b-form>
    </b-container>
  </div>
  <script type="text/javascript" src="app.js"></script>
</body>
</html>