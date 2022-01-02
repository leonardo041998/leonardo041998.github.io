@extends('themes.partials.main')

@section('content')

<section class="bg-img1 txt-center p-lr-15 p-tb-92">
<div class="row justify-content-around">
  <div class="col-md-4">
    <main class="form-signin">
      <h1 class="h3 mb-3 fw-normal">Login</h1>
      <form>
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Alamat Email</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      </form>
      <small class="d-block text-center mt-3">Belum Punya akun? <a href="/register">Klik Disini!</a></small>
    </main>
  </div>
</div>
</section>

@endsection