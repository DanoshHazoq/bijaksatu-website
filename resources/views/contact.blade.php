@extends('layout')

@section('content')
<h1>Contact Us</h1>

<div class="box">
    <p>
        <strong>Email:</strong>
        <a href="mailto:chengasssec.js@gmail.com">
            chengasssec.js@gmail.com
        </a>
    </p>

    <p>
        <strong>Phone:</strong>
        <a href="tel:073581528">
            073581528
        </a>
    </p>

    <p>
        <strong>Location:</strong>
        1A & 1B Jalan Kundang 3, Taman Bukit Pasir
    </p>

    <p>
        <a class="btn" href="https://maps.app.goo.gl/tY9SaZTHLMTzP84q8" target="_blank">
            Open in Google Maps
        </a>
    </p>

    <div class="map">
        <iframe
            src="https://www.google.com/maps?q=1A%20%261B%20Jalan%20Kundang%203%2C%20Taman%20Bukit%20Pasir&output=embed"
            width="100%"
            height="400"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </div>

    <p>
        <strong>Facebook:</strong>
        <a href="https://www.facebook.com/people/Pusat-Latihan-Bijak-Satu/61557886246457/" target="_blank">
            Pusat Latihan Bijak Satu
        </a>
    </p>
</div>
@endsection