@extends('layouts.app')

@section('title')
Our-Client
@endsection

@section('styling')
<link rel="stylesheet" href="{{url ('client/style.css')}}">
@endsection

@section('content')
<div class="section1">
    <div class="container">
        <div class="content1">
            <div class="content-left">
                <h1>Our Client</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen </p>
            </div>
            <div class="content-right">
                <img src="../gambar/image5-client.png" alt="gambar">
            </div>
        </div>
    </div>
  </div>

  <div class="section2">
    <div class="container">
        <div class="content1">
            <img src="../gambar/client/Group 25.png" alt="gambar">
        </div>
    </div>
  </div>

  <div class="section3">
    <div class="container">
        <div class="content1">
            <h1>What they said</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting <br> industry. Lorem Ipsum has been</p>
        </div>
    </div>
  </div>

  <div class="section4">
    <div class="container">
        <div class="content-slide">
            <div class="imgslide fade">
                <img class="background" src="../gambar/client/Rectangle 65.png" alt="">
                <div class="photo"><img src="../gambar/client/Ellipse 15.png" alt=""></div>
                <div class="detail">
                    <h4>Scarlet Witch </h4>
                    <p>Human Resource Departement</p>
                </div>
                <div class="detail1">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, rerum repudiandae excepturi, sed amet quisquam exercitationem quia dolor esse ipsa quidem facere ut saepe quis explicabo. Qui veniam culpa quaerat.</p>
                </div>
            </div>

            <div class="imgslide fade">
                <img class="background" src="../gambar/client/Rectangle 65.png" alt="">
                <div class="photo"><img src="../gambar/Rectangle 46.png" alt=""></div>
                <div class="detail">
                    <h4>Scarlet Witch </h4>
                    <p>Human Resource Departement</p>
                </div>
                <div class="detail1">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                </div>
            </div>

            <div class="imgslide fade">
                <img class="background" src="../gambar/client/Rectangle 65.png" alt="">
                <div class="photo"><img src="../gambar/Rectangle 47.png" alt=""></div>
                <div class="detail">
                    <h4>Scarlet Witch </h4>
                    <p>Human Resource Departement</p>
                </div>
                <div class="detail1">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe provident quibusdam quia consectetur omnis ducimus? Enim a cumque dolore accusamus vero magnam libero debitis similique excepturi repudiandae? Repudiandae, architecto iste.</p>
                </div>
            </div>

            <a class="next" onClick="nextslide(1)">&#10095&#10095;</a> 
        </div>
        <div class="page">
            <span class="dot" onClick="dotslide(1)"></span>
            <span class="dot" onClick="dotslide(2)"></span>
            <span class="dot" onClick="dotslide(3)"></span>
        </div>
    </div>
  </div>

  <div class="section5">
    <div class="container">
        <div class="content1">
            <img src="../gambar/client/image 20.png" alt="">
        </div>
    </div>
  </div>
@endsection

@section('js')
<script>
    var slideIndex = 1;
        showSlide(slideIndex);

    function nextslide(n){
        showSlide(slideIndex += n);
    }

    function dotslide(n){
        showSlide(slideIndex = n);
    }

    function showSlide(n) {
        var i;
        var slides = document.getElementsByClassName("imgslide");
        var dot = document.getElementsByClassName("dot");
        
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
            
            slides[i].style.display = "none";
        }

        for (i = 0; i < slides.length; i++) {
            
            dot[i].className = dot[i].className.replace(" active", "");
        }

        slides[slideIndex - 1].style.display = "block";

        dot[slideIndex - 1].className += " active";
    }
@endsection