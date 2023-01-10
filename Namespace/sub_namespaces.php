<?php namespace App; ?>
<div class="titulo">Sub_Namespaces</div>
<?php

echo __NAMESPACE__.'<br>';
const constante = 123;

namespace App\Pricipal;
echo __NAMESPACE__.'<br>';
const constante = 234;

namespace App\Pricipal\Espefico;
echo __NAMESPACE__.'<br>';
const constante = 345;

echo constante.'<br>';
echo constant('\\'.__NAMESPACE__.'\constante').'<br>';