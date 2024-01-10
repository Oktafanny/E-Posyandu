<?php
defined('BASEPATH') or exit('no direct script access allowed');

class mpasi extends CI_Controller
{
    public $input, $Madmin, $db, $form_validation, $session;
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
        $this->load->library('session');

    }
    public function index()
    {
        $data['mpasi'] = $this->Madmin->get_all_data('mpasi')->result();
        $data['pertumbuhan'] = $this->Madmin->get_all_data('pertumbuhan')->result();
        $data['pertumbuhan'] = $this->Madmin->getPertumbuhanData();
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/mpasi/tampil', $data);
        $this->load->view('admin/layout/footer');
    }
    public function add()
    {
        $data['pertumbuhan'] = $this->Madmin->get_all_data('pertumbuhan')->result();
        $data['pertumbuhan'] = $this->Madmin->getPertumbuhanData();
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/mpasi/formAdd', $data);
        $this->load->view('admin/layout/footer');
    }
    public function save()
    {
        $id_pertumbuhan = $this->input->post('id_pertumbuhan');
        $menu_utama = $this->input->post('menu_utama');
        $buah = $this->input->post('buah');
        $dataInput = array(
            'id_pertumbuhan' => $id_pertumbuhan,
            'menu_utama' => $menu_utama,
            'snack' => $buah
        );

        $insert = $this->Madmin->insert('mpasi', $dataInput);
        if ($insert) {
            redirect('mpasi/add');
        } else {
            redirect('mpasi');
        }
    }
    public function get_by_id($id)
    {
        $dataWhere = array('id_mpasi' => $id);
        $data['mpasi'] = $this->Madmin->get_by_id('mpasi', $dataWhere)->row_object();
        // $data['mpasi'] = $this->Madmin->get_all_data('mpasi')->result();
        $data['pertumbuhan'] = $this->Madmin->get_all_data('pertumbuhan')->result();
        $data['pertumbuhan'] = $this->Madmin->getPertumbuhanData();
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/mpasi/formEdit', $data);
        $this->load->view('admin/layout/footer');
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $id_pertumbuhan = $this->input->post('id_pertumbuhan');
        $menu_utama = $this->input->post('menu_utama');
        $buah = $this->input->post('buah');
        $dataInput = array(
            'id_pertumbuhan' => $id_pertumbuhan,
            'menu_utama' => $menu_utama,
            'snack' => $buah
        );

        $update = $this->Madmin->update('mpasi', $dataInput, 'id_mpasi', $id);

        if ($update) {
            redirect('mpasi/get_by_id');
        } else {
            redirect('mpasi');
        }
    }
    public function delete($id)
    {
        $this->Madmin->delete('mpasi', 'id_mpasi', $id);
        redirect('mpasi');
    }
}