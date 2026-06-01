<html>
    <head>
        <title>Fabriek</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/mapstyling.css')}}">
        <script src="{{asset('js/scripts.js')}}"></script>
    <head\>
    <body>
        <map name="mapfields">
             <area shape="rect" coords="761,407,852,485" alt="schaar" href="/schaar">
             <area shape="rect" coords="761,330,794,399" alt="platenrek" href="/platenrek">
             <area shape="rect" coords="761,242,814,322" alt="kantbank" href="/kantbank">
        </map>

        <div class="map">
            <img src="{{asset('icons/plattegrondv1.png')}}" alt="map" usemap="#mapfields">
        </div>

        <div class="schaarindicator">
            <img id="imageid1" src="#">
        </div>
        <div class="kantbankindicator">
            <img id="imageid2" src="#">
        </div>
        <script>
            function changeIcon(){
                var status1 = "{{$status1}}";
                var status2 = "{{$status2}}";
                var img1 = document.querySelector("#imageid1");
                var img2 = document.querySelector("#imageid2");
                if (status1 == "OPERATIONAL") {
                    img1.src = "icons/status-operational.png";
                }
                if (status1=="BROKEN") {
                    img1.src = "icons/status-broken.png";
                }
                if (status2=="OPERATIONAL") {
                    img2.src = "icons/status-operational.png";
                }
                if (status2=="BROKEN") {
                    img2.src = "icons/status-broken.png";
                }
            }
            changeIcon()
        </script>
        
        <!-- Buttons -->

        <a class="dashboard" href="https://stage-sooty.vercel.app/guest">
            <button>⚙</button>
        </a>

        <div class="watermark">
            <img src="{{asset('icons/watermark5.png')}}" alt="watermark">
        </div>
    <body\>
<html\>