
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <title>Ver Paciente</title>
</head>

<body>

    <!--cards para las categorias-->  
<div class="">
<div class=" border-whitecontainer px-5 py-24 mx-auto" style="cursor: auto;">
  <div class="lg:w-4/5 mx-auto flex flex-wrap bg-green-200 rounded-xl">
    <img  class="border-white md:h-auto sm:h-auto lg:w-1/2 w-full lg:h-auto  h-64 object-cover object-center rounded"  src="" alt="">
    <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0 " style="cursor: auto;">
      <h2 class="text-2xl text-center title-font text-gray-500 tracking-widest " style="cursor: auto;"><b>Paciente de Alta</b></h2><br>
      <h2 class="text-sm title-font py-1 text-gray-500 tracking-widest" style="cursor: auto;"><b>Datos Personales</b></h2>
      <p class="text-gray-900  mb-1" style="cursor: auto;"><b>Nombres:</b> {{$paciente->nombres}}</p>
      <p class="text-gray-900  mb-1" style="cursor: auto;"><b>Edad:</b> {{$paciente -> edad}} Años</p>
      <p class="text-gray-900  mb-1" style="cursor: auto;"><b>Genero:</b> {{$paciente -> sexo}}</p>
      <p class="text-gray-900  mb-1" style="cursor: auto;"><b>Fec. Nacimiento:</b> {{$paciente -> fechanaci}} </p>
      <p class="text-gray-900  mb-1" style="cursor: auto;"><b>Ciu. De origen:</b> {{$paciente -> ciudadori}}</p>
      <p class="text-gray-900  mb-1" style="cursor: auto;"><b>Fec.Inscripción:</b>  {{$paciente -> fechains}}</p>
      <p class="text-gray-900  mb-1" style="cursor: auto;"><b>Hospital de Procedencia:</b> {{$paciente -> hospitalori}}</p>
      <h2 class="text-sm title-font py-1 text-gray-500 tracking-widest" style="cursor: auto;"><b>Datos de Contacto</b></h2>
      <p class="text-gray-900  mb-1" style="cursor: auto;"><b>Nombre del Tutor</b>: {{$paciente -> nombretut}}</p>
      <p class="text-gray-900  mb-1" style="cursor: auto;"><b>Telefono:</b> {{$paciente -> telefonotut}} </p><br>
      <a href="/pacientes=de=Alta">
            <button class="bg-green-500 hover:bg-yellow-400 text-white font-bold py-2 px-4 rounded-full">
                    Volver
            </button>
      </a>
        </div>
      </div>
 
    </div>
  </div>
</div>
</div>



</body>

</html>