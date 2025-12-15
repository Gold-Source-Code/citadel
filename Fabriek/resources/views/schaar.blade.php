<html>
    <head>
        <title>Fabriek</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/mainstyling.css')}}">
    <head\>
    <body>
        <div class="info-pagina">
            <div class="information">
                <div class="bigtext">
                    Handleiding:
                </div>
                <div class="smalltext">
                    <a href="{{$video}}">video</a>
                </div>
                <br><br><br>
                <div class="bigtext">
                    Laatste Inspectie:
                </div>
                <div class="smalltext">
                    {{$datum}}
                </div>
                <br><br><br>
                <div class="bigtext">
                    Contact info:
                </div>
                <div class="smalltext">
                    adjong@davinci.nl
                </div>
            </div>
            <div class="foto-box">
                <div class="foto">
                    <img src="{{asset('icons/schaar.jpg')}}" alt="schaar">
                </div>

            <div class="safety">
                <div class="icon">
                    <img src="{{asset('icons/safety5.png')}}" alt="helm">
                </div>
                <div class="icon2">
                    <img src="{{asset('icons/safety7.png')}}" alt="lees">
                </div>
                <div class="icon3">
                    <img src="{{asset('icons/safety3.png')}}" alt="outfit">
                </div>
                <div class="icon4">
                    <img src="{{asset('icons/safety4.png')}}" alt="laarzen">
                </div>
            </div>
        </div>

            <div class="info-pagina-extra">
                <div class="extra-information">
                    <div class="extratext">
                        Let op!<br>
                        {{$extrainfo}}
                    </div>
                </div>
                <div class="clippy">
                    <img src="{{asset('icons/clippy.gif')}}" alt="assistant">
                </div>
            </div>
        </div>

        <a class="backtomain" href="/mainpage">
            <button>X</button>
        </a>

        <div class="watermark">
            <img src="{{asset('icons/watermark5.png')}}" alt="watermark">
        </div>
    <body\>
<html\>