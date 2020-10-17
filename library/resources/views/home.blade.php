@extends('layouts.app2')
@section('content')

<style>
  .animate .img img {
    transform: scale(1.1);
    transition: all .3s linear;
  }

  .img {
    overflow: hidden;
  }

  .animate:hover .img img {
    transform: scale(1);
  }

  .card-body {
    background: linear-gradient(to bottom right, #ee6f57, #ff9642);
    color: #ffffff;
    font-family: cursive;
    font-weight: bold;
    transition: all .3s ease-in-out;
  }

  .animate:hover .card-body {
    background: linear-gradient(to bottom right, #fca652, #fafcc2);
    color: #000000;
    font-weight: bold;
    font-family: cursive;
  }
</style>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="height:600px; ">
    <div class="carousel-item active">
      <img src="https://wallpapercrafter.com/desktop/234402-shelf-bookshelf-book-and-library-hd.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.cccc.edu/library/images_D3/img_adapt/services_head.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.littleguidedetroit.com/wp-content/uploads/2018/03/AdobeStock_139961059.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://mybayutcdn.bayut.com/mybayut/wp-content/uploads/Childrens-library-Abu-Dhabi-B-07-03.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container">
  <div class="row mt-5">
    <div class="animate col-sm-12 col-md-6 col-lg-4 mb-5">
      <div class="card">
        <div class="img">
          <img src="https://cache.desktopnexus.com/thumbseg/637/637739-bigthumbnail.jpg" class="card-img-top" alt="..." height='250px'>
        </div>
        <div class="par card-body">
          <p class="card-text">While writing is important in its own right, the evidence clearly shows that writing
            supports reading and reading development. ... They also are vital ways of improving your reading skills
            overall. Reading and writing are academic skills</p>
        </div>
      </div>
    </div>
    <div class="animate col-sm-12 col-md-6 col-lg-4  mb-5">
      <div class="card">
        <div class="img">
          <img src="https://previews.123rf.com/images/freeograph/freeograph1803/freeograph180302349/98229889-white-girl-sitting-near-bookshelf-in-library-at-night-student-is-sleeping-with-books-on-her-lap-.jpg" class="card-img-top" alt="..." height='250px' />
        </div>
        <div class="card-body">
          <p class="card-text">While writing is important in its own right, the evidence clearly shows that writing
            supports reading and reading development. ... They also are vital ways of improving your reading skills
            overall. Reading and writing are academic skills</p>
        </div>
      </div>
    </div>
    <div class="animate col-sm-12 col-md-6 col-lg-4  mb-5">
      <div class="card">
        <div class="img">
          <img src="https://www.tomswallpapers.com/large/201702/97538.jpg" class="card-img-top" height='250px' />
        </div>
        <div class="card-body">
          <p class="card-text">While writing is important in its own right, the evidence clearly shows that writing
            supports reading and reading development. ... They also are vital ways of improving your reading skills
            overall. Reading and writing are academic skills</p>
        </div>
      </div>
    </div>
    <div class="animate col-sm-12 col-md-6 col-lg-4  mb-5">
      <div class="card">
        <div class="img">
          <img src="https://i.pinimg.com/originals/79/bc/a3/79bca390363035b3b2cba02be7de7e08.jpg" class="card-img-top" alt="..." height='250px'>
        </div>
        <div class="card-body">
          <p class="card-text">While writing is important in its own right, the evidence clearly shows that writing
            supports reading and reading development. ... They also are vital ways of improving your reading skills
            overall. Reading and writing are academic skills</p>
        </div>
      </div>
    </div>
    <div class="animate col-sm-12 col-md-6 col-lg-4  mb-5">
      <div class="card">
        <div class="img">
          <img src="https://www.its.ac.id/news/wp-content/uploads/sites/2/2019/04/346199.jpg" class="card-img-top" alt="..." height='250px'>
        </div>
        <div class="card-body">
          <p class="card-text">While writing is important in its own right, the evidence clearly shows that writing
            supports reading and reading development. ... They also are vital ways of improving your reading skills
            overall. Reading and writing are academic skills</p>
        </div>
      </div>
    </div>
    <div class="animate col-sm-12 col-md-6 col-lg-4  mb-5">
      <div class="card">
        <div class="img">
          <img src="https://www.latinschool.org/uploaded/images/readers.jpg" class="card-img-top" alt="..." height='250px'>
        </div>
        <div class="card-body">
          <p class="card-text">While writing is important in its own right, the evidence clearly shows that writing
            supports reading and reading development. ... They also are vital ways of improving your reading skills
            overall. Reading and writing are academic skills</p>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="footer-copyright bg-dark text-light  text-center py-3">Edited by :
  <a href="https://www.linkedin.com/in/yasmine-kamal-7b982b1a6/
">YASSMINE KAMAL</a>
</div>
@endsection