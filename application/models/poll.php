<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class poll extends CI_Model {
     

    function add($data)
    {
        $query = "INSERT INTO users (name, email, created_at) VALUES (?, ?, NOW())";
        $values = array($data["name"], $data["email"]);
        return $this->db->query($query, $values);
    }

}
