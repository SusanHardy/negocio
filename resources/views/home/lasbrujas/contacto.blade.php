<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;  charset=iso-8859-1" />
	<meta name="description" content="An minimal site format" />
	<meta name="keywords" content="blog" />
	<link media="all" type="text/css" rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="container">
	   <div id="header"><h1>LasBrujas Delivery</span><img src="images/logo-brujas_opt.jpg" align="right"></h1></div>
	
	   <div id="wrapper">
            <div id="navigation">
           	    <ul>
                    <li><a href="index">Inicio</a></li>
                    <li><a href="caseros">LaBruja casera</a></li>
                    <li><a href="liviano">LaBruja light</a></li>
                    <li><a href="sopas">Las pocimas</a></li>
                    <li><a href="dulce">Dulce embrujo</a></li>
                    <li class="current_page_item"><a href="contacto">Contacto</a></li>
           	    </ul>
            </div>
            <div id="content-wrapper">
            <div id="content">
                <p align="left">Haz tus pedidos a los siguientes numeros:</p>
                <p align="left">x-xxxxxxx o al x-xxxxxxx</p>

                <p align="left">O directamente desde nuestro sitio, llenando el siguiente formulario: </p>
                <form action="mailto:emaildelaempresaquehaceelformulario@email.com" method="post" enctype="text/plain">
                    Nombre: <input type="text" name="nombre" size="25" maxlength="50"><br><br>
                    Apellidos: <input type="text" name="apellidos" size="35" maxlength="100">

                    <br><br>
                    Teléfono: <input type="text" value="" name="correo" size="40" maxlength="100">
                    <br><br>
                    Correo electrónico: <input type="text" value="@" name="correo" size="40" maxlength="100">
                    <br><br>
                    Dirección: <input type="text" name="poblacion" size="15" maxlength="50">
                    <br><br>
                    
                    Tu pedido: <br>
                    <textarea cols="40" rows="5" name="opinion">Escriba aquí su opinión...</textarea>
                    <br><br>

                    <table width="50%" border="0" align="center" cellpadding="10" cellspacing="0">
                        <tr>
                            <td><div align="center">
                                <input type="submit" value="Enviar formulario">
                                </div>
                            </td>
                            <td><div align="center">
                                <input type="Reset" value="Borrar formulario">
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>