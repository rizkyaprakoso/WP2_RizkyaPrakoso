<?php

namespace App\Controllers;

class Testcontroller extends BaseController
{
    public function sum($n1, $n2)
    {
        echo "hasilnya adalah: ". $n1 + $n2;
    }

}
