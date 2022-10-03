<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $titulo ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- STYLES -->
	<style {csp-style-nonce}>
		* {
			transition: background-color 300ms ease, color 300ms ease;
            margin: 0px; padding: 0px;
		}
		*:focus {
			background-color: rgba(221, 72, 20, .2);
			outline: none;
        }
        .titulo{
            color: green;
            font-style: oblique; text-align: center;
            width: 100%; font-size: 2.5em; line-height: 2.5em;
        }
        .contenedor{
            width: 100%; height: auto;
            padding: 0.2em 0em 0.2em 0em;
            display: flex;
            justify-content: center;
        }
        form{
            padding: 2em 1em 1em 1em; margin: 0em 0em 1em 0em;
            border-radius: 0.5em;
            background-color: rgb(249, 255, 208);
            box-shadow: 0em 0em 1em 0.2em rgba(118, 232, 25, 0.75) inset, 0.5em 0.5em 0.2em 0em #909090;
            color: rgb(0, 0, 190); font-size: 1.2em;
        }
    </style>
</head>
<body>
    <header>
        <h1 class="titulo"><?php echo $titulo ?></h1>
    </header>
    <div class="contenedor">
        <form method="POST" action="http://localhost/codeigniter4/public/cursos/actualizar">
            <div class="form-group row">
            <label for="idcurso" class="col-4 col-form-label">ID Curso</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-address-card"></i>
                </div>
                </div> 
                <input id="idcurso" name="idcurso" type="text" class="form-control" value="<?= $datos["idcurso"] ?>" readonly> <!--disabled no envia valores-->
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="idalumno" class="col-4 col-form-label">ID Alumno</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-address-card"></i>
                </div>
                </div> 
                <input id="idalumno" name="idalumno" type="text" class="form-control" value="<?= $datos["idalumno"] ?>" required>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="idprofesor" class="col-4 col-form-label">ID Profesor</label> 
            <div class="col-8">
            <input id="idprofesor" name="idprofesor" type="text" class="form-control" value="<?= $datos["idprofesor"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="curso" class="col-4 col-form-label">Curso</label> 
            <div class="col-8">
            <input id="curso" name="curso" type="text" class="form-control" value="<?= $datos["curso"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="creditos" class="col-4 col-form-label">Creditos</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-phone-square"></i>
                </div>
                </div> 
                <input id="creditos" name="creditos" type="text" placeholder="+51 000000000" class="form-control" value="<?= $datos["creditos"] ?>" required>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="notafinal" class="col-4 col-form-label">Nota final</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-at"></i>
                </div>
                </div> 
                <input id="notafinal" name="notafinal" type="notafinal" placeholder="ejemplo@gmail.com" class="form-control" value="<?= $datos["notafinal"] ?>" required>
            </div>
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-success">Actualizar datos</button>
            </div>
        </div>
        </form>
    </div>
</body>
</html>