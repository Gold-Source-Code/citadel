<html>
    <head>
        <title>Fabriek</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/infostyling.css')}}">
    <head\>
    <body>

        <div class="map">
            <img src="{{asset('icons/plattegrondv1.png')}}" alt="map">
        </div>

        <!-- Venster -->

        <div class="schaarvenster" id="schaar">
            <div class="schaarvenster-inner">
                <a class="backtomain" href="/mainpage">
                    <button>X</button>
                </a>
                <div class="information">
                    <div class="bigtext">
                        Handleiding:
                    </div>
                    <div class="smalltext">
                        <a href="{{$video}}" target="_blank" rel="noopener noreferrer">video</a> 
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
                        {{$contact}}
                    </div>
                </div>
                <div class="foto-box">
                    <div class="foto">
                        <img src="{{$photo}}" alt="schaar">
                    </div>
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

        </div>
        
        <!-- Buttons -->

        <a class="dashboard" href="https://stage-sooty.vercel.app/guest">
            <button>⚙</button>
        </a>

        <div class="watermark">
            <img src="{{asset('icons/watermark5.png')}}" alt="watermark">
        </div>

        <script src="{{asset('js/vensterscript.js')}}"></script>
    <body\>
<html\>