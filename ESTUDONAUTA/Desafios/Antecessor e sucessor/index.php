<?php
require_once "templates/header.php";
?>


<div class="container-fluid" id="main-container">
    <div class="col-md6" id="pagetitle">
        <h2 class="section-title">Antecessor e Sucessor</h2>
        <p class="section-description">Descubra qual o sucessor e o antecessor de um numero informado</p>
    </div>
    <div class="col-md-12">
        <div class="row" id="engine-row">
            <div class="col-md-3" id="insert">
                <h2>Número</h2>
                <form action="engine.php" method="post">
                    <div class="form-group" id="form-group">
                        <label for="number">Insira um número:</label>
                        <input type="number" class="form-control" name="number" id="number" placeholder="Digite um número">
                    </div>
                    <input type="submit" value="Calcular" class="btn card-btn" id="card-btn">
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</body>

</html>