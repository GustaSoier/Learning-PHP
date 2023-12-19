<?php
require('header.php');
?>


<form method="POST" action="recebedor.php">
    <label>
        Nome:
        <br/>
        <input type="text" name="nome" />
    </label>
    </br>
    </br>

    <label>
        Email:
        <br/>
        <input type="text" name="email" />
    </label>
    </br>
    </br>

    <label>
        Senha
        <br/>
        <input type="password" name="senha" />
    </label>
    </br>
    </br>

    <input type="submit" value="Enviar" />

</form>