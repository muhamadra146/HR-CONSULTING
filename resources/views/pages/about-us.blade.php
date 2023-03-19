@extends('layouts.app')

@section('title')
About-As
@endsection

@section('styling')
<link rel="stylesheet" href="{{url ('abou-us/style.css') }}">
@endsection

@section('content')

<div class="section1">
    <div class="container">
      <div class="content1">
        <h1>About Us </h1>
        <img src="../gambar/gambar-about/image 5.png" alt="">
      </div>
    </div>
  </div>

<div class="section2">
    <div class="container">
      <div class="content1">
        <div class="content-left">
          <h1>Our Mission</h1>
          <p>Isinya adalah penjelasan & pemaparan dari visi dan misi</p>
        </div>
        <div class="content-right">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        </div>
      </div>
      <div class="content2">
        <div class="col1">
          <h3>Lorem Ipsum Dumet</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
        </div>
        <div class="col1">
          <h3>Lorem Ipsum Dumet</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
        </div>
        <div class="col1">
          <h3>Lorem Ipsum Dumet</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="section3">
    <div class="container">
      <div class="content1">
        <h1 class="why1">Why Choose Us</h1>
        <div class="grid">
          <h1 class="why2">Why Choose Us</h1>
          <div class="grid1">
            <img src="../gambar/image 6.png" alt="">
            <h2>Secure</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
          </div>
          <div class="grid1">
            <img src="../gambar/image 7.png" alt="">
            <h2>Secure</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
          </div>
          <div class="grid1">
            <img src="../gambar/image 8.png" alt="">
            <h2>Secure</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
          </div>
          <div class="grid1">
            <img src="../gambar/image 9.png" alt="">
            <h2>Secure</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section4">
    <div class="container">
      <div class="content1">
        <h1>Our Team</h1>
        <div class="grid">
          <div class="grid1">
            <img src="../gambar/Rectangle 46.png" alt="gambar">
            <h2>Valerie Agatha</h2>
            <p>HR Consultant</p>
          </div>
          <div class="grid1">
            <img src="../gambar/Rectangle 46.png" alt="gambar">
            <h2>Valerie Agatha</h2>
            <p>HR Consultant</p>
          </div>
          <div class="grid1">
            <img src="../gambar/Rectangle 46.png" alt="gambar">
            <h2>Valerie Agatha</h2>
            <p>HR Consultant</p>
          </div>
          <div class="grid1">
            <img src="../gambar/Rectangle 46.png" alt="gambar">
            <h2>Valerie Agatha</h2>
            <p>HR Consultant</p>
          </div>
          <div class="grid1">
            <img src="../gambar/Rectangle 46.png" alt="gambar">
            <h2>Valerie Agatha</h2>
            <p>HR Consultant</p>
          </div>
          <div class="grid1">
            <img src="../gambar/Rectangle 46.png" alt="gambar">
            <h2>Valerie Agatha</h2>
            <p>HR Consultant</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection