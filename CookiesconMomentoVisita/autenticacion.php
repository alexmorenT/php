<form action="registro.php" method="POST">
    <fieldset>
        <legend>Iniciar sesión</legend>
        <div>
            <span class="error">
                <?php
                if (isset($error)) {
                    echo $error;
                }
                ?>
            </span>
        </div>
        <div>
            <label for="usuario">Usuario: </label> <br>
            <input type="text" name="usuario" id="usuario"> <br>
        </div>
        <div>
            <label for="pass">Contraseña: </label> <br>
            <input type="text" name="pass" id="pass"> <br>
        </div>
        <div>
            <input type="submit" name="enviar" value="Enviar">
        </div>
    </fieldset>


</form>