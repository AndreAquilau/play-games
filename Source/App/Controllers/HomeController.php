<?php

namespace Source\App\Controllers;

class HomeController
{
    public function getHome($data){
        LoadTemplate("home/main", $data);
    }
}