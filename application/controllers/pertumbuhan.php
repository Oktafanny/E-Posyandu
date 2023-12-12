<?php
defined('BASEPATH') or exit('no direct script access allowed');

class pertumbuhan extends CI_Controller
{
    public $input, $Madmin, $db, $form_validation, $session;
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index()
    {
        $data['pertumbuhan'] = $this->Madmin->getPertumbuhanData();
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/pertumbuhan/tampil', $data);
        $this->load->view('admin/layout/footer');
    }
    public function add()
    {
        $data['anak'] = $this->Madmin->get_children_with_penimbangan_imunisasi();
        // $data['anak'] = $this->Madmin->get_all_data('anak')->result();
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/pertumbuhan/formAdd', $data);
        $this->load->view('admin/layout/footer');
    }

    public function save()
    {
        $id_anak = $this->input->post('id_anak');
        $this->load->model('Madmin');
        $childData = $this->Madmin->getChildData($id_anak);

        $id_penimbangan = $childData->id_penimbangan; 
        $id_imunisasi = $childData->id_imunisasi;

        $tgl_periksa = $this->input->post('tgl_periksa');
        $keterangan = $this->input->post('keterangan');
        $dataInput = array(
            'id_penimbangan' => $id_penimbangan,
            'id_imunisasi' => $id_imunisasi,
            'id_anak' => $id_anak,
            'tgl_periksa' => $tgl_periksa,
            'keterangan' => $keterangan
        );

        $insert = $this->Madmin->insert('pertumbuhan', $dataInput);
        if ($insert) {
            redirect('pertumbuhan/add');
        } else {
            redirect('pertumbuhan');
        }
    }

    public function delete($id)
    {
        $this->Madmin->delete('pertumbuhan', 'id_pertumbuhan', $id);
        redirect('pertumbuhan');
    }
}