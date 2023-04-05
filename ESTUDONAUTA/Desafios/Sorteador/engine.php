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
            <div class="col-md-4" id="insert">
                <h2>Resultado</h2>
                <form action="engine.php" method="post">
                    <div class="form-group" id="form-group">
                        
                        <?php 
                        $min = $_POST["min"] ?? 0;
                        $max = $_POST["max"] ?? 0;
                        $num = mt_rand($min, $max);
                        echo "Sorteando um numero entre $min e $max" . "<br>";
                        echo "O numero sorteado foi: $num <br>";

                        ?>
                        
                    </div>

                    <input class="btn card-btn" id="card-btn" type='button' value='Voltar' onclick='history.go(-1)' />

                </form>
            </div>
        </div>
    </div>
</div>
</div>
</body>

</html>