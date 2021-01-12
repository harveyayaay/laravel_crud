@extends('welcome')

@section('client_view')

<section class="py-5 h-100">
  <div class="container-fluid app-container">
    <div class="row">
      <div class="col-xl-12 col-lg-12">
      <p>Store</p>
      <ul>
        <li><a href="/tees">Tees</a></li>
        <li><a href="/hoodies">Hoodies</a></li>
        <li><a href="/caps">Caps</a></li>
        <li><a href="/socks">Socks</a></li>
      </ul>
      </div>
    </div>
  </div>
</section>


@endsection