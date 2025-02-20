

<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://birdy-invitaciones.com/public/css/invitacion.css" rel="stylesheet" />
    <!-- Jarallax CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/jarallax@2/dist/jarallax.min.css" rel="stylesheet">

    <!-- Jarallax JS -->
    <script src="https://cdn.jsdelivr.net/npm/jarallax@2/dist/jarallax.min.js"></script>
</head>
<body class="merriweather-light">
    <main role="main">
    <div class="jarallax" data-jarallax data-speed="0.5" data-type="scroll-opacity">
        <img class="jarallax-img" src="https://birdy-invitaciones.com/public/storage/imagenes/portada_5.jpg" alt="">
        <div class="main-image" style=" display: flex; justify-content: center; align-content: center; flex-wrap: wrap; flex-direction: column; align-items: center;">
            <div class="image-text image-anim p-3">
                <p style="font-size: 25px; margin: 0;">Nuestra boda</p>
                <p class="dancing-script-wedding" style="font-size: 4em;">Cecilia y Felipe</p>
                <p style="font-size: 18px; margin: 0;">Marzo 22 2025</p>
                <p  style="font-size: 18px;">Con la bendición de Dios y nuestros padres</p>
                <hr />
                <div style="display: flex; font-size: 18px;">
                    <div style="flex-grow: 1; flex-basis: 0;">
                        <p style="margin: 0;">Yesenia Ortiz Zuñiga</p>
                        <p style="margin: 0;">Felipe Perez Mendoza</p>
                    </div>
                    <div style="flex-grow: 1; flex-basis: 0;">
                        <p style="margin: 0;">Laura Georgina Garcia Moreno</p>
                    </div>
                </div>
            </div>
            <div style=" margin-top: 7em;" class="bounce2">
                <img src="https://birdy-invitaciones.com/public/storage/imagenes/6ovye2o4.png" style="width: 30px;"/>
            </div>
        </div>
    </div>

    <div class="main-flexbox">
        <div class="background-invite"></div>
        <div class="head-text margin-xl">
            <p class="dancing-script-wedding" style="color: #733636;">{{ $invitados->result[0]->Nombre ?? '' }}</p>
            <p>Queremos que seas parte de este momento tan especial para nosotros</p>
            <p class="timer-label">FALTAN</p>
        </div>
        <div class="countdown margin-md">
            <div>
                <div>
                    <p id="dias"></p>
                </div>
                <p class="label">D</p>
            </div>
            <div>
                <div>
                    <p id="horas"></p>
                </div>
                <p class="label">H</p>
            </div>
            <div>
                <div>
                    <p id="minutos"></p>
                </div>
                <p class="label">M</p>
            </div>
            <div>
                <div>
                    <p id="segundos"></p>
                </div>
                <p class="label">S</p>
            </div>
        </div>
        <hr class="mx-5" />
        <div class="info margin-xl">
            <div>
                <div class="card-info rings">
                    <img src="https://birdy-invitaciones.com/public/storage/imagenes/001-boda.png" />                    
                </div>

                <p class="label-info">— MISA —</p>
                   <video loop autoplay muted playsinline style="width:100%;width: 100%;border: solid 2px #733636;">
                    <source src="https://birdy-invitaciones.com/public/storage/imagenes/KRYM2390.mp4" type="video/mp4" />
                </video>     
           
                <div class="info-text">
                    <p class="dancing-script-wedding mb-4" style="font-size: 22px; font-weight: bold; color: #000;">Parroquia Nuestra Señora de San Juan de los Lagos</p>
                    <p class="m-0">La celebración será el</p>
                    <div class="hora-info mb-4">
                        <div>22 MAR </div>
                        <div>|</div>
                        <div> 18:00</div>
                    </div>
                    <p class="m-0">Av Morenita Mia 2200, Roble San Nicolás, 66420</p>
                    <p class="mb-4">San Nicolás de los Garza, N.L.</p>
                    <div>
                        <a href="https://maps.app.goo.gl/3DdeqkfNv3muiHBU8" target="_blank">
                            <button class="wedd-button"><i class="bi-geo-alt"></i> Ver Ubicación</button>
                        </a>
                    </div>
                </div>
                
            </div>
            <hr class="hr-margin"/>
            <div>
                <div class="card-info glasses">
                    <img src="https://birdy-invitaciones.com/public/storage/imagenes/003-salud.png" />
                </div>

                <p class="label-info">— RECEPCION —</p>
                                   <video loop autoplay muted playsinline style="width:100%;width: 100%;border: solid 2px #733636;">
                    <source src="https://birdy-invitaciones.com/public/storage/imagenes/juncal.mp4" type="video/mp4" />
                </video>   
                
                <div class="info-text">
                    <p class="dancing-script-wedding mb-4" style="font-size: 22px; font-weight: bold; color: #000;">Quinta el Juncal</p>
                    <p class="m-0">La celebración será el</p>
                    <div class="hora-info mb-4">
                        <div>22 MAR </div>
                        <div>|</div>
                        <div> 20:00</div>
                    </div>
                    <p class="m-0">Callejon de los Morales, Vereda Tropical 100, Las Escobas, 67190</p>
                    <p class="mb-4">Guadalupe, Nuevo León</p>
                    <div>
                        <a href="https://maps.app.goo.gl/fvGyDFSixUamJ8To7" target="_blank">
                            <button class="wedd-button"><i class="bi-geo-alt"></i> Ver Ubicación</button>
                        </a>
                    </div>
                </div>
            </div>
            <hr class="hr-margin"/>
            <div>
                <div class="card-info dress">
                    <img src="https://birdy-invitaciones.com/public/storage/imagenes/002-vestido-de-novia.png" />
                </div>

                <p class="label-info">— DRESS CODE —</p>
                <div class="info-text">
                    <p>
                        “Te queremos ver con mucho color al mejor estilo vergel” <br />
                        <b style="font-weight:900;">La novia se reserva el derecho exclusivo de usar blanco. Les pedimos evitar este color o tonos muy claros.</b>
                    </p>
                    <b style="color:black; font-weight:900;">Etiqueta Jardin</b>
                    <img src="https://birdy-invitaciones.com/public/storage/imagenes/vergel.png" alt="dress code" style="width:100%;border: solid 2px #733636;" />
                </div>
            </div>
            <hr class="hr-margin" />
            <div style="text-align: center;">
                <p>
                    @if (isset($invitados->result[0]->Ninos) && !$invitados->result[0]->Ninos)
                        <br />
                        <b style="font-weight:900; font-size:1.5em">NO NIÑOS</b>
                    @endif
                </p>
            </div>
        </div>
    </div>

    <div class="confirm-container">
        <div class="margin-xl">
            <p class="label-info">ASISTENCIA</p>
            <p class="m-0">Numero de personas:</p>

            <form id="form_invitados">
                 @csrf
                <select id="numero_personas" name="numero_invitados" style="width: 6em; height: 2em;" class="mb-4">
                @php
                    $inv = $invitados->result[0]->InvitadosMax ?? 0;
                @endphp
                @for($i = 1; $i <= $inv; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            <input id="guid" readonly="true" hidden="true" name="GUID" value="{{$invitados->result[0]->GUID}}">
            <a href="https://wa.me/528125067484/?text=Hola,%20confirmo%20mi%20asistencia%20para%20{{ 1 }}%20persona" id="link_wa" onclick="sendData()"  style="text-decoration: none;">
                <div class="wa-button">
                    <i class="bi-whatsapp"></i>
                    Confirmar
                </div>
            </a>
            </form>
            <br/>
            <p>Actualmente has confirmado: <span id=invitados_text style="font-weight: 900;">{{$invitados->result[0]->InvitadosConfirmados}}</span> invitados</p>
        </div>
    </div>

    <div class="fotos-container">
        <div class="margin-xl">
            <p class="label-info" style="color:white;">FOTOS</p>
            <div class="card-info fotos">
                <img src="https://birdy-invitaciones.com/public/storage/imagenes/001-google-photos.png" />
            </div>
            <a href="https://drive.google.com/drive/folders/12eGeGCQWK3uyUYQfMM0h5kRz9F1bXZ4B" target="_blank" style="text-decoration: none;">
                <div class="foto-button" style="margin-bottom: 1em; margin-top: 1em;">
                    <i class="bi-image"></i>
                    Mira el album
                </div>
            </a>
            <a href="https://weduploader.com/upload/llE8boohcVeqh6Uf" target="_blank" style="text-decoration: none;">
                <div class="foto-button">
                    <i class="bi-camera"></i>
                    Sube tu foto
                </div>
            </a>    
        </div>
    </div>

    <div class="confirm-container">
        <div class="margin-xl">
            <p class="dancing-script-wedding">Te esperamos</p>
            <p class="dancing-script-wedding">CyF</p>
            <i class="bi-suit-heart-fill"></i>
            <hr />
            <p>❤️ Invitación hecha por el novio con especificaciones de la novia ❤️</p>
        </div>
    </div>
    </main>
</body>

<script>
    // document.getElementById('vid').play();

window.addEventListener("scroll", function () {
    var elemento = document.querySelector(".rings");
    var posicionElemento = elemento.getBoundingClientRect().top;
    var alturaVentana = window.innerHeight;

    if (posicionElemento < alturaVentana) {
        elemento.classList.add("animate");
    }

    var elemento = document.querySelector(".glasses");
    var posicionElemento = elemento.getBoundingClientRect().top;
    var alturaVentana = window.innerHeight;

    if (posicionElemento < alturaVentana) {
        elemento.classList.add("animate");
    }

    var elemento = document.querySelector(".dress");
    var posicionElemento = elemento.getBoundingClientRect().top;
    var alturaVentana = window.innerHeight;

    if (posicionElemento < alturaVentana) {
        elemento.classList.add("animate");
    }

    var elemento = document.querySelector(".fotos");
    var posicionElemento = elemento.getBoundingClientRect().top;
    var alturaVentana = window.innerHeight;

    if (posicionElemento < alturaVentana) {
        elemento.classList.add("animate");
    }

    var elemento = document.querySelector(".qr");
    var posicionElemento = elemento.getBoundingClientRect().top;
    var alturaVentana = window.innerHeight;

    if (posicionElemento < alturaVentana) {
        elemento.classList.add("animate");
    }

    
});

$("#numero_personas").on("change", function (event) {
    var persona = "personas";
    if (this.value == 1) persona = "persona"
    $("#link_wa").attr("href", "https://wa.me/528125067484/?text=Hola,%20confirmo%20mi%20asistencia%20para%20" + this.value + "%20" + persona);
});

var elemento = document.querySelector(".image-text");
var posicionElemento = elemento.getBoundingClientRect().top;
var alturaVentana = window.innerHeight;

    elemento.classList.add("animate");

// Set the date we're counting down to
var countDownDate = new Date("Mar 22, 2025 18:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function () {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"

    $("#dias").text(days);
    $("#horas").text(hours);
    $("#minutos").text(minutes);
    $("#segundos").text(seconds);

    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);


function sendData(){

    var formData = $("#form_invitados").serialize();
    $.ajax({
                url: '/saveConfirmation', // Cambia esto por la ruta a la que estás enviando
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Aquí puedes manejar la respuesta del servidor
                    // Abre WhatsApp en una nueva pestaña
                    $("#invitados_text").text(response.invitados);
                    alert("Se guardo tu respuesta para: " + response.invitados + " asistentes, sin embargo, puedes modificar tu respuesta si así lo deseas.");
                }
            });
}

</script>
</html>
