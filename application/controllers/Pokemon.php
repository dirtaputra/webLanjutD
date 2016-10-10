<?php
class Pokemon extends CI_Controller{

    public function __construct(){
        $this->load->model('pokemon_model'); // load model 'pokemon_model'
    }


    // URL : http://localhost/[directory]/index.php/pokemon/index
    public function index(){
        // TODO: dapatkan hasil dari fungsi get_all di pokemon_model
        // TODO: load view pokemon_index, berikan data yang didapat dari fungsi get_all
    }

    // URL : http://localhost/[directory]/index.php/pokemon/insert_form
    public function insert_form(){
        // TODO: load view pokemon_insert_form
    }

    // URL : http://localhost/[directory]/index.php/insert_action
    public function insert_action(){
        $nama = $this->input->post('nama'); // dapatkan nilai inputan nama
        $tipe = $this->input->post('tipe'); // dapatkan nilai inputan tipe
        // TODO: panggil fungsi insert di pokemon_model
         $data_insert = array(
+            'nama' => $nama,
+            'tipe' => $tipe
+        );
+        $res = $this->pokemon->insert('pokemon',$data_insert);
         // TODO: load view pokemon_insert_action
+        $this->load->view("pokemon_insert_action");
    }

    // URL : http://localhost/[directory]/index.php/pokemon/update_form/[id]
    public function update_form($id){
        // TODO: panggil fungsi get_one di pokemon_model 
        // TODO: load view pokemon_update_form, berikan data yang didapat dari fungsi get_one
    }

    // URL : http://localhost/[directory]/index.php/update_action/[id]
    public function update_action($id){
        $nama = $this->input->post('nama'); // dapatkan nilai inputan nama
        $tipe = $this->input->post('tipe'); // dapatkan nilai inputan tipe
        // TODO: panggil fungsi update di pokemon_model
        // TODO: load view pokemon_update_action
    }

    // URL : http://localhost/[directory]/index.php/delete/[id]
    public function delete_action($id){
        // TODO: panggil fungsi delete di pokemon_model
        // TODO: load view pokemon_delete
    }

}
