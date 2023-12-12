<?php
defined('BASEPATH') or exit('no direct script access allowed');

class imunisasi extends CI_Controller
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
        $data['petugas'] = $this->Madmin->get_all_data('petugas')->result();
        $data['imunisasi'] = $this->Madmin->get_all_data('imunisasi')->result();
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/imunisasi/tampil', $data);
        $this->load->view('admin/layout/footer');

    }
    public function add()
    {
        $data['imunisasi'] = $this->Madmin->get_all_data('imunisasi')->result();
        $data['anak'] = $this->Madmin->get_all_data('anak')->result();
        $data['petugas'] = $this->Madmin->get_all_data('petugas')->result();
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/imunisasi/formAdd', $data);
        $this->load->view('admin/layout/footer');
    }

    public function save()
    {
        $id_anak = $this->input->post('id_anak');
        $id_petugas = $this->input->post('id_petugas');
        $tgl_imunisasi = $this->input->post('tgl_imunisasi');
        $imunisasi = $this->input->post('imunisasi');
        $deteksi = $this->input->post('deteksi');
        $dataInput = array(
            'id_anak' => $id_anak,
            'id_petugas' => $id_petugas,
            'tgl_imunisasi' => $tgl_imunisasi,
            'imunisasi' => $imunisasi,
            'deteksi' => $deteksi
        );

        $insert = $this->Madmin->insert('imunisasi', $dataInput);
        if ($insert) {
            redirect('imunisasi/add');
        } else {
            redirect('imunisasi');
        }
    }
    public function get_by_id($id)
    {
        $dataWhere = array('id_imunisasi' => $id);
        $data['imunisasi'] = $this->Madmin->get_by_id('imunisasi', $dataWhere)->row_object();
        $data['anak'] = $this->Madmin->get_all_data('anak')->result();
        $data['petugas'] = $this->Madmin->get_all_data('petugas')->result();
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/imunisasi/formEdit', $data);
        $this->load->view('admin/layout/footer');
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $id_anak = $this->input->post('id_anak');
        $id_petugas = $this->input->post('id_petugas');
        $tgl_imunisasi = $this->input->post('tgl_imunisasi');
        $imunisasi = $this->input->post('imunisasi');
        $deteksi = $this->input->post('deteksi');
        $dataInput = array(
            'id_imunisasi'=> $id,
            'id_anak' => $id_anak,
            'id_petugas' => $id_petugas,
            'tgl_imunisasi' => $tgl_imunisasi,
            'imunisasi' => $imunisasi,
            'deteksi' => $deteksi
        );

        $update = $this->Madmin->update('imunisasi', $dataInput, 'id_imunisasi', $id);

        if ($update) {
            redirect('imunisasi/get_by_id');
        } else {
            redirect('imunisasi');
        }
    }
    public function delete($id)
    {
        $this->Madmin->delete('imunisasi', 'id_imunisasi', $id);
        redirect('imunisasi');
    }

}