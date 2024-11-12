@extends('frontend.layouts.header')
@section('title', "JFS Careers")
@section('description', "Shape the future you envision with JFS Technologies.")


@section('content')
<div class="inner-banner" style="background-image: url(https://s7ap1.scene7.com/is/image/TCSCOMprod/tab3-2048x1076-1?wid=1000&hei=526&dpr=off);">
    <div class="container">
        <div class="inner-title text-center">
            <h1>Shape the future you envision</h1>
            <ul>
                <li>
                    <a href="{{ asset('theme') }}">Home</a>
                </li>
                <li>
                    <i class="bx bx-chevrons-right"></i>
                </li>
                <li>Careers</li>
            </ul>
        </div>
    </div>
    <div class="inner-shape">
        <img src="{{ asset('theme') }}/{{ asset('theme') }}/assets/images/shape/inner-shape.png" alt="Images">
    </div>
</div>

<div class="case-study-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color2">Why JFS Technologies?</span>
            <h2>Amazing Opportunities Await You!</h2>
            <p>JFS Technologies is more than just a company; it’s a community of creative, dedicated, and driven professionals working together toward a common vision: building meaningful relationships and delivering impactful results. Join a leading digital solutions provider that values organizational well-being and sustainable growth!</p>
        </div>

        <div class="row pt-45">
            <div class="col-md-4">
                <div class="cards">
                    <div class="front p-3" style="background: url('https://icrmsoftware.com/storage/posts/November2021/OFuNiODwVKelw6ffLyDZ.png');background-size: cover;background-position: center center;">
                        <!-- <div class="front__img"></div>
                        <div class="front__content">
                            <div class="front__content--add"> Super Pizza</div>
                            <div class="front__content--header">Any pizza for 1 dollar</div>
                            <div class="front__content--add">Advertising</div>
                        </div> -->
                    </div>
                    <div class="back p-3">
                        <div class="back__content">
                            <p>You welcome if you need professional web developer.</p>
                            <p>My stack:</p>
                            <ul>
                                <li>React JS</li>
                                <li>Vue JS</li>
                                <li>Pure JS (ES6 and higher)</li>
                                <li>NodeJS or Kotlin(JVM) on backend</li>
                                <li>Unit and e2e testing</li>
                            </ul>
                            <p>Email us: <a href="mail:careers@jfstechnologies.com" class="text-white"><b><u>careers@jfstechnologies.com</u></b></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cards">
                    <div class="front p-3" style="background: url('https://icrmsoftware.com/storage/posts/November2021/OFuNiODwVKelw6ffLyDZ.png');background-size: cover;background-position: center center;">
                        <!-- <div class="front__img"></div>
                        <div class="front__content">
                            <div class="front__content--add"> Super Pizza</div>
                            <div class="front__content--header">Any pizza for 1 dollar</div>
                            <div class="front__content--add">Advertising</div>
                        </div> -->
                    </div>
                    <div class="back p-3">
                        <div class="back__content">
                            <p>You welcome if you need professional web developer.</p>
                            <p>My stack:</p>
                            <ul>
                                <li>React JS</li>
                                <li>Vue JS</li>
                                <li>Pure JS (ES6 and higher)</li>
                                <li>NodeJS or Kotlin(JVM) on backend</li>
                                <li>Unit and e2e testing</li>
                            </ul>
                            <p>Email us: <a href="mail:careers@jfstechnologies.com" class="text-white"><b><u>careers@jfstechnologies.com</u></b></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cards">
                    <div class="front p-3" style="background: url('https://icrmsoftware.com/storage/posts/November2021/OFuNiODwVKelw6ffLyDZ.png');background-size: cover;background-position: center center;">
                        <!-- <div class="front__img"></div>
                        <div class="front__content">
                            <div class="front__content--add"> Super Pizza</div>
                            <div class="front__content--header">Any pizza for 1 dollar</div>
                            <div class="front__content--add">Advertising</div>
                        </div> -->
                    </div>
                    <div class="back p-3">
                        <div class="back__content">
                            <p>You welcome if you need professional web developer.</p>
                            <p>My stack:</p>
                            <ul>
                                <li>React JS</li>
                                <li>Vue JS</li>
                                <li>Pure JS (ES6 and higher)</li>
                                <li>NodeJS or Kotlin(JVM) on backend</li>
                                <li>Unit and e2e testing</li>
                            </ul>
                            <p>Email us: <a href="mail:careers@jfstechnologies.com" class="text-white"><b><u>careers@jfstechnologies.com</u></b></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
