<?php
defined('BASEPATH') or exit('no direct script access allowed');

class petugas extends CI_Controller
{
    public $input, $Madmin, $db, $form_validation, $session;
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index()
    {
        // if(empty($this->session->userdata('userName'))){
        //     redirect('adminpanel');
        // }
        $data['petugas'] = $this->Madmin->get_all_data('petugas')->result();
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/petugas/tampil', $data);
        // $this->load->view('admin/ibu/tampil');
        $this->load->view('admin/layout/footer');

    }
    public function add()
    {
        // if(empty($this->session->userdata('userName'))){
        //     redirect('adminpanel');
        // }
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/petugas/formAdd');
        $this->load->view('admin/layout/footer');
    }

    public function save()
    {
        // validasi form kategori
        // $this->form_validation->set_rules('namaKat', 'kategori', 'required|is_unique[tbl_kategori.namaKAt]',
        //                 array('required'=>'Field ini tidak boleh kosong !',
        //                     'is_unique'=>'nama sudah digunakan !'
        //                     ));

        // if($this->form_validation->run() != false){
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');
        $dataInput = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'no_telp' => $no_telp
        );

        $insert=$this->Madmin->insert('petugas', $dataInput);
        if ($insert) {
            redirect('petugas/add');
        } else {
            redirect('petugas');
        }
    }
    public function get_by_id($id)
    {
        $dataWhere =array('id_petugas'=> $id);
        $data['petugas'] = $this->Madmin->get_by_id('petugas',$dataWhere)->row_object();
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/petugas/formEdit', $data);
        $this->load->view('admin/layout/footer');
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');
        $dataInput = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'no_telp' => $no_telp
        );

        $update = $this->Madmin->update('petugas', $dataInput, 'id_petugas', $id);

        // $this->session->set_flashdata('massage', '<div class="alert alert-warning alert-dismissible">
        //         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        //         <h6><i> kategori berhasil diubah </i></h6>
        //         </div>');
        if ($update) {
            redirect('petugas/get_by_id');
        } else {
            redirect('petugas');
        }
    }
    public function delete($id)
    {
        // if (empty($this->session->userdata('userName'))) {
        //     redirect('adminpanel');
        // }
        $this->Madmin->delete('petugas', 'id_petugas', $id);
        // $this->session->set_flashdata('massage', '<div class="alert alert-danger alert-dismissible">
        //             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        //             <h6><i> kategori berhasil dihapus </i></h6>
        //         </div>');
        redirect('petugas');
    }





}