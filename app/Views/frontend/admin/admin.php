<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mi primera vista</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        header {
            background-color: rgba(221, 72, 20, .2);
            width: 100%; height: auto;
            position: relative;
        }
        #logo{
            width: 4.5em; height: 4.5em;
            float: left;
            margin: 0.5em;
        }
        #menu1{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 5em;
        }
        .menu1-elem{
            display: inline-block;
            margin: 0.5em 0.5em 0.5em 0em;
            padding: 0.5em 0.5em 0.5em 1em;
            text-align: center;
            border-left: solid 2px #000;
            color: #000;
            text-decoration: none;
        }
        .menu1-elem-i{
            border-left: none;
        }
        .titulo1{
            width: 100%; font-size: 2.5em; line-height: 2.5em;
            text-align: center;
        }
        .contenedor{
            width: 100%; height: auto;
            padding: 0.2em 0em 0.2em 0em;
            display: flex;
            justify-content: center;
        }
        .poetico{
            font-size: 2.5em;
            font-style: oblique;
            padding: 1em; margin: 1em 0em 1em 0em;
            background-color: rgba(255, 238, 186, .5);
        }
        .formulario{
            display: grid;
            grid-template-columns: 0.9fr 1fr;
            grid-template-rows: 2fr 1fr 1fr;
            font-size: 1.5em;
            grid-row-gap: 0.2em;
            grid-column-gap: 1.2em;
            padding: 0.75em;
            border-radius: 0.5em;
            background-color: rgba(255, 119, 25, 1);
            box-shadow: 0em 0em 1em 0.2em rgba(232, 200, 25, 0.75) inset, 0.5em 0.5em 0.2em 0em #909090;
            color: #fff;
            text-align: right;
        }
        .formulario--titulo{
            grid-column: 1/3;
            font-size: 1.5em;
            text-align: center;
        }
        .formulario input:focus{
            background-color: #fff;
        }
	</style>
</head>
<body>

<!-- Cabecera -->
<header>
    <div id="logo"></div>
    <ul id="menu1">
        <a href="*" class="menu1-elem menu1-elem-i">elemento 1</a>
        <a href="*" class="menu1-elem">elemento 2</a>
        <a href="*" class="menu1-elem">elemento 3</a>
        <a href="*" class="menu1-elem">elemento 4</a>
        <a href="*" class="menu1-elem">elemento 5</a>
    </ul>
    <h1 class="titulo1"> Mi primera vista</h1>
</header>
<div class="contenedor">
    <p class="poetico">Hola <?= $nombres ." ". $apellidos."<br> Tienes ".$edad." años"?></p>
</div>
<div class="contenedor">
    <form class="formulario">
        <P class="formulario--titulo">titulo formulario</P>
        <label>DNI</label>
        <input placeholder="00000000"></input>
        <label>Nombres</label>
        <input placeholder="Fulano"></input>
        <label>Apellidos</label>
        <input placeholder="De Tal"></input>
        <label>Celular</label>
        <input placeholder="+51 000000000"></input>
        <label>Email</label>
        <input placeholder="ejemplo@gmail.com"></input>
    <form>
</div>
</body>
</html>