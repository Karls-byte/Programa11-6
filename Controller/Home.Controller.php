<?php
class Home
{
    public function inicio()
    {
        $smarty=new Smarty;
        $vec= array();

        $vec=[
        ['nombre'=> 'Lineli','pass'=> '123'],['nombre'=> 'Jonathan','pass'=> '456']
        ];

        var_dump($vec);
        $smarty->assing('datos',$vec);
        $smarty->assing('nombre','otra pagina');
        $smarty->display('Home.tpl');



    }
}



?>