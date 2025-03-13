<?php
//ini_set("display_errors",E_ALL); 
    include_once "Persona.php";

    $lista= array( 
        new Persona("Armando","1996-01-04","5616987536"),
        new Persona("Berenice", "1998-05-16","5571053012"),
        new Persona("Carlos", "1985-05-07","5523648956"),
        new Persona("Diana", "1972-01-30","5532456987"),
        new Persona("Ernesto", "2000-02-12","5520146732"),
        new Persona("Federica", "1970-05-15","5523495761"),
        new Persona("Gerardo", "1969-12-18","5528964555"),
        new Persona("Heidi", "1995-09-23","5632479865"),
        new Persona("Iván", "1985-10-30","5531196472")
        );
?>    
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Lista de Personas</title>
        <style>
            td {
                background-color:green;
            }
        </style>
    </head>
    <body>
        <h1>Lista de Personas</h1>
        <table border>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Nacimiento</th>
                    <th>Edad Actual</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista as $p): ?>
                <tr>
                    <td><?php echo $p->getNombre()?></td>
                    <td><?php echo $p->getFecNac()?></td>
                    <td><?php echo $p->getEdad()?></td>
                    <td><?php echo $p->getTel()?></td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </body>
</html>
</DOCTYPE>
 