<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Pacientes de Alta</title>
        <style>
* { 
	margin: 0; 
	padding: 0; 
}
body { 
	font: 14px/1.4 Georgia, Serif; 
}
#page-wrap {
	margin: 30px;
}
p {
	margin: 20px 0; 
}

	/* 
	Generic Styling, for Desktops/Laptops 
	*/
	table { 
		width: 95%; 
		border-collapse: collapse; 
	}
	/* Zebra striping */
	tr:nth-of-type(odd) { 
		background: #eee; 
	}
	th { 
		background: #333; 
		color: white; 
		font-weight: bold; 
	}
	td, th { 
		padding: 6px; 
		border: 1px solid #ccc; 
		text-align: left; 
	}
    .margin{
        margin-top:2em;
    }
    @media 
	only screen and (max-width: 760px),
	(min-device-width: 768px) and (max-device-width: 1024px)  {
	
		/* Force table to not be like tables anymore */
		table, thead, tbody, th, td, tr { 
			display: block; 
		}
		
		/* Hide table headers (but not display: none;, for accessibility) */
		thead tr { 
			position: absolute;
			top: -9999px;
			left: -9999px;
		}
		
		tr { border: 1px solid #ccc; }
		
		td { 
			/* Behave  like a "row" */
			border: none;
			border-bottom: 1px solid #eee; 
			position: relative;
			padding-left: 50%; 
		}
		
		td:before { 
			/* Now like a table header */
			position: absolute;
			/* Top/left values mimic padding */
			top: 6px;
			left: 6px;
			width: 45%; 
			padding-right: 10px; 
			white-space: nowrap;
		}
		
		/*
		Label the data
		*/
		td:nth-of-type(1):before { content: "First Name"; }
		td:nth-of-type(2):before { content: "Last Name"; }
		td:nth-of-type(3):before { content: "Job Title"; }
		td:nth-of-type(4):before { content: "Favorite Color"; }
		td:nth-of-type(5):before { content: "Wars of Trek?"; }
		td:nth-of-type(6):before { content: "Porn Name"; }
		td:nth-of-type(7):before { content: "Date of Birth"; }
		td:nth-of-type(8):before { content: "Dream Vacation City"; }
		td:nth-of-type(9):before { content: "GPA"; }
		td:nth-of-type(10):before { content: "Arbitrary Data"; }
	}
	
	/* Smartphones (portrait and landscape) ----------- */
	@media only screen
	and (min-device-width : 320px)
	and (max-device-width : 480px) {
		body { 
			padding: 0; 
			margin: 0; 
			width: 320px; }
		}
	
	/* iPads (portrait and landscape) ----------- */
	@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
		body { 
			width: 495px; 
		}
	}
    </style>
    </head>
    <body>
    <center><h1 class="margin">Pacientes dados de alta</h1></center>
    <table class="tab "id="page-wrap">
            <thead >
                <tr class="">
                    <th class="">Nombre Completo</th>
                    <th class="">Edad</th>
                    <th class="">Sexo</th>
                    <th class="">Fecha de Nacimiento</th>
                    <th class="">Ciudad de Origen</th>
                    <th class="">Fecha de Inscripción</th>
                    <th class="">Hospiatal de Origen</th>
                    <th class="">Nombre del Tutor</th>
                    <th class="">Telefono del Tutor</th>
                </tr>
            </thead>
                <tbody>     
                @foreach ($pacientes as $paciente)    
                        <tr class="">
                            <td class="">{{$paciente -> nombres}}</td>
                            <td class="">{{$paciente -> edad}} Años</td>
                            <td class="">{{$paciente -> sexo}}</td>
                            <td class="">{{$paciente -> fechanaci}}</td>
                            <td class="">{{$paciente -> ciudadori}}</td>
                            <td class="">{{$paciente -> fechains}}</td>
                            <td class="">{{$paciente -> hospitalori}}</td>
                            <td class="">{{$paciente -> nombretut}}</td>
                            <td class="">{{$paciente -> telefonotut}}</td>
                        </tr>
                 @endforeach
                </tbody>
            </table>

    </body>
</html>

