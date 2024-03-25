<?php


class ProduitModel
{
    private $db;
    private $_limit;
    private $_page;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getProduit()
    {

        $this->db->query('select *
                                 from product p 
                                 order by p.id desc');
        return $this->db->resultSet();
    }



    public  function getAllProducts()
    {
        $this->db->query('select *
                                 from product p 
                                 order by p.id desc');
        return $this->db->resultSet();
    }

    public function addProduct($data)
    {
        $this->db->query('INSERT INTO jouets (`libelle`, `prix`, `description`, `actif`) values (:libelle, :prix, :description,:actif)');
        // Bind values
        $this->db->bind(':libelle', $data['libellé']);
        $this->db->bind(':prix', $data['prix']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':actif', $data['etat']);

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
        $libelle = $data['libellé'];
        $prix = $data['prix'];
        $description = $data['description'];
        $actif = $data['etat'];
        $this->db->query("UPDATE jouets SET `id`='$id', `libelle` = '$libelle', `prix` = '$prix' ,`description`='$description' ,`actif`='$actif' WHERE id = '$id'");

        // Execute
        if ($this->db->execute()) {

            return true;
        } else {
            return false;
        }
    }

    public function delete($id)
    {

        $this->db->query("DELETE FROM jouets where id = '$id' ");
        // Bind values
        $this->db->bind(':id', $id);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteAllProducts($idArray)
    {


        $this->db->query("DELETE FROM jouets WHERE id IN ($idArray)");
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
