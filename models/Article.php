<?php

class Article
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getArticles()
    {
        $this->db->query('SELECT * FROM product ORDER BY id DESC');
        return $this->db->resultSet();
    }

    public function addArticle($data)
    {
        $this->db->query('INSERT INTO product (`nom`, `description`, `prix`, `mark`, `actif`) VALUES (:nom, :description, :prix, :mark, :actif)');
        // Bind values
        $this->db->bind(':nom', $data['nom']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':prix', $data['prix']);
        $this->db->bind(':mark', $data['mark']);
        $this->db->bind(':actif', $data['actif']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function update($data)
    {
        $id = $data['updateArticleId'];
        $nom = $data['nom'];
        $description = $data['description'];
        $prix = $data['prix'];
        $mark = $data['mark'];
        $actif = $data['actif'];

        $this->db->query("UPDATE product SET `nom` = :nom, `description` = :description, `prix` = :prix, `mark` = :mark, `actif` = :actif WHERE id = :id");
        // Bind values
        $this->db->bind(':id', $id);
        $this->db->bind(':nom', $nom);
        $this->db->bind(':description', $description);
        $this->db->bind(':prix', $prix);
        $this->db->bind(':mark', $mark);
        $this->db->bind(':actif', $actif);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteArticle($id)
    {
        $this->db->query("DELETE FROM product WHERE id = :id");
        // Bind values
        $this->db->bind(':id', $id);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllArticles()
    {
        $this->db->query('SELECT COUNT(*) FROM product');
        return $this->db->resultSet();
    }

    public function deleteAllArticle($idArray)
    {
        $this->db->query("DELETE FROM product WHERE id IN ($idArray)");
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
