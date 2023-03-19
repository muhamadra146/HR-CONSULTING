@extends('layouts.app')

@section('title')
Service
@endsection

@section('styling')
<link rel="stylesheet" href="{{url('services/style.css')}}">
@endsection

@section('content')
<div class="container">
    <div class="section1">
        <div class="content">
            <h1>HR Outsourcing</h1>
            <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem</h2>
            <div><button>Consult Now</button></div>
        </div>
        <div class="gambar">
            <img src="../gambar/image 10.png" alt="gambar">
        </div>
    </div>
</div>


<div class="container">
    <div class="section2">
        <div class="gambar">
            <img src="../gambar/image 11.png" alt="">
        </div>
        <div class="about">
            <h1>About service</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                leap
                into electronic typesetting, remaining essentially unchanged.</p>
        </div>
    </div>

    <div class="why">
        <h1>Why should our sources?</h1>
    </div>

    <div class="section3">
        <div class="row">
            <div class="col1">
                <h5><img src="../gambar/image 15.png" alt="gambar">Cuts Cost</h5>
                <p class="card-text">Operational and labour costs are significantly reduced when you start
                    outsourcing.
                    You don’t have to fork out a fortune of your hard-earned money to develop and establish a
                    department
                    in your company. Through outsourcing, you can minimise on unnecessary expenditures and inject
                    your
                    capital more in other aspects of your business</p>
            </div>
            <div class="col2">
                <h5><img src="../gambar/image 15.png" alt="gambar">Cuts Cost</h5>
                <p class="card-text">Operational and labour costs are significantly reduced when you start
                    outsourcing.
                    You don’t have to fork out a fortune of your hard-earned money to develop and establish a
                    department
                    in your company. Through outsourcing, you can minimise on unnecessary expenditures and inject
                    your
                    capital more in other aspects of your business</p>
            </div>
        </div>
        <div class="row">
            <div class="col1">
                <h5><img src="../gambar/image 15.png" alt="gambar">Cuts Cost</h5>
                <p class="card-text">Operational and labour costs are significantly reduced when you start
                    outsourcing.
                    You don’t have to fork out a fortune of your hard-earned money to develop and establish a
                    department
                    in your company. Through outsourcing, you can minimise on unnecessary expenditures and inject
                    your
                    capital more in other aspects of your business</p>
            </div>
            <div class="col2">
                <h5><img src="../gambar/image 15.png" alt="gambar">Cuts Cost</h5>
                <p class="card-text">Operational and labour costs are significantly reduced when you start
                    outsourcing.
                    You don’t have to fork out a fortune of your hard-earned money to develop and establish a
                    department
                    in your company. Through outsourcing, you can minimise on unnecessary expenditures and inject
                    your
                    capital more in other aspects of your business</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="kata-kata">
        <p>“ Let us supply you with trained professionals in that area who can help you to smoothly iron out these
            critical duties ”</p>
    </div>
</div>

<div class="container">
    <div class="section4">
        <div class="bacground"></div>
        <h4>Check our ther services</h4>
        <div class="card">
            <div class="card1">
                <img src="../gambar/image 16.png" alt="gambar">
                <p>Development <br> Human Capital Program 1</p>
            </div>
            <div class="card1">
                <img src="../gambar/image 16 (1).png" alt="gambar">
                <p>Development <br> Human Capital Program 2</p>
            </div>
            <div class="card1">
                <img src="../gambar/image 14.png" alt="gambarr">
                <p>Psychology Assessment</p>
            </div>
        </div>
    </div>
    
<div class="container">
    <div class="section5">
        <div class="form">
            <div><label for="username">Username</label></div>
            <div> <input type="text"></div>
            <div><label for="Company-name">Company name</label></div>
            <div> <input type="text"></div>
            <div><label for="Company-address">Company address</label></div>
            <div> <input type="text"></div>
            <div><label for="PIC number">PIC number</label></div>
            <div> <input type="number"></div>
            <div><label for="Request service">Request service</label></div>
            <div> <input type="text"></div>
            <div><label for="Need description">Need description</label></div>
            <div> <input type="text" class="input-box"></div>
        </div>
    </div>
</div>
@endsection