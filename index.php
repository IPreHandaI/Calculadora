<?php

include_once './includes/_head.php';

$teclado = ['', 'C', '()', '%', '/', '7', '8', '9', 'X', '4', '5', '6', '-', '1', '2', '3', '+', '+/-', '0', ',', '=']

?>

<div id="containermainbody">
    <div id="mainbody">
        <div id="tela"></div>
        <div class="row">
        <span style="float: left;" id="ampulieta">&#x231B;</span>
        <span style="float: right;" id="play">&#9654;</span>
        <div style="clear: both;"></div>
        </div>
        <hr>
        <div id="teclado">
            <div class="row">
                <?php
                    for ($i = 1 ; $i <= 20; $i++) {
                        echo "<input type='button' id='teclas' value='$teclado[$i]' name='teclado[$i]'> </>";
                        if ($i % 4 == 0) {
                            echo "<br>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>