<html>
    <head>
        <title>Fabriek</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/mainstyling.css')}}">
    <head\>
    <body>
        <map name="mapfields">
             <area shape="rect" coords="761,407,852,485" alt="schaar" href="/schaar">
             <area shape="rect" coords="761,330,794,399" alt="platenrek" href="/platenrek">
             <area shape="rect" coords="761,242,814,322" alt="kantbank" href="/kantbank">
        </map>

        <div class=button><button id="kantbank-open">Open</button></div>

        <div class="kantbankvenster" id="kantbank">
            <div class="kantbankvenster-inner">
                lol
                <br>
                <div class=button><button id="kantbank-close">Close</button></div>
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