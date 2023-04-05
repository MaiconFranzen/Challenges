<?php
require_once "header.php";
?>

<header>
    <h1>Resultado do processamento:</h1>
</header>
<section>
    <main>
        <?php
        $n = $_GET["name"];
        $l = $_GET["lastname"];

        echo "<p> Ola $n $l, seja muito bem vindo ao meu sistema</p>";

        ?>
        <a href="javascript:history.go(-1)">
            <input type="button" value="Voltar" />
        </a>
    </main>
</section>
</body>

</html>