<?php

class Tag
{

  // Variable pdo pour exécuter les requêtes SQL en PHP
  private static ?PDO $pdo = null;

  // Champs de la table tag
  public int $id = 0;
  public string $name = '';
  public ?string $description = null;

  // Fonction init pour le $pdo
  private static function init()
  {
    if (is_null(self::$pdo)) {
      self::$pdo = getPdo();
    }
  }

  // Constructeur
  public function __construct()
  {
    self::init();
  }

  // Récupération de tous les tags
  public static function all(): array
  {
    self::init();
    $sql = "select id, name, description from tag";
    $stmt = self::$pdo->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
  }

  public function validate(bool $doUpdate): bool
  {
    if ($doUpdate && $this->id <= 0) return false;

    $this->name = trim($this->name);
    if ($this->name === '') {
      return false;
    }
    $this->description = trim($this->description);
    if ($this->description === '') {
      $this->description = null;
    }
    return true;
  }

  // Ajout d'un nouveau tag d'après l'objet tag
  public function insert()
  {
    $this->id = 0;
    if (!$this->validate(false)) {
      return;
    }
    $sql = 'insert into tag (name, description)';
    $sql = $sql . ' values (:name, :description)';
    $stmt =
      self::$pdo->prepare($sql);
    $stmt->bindParam(':name', $this->name);
    $stmt->bindParam(':description', $this->description);
    $stmt->execute();
    $this->id = self::$pdo->lastInsertId();
    $this->selectCurrent();
  }

  // Mise à jour du tag d'arès l'objet tag
  public function update()
  {

    if (!$this->validate(true)) return;
    $sql = 'update tag set name=:name, description=:description';
    $sql = $sql . ' where id = :id';
    $stmt = self::$pdo->prepare($sql);
    $stmt->bindParam(':name', $this->name);
    $stmt->bindParam(':description', $this->description);
    $stmt->bindParam(':id', $this->id);
    $stmt->execute();
    $this->selectCurrent();
  }

  // Création d'un nouvel objet tag
  // Remplissage d'après un id
  public static function select($id): Tag
  {
    self::init();
    $tag = new Tag();
    $tag->id = $id;
    $tag->selectCurrent();
    return $tag;
  }

  // Remplissage de l'objet tag d'après $tag->id
  public function selectCurrent()
  {
    $this->name = '';
    $this->description = null;
    if ($this->id <= 0) return;
    $sql = 'select id, name, description from tag where id = :id';
    $stmt = self::$pdo->prepare($sql);
    $stmt->bindParam(':id', $this->id);
    $stmt->setFetchMode(PDO::FETCH_INTO, $this);
    $stmt->execute();
    $stmt->fetch();
  }

  // Suppression du tag d'après $this->id
  public function deleteCurrent()
  {
    if ($this->id <= 0) return;
    $sql = 'delete from tag where id = :id';
    $stmt = self::$pdo->prepare($sql);
    $stmt->bindParam(':id', $this->id);
    $stmt->execute();
    $this->id = null;
  }
}
