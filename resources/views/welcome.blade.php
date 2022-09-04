<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gincaneiros Desafios</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="http://fonts.cdnfonts.com/css/oranssi-hohde" rel="stylesheet">
                
        <!-- Styles -->
        <style>
            @import url('http://fonts.cdnfonts.com/css/oranssi-hohde');
        </style>
                
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <style>
           /* body {
                font-family: 'Nunito', sans-serif;
            }*/
            html {
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
            /*border:5px solid yellow;*/
           /* background-color: green;*/
            }
            body {
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
            /*border:5px solid blue;*/
            }
            
            #pano {
           /* position: absolute;*/
            float: left;
            height: 80%;
            width: 100%;
            /*border:5px solid red;*/
            z-index: 1;

            }
            #countdown{
                -webkit-text-stroke: 1px white;
               font-family: 'Oranssi hohde', sans-serif;                                  
               position: absolute;
               float: left;
                top: 20%;
                left: 15%;
                width: 20%;
                height: 20%;
                z-index: 2;
                font-size: 200px;
                color: red;
                text-align: center;
               /* border:5px solid black;
                background-color: green;*/
            }

            #countdown2{
                -webkit-text-stroke: 1px orange;
               font-family: 'Oranssi hohde', sans-serif;                                  
               position: absolute;
               float: left;
                top: 20%;
                left: 15%;
                width: 40%;
                height: 20%;
                z-index: 2;
                font-size: 50px;
                color: black;
                text-align: center;
               /* border:5px solid black;
                background-color: green;*/
            }

            #map  {
            /*margin-top: 75px; /* mostra ou oculta o endereço */
            position: absolute;
            display:none;
            float: left;
            margin-left:40%;
            height: 15%;
            width: 20%;
            /*border:5px solid black;*/
            z-index: 1;
            }
        
       
         
        </style>
         <script>

            
            function initialize() {
            const fenway = { lat: -30.067256, lng:-51.236247 };
            const map = new google.maps.Map(document.getElementById("map"), {
                center: fenway,
                zoom: 14,
            });
            const panorama = new google.maps.StreetViewPanorama(
                document.getElementById("pano"),
                {
                position: fenway,
                pov: {
                    heading: 1,
                    pitch: 10,
                },
                }
            );
           
            
            map.setStreetView(panorama);
            }

            window.initialize = initialize;
       

        </script>
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </head>
    <body >
    <p id="countdown"></p> <!--contagem regressiva-->
    <p id="countdown2"></p> <!--contagem regressiva-->

   <!-- <div id="question">qualquer</div>-->
  

  <!-- Modal toggle -->
  <!--
  <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="defaultModal">
  Toggle modal
</button>
        -->

<!-- Main modal -->
<div id="defaultModal" tabindex="-1" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex" aria-modal="true" role="dialog">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600 text-center">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white text-center">
                    GINCANEIROS: olhando o presente, lembrado o passado 
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    1. Procure um local que marcou sua vida. Onde você morou, estudou, viajou  e divirta-se novamente com seus amigos e família.<br><br>
                    2. Faça uma pergunta relacionado ao local, compartilhe e reviva um pouco daquela alegria.<br>
                    <br><spam class="font-bold text-red-600"> Veja um exemplo após fechar esta janela.</spam> <br>
                </p>
               
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                <button data-modal-toggle="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="contador()">Fechar</button>
            </div>
        </div>
    </div>
</div>


        <div>
            <nav class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="#" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo">
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Gincaneiros</span>
                </a>
                <div class="flex md:order-2">
                    <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                        <a href="{{route('gincana.create')}}">Criar Gincana</a>
                    </button>
                    <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Pesquisar Gincanas</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Idéias de Desafios</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contato</a>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>
        <!--<div class="mx-auto max-w-lg"> <div role="status" class="my-7 animate-pulse"> <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-48 mb-4"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[460px] mb-2.5"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[500px] mb-2.5"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[450px] mb-2.5"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[380px] mb-2.5"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[460px]"></div><span class="sr-only">Loading...</span> </div><div role="status" class="mb-7 max-w-lg animate-pulse"> <div class="flex justify-center items-center w-full h-48 bg-gray-300 rounded dark:bg-gray-700"> <svg class="w-12 h-12 text-gray-200" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="currentColor" viewBox="0 0 640 512"><path d="M480 80C480 35.82 515.8 0 560 0C604.2 0 640 35.82 640 80C640 124.2 604.2 160 560 160C515.8 160 480 124.2 480 80zM0 456.1C0 445.6 2.964 435.3 8.551 426.4L225.3 81.01C231.9 70.42 243.5 64 256 64C268.5 64 280.1 70.42 286.8 81.01L412.7 281.7L460.9 202.7C464.1 196.1 472.2 192 480 192C487.8 192 495 196.1 499.1 202.7L631.1 419.1C636.9 428.6 640 439.7 640 450.9C640 484.6 612.6 512 578.9 512H55.91C25.03 512 .0006 486.1 .0006 456.1L0 456.1z"></path></svg> </div><span class="sr-only">Loading...</span> </div><div role="status" class="my-6 animate-pulse"> <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[460px] mb-2.5"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[450px] mb-2.5"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[460px] mb-2.5"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[500px] mb-2.5"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[450px] mb-2.5"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[380px] mb-2.5"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[460px]"></div><span class="sr-only">Loading...</span> </div><div role="status" class="my-6 animate-pulse"> <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[460px] mb-2.5"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[450px] mb-2.5"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[460px] mb-2.5"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[500px] mb-2.5"></div><span class="sr-only">Loading...</span> </div><div role="status" class="mt-7 mb-6 animate-pulse"> <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-48 mb-4"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[460px] mb-2.5"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[450px] mb-2.5"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[460px] mb-2.5"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[500px] mb-2.5"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[450px] mb-2.5"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[380px] mb-2.5"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[460px] mb-2.5"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[500px] mb-2.5"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[460px]"></div><span class="sr-only">Loading...</span> </div><div role="status" class="my-6 animate-pulse"> <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[460px] mb-2.5"></div><div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[450px] mb-2.5"></div><span class="sr-only">Loading...</span> </div></div>-->
    </div>
        <div id="pano" class="mt-8"></div>
        <div id="map" class="mt-8"></div>
    <!--    <div class="bg-white p-6 rounded-lg shadow-lg p-4 "> inicio card-->
          <!--  <h2 class="text-1xl font-bold mb-2 text-gray-800">Qual é o ano do maior título gaúcho?</h2>-->
   <!--         <p class="text-gray-700">Pesquise na imagem a resposta da pergunta. </p>-->
        <!--    <a href="#" class="inline-flex items-center py-4 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                RESPONDER
            </a>-->
        <!--</div> fim card -->
       <!-- Botão da pergunta inicio -->
       <!-- Botão da pergunta fim -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXoIpHkHiAtZKstlPMpDTeBVEgmzH_Xyc&callback=initialize">
    </script>  
