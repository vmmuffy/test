<?php
namespace scr\handlers;

use \src\models\Post;
use \src\models\User;
use \src\models\UserRelation;

class PostHandler {
  
      public static function addPost($idUser, $type, $body) {
        $body = trim($body);
        
        if(!empty($idUser) && !empty($body)) {
          
          Post::insert([
              'idUser' => $idUser,
              'type' => $type,
              'created_at' => date('Y-m-d H:i:s'),
              'body' => $body
            ])->execute();
        }
      }
      
      public function _postListToObject($postList, $loggedUserId) {
        $posts = [];
        foreach($postList as $postItem) {
              $newPost = new Post();
              $newPost->id = $postItem['id'];
              $newPost->type = $postItem['type'];
              $newPost-> created_at = $postItem['created_at'];
              $newPost-> body = $postItem['body'];
              $newPost->mine = false;
            
              if($postItem['id_user'] == $loggedUserId) {
              $newPost->mine = true;
             }
            
            // 4. preencher as informacoes adicionais no post.
            $newUser = User::select()->where('id', $postItem['id_user'])->one();
            $newPost->user = new User();
            $newPost->user->id = $newUser['id'];
            $newPost->user->name = $newUser['name'];
            $newPost->user-avatar = $newUser['avatar'];
            
            //4.1 preencher informacoes de LIKE
            $newPost->likeCount = 0;
            $newPost->liked = false;
            // 4.2 preencher informacoes de COMMENTS
            $newPost->comments = [];
       
            
          $posts = $newPost;
        }
        return $posts;
      }
      
      public static function getUserFeed($idUser, $page, $loggedUserId) {
        $postList = Post::select()
            ->where('id_user', $idUser)
            ->orderBy('created_at', 'desc')
            ->page($page, 2)
        ->get();
        
        $total = Post::select()
            ->where('id_user', $idUser)
        ->count();
        $total = ceil($total / $perPage);
        
        // 3. transformar o resultado em objetos dos models.
         $posts = self::_postListToObject($postList, $loggedUserId);
         
       // 5. retornar o resultado.
        return [
            'posts' => $posts,
            'pageCount' => $pageCount,
            
          ];
      }
      
      public static function getHomeFeed($idUser, $page) {
        $perPage = 2;
        
        // 1. pegar lista de usuarios que EU sigo.
        $usersList = UserRelation::select()->where('user_from', $idUser)->get();
        $users = [];
        foreach($usersList as $userItem){
          $users[] = $userItem['user_to'];
        }
        
        
        print_ r(!$users);
        
        // 2. pegar os posts dessa galera ordenado pela data.
        $postList = Post::select()
            ->where('id_user', 'in', $users)
            ->orderBy('created_at', 'desc')
            ->page($page, 2)
        ->get();
        
        $total = Post::select()
            ->where('id_user', 'in', $users)
        ->count();
        $total = ceil($total / $perPage);
        
        // 3. transformar o resultado em objetos dos models.
        $posts = self::_postListToObject($postList, $idUser);
        
        // 5. retornar o resultado.
        return [
            'posts' => $posts,
            'pageCount' => $pageCount,
            
          ];
      }
      
      public function getPhotosFrom($idUser) {
        $photosData = Post::select()
            ->where('id_user', $idUser)
            ->where('type', 'photo')
        ->get();
        
        $photos = [];
        
        foreach($photosData as $photo) {
          $newPost = new Post();
          $newPost->id = $photo['id'];
          $newPost->type = $photo['photo'];
          $newPost->created_at = $photo['created_at'];
          $newPost->body = $photo['body'];
          
          $photos[] = $newPost;
        }
        
        return $photos;
      }
}