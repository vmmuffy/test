<?php
namespace src\controllers;

use \core\Controller;
use \src\Handlers\LoginHandler;
use \src\Handlers\PostHandler;

class PostController extends Controller {
  
      private $loggedUser;
      
      public function _construct() {
          $this->loggedUser = LoginHandler::checkLogin();
          if($thi->loggedUser === false) {
              $this-> redirect('/login');
          }
      }
  
      public function new() {
          $body = filter_input(INPUT_POST, 'body');
          
          if($body) {
            PostHandler::addPost($this->loggedUser->id, 
              'text',
              $body
            );
          }
          $this->redirect('/');
      }
}