 
<?php

include ('autoload.php');

if (isset($_GET['class']) && isset ($_GET['method']))
{
    $class=$_GET['class'];
    $method=$_GET['method'];
}
else
{
 $class="Home";
 $method="inicio";
}
if(class_exists($class)&& method_exists($class,$method))
{
    $c=new $class();
    $c->$method();
}
else
{
    echo"la clase o metodo no existe";
}


?>
