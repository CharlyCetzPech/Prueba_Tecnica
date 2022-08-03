<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <title>Editar Paciente</title>
<style>
            *, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
    margin-top:3em;
  }

}
</style>
 
<body>

        <form class="mov" action="/actualizardatos/{{$paciente->id}}" method="POST">
        @csrf  
      
        <center><h3 class="text-3xl font-serif py-3">Editar Datos del Paciente</h3></center>
        
        <fieldset>
          <legend><span class="number">1</span>Datos del Paciente</legend>
          <label for="name">Nombre Completo</label>
          <input  name='nombre' type="text" value="{{$paciente -> nombres}}" placeholder="Ingrese Nombre Completo" required>
          
          <label for="number">Edad</label>
          <input type="number" placeholder="Edad" value="{{$paciente -> edad}}" name='edad' aria-describedby="Site" required>

        <label for="text">Seleccione Su Genero</label><p class="text-sm">(Si desea cambiar a su sexo opuesto seleccione de nueva cuenta)</p><br>
                <select type="text" name="sexo" required>
                        <option value="{{$paciente -> sexo}}">{{$paciente -> sexo}}</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Masculino">Masculino</option>
                </select>
          
          <label for="password">Fecha de Nacimiento</label>
          <input type="date" value="{{$paciente -> fechanaci}}" id="fecha" name="fechanaci"  min="1950-01-01" max="2050-12-31">

          <label for="name">Ciudad de Origen</label>
          <input placeholder="Ciudad de Origen" value="{{$paciente -> ciudadori}}" type="text" name='ciudadori' required>

          <label for="password">Fecha de Inscripción</label>
          <input type="date" id="fecha" name="fechains"  value="{{$paciente -> fechains}}" min="1950-01-01" max="2050-12-31">

          <label for="name">Hospital de Procedencia</label>
          <input placeholder="Hospital de Origen" value="{{$paciente -> hospitalori}}" type="text" name='hospitalori' required>
          
        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Datos de Contacto</legend>

            <label for="name">Nombre del Tutor</label>
            <input input value="{{$paciente -> nombretut}}" placeholder="Nombre del Tutor" type="text" name='nombretut'  required>

            <label for="number">Numero de Telefono</label>
            <input type="tel" value="{{$paciente -> telefonotut}}" placeholder="N. Telefono Ejem. 992292839328" name='telefonotut'  required>

        </fieldset>
        <div class="text-center">
                <button type="submit" name="action" class="bg-green-500 hover:bg-yellow-400 text-white w-72 font-bold py-2 px-4 rounded-full">
                            Guardar
                </button><br>
                <a href="/vistapacientes" class="text-red-500">
                            Cancelar
                
                </a>
        </div>
      </form>
      
</body>
</html>

