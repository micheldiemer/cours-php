 <?php
  require(BASE_INCLUDE . 'modele/Tag.php');

  switch ($op) {
    case 'delete':
      if ($id > 0) {
        $tag = Tag::select($id);
        try {
          $tag->deleteCurrent();
        } catch (PDOException $deletePdoException) {
        }
        $tags = Tag::all();
        require_once(BASE_INCLUDE . 'vue/tag_supprime.php');
        require_once(BASE_INCLUDE . 'vue/tag_liste.php');
      }
    default:
      $tags = Tag::all();
      require_once(BASE_INCLUDE . 'vue/tag_liste.php');
  }
