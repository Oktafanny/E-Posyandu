<?php
defined('BASEPATH') or exit('no direct script access allowed');

class ibu extends CI_Controller
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
        $data['ibu'] = $this->Madmin->get_all_data('ibu')->result();
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/ibu/tampil', $data);
        $this->load->view('admin/layout/footer');
    }
    public function add()
    {
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/ibu/formAdd');
        $this->load->view('admin/layout/footer');
    }
    public function save()
    {
        $nama = $this->input->post('nama');
        $no_telp = $this->input->post('no_telp');
        $alamat = $this->input->post('alamat');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $dataInput = array(
            'nama' => $nama,
            'tgl_lahir' => $tgl_lahir,
            'no_telp' => $no_telp,
            'alamat' => $alamat,
        );

        $insert = $this->Madmin->insert('ibu', $dataInput);
        if ($insert) {
            redirect('ibu/add');
        } else {
            redirect('ibu');
        }
    }
    public function get_by_id($id)
    {
        $dataWhere = array('id_ibu' => $id);
        $data['ibu'] = $this->Madmin->get_by_id('ibu', $dataWhere)->row_object();
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/ibu/formEdit', $data);
        $this->load->view('admin/layout/footer');
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $no_telp = $this->input->post('no_telp');
        $alamat = $this->input->post('alamat');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $dataInput = array(
            'nama' => $nama,
            'tgl_lahir' => $tgl_lahir,
            'no_telp' => $no_telp,
            'alamat' => $alamat,
        );

        $update = $this->Madmin->update('ibu', $dataInput, 'id_ibu', $id);

        if ($update) {
            redirect('ibu/get_by_id');
        } else {
            redirect('ibu');
        }
    }
    public function delete($id)
    {
        $this->Madmin->delete('ibu', 'id_ibu', $id);
        redirect('ibu');
    }
}