<?php
require_once "header.php";
?>


<div class="container-fluid" id="main-container">
    <div class="col-md6" id="pagetitle">
        <h2 class="section-title">Sorteador</h2>
        <p class="section-description">Informe o intervalo de numeros, clique em sortear e Boa Sorte!</p>
    </div>
    <div class="col-md-12">
        <div class="row" id="engine-row">

        
            <div class="col-md-3" id="insert">
                <h2 id="sort">Número Inicial</h2>
                <form action="engine.php" method="post">
                    <div class="form-group" id="form-group">
                        <label for="number">Insira o número inicial:</label>
                        <input type="number" class="form-control" name="min" id="min" placeholder="Digite um número">
                    </div>

                </form>
            </div>


            <div class="col-md-3" id="insert">
                <h2 id="sort">Número Final</h2>
                <form action="engine.php" method="post">
                    <div class="form-group" id="form-group">
                        <label for="number">Insira o número final:</label>
                        <input type="number" class="form-control" name="min" id="min" placeholder="Digite um número">
                    </div>
                </form>
            </div>
        </div>


        <div class="row" id="engine-row">
            <div class="col-md-2">
                <input type="submit" value="Sortear" class="btn card-btn" id="card-btn">
            </div>
        </div>


    </div>
</div>
</div>
</body>

</html>