@extends('Landing.layouts.app')
@section('content')

 <!-- Page Content-->
 <section class="py-5">
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="fw-bolder">Virtual Tour</h1>
            <p class="lead fw-normal text-muted mb-0">Company portfolio</p>
        </div>
    </div>

    <div id="panorama"></div>

    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <script>
      AFRAME.registerComponent('tour', {
        init: function() {
          var panorama = document.querySelector('#panorama');
  
          // Daftar gambar panorama yang akan digunakan
          var panoramaImages = [
            'image1.jpg',
            'image2.jpg',
            'image3.jpg'
          ];
  
          var currentIndex = 0;
          panorama.setAttribute('src', panoramaImages[currentIndex]);
  
          panorama.addEventListener('click', function() {
            currentIndex = (currentIndex + 1) % panoramaImages.length;
            panorama.setAttribute('src', panoramaImages[currentIndex]);
          });
        }
      });
  
      document.addEventListener('DOMContentLoaded', function() {
        var panorama = document.querySelector('#panorama');
        panorama.setAttribute('tour', '');
      });
    </script>


</section>


@endsection