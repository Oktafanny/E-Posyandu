<?php
defined('BASEPATH') or exit('no direct script access allowed');

class anak extends CI_Controller
{
    public $input, $Madmin, $db, $form_validation, $session;
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index()
    {
        $data['anak'] = $this->Madmin->get_all_data('anak')->result();
        $data['ibu'] = $this->Madmin->get_all_data('ibu')->result();
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/anak/tampil', $data);
        $this->load->view('admin/layout/footer');

    }
    public function add()
    {
        $data['ibu'] = $this->Madmin->get_all_data('ibu')->result();
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/anak/formAdd', $data);
        $this->load->view('admin/layout/footer');
    }

    public function save()
    {
        $id_ibu = $this->input->post('id_ibu');
        $nama = $this->input->post('nama');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $dataInput = array(
            'id_ibu' => $id_ibu,
            'nama' => $nama,
            'tgl_lahir' => $tgl_lahir,
            'jenis_kelamin' => $jenis_kelamin,
        );

        $insert = $this->Madmin->insert('anak', $dataInput);
        if ($insert) {
            redirect('anak/add');
        } else {
            redirect('anak');
        }
    }
    public function get_by_id($id)
    {
        $dataWhere = array('id_anak' => $id);
        $data['anak'] = $this->Madmin->get_by_id('anak', $dataWhere)->row_object();
        $data['ibu'] = $this->Madmin->get_all_data('ibu')->result();
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/anak/formEdit', $data);
        $this->load->view('admin/layout/footer');
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $id_ibu = $this->input->post('id_ibu');
        $nama = $this->input->post('nama');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $dataInput = array(
            'id_anak'=> $id,
            'id_ibu' => $id_ibu,
            'nama' => $nama,
            'tgl_lahir' => $tgl_lahir,
            'jenis_kelamin' => $jenis_kelamin
        );

        $update = $this->Madmin->update('anak', $dataInput, 'id_anak', $id);

        if ($update) {
            redirect('anak/get_by_id');
        } else {
            redirect('anak');
        }
    }
    public function delete($id)
    {
        $this->Madmin->delete('anak', 'id_anak', $id);
        redirect('anak');
    }
}