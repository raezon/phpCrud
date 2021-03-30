<?php


class Article
{
    private $db;
    private $_limit;
    private $_page;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getArticles()
    {

        $this->db->query('select p.id , p.libelle,p.prix, p.description, p.actif
                                 from jouets p 
                                 order by p.id desc');
        return $this->db->resultSet();
    }

    public function getArticleById($id)
    {
        $this->db->query('select * from posts where id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function getArticleByUserId($user_id)
    {
        $this->db->query('select count(*) as total from posts where user_id = :user_id');
        $this->db->bind(':user_id', $user_id);
        return $this->db->single();
    }

    public function addArticle($data)
    {
        $this->db->query('INSERT INTO posts (user_id, title, body) values (:user_id, :title, :body)');
        // Bind values
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateArticle($data)
    {
        $this->db->query('UPDATE posts SET title = :title, body = :body where id = :id');
        // Bind values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteArticle($id)
    {
        $this->db->query('DELETE FROM jouets where id = :id');
        // Bind values
        $this->db->bind(':id', $id);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
