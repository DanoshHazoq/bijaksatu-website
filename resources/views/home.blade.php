@extends('layout')

@section('content')

<!-- HERO SECTION -->

<section class="hero">
    <h1>Financial Training & Paraplanning Support Services</h1>

    <p>
        Producing industry-ready, competent and highly skilled professionals
        for Malaysia’s financial services industry.
    </p>

    <a href="{{ route('register') }}" class="btn">
        Register Now
    </a>
</section>

<!-- IMAGE SLIDER -->

<section class="main-slider-section">

    <div class="slider-heading">
        <span>BIJAKSATU SDN BHD</span>

        <h2>
            Build Your Future with Industry-Recognised Certification
        </h2>

        <p>
            Structured training • Practical learning • Official SKM certification
        </p>
    </div>

    <div class="custom-slider">

        <button class="slide-btn prev" onclick="changeSlide(-1)">
            &#10094;
        </button>

        <div class="slides">

            <!-- SKM CERTIFICATE -->

            <div class="slide active">
                <img src="{{ asset('images/skm-cert.png') }}" alt="SKM Certificate">
            </div>

            <!-- COURSE POSTER -->

            <div class="slide">
                <img src="{{ asset('images/course-poster.png') }}" alt="Course Poster">
            </div>

        </div>

        <button class="slide-btn next" onclick="changeSlide(1)">
            &#10095;
        </button>

    </div>

    <!-- DOTS -->

    <div class="slider-dots">
        <span class="dot active" onclick="currentSlide(0)"></span>
        <span class="dot" onclick="currentSlide(1)"></span>
    </div>

</section>

<!-- WHY BIJAKSATU -->

<section class="why-section">

    <div class="section-title">
        <h2>Why BIJAKSATU?</h2>

        <p>
            Structured financial training aligned with industry requirements and workforce development.
        </p>
    </div>

    <div class="cards">

        <div>
            <h3>Structured Training</h3>
            <p>
                Organized learning delivery with practical and competency-based approach.
            </p>
        </div>

        <div>
            <h3>Industry Aligned</h3>
            <p>
                Course structure designed according to industry standards and practices.
            </p>
        </div>

        <div>
            <h3>Practical Learning</h3>
            <p>
                Hands-on learning experience that reflects real industry situations.
            </p>
        </div>

        <div>
            <h3>Professional Coaches</h3>
            <p>
                Supported by experienced trainers and structured coaching team.
            </p>
        </div>

    </div>

</section>

<!-- VISION & MISSION -->

<section class="vision-mission-section">

    <div class="vision-box">
        <h2>Vision</h2>

        <p>
            To become a leading financial training and paraplanning support provider in Malaysia —
            producing industry-ready, competent, and highly skilled professionals who meet the
            growing demands of the financial services industry.
        </p>
    </div>

    <div class="mission-box">
        <h2>Mission</h2>

        <ul>
            <li>
                Deliver structured and practical training programmes aligned with industry standards.
            </li>

            <li>
                Equip trainees with real-world skills in financial analysis, data management,
                and documentation.
            </li>

            <li>
                Develop competent, confident graduates ready for firms, banks,
                and insurance industries.
            </li>

            <li>
                Provide hands-on learning experiences that reflect actual industry practices.
            </li>

            <li>
                Produce a skilled, knowledgeable, and ethical workforce
                to support industry growth.
            </li>
        </ul>
    </div>

</section>

<!-- JAVASCRIPT -->

<script>

    let slideIndex = 0;

    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');

    function showSlide(index) {

        if (index >= slides.length) {
            slideIndex = 0;
        }

        if (index < 0) {
            slideIndex = slides.length - 1;
        }

        slides.forEach(slide => {
            slide.classList.remove('active');
        });

        dots.forEach(dot => {
            dot.classList.remove('active');
        });

        slides[slideIndex].classList.add('active');
        dots[slideIndex].classList.add('active');
    }

    function changeSlide(n) {

        slideIndex += n;

        if (slideIndex >= slides.length) {
            slideIndex = 0;
        }

        if (slideIndex < 0) {
            slideIndex = slides.length - 1;
        }

        showSlide(slideIndex);
    }

    function currentSlide(n) {
        slideIndex = n;
        showSlide(slideIndex);
    }

    setInterval(() => {
        changeSlide(1);
    }, 5000);

</script>

@endsection