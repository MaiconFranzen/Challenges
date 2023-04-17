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
            <div class="col-md-4" id="insert">
                <h2>Resultado</h2>
                <form action="engine.php" method="post">
                    <div class="form-group" id="form-group">
                        
                        <?php 
                        $num = $_POST["number"] ?? 0;
                        $ant = $num - 1;
                        $suc = $num + 1;
                        echo "O número escolhido foi: $num";
                        echo "<br>O seu antecessor é $ant <br>";
                        echo "O seu sucessor é $suc"
                        ?>
                        
                    </div>

                   
                </form>
            </div>
        </div>
            <div class="col-md-2">
                 <input class="btn card-btn" id="card-btn" type='button' value='Voltar' onclick='history.go(-1)' />
            </div>
        
    </div>
</div>
</div>
</body>

</html>