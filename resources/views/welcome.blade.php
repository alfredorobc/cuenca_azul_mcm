<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cuenca Azul</title>
        <link rel="icon" href="{{asset('img/icono.png')}}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body x-data="{ darkMode: false }" :class="{ 'dark': darkMode }" class="bg-white dark:bg-slate-800 text-slate-800 dark:text-white transition-colors ">
        <a href="https://wa.me/2224963372" target="_blank" class="fixed w-14 h-14  rounded-full z-50 flex items-center justify-center bg-green-500 group hover:bg-white hover:border hover:border-green-500 leading-10 bottom-8 left-8">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 fill-white  group-hover:fill-green-500" viewBox="0 0 448 512"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
        </a>
       {{-- Menu principal --}}
        <nav class="z-20  bg-white dark:bg-slate-800 fixed  w-full  border-b  shadow-lg dark:border-none transition-colors ">

            <div class="p-6 container mx-auto">
                <div class="flex items-center justify-between">

                    <div class="z-20">
                        <a href="/" class="flex items-center">
                            <img src="{{asset('img/logo.png')}}" alt="Logo Envasadora Cuenca Azul" class="w-16 h-16 2xl:w-20 2xl:h-20">
                        </a>
                    </div>

                    <div>
                        <input type="checkbox" name="hamburger" id="hamburger" class="peer hidden" >
                        <label for="hamburger" class=" peer-checked:hamburger block z-20 cursor-pointer md:hidden transition p-5 hover:bg-gray-200 dark:hover:bg-slate-700 rounded">
                            <div class=" h-0.5 w-6 bg-black dark:bg-white transition"></div>
                            <div class=" mt-2 h-0.5 w-6 bg-black dark:bg-white transition"></div>
                        </label>

                        <div class=" bg-white dark:bg-slate-900 dark:md:bg-slate-800 w-3/5 shadow-lg transition  flex flex-col justify-between fixed inset-0 translate-x-[-100%] peer-checked:translate-x-0
                        md:w-auto md:static md:shadow-none md:translate-x-0 md:flex-row ">

                            <div class="px-6 pt-32 flex flex-col md:flex-row md:items-center gap-3 md:p-0">
                                <a href="#top" class=" tracking-wide cursor-pointer px-3 py-2 hover:bg-slate-700 rounded hover:text-white text-cuenca-fuerte dark:text-white font-semibold text-lg 2xl:text-xl transition ">Inicio</a>
                                <a href="#proceso" class=" tracking-wide cursor-pointer px-3 py-2 hover:bg-slate-700 rounded hover:text-white text-cuenca-fuerte dark:text-white font-semibold text-lg 2xl:text-xl transition ">Proceso</a>
                                <a href="#contacto" class=" tracking-wide cursor-pointer px-3 py-2 hover:bg-slate-700 rounded hover:text-white text-cuenca-fuerte dark:text-white font-semibold text-lg 2xl:text-xl transition ">Contacto</a>
                                <button @click="darkMode = !darkMode" class=" tracking-wide cursor-pointer px-3 py-2 ">
                                    <template x-if="darkMode" >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6 2xl:text-xl">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                                        </svg>

                                    </template>
                                    <template x-if="!darkMode">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-6 h-6 2xl:text-xl">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                                        </svg>
                                    </template>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </nav>

       {{-- Hero --}}
        <div class="w-full  mx-auto flex px-5 xl:flex-row flex-col items-center pt-40 2xl:pt-52  text-cuenca-fuerte dark:text-white  dark:bg-slate-800 transition ">

            <div class="xl:flex-grow lg:w-4/5  xl:pr-32 sm:pr-16 xl:pb-0 flex flex-col xl:items-start lg:text-left items-center justify-center text-center pb-5 relative">
                <h1 class="2xl:text-3xl lg:text-2xl text-lg font-bold pb-2">Envasadora Cuenca Azul <span class="text-lg xl:text-xl font-semibold">cuenta con los 7 pasos del proceso típico de purificación de agua para consumo humano.</span></h1>
                <p class="2xl:text-xl mb-8 leading-relaxed">El abastecimiento de agua para uso y consumo humano con calidad adecuada es fundamental para prevenir la transmisión de enfermedades y efectos tóxicos en el organismo.
                    Con el objeto de lograrlo, se requiere establecer límites permisibles en cuanto a sus características bacteriológicas, físicas, organolépticas, químicas y radiactivas. Con el fin de asegurar y preservar la calidad del agua en los sistemas hasta la entrega al consumidor, se debe someter a un método de tratamientos de purificación de agua.
                    A continuación te presentamos los pasos del proceso de purificación de agua necesarios si el agua se utilizará para consumo humano.
                    El proceso de purificación de agua consiste en un tratamiento físico y químico que tiene como objeto eliminar contaminantes que podrían representar un riesgo. Entre los contaminantes podemos encontrar, microorganismos, compuestos inorgánicos (sales, minerales, metales) y compuestos orgánicos (grasas, aceites, derivados del petróleo, plaguicidas, detergentes, fármacos,…).
                    <br><br>
                    Normas por las que nos regimos:
                    <ul class="list-disc italic">
                        <li class="ml-4">NORMA OFICIAL MEXICANA NOM-127-SSA1-1994, “Salud ambiental, agua para uso y consumo humano – Límites permisibles de calidad y tratamientos que debe someterse al agua para su potabilización”.</li>
                        <li class="ml-4">NORMA OFICIAL MEXICANA NOM-201-SSA1-2015, “Productos y servicios. Agua y hielo para consumo humano, envasados y a granel. Especificaciones sanitarias”.</li>
                    </ul>
                </p>
                <img src="{{asset('img/svg_inferior.svg')}}" alt="imagen fondo" class="hidden md:block absolute -left-2 md:bottom-0 2xl:-bottom-20 min-w-full -z-10 opacity-30">

            </div>

            <div class=" lg:max-w-2xl lg:w-full xl:w-3/5  w-5/6 mb-10 md:mb-0 flex items-center justify-center pt-20 xl:pt-0" >
                <img src="{{asset('img/proceso_agua.png')}}" alt="" class=" object-cover object-center rounded brightness-110 mix-blend-multiply dark:brightness-100 dark:mix-blend-normal ">
            </div>

        </div>

        {{-- Proceso --}}
        <div id="proceso" class="w-full mx-auto py-5 md:py-20 2xl:py-40 xl:py-28 2xl:pb-40  text-cuenca-fuerte dark:text-white  dark:bg-slate-800 transition ">
            <h2 class="2xl:text-4xl lg:text-3xl text-lg font-extrabold text-center">Proceso de purificación</h2>
        </div>

        {{-- Cuerpo de la pagina --}}
        <section class="text-cuenca-fuerte dark:text-white  dark:bg-slate-800 transition ">

            <div class="xl:px-10 container pb-20 mx-auto flex xl:flex-row flex-col items-center text-cuenca-fuerte dark:text-white  dark:bg-slate-800 transition ">

                <div class="xl:flex-grow lg:w-4/5 xl:pr-32 sm:pr-16 xl:pb-0 flex flex-col xl:items-start lg:text-left items-center justify-center text-center pb-5 relative">
                    <h2 class="2xl:text-3xl lg:text-2xl text-lg font-bold pb-2">Desinfección</h2>
                    <p class="2xl:text-xl mb-8 leading-relaxed ">
                        El cloro es el desinfectante más usado para reducir o eliminar los microorganismos, tales como bacterias y virus, que pueden estar presentes en el agua. La adición de cloro en el agua potable ha reducido en gran medida el riesgo de enfermedades transmitidas a través de ella, como la difteria, la fiebre tifoidea y el cólera.
                        <br>
                        La cloración desinfecta el agua, pero no la purifica por completo.
                        <br>
                        Las normas mexicanas establecen que hay que alcanzar una concentración de cloro libre residual de 0.5 a 1.5 mg/l.
                    </p>
                    <img src="{{asset('img/svg_superior.svg')}}" alt="imagen fondo" class="hidden md:block absolute -left-2 md:top-0 2xl:-top-12 min-w-full -z-10 opacity-30">

                </div>

                <div class="lg:max-w-2xl lg:w-full xl:w-3/5 w-5/6 mb-10 md:mb-0 flex items-center justify-center pt-20 xl:pt-0">
                    <img src="{{asset('img/proceso_desinfeccion.jpg')}}" alt="Proceso de Desinfección" class="object-cover object-center rounded brightness-110 mix-blend-multiply dark:brightness-100 dark:mix-blend-normal shadow-xl sm:max-w-md xl:max-w-lg ">
                </div>
            </div>

            <div class="xl:px-10 container py-20 mx-auto flex xl:flex-row flex-col-reverse items-center text-cuenca-fuerte dark:text-white  dark:bg-slate-800 transition ">

                <div class="xl:flex-grow lg:w-4/5 xl:pr-32 sm:pr-16 xl:pb-0 flex flex-col xl:items-start lg:text-left items-center justify-center text-center pb-5 relative">
                    <h2 class="2xl:text-3xl lg:text-2xl text-lg font-bold pb-2">Filtración con medios granulares</h2>
                    <p class="2xl:text-xl mb-8 leading-relaxed ">
                        La filtración es el proceso de purificación que elimina los sólidos suspendidos en el agua. Los filtros que utilizan medios granulares, también se llaman de lecho profundo. Dependiendo del tipo de medio, pueden llegar a retener partículas con diámetros mayores a 1 micras, aunque típicamente solo retienen las mayores a 5 a 10 micras, que pueden estar presentes en el agua, como tierra, arena, limo y otras. Es necesario filtrar sedimentos en una de las primeras etapas del proceso de purificación a fin de eliminar partículas que podrían ensuciar u obstruir los equipos utilizados en las etapas posteriores.
                        <br>
                        Los medios granulares más comunes son arena sílica, zeolita, antracita, granate (garnet) o la combinación de algunos de ellos en lo que se denomina un lecho multimedia.
                        <br>
                        Los filtros de medios granulares requieren retrolavarse cuando el diferencial de presión entre la entrada y la salida alcanza los 10 psi.
                    </p>
                    <img src="{{asset('img/svg_inferior.svg')}}" alt="imagen fondo" class="hidden md:block absolute  bottom-0 min-w-full -z-10 opacity-30">

                </div>

                <div class="lg:max-w-2xl lg:w-full xl:w-3/5 w-5/6 mb-10 md:mb-0 order-first flex items-center justify-center pt-20 xl:pt-0">
                    <img src="{{asset('img/proceso_filtracion.jpg')}}" alt="Proceso de Filtración con medios granulares" class="object-cover object-center rounded brightness-110 mix-blend-multiply dark:brightness-100 dark:mix-blend-normal sm:max-w-sm  xl:max-w-xl">
                </div>
            </div>

            <div class="xl:px-10 container py-20 mx-auto flex xl:flex-row flex-col items-center text-cuenca-fuerte dark:text-white  dark:bg-slate-800 transition ">

                <div class="xl:flex-grow lg:w-4/5 xl:pr-32 sm:pr-16 xl:pb-0 flex flex-col xl:items-start lg:text-left items-center justify-center text-center pb-5 relative">
                    <h2 class="2xl:text-3xl lg:text-2xl text-lg font-bold pb-2">Carbón activado granular (CAG)</h2>
                    <p class="2xl:text-xl mb-8 leading-relaxed">
                        El CAG es un excelente adsorbente de compuestos orgánicos que pueden ser tóxicos o producir color, olor o sabor al agua.
                        <br>
                        Además, en esta etapa el CAG actúa como un agente reductor del cloro libre que lo convierte en ion cloruro (Cl–).
                        <br>
                        Por su naturaleza el CAG es un medio propicio para el desarrollo bacteriano. Primordialmente, atrapa moléculas orgánicas, muchas de las cuales son biodegradables y constituyen el alimento de estos organismos. Además, tienen una superficie rugosa que permite a las bacterias una buena fijación que impide que el agua las arrastre. De esto, el crecimiento bacteriano es una consecuencia inevitable de la operación de equipos adsorbedores con CAG.
                        <br>
                        Existen varios procesos de sanitización para el control bacteriano en camas de carbón activado, mismos que deben efectuarse periódicamente. La periodicidad dependerá de la efectividad de la misma, de las condiciones de operación y de ubicación del equipo.
                        <br>
                        Se recomienda realizar el cambio de CAG una vez por año.
                    </p>
                    <img src="{{asset('img/svg_superior.svg')}}" alt="imagen fondo" class="hidden md:block absolute -left-2 md:top-0 2xl:-top-12 min-w-full -z-10 opacity-30">

                </div>

                <div class="lg:max-w-2xl lg:w-full xl:w-3/5  w-5/6 mb-10 md:mb-0 flex items-center justify-center">
                    <img src="{{asset('img/proceso_carbon.jpg')}}" alt="Proceso de Desinfección" class="object-cover object-center rounded brightness-110 mix-blend-multiply dark:brightness-100 dark:mix-blend-normal w-60 sm:w-80 xl:w-96">
                </div>
            </div>

            <div class="xl:px-10 container pb-20 mx-auto flex xl:flex-row flex-col-reverse items-center text-cuenca-fuerte dark:text-white  dark:bg-slate-800 transition ">

                <div class="xl:flex-grow lg:w-4/5 xl:pr-32 sm:pr-16 xl:pb-0 flex flex-col xl:items-start lg:text-left items-center justify-center text-center pb-5 relative">
                    <h2 class="2xl:text-3xl lg:text-2xl text-lg font-bold pb-2">Suavización</h2>
                    <p class="2xl:text-xl mb-8 leading-relaxed ">
                        Se recomienda suavizar el agua cuando se va a osmotizar y su dureza es mayor a 170 mg/L . También se recomienda cuando no se va a osmotizar y su valor es tal que causa un sabor desagradable o que causa incrustación en los equipos subsiguientes. El que un agua sea incrustante depende de índices, como el de Langelier, cuyo valor es función de la dureza, el pH, los sólidos disueltos totales, la alcalinidad total y la temperatura.
                    </p>
                    <img src="{{asset('img/svg_inferior.svg')}}" alt="imagen fondo" class="hidden md:block absolute bottom-5  xl:-bottom-10 min-w-full -z-10 opacity-30">
                </div>

                <div class="lg:max-w-2xl lg:w-full xl:w-3/5  w-5/6 mb-10 md:mb-0 order-first flex items-center justify-center pt-20 xl:pt-0">
                    <img src="{{asset('img/proceso_suavizacion.jpg')}}" alt="Proceso de Filtración con medios granulares" class="object-cover object-center rounded brightness-110 mix-blend-multiply dark:brightness-100 dark:mix-blend-normal xl:max-h-96 max-h-60 md:max-h-80">
                </div>
            </div>

            <div class="xl:px-10 container py-20 mx-auto flex xl:flex-row flex-col items-center text-cuenca-fuerte dark:text-white  dark:bg-slate-800 transition ">

                <div class="xl:flex-grow lg:w-4/5 xl:pr-32 sm:pr-16 xl:pb-0 flex flex-col xl:items-start lg:text-left items-center justify-center text-center pb-5 relative">
                    <h2 class="2xl:text-3xl lg:text-2xl text-lg font-bold pb-2">Ósmosis Inversa</h2>
                    <p class="2xl:text-xl mb-8 leading-relaxed">Sólo se requiere osmotizar el agua cuando se busca disminuir la concentración de sales presentes en ella.
                <br>
                En un equipo de ósmosis inversa, al aplicar una presión suficientemente alta al agua, se le fuerza a pasar a través de una membrana porosa que rechaza a más del 99% de las sales. Esta tecnología implica que un porcentaje del agua que se alimenta al sistema se destine a rechazo para que arrastre las sales. A este flujo se le llama rechazo o concentrado. El porcentaje de agua rechazada depende de la calidad de agua a tratar. Dependiendo el caso, se diseñan equipos de múltiples membranas con arreglos en serie o paralelo.
                    </p>
                    <img src="{{asset('img/svg_superior.svg')}}" alt="imagen fondo" class="hidden md:block absolute -left-2 md:top-0 2xl:-top-12 min-w-full -z-10 opacity-30">

                </div>

                <div class="lg:max-w-2xl lg:w-full xl:w-3/5  w-5/6 mb-10 md:mb-0 flex items-center justify-center pt-20 xl:pt-0">
                    <img src="{{asset('img/proceso_osmosisinversa.jpg')}}" alt="Proceso de Desinfección" class="object-cover object-center rounded  md:max-w-md xl:max-w-xl">
                </div>
            </div>

            <div class="xl:px-10 container pb-20 mx-auto flex xl:flex-row flex-col-reverse items-center text-cuenca-fuerte dark:text-white  dark:bg-slate-800 transition ">

                <div class="xl:flex-grow lg:w-4/5 xl:pr-32 sm:pr-16 xl:pb-0 flex flex-col xl:items-start lg:text-left items-center justify-center text-center pb-5 relative">
                    <h2 class="2xl:text-3xl lg:text-2xl text-lg font-bold pb-2">Ozono</h2>
                    <p class="2xl:text-xl mb-8 leading-relaxed ">
                        En este punto de un tren de tratamiento, el agua ya está purificada y es apta para beber. Sin embargo es necesario utilizar métodos de desinfección para proteger el agua contra contaminación bacteriana por fuentes externas posteriores a la OI.
                <br>
                El proceso generación de ozono parte de oxígeno molecular (O2), que pasa a través de una cámara especial en el que se expone a una carga eléctrica con el voltaje suficiente para romper el enlace covalente del O2 y recombinar en moléculas triatómicas de oxígeno (O3, Ozono). Este tipo de generación de ozono se conoce como “de descarga de corona”.
                <br>
                El O3 se inyecta en forma de burbujeo a un tanque de residencia o mediante succión con ayuda de un ventury, directo a la tubería del agua producto para hacerla llegar al tanque de almacenamiento de agua tratada.
                La ozonización deja un residual que es útil cuando el agua se envasa en garrafones reciclables que pueden haber quedado con alguna contaminación bacteriana después del proceso de lavado.
                    </p>
                    <img src="{{asset('img/svg_inferior.svg')}}" alt="imagen fondo" class="hidden md:block absolute bottom-5  xl:bottom-0 min-w-full -z-10 opacity-30">
                </div>

                <div class="lg:max-w-2xl lg:w-full xl:w-3/5  w-5/6 mb-10 md:mb-0 order-first flex items-center justify-center pt-20 xl:pt-0">
                    <img src="{{asset('img/proceso_ozono.jpg')}}" alt="Proceso de Filtración con medios granulares" class="object-cover object-center rounded brightness-110 mix-blend-multiply dark:brightness-100 dark:mix-blend-normal xl:max-h-96  md:max-w-md">
                </div>
            </div>

            <div class="xl:px-10 container py-20 mx-auto flex xl:flex-row flex-col items-center text-cuenca-fuerte dark:text-white  dark:bg-slate-800 transition ">

                <div class="xl:flex-grow lg:w-4/5 xl:pr-32 sm:pr-16 xl:pb-0 flex flex-col xl:items-start lg:text-left items-center justify-center text-center pb-5 relative">
                    <h2 class="2xl:text-3xl lg:text-2xl text-lg font-bold pb-2">Esterilizador luz ultravioleta UV</h2>
                    <p class="2xl:text-xl mb-8 leading-relaxed">
                        Como una última etapa de esterilización y previo al embotellado, como una segunda barrera de protección, se utiliza una lámpara de luz ultravioleta (UV) en la que el agua pasa a través de una cámara que integra una fuente de luz UV de la longitud de onda adecuada para impedir la reproducción y proliferación bacteriana o viral en caso de estar presente.
                        <br>
                        Dependiendo la marca, los bulbos de las lámparas UV tienen diferentes promedios de vida media, aunque en general es de 9000 horas.
                    </p>
                    <img src="{{asset('img/svg_superior.svg')}}" alt="imagen fondo" class="hidden md:block absolute -left-2 md:top-0 2xl:-top-12 min-w-full -z-10 opacity-30">

                </div>

                <div class="lg:max-w-2xl lg:w-full xl:w-3/5  w-5/6 mb-10 md:mb-0 flex items-center justify-center pt-20 xl:pt-0">
                    <img src="{{asset('img/proceso_uv.jpg')}}" alt="Proceso de Desinfección" class="object-cover object-center rounded w-60 sm:w-80 xl:w-96">
                </div>
            </div>

        </section>

        {{-- Contacto --}}
       {{--  <div id="contacto" class="w-full mx-auto pt-5 md:pt-10 2xl:pt-20 xl:pt-18   text-cuenca-fuerte dark:text-white  dark:bg-slate-800 transition ">
        </div> --}}

        <section id="contacto" class="relative pt-40 text-cuenca-fuerte dark:text-white  dark:bg-slate-800 transition">
            <h2 class="2xl:text-4xl lg:text-3xl text-lg font-extrabold text-center">Contáctanos</h2>
            <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
                <div class="lg:w-2/3 md:w-1/2  rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                    <iframe class="absolute inset-0 "  width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" Loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ_xrGb6fBz4URE-JxqSvTbwE&key={{env('GOOGLE_API_KEY')}}"></iframe>
                    <div class="bg-white dark:bg-slate-800 transition relative flex flex-wrap py-6 rounded shadow-md">
                        <div class="lg:w-1/2 px-6">
                            <h2 class="title-font font-semibold tracking-widest text-xs">DIRECCIÓN</h2>
                            <p class="mt-1">C. Valladolid 57, Los Pinos, 72240 Puebla, Pue.</p>
                        </div>
                        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                            <h2 class="title-font font-semiboldtracking-widest text-xs">CORREO</h2>
                            <a class="leading-relaxed">H2O@mcmteam.com</a>
                            <h2 class="title-font font-semiboldtracking-widest text-xs mt-4">TELEFONO</h2>
                            <p class="leading-relaxed">22-24-96-33-72</p>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/3 md:w-1/2 dark:text-white  dark:bg-slate-800 transition flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                    <form action="{{route('contact.send')}}" method="POST">
                        <h2 class=" text-lg mb-1 font-medium title-font">Escríbenos</h2>
                        <p class="leading-relaxed mb-5 ">Realiza tus pedidos a través de nuestro número o envíanos un correo.</p>
                        <div class="relative mb-4">
                            <label for="name" class="leading-7 text-sm ">Nombre</label>
                            <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                        </div>
                        <div class="relative mb-4">
                            <label for="email" class="leading-7 text-sm ">Correo</label>
                            <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                        </div>
                        <div class="relative mb-4">
                            <label for="subject" class="leading-7 text-sm ">Asunto</label>
                            <input type="text" id="subject" name="subject" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                        </div>
                        <div class="relative mb-4">
                            <label for="message" class="leading-7 text-sm ">Mensaje</label>
                            <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" spellcheck="false" data-ms-editor="true"></textarea>
                        </div>
                        <button type="submit" class="w-full text-white dark:text-cuenca-fuerte bg-cuenca-fuerte/75 dark:bg-cuenca-claro/75 border-0 py-2 px-6 focus:outline-none hover:bg-cuenca-fuerte dark:hover:bg-cuenca-claro rounded text-lg" >Enviar</button>
                    </form>
                </div>
            </div>
        </section>



    </body>
</html>
