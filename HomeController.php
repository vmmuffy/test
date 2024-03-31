<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
      echo 'Oi';
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}