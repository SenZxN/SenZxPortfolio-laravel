@extends('layouts.main')

@section('container')
<script src="js/homejas.js"></script>
<link rel="stylesheet" href="css/homestyle.css">
    <div class="maindv" id="maindvhme">
        <div id="bannerdv">
            <img id="banner" src="img/banner.jpg" alt="">
        </div>
        <div id="homehoverdv">
            <p id="homesen">Sen Nagatsuki</p>
            <p id="homejob">Artist</p>
            <p id="wlcme">Hellow! I'm Sevian Dwi<br>I'm a profesional Motion Artist
            <br>Based from Indonesia</p>
        </div>
        <div id="content">
            <div id="content1" class="content">
                <div class="content">
                    <h1 id="jobsnamed" class="inactive">Profesional Graphics Artist</h1>
                    <p id="aboutme" class="inactive">Hi, my name is Sevian Dwi. I am a student at SMK N 1 Bantul, majoring in Visual Communication Design. I have 2 years of experience with 3D software, 5 years of experience with motion graphics, and 6 years of experience with video editing. I am also a member of the School team work as a VFX Artist and Motion Graphic Artist. I am interested in learning more about 3D modeling, 3D animation, and motion graphics. I plan to pursue a career as a 3D animator or motion graphics animator in the future.</p>
                </div>
                <div id="profilepic" class="inactive">
                    <img id="profpc" src="/img/profilephoto.png" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection