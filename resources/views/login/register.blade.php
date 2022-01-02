@extends('themes.partials.main')

@section('content')

<section class="bg-img1 txt-center p-lr-15 p-tb-92">
<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-registration">
      <h1 class="h3 mb-3 fw-normal">Register Form</h1>
      <form>
        <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Nama Anda...">
          <label for="name">Nama</label>
        </div>

        <div class="form-floating">
          <input type="text" name="username" class="form-control" id="username" placeholder="Username Anda...">
          <label for="username">Username</label>
        </div>

        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
          <label for="email">Alamat Email</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
          <label for="password">Password</label>
        </div>
        
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
      </form>
      <small class="d-block text-center mt-3">Sudah punya akun? <a href="/login">Klik disini!</a></small>
    </main>
  </div>
</div>
</section>

@endsection