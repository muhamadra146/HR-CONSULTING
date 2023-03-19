@extends('layouts.app')

@section('title')
Home
@endsection

@section('styling')
<link rel="stylesheet" href="{{url ('landing-page/style.css')}}">
@endsection

@section('content')
<div class="section1">
    <div class="container">
        <div class="content1">
            <div class="content-left">
                <h1>Human Capital Management & Development</h1>
                <p>Kami membantu perusahaan anda membangun dan mengelola sumber data manusia secara efektif dan efisien.</p>
                <div class="section1-button"><button>Contact Us</button></div>
            </div>
            <div class="content-right">
                <img src="../gambar/image 3.png" alt="gambar">
            </div>
        </div>
    </div>
</div>

<div class="section2">
    <div class="container">
        <div class="content1">
            <h2>“ Program ini dirancang untuk membantu perusahaan <br>
                anda membangun sistem pengelolaan manusia yang efektif dan efisien melalui perencanaan yang sistematis dan terintegrasi agar mampu berkontribusi dan produktif terhadap pencapaian tujuan perusahaan</h2>
            <img src="../gambar/Group 9.png" alt="">
        </div>
    </div>
</div>

<div class="section3">
    <div class="container">
        <div class="content1">
            <div>Our services</div>
        </div>
        <div class="content2">
            <div class="grid">
                <h3>Development <br> Human Capital Program 1</h3>
                <ul>
                    <li>Workshop peran SDM diperusahaan</li>
                    <li>FGD Human process</li>
                    <li>Pelatihan basic organizational</li>
                    <li>Development dan basic human resource</li>
                    <li>Pembukaan agen perubahan internal</li>
                </ul>
            </div>
            <div class="grid">
                <h3>Development <br> Human Capital Program 2</h3>
                <ul>
                    <li>Strategic initiative</li>
                    <li>Techno-structural initiative</li>
                    <li>Advantage human resource management</li>
                    <li>Implementing and evaluation</li>
                </ul>
            </div>
            <div class="grid">
                <h3>Human Resource <br> Outsourching</h3>
                <ul>
                    <li>Ecpand your HR capacity without hiring a full-time employee</li>
                </ul>
            </div>
            <div class="grid">
                <h3>Psychology <br> Assessment</h3>
                <ul>
                    <li>Konsultasi Psychology Assessment untuk individu maupun perusahaan</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="section4">
    <div class="container">
        <div class="content1">
            <div class="content-left">
                <h1>Consult Now <br> And Feel The Benefits</h1>
                <div class="section1-button"><button>Contact Us</button></div>
            </div>
            <div class="content-right">
                <img src="../gambar/image 4.png" alt="gambar">
            </div>
        </div>
    </div>
</div>
@endsection