<?php
require_once "header.php";
?>
<header>
    <h1>Apresente-se!</h1>
</header>
<section>
    <form action="engine.php" method="get">
        <label for="name">Nome</label>
        <input type="text" name="name" id="idname">
        <label for="lastname">Sobrenome</label>
        <input type="text" name="lastname" id="idlastname">
        <input type="submit" value="Enviar">
    </form>
</section>
</body>

</html>