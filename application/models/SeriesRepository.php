<?php
defined('BASEPATH') OR exit('No direct script acess allowed');

class SeriesRepository extends CI_Model
{
    public function getData()
    {
        $sql = "SELECT * FROM series";

        $res = $this->db->query($sql);

        $data = $res->result();

        if ($data == null)
        {
            $data = "Lista Vazia!!!";
            return $data;
        }
            
        else
            return $data;
    }

    public function getDataFromId($id)
    {
        $sql = "SELECT * FROM series WHERE Id = $id";

        $res = $this->db->query($sql);

        $data = $res->result();

        return $data;
    }

    public function getDataFromGenero($genero)
    {
        if($genero == "Todos")
            return $this->getData();

        else
        {
           $res = $this->db->select('*')->from('series')
                        ->where('Genero=', $genero)
                        ->get();

            return $res->result();
        }
     
    }

    public function novaSerie()
    {
        if(sizeof($_POST) == 0) return false;

        else
        {
            $data = $this->input->post();
            $this->db->insert('series', $data);

            return true;
        }
    }

    public function deletarSerie($id)
    {
        $this->db->where("id",$id);
        $this->db->delete("series");        
    }

    public function editarSerie($id)
    {
        $data = $this->getDataFromId($id);       
        
        $newdata = $this->input->post();

        if($data == $newdata) return false;
        if($newdata == null) return false;

        else
        {
            $this->db->set('nome', $this->input->post('nome'));
            $this->db->set('genero', $this->input->post('genero'));
            $this->db->set('descricao', $this->input->post('descricao'));
            $this->db->set('temporadas', $this->input->post('temporadas'));
            $this->db->set('imagem', $this->input->post('imagem'));
            $this->db->set('valor', $this->input->post('valor'));
            $this->db->where('id', $id);
            $this->db->update('series');

            return true;
        }        
    }
}
