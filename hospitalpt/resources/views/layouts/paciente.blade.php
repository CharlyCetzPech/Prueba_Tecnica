<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap Stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!--Slick Slider-->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!--Web Icon Font Stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/fontawesome.all.min.css">
    <link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="css/helper.css">
    <link rel="stylesheet" type="text/css" href="css/icofont.min.css">
    <!--Animate Stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/animate.css"><!-- date and time picker -->
    <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css">
    <!--Venobox Stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/venobox.css">
    <!--Owl carosul-->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
    <!--Main Stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--Responsive Stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    
</head>
<body>

<section id="Mediflexbreadcrumb" class="Mediflexbreadcrumb">
        <div class="bcoverlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="Content">
                        <h2>Pacientes</h2>
                        <div class="links">
                            <ul>
                                <li><a href="/index">Home</a></li>
                                <li><span>/</span></li>
                                <li><a class="active" href="{{url('/vistapacientes')}}">Pacientes</a></li>
                            </ul>
                            <div class="mt-5">
                                <p class="text-white">¡¡Puedes Obtener los datos de los pacientes aqui!!</p>
                                <a href="/verpacientepdf" target="_blank">Ver PDF</a><br>
                                <a href="/descargar">Imprimir PDF</a><br><br>
                                <p class="text-white">Muevete Más Rapido</p>
                                <a href="{{url('/registrarpa')}}">Registrar</a><br>
                                <a href="/pacientes=de=Alta">Pacientes de Alta</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

      <!--cards para las categorias-->
      <section class="bg-white border-b  ">
        <div class="container mx-auto flex flex-wrap pt-4 pb-10">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                Pacientes Activos
                        
            </h1>
            <div class=" ">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s </p>
            </div>
            <div class="w-full mb-1">
                <div class="h-1 mx-auto gradient w-64 opacity-25 rounded-t"></div>
            </div>
            @foreach ($paciente as $paciente)   
            <div class=" ml-20 md:w-1/7 md:h-1/5 p-6 flex-shrink">
                <div class="card transform transition hover:scale-105 duration-30 w-64 bg-white rounded-t rounded-b-none overflow-hidden shadow ">
                     <a class="flex flex-wrap no-underline hover:no-underline">
                        <div class="img"><img class=" img-fluid" src="img/doctors/doctor1.jpg" alt="">
                            <a href="{{route('verpaciente',$paciente->id)}}">
                                <h5 class="absolute -mt-64 ml-2 p-2">ver</h5>
                            </a>
                        </div>   
                <div>
                    </a>
                    <a href="{{route('verpaciente',$paciente->id)}}">
                    <div class="p-2">
                                <h5 class=" text-center"><b>{{$paciente -> nombres}}</b></h5>
                    </div>
                    </a>
                    <div class="">
                    <p class="text-black text-center"><b>Acciones</b></p>
                            <div class="space-x-1.5 text-center ">
                                        <a class="text-green-500 " href="{{route('editarpaciente',$paciente->id)}}">Editar</a>
                                        <a class="text-blue-600 " href="{{route('dealta',$paciente->id)}}">Dar de Alta</a>
                                        <a class="text-red-500" href="{{route('eliminarpa',$paciente->id)}}"> Eliminar </a>
                            </div>
                            
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
    </section>


  




</body>
</html>


