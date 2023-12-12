<?php
defined('BASEPATH') or exit('no direct script access allowed');

class penimbangan extends CI_Controller
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
        $data['penimbangan'] = $this->Madmin->get_all_data('penimbangan')->result();
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/penimbangan/tampil', $data);
        $this->load->view('admin/layout/footer');

    }
    public function add()
    {
        $data['penimbangan'] = $this->Madmin->get_all_data('penimbangan')->result();
        $data['anak'] = $this->Madmin->get_all_data('anak')->result();
        $data['petugas'] = $this->Madmin->get_all_data('petugas')->result();
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/penimbangan/formAdd', $data);
        $this->load->view('admin/layout/footer');
    }

    public function save()
    {
        $id_anak = $this->input->post('id_anak');
        $id_petugas = $this->input->post('id_petugas');
        $tgl_penimbangan = $this->input->post('tgl_penimbangan');
        $berat_badan = $this->input->post('berat_badan');
        $tinggi_badan = $this->input->post('tinggi_badan');
        $deteksi = $this->input->post('deteksi');
        $dataInput = array(
            'id_anak' => $id_anak,
            'id_petugas' => $id_petugas,
            'tgl_penimbangan' => $tgl_penimbangan,
            'berat_badan' => $berat_badan,
            'tinggi_badan' => $tinggi_badan,
            'deteksi' => $deteksi
        );

        $insert = $this->Madmin->insert('penimbangan', $dataInput);
        if ($insert) {
            redirect('penimbangan/add');
        } else {
            redirect('penimbangan');
        }
    }
    public function get_by_id($id)
    {
        $dataWhere = array('id_penimbangan' => $id);
        $data['penimbangan'] = $this->Madmin->get_by_id('penimbangan', $dataWhere)->row_object();
        $data['anak'] = $this->Madmin->get_all_data('anak')->result();
        $data['petugas'] = $this->Madmin->get_all_data('petugas')->result();
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/penimbangan/formEdit', $data);
        $this->load->view('admin/layout/footer');
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $id_anak = $this->input->post('id_anak');
        $id_petugas = $this->input->post('id_petugas');
        $tgl_penimbangan = $this->input->post('tgl_penimbangan');
        $berat_badan = $this->input->post('berat_badan');
        $tinggi_badan = $this->input->post('tinggi_badan');
        $deteksi = $this->input->post('deteksi');
        $dataInput = array(
            'id_penimbangan'=> $id,
            'id_anak' => $id_anak,
            'id_petugas' => $id_petugas,
            'tgl_penimbangan' => $tgl_penimbangan,
            'berat_badan' => $berat_badan,
            'tinggi_badan' => $tinggi_badan,
            'deteksi' => $deteksi
        );

        $update = $this->Madmin->update('penimbangan', $dataInput, 'id_penimbangan', $id);

        if ($update) {
            redirect('penimbangan/get_by_id');
        } else {
            redirect('penimbangan');
        }
    }
    public function delete($id)
    {
        $this->Madmin->delete('penimbangan', 'id_penimbangan', $id);
        redirect('penimbangan');
    }





}