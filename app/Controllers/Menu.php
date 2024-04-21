<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends BaseController {

    public function __construct() {
        parent::__construct();
        return model('Menu_model');
    }

    public function index() {
        // Tampilkan daftar menu
        $data['menus'] = $this->Menu_model->get_menus();
        return view('menu/index', $data);
    }

    public function create() {
        return view('menu/create');
    }

    public function store() {
        $data = array(
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga')
        );
        $this->Menu_model->add_menu($data);
        redirect('menu/index');
    }

    public function edit($id) {
        $data['menu'] = $this->Menu_model->get_menu($id);
        return view('menu/edit', $data);
    }

    public function update($id) {
        $data = array(
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga')
        );
        $this->Menu_model->update_menu($id, $data);
        redirect('menu/index');
    }

    public function delete($id) {
        $this->Menu_model->delete_menu($id);
        redirect('menu/index');
    }
}