@extends('layouts.user_type.auth')

@section('content')

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<main class="main-content">
  <section>
<div class="p-3 mb-2 h-50" style="height:50p">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="3"></li>
    </ol>
    </ol>

    <!-- Wrapper for carousel items -->
    <div class="carousel-inner" >
        <div class="carousel-item active">
            <img src="../../assets/img/banner2.png" class="d-block w-100 " alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="../../assets/img/banner3.png" class="d-block w-100" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="../../assets/img/banner4.png" class="d-block w-100" alt="Slide 3">
        </div>
        <div class="carousel-item">
          <img src="../../assets/img/banner5.png" class="d-block w-100" alt="Slide 4">
      </div>
    </div>

    <!-- Carousel controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
</div>
  </section>
</main>
<script>
  $('.carousel').carousel({
    interval: 2000
  })
</script>

<!-- footer -->
<footer>
  <div class="container">
    <small>Copyright &copy; 2022 - balmon jakarta . All Rights Reserved.</small>
  </div>
</footer>
@endsection