<script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>


<script>
    var fleg;
    function contador(){
      
        var i=3;
        // Set the date we're counting down to
        var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

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
        //document.getElementById("demo").innerHTML = days + "d " + hours + "h "  + minutes + "m " + seconds + "s ";
        if(i==0){
            document.getElementById("countdown").innerHTML="Go!";

        }else{
            document.getElementById("countdown").innerHTML=i+"...";

        } 
            i--;
        // If the count down is over, write some text 
        if (distance < 0 || i<-1) {
            clearInterval(x);
            remove_cont = document.getElementById("countdown");
            remove_cont.removeChild(remove_cont.childNodes[0]);
            addEventListener("load",pergunta());
        }
        }, 1000);
    }

    function contador_resp(){
        fleg=1;
        var i=30;
        // Set the date we're counting down to
        var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

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
        //document.getElementById("demo").innerHTML = days + "d " + hours + "h "  + minutes + "m " + seconds + "s ";
        if(fleg==1){ 
            if(i==0){
                document.getElementById("countdown2").innerHTML="Game Over.";
                let el=document.getElementById("resp");
                el.setAttribute("disabled",true);

            }else{
                document.getElementById("countdown2").innerHTML="Tempo:"+i;

            } 
                i--;
            // If the count down is over, write some text 
            if (distance < 0 || i<0) {
                clearInterval(x);
                remove_cont = document.getElementById("countdown");
            //  remove_cont.removeChild(remove_cont.childNodes[0]);
            //  addEventListener("load",pergunta());
            }
        }
        
        }, 1000);
    }

    function pergunta(){     //função para mostrar a pergunta
      //  Swal.fire('O sinal está aberto ou fechado para o inter voltar a ser campeão novamente?', 'Procure a resposta na imagem antes que o tempo acabe.');
      Swal.fire({
        title: 'O sinal está aberto ou fechado para a torcida colorada?',
        confirmButtonText: 'Navegue na imagem',
        confirmButtonColor: 'red',
        }).then((result) => {
            contador_resp();
        })
    }

</script>

    <footer class="p-4 bg-white rounded-lg shadow md:px-6 md:py-8 dark:bg-gray-900 mt-24">
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
        <div>
            <!--<form>-->   
               <!-- <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Your Email</label>-->
                <div class="relative my-8" >
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <!--
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        -->  
                    </div>
                    <input type="text" id="resp" class="block p-4 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="A sinaleira, está Aberto ou Fechado?" required >
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="verifica_resp()">Confirma</button>
                </div>
            <!--</form>-->
            <!--
            <div>
                <input type="text" id="default-input" class="mt-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div>
                <a href="#" class="mt-6 inline-flex items-center py-4 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Confirmar
                </a>
            </div>  -->         
        </div>
    </footer>
    
</body>
</html>
<script>
    function verifica_resp(){
        var remove_segundo_contador = document.getElementById("countdown2");
        remove_segundo_contador.remove();
        fleg=0;
        var resp = document.getElementById("resp").value.toUpperCase().trim();
        if(resp=="ABERTO"){
            Swal.fire({
            title: 'Parabéns!',
            text: 'A??????????????????????!',
            html:'Agora crie sua prórpia gincana e compartilhe com seus amigos!<br><br> '+'<a href="//sweetalert2.github.io" style="color:blue;">Clique Aqui</a> ',
            imageUrl: 'https://img.r7.com/images/2018/02/02/4b8vk5pd2g_55aoabdv7p_file',
            imageWidth: 300,
            imageHeight: 200,
            imageAlt: 'Custom image',
            })
          /*  
            Swal.fire({
                icon: 'success',
                title: 'Parabéns!',
                showConfirmButton: false,
                timer: 1500
            })*/
         }else{

            Swal.fire({
            title: 'Que pena, errou!',
            text: 'Agora crie sua prórpia gincana e compartilhe com seus amigos!',
            html:'Agora crie sua prórpia gincana e compartilhe com seus amigos!<br> <br>'+'<a href="//sweetalert2.github.io" style="color:blue;">Clique Aqui</a> ',
            imageUrl: 'https://st2.depositphotos.com/1074442/7027/i/450/depositphotos_70278557-stock-photo-fallen-chess-king-as-a.jpg',
            imageWidth: 300,
            imageHeight: 200,
            imageAlt: 'Custom image',
            })

            /*
            Swal.fire({
                icon: 'error',
                title: 'Errou!',
                showConfirmButton: false,
                timer: 1500
            })*/
        }
    }
</script>