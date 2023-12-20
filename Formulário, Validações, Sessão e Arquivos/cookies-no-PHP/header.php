<h1>Cabeçalho</h1>
<hr>

<?php

if (isset($_COOKIE['nome'])) {
    $nome = $_COOKIE['nome'];
    echo '<h2/>'.$nome.'<h2/>';
}

?>