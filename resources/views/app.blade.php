<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>Nordskens Vänner - @yield('title')</title>

    @include('partials.opengraph')

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="/css/app.css">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">

    <script src="/js/vendor/modernizr.js"></script>
</head>
<body>

<section class="hero" id="top">
    <div class="row">
        <div class="large-12 columns">
            <div class="main-wrapper">
                <h1>Nordskens Vänner</h1>

                <h3></h3>
                <hr>
                <div class="row">
                    <div class="large-8 columns large-centered">
                        <ul class="button-group even-5">
                            <li><a href="#top" class="button">Start</a></li>
                            <li><a href="#foreningen" class="button">Föreningen</a></li>
                            <li><a href="#styrelse" class="button">Styrelse</a></li>
                            <li><a href="#stadgar" class="button">Stadgar</a></li>
                            <li><a href="#kontakt" class="button">Kontakt</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="large-9 columns about-box">
            <div class="black-box">
                <h2>Nordsken - Norrlands spelfestival</h2>

                <p>Nordskens Vänner står bakom den årligt återkommande spelfestivalen Nordsken i Skellefteå.</p>

                <a href="//nordsken.se" class="secondary small button">Läs mer om Nordsken →</a>
            </div>
        </div>
        <div class="large-3 columns about-box">
            <div style="background-color: white">
                <img src="/images/header.png">
            </div>
        </div>
    </div>
</section>

@include('content.foreningen')

@include('content.styrelsen')

@include('content.stadgar')


<div class="row" id="kontakt">
    <div class="large-12 columns">
        <div class="panel" id="styrelsen">
            <div class="row">
                <div class="large-9 columns">
                    <h4>Kontakt</h4>

                    <p>Har du frågor om föreningen? Förslag på aktiviteter? Vill du ta del av föreningens protokoll?<br>
                        Maila <a href="mailto:support@nordsken.se">support@nordsken.se</a> eller kontakta oss på <a href="https://facebook.com/Nordsken">Facebook</a> så återkommer vi så snart vi kan!</p>
                </div>
                <div class="large-3 columns">
                    <a href="mailto:support@nordsken.se" class="radius button right">Kontakta oss</a>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="row">
        <div class="large-6 columns address">
            <p>
                Nordskens vänner<br>
                Köpmangatan 7A<br>
                93131 Skellefteå<br>
                Org. nr: 894702-0106
            </p>
        </div>
        <div class="large-6 columns">
            <ul class="inline-list right">
                <li><a href="https://facebook.com/Nordsken" title=""><i class="fa fa-facebook-square fa-2x"></i></a></li>
                <li><a href="https://twitter.com/Nordsken" title=""><i class="fa fa-twitter-square fa-2x"></i></a></li>
                <li><a href="https://www.youtube.com/user/NordskenMedia" title=""><i class="fa fa-youtube-square fa-2x"></i></a></li>
            </ul>
        </div>
    </div>
</footer>

<script src="/js/bundle.js"></script>
</body>
</html>
