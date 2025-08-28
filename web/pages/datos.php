<?php
include_once("../componentes/header.php");
?>

<main>

    <h1>Formulario enviado con éxito.</h1>
    <h2>Información enviada:</h2>
    <div class="formulario">
    <?php
        $nom;
        $ape;
        $mail;
        $dni;
        $cum;
        $tel;
        $espe;
        $cv;

        if(isset($_POST["nom"])){
            $nom = $_POST["nom"];
            print "<p class=cambio>Nombre: $nom</p>";
        }

        if(isset($_POST["ape"])){
            $ape = $_POST["ape"];
            print "<p class=cambio>Apellido: $ape</p>";
        }

        if(isset($_POST["dni"])){
            $dni = $_POST["dni"];
            print "<p class=cambio>Documento: $dni</p>";
        }

        if(isset($_POST["cum"])){
            $cum = $_POST["cum"];
            print "<p class=cambio>Fecha de nacimiento: $cum</p>";
        }

        if(isset($_POST["tel"])){
            $tel = $_POST["tel"];
            print "<p class=cambio>Teléfono: $tel</p>";
        }

        if(isset($_POST["mail"])){
            $mail = $_POST["mail"];
            print "<p class=cambio>Correo: $mail</p>";
        }

        if(isset($_POST["espe"])){
            $espe = $_POST["espe"];
            print "<p class=cambio>Especialización: $espe</p>";
        }

        if(isset($_FILES["cv"])){
            $cv = time(). "jpg";
            move_uploaded_file($_FILES["cv"]["tmp_name"],"../archivos/$cv");

            print "<img src=../archivos/$cv alt='Curriculum vitae de $nom'>";
        }

        print "<h3 class=datos>En un lapso de 72 horas un agente se contactará con vos. Muchas gracias $nom !</h3>";
    ?>
    </div>
    
</main>

<?php
include_once("../componentes/footer.php");
?>