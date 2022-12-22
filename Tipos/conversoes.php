<div class="titulo">Converões em PHP</div>
<?php

use phpDocumentor\Reflection\Types\Float_;

echo is_int(PHP_INT_MAX);

//converter de int para float
echo'<br>';
var_dump(PHP_INT_MAX + 1);
echo'<br>';
var_dump(1 + 1.0);
echo'<br>';
var_dump((float) 3);