<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\UserHandler;

class HomeController extends Controller {

    private $loggedUser;

    public function _construct() {
      $this->loggedUser = LoginHandler::checkLogin();
      if($this->loggedUser === false) {
      $this->redirect('/login;');
      }
    }
 
    public function index() {
        $page = intval(filter_input(INPUT_GET, 'page'));
      
        $feed = postHandler::getHomeFeed();
        $this->loggedUser->id,
        $page
      
        $this->render('home', [
          'loggedUser' => $this-> loggedUser,
          'feed' => $feed
        ]);
    }

}