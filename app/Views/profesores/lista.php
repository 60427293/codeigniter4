<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $titulo ?><</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../public/css/style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style {csp-style-nonce}>
		.btn-lg {
            text-decoration: none;
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
                    <th><a class='btn-primary btn-lg' href='http://localhost/codeigniter4/public/profesores/nuevo/'>Nuevo</a></th>
                    <th colspan=2><a class='btn-primary btn-lg' href='http://localhost/codeigniter4/public/profesores/eliminados/'>Eliminados</a></th>
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
                        echo "<td><a class='btn-warning btn-lg' href='http://localhost/codeigniter4/public/profesores/editar/".$fila["idprofesor"]."'>Editar</a></td>";
                        echo "<td><a class='btn-danger btn-lg' href='http://localhost/codeigniter4/public/profesores/ocultar/".$fila["idprofesor"]."'>Eliminar</a></td>";
                        echo "</tr>";
                    }
                ?>
            <tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>