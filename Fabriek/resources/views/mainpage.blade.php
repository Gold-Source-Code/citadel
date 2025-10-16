<html>
    <head>
        <title>Fabriek</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/mainstyling.css')}}">
    <head\>
    <body>
        <map name="mapfields">
             <area shape="rect" coords="761,407,852,485" alt="schaar" onclick="schaarvenster()">
             <area shape="rect" coords="761,330,794,399" alt="platenrek" href="/platenrek">
             <area shape="rect" coords="761,242,814,322" alt="kantbank" href="/kantbank">
        </map>

        <div class="schaarvenster" id="schaar">
            <div class="schaarvenster-inner">
                <div class="information">
                    <div class="bigtext">
                        Handleiding:
                    </div>
                    <div class="smalltext">
                        <a href="https://youtu.be/jm-HEiLV_dI?si=bz8l2ZpBNY15YMRV&t=174">video</a>
                    </div>
                    <br><br><br>
                    <div class="bigtext">
                        Laatste Inspectie:
                    </div>
                    <div class="smalltext">
                        20/03/2025
                    </div>
                    <br><br><br>
                    <div class="bigtext">
                        Contact info:
                    </div>
                    <div class="smalltext">
                        adjong@davinci.nl
                    </div>
                </div>

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
                        <br>
                <button id="schaar-close">Close</button>
            </div>

            <div class="schaarvenster-extra">
                <div class="extra-information">
                    <div class="extratext">
                        Let op!<br>
                        Houd rekening met de afmetingen op het papier.
                    </div>
                </div>
                <div class="clippy">
                    <img src="{{asset('icons/clippy.gif')}}" alt="assistant">
                </div>
            </div>
        </div>

        <div class="map">
            <img src="{{asset('icons/plattegrondv1.png')}}" alt="map" usemap="#mapfields">
        </div>

        <div class="watermark">
            <img src="{{asset('icons/watermark5.png')}}" alt="watermark">
        </div>
        <script src="{{asset('js/vensterscript.js')}}"></script>
    <body\>
<html\>