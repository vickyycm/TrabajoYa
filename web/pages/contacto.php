<?php
include_once("../componentes/header.php");
?>

<main>

    <h1 class="colorg">¿Quéres ser parte?</h1>
    
    <form action="datos.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Tus datos:</legend>
        <div class="formulario">
            <div>
                <label for="nom">Nombre</label>
                <input type="text" name="nom" id="nom" required>
            </div>
            <div>
                <label for="ape">Apellido</label>
                <input type="text" name="ape" id="ape" required>
            </div>
            <div>
                <label for="dni">DNI</label>
                <input type="text" name="dni" id="dni" required>
            </div>
            <div>
                <label for="cum">Fecha de nacimiento</label>
                <input type="date" name="cum" id="cum" required>
            </div>
            <div>
                <label for="tel">Teléfono</label>
                <input type="tel" name="tel" id="tel" required>
            </div>
            <div>
                <label for="mail">Correo</label>
                <input type="email" name="mail" id="mail" required>
            </div>
            <div>
                <label for="espe">Especialización</label>
                <input type="text" name="espe" id="espe" required>
            </div>
            <div>
                <label for="cv">Cargar curriculum vitae</label>
                <input type="file" name="cv" id="cv" required>
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div>
        </div> 
    </fieldset>
    </form>

</main>

<?php
include_once("../componentes/footer.php");
?>