<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $titulo ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../public/css/style3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style {csp-style-nonce}>
		.btn-lg {
            text-decoration: none;
        }
        * {
            transition: background-color 300ms ease, color 300ms ease;
            margin: 0px; padding: 0px;
        }
        *:focus {
            background-color: rgba(221, 72, 20, .2);
            outline: none;
        }
        .contenedor{
            width: 100%; height: auto;
            padding: 0.2em 0em 0.2em 0em;
            display: flex;
            justify-content: center;
        }
        .titulo{
            color: green;
            font-style: oblique; text-align: center;
            width: 100%; font-size: 2.5em; line-height: 2.5em;
        }
        table{
            padding: 1em; margin: 1em 0em 1em 0em;
            border-radius: 0.5em;
            background-color: rgb(249, 255, 208);
            box-shadow: 0em 0em 1em 0.2em rgba(118, 232, 25, 0.75) inset, 0.5em 0.5em 0.2em 0em #909090;
        }
        thead {
            color: green; font-size: 1.5em;
            font-style: oblique;
        }
        tbody {color: rgb(0, 0, 223); font-size: 1.2em;
            
        }
        td, th{
            padding: 1em;
            text-align: center;
        }
    </style>
</head>
<body>
<?PHP echo "<h1 class='titulo'>".$titulo."</h1>" ?>
    <div class="contenedor">
        <table>
            <thead>
                <tr>
                    <th>ID Profesor</th>
                    <th>DNI </th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th><a class='btn-primary btn-lg' href='http://localhost/codeigniter4/public/profesores'>Regresar</a></th>
                </tr>
            </thead>
            <tbody>
                <?PHP
                    foreach ($datos as $fila){
                        echo "<tr>";
                        echo "<td>{$fila['idprofesor']}</td>";
                        echo "<td>".$fila['dni']."</td>";
                        echo "<td>".$fila['nombres']."</td>";
                        echo "<td>{$fila['apellidos']}</td>";
                        echo "<td>".$fila['email']."</td>";
                        echo "<td>".$fila['celular']."</td>";
                        echo "<td><a class='btn-warning btn-lg' href='http://localhost/codeigniter4/public/profesores/resturar/".$fila["idprofesor"]."'>Restaurar</a></td>";
                        echo "</tr>";
                    }
                ?>
            <tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>