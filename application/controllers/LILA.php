<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Imunisasi_Anak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('LILA');
    }

    // MULAI MENAMPILKAN
    public function index()
    {
        $data['title'] = 'Imunisasi Anak | Posyandu EH Indah';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['d_anak'] = $this->Imunisasi_model->getDataAnakIbu();

        // var_dump($data['d_anak']);
        // die;
        $this->load->view('templates/header-datatables', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('layanan/imunisasi-form', $data);
        $this->load->view('templates/footer-datatables');
    }
    // SELESAI MENAMPILKAN

    // MULAI MENAMPILKAN
    public function imunisasi()
    {
        $data['title'] = 'Imunisasi Anak | Posyandu EH Indah';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['d_anak'] = $this->Imunisasi_model->getDataAnakIbu();

        // var_dump($data['d_anak']);
        // die;
        $this->load->view('templates/header-datatables', $data);
        $this->load->view('templates/sidebar-bidan');
        $this->load->view('templates/topbar', $data);
        $this->load->view('layanan/imunisasi-form-bidan', $data);
        $this->load->view('templates/footer-datatables');
    }
    // SELESAI MENAMPILKAN

    // MULAI TAMBAH DATA
    public function submit()
    {
        $data['title'] = 'Imunisasi Anak | Posyandu EH Indah';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $vitValues = $_POST['vit'];

        $this->Imunisasi_model->add(
            array(
                'anak_id' => $this->input->post('id_anak'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'ibu_id' => $this->input->post('ibu_id'),
                'usia' => $this->input->post('usia'),
                'imunisasi' => $this->input->post('imun'),
                'vit_a' => $vitValues[0],
                'tgl_skrng' => $this->input->post('tgl_skrng'),
                'ket' => $this->input->post('keterangan'),
                'created_by' => $user['id_users'],
            )
        );

        // $this->db->insert('penimbangan', $data);
        $this->session->set_flashdata('msg', 'Data Berhasil Ditambahkan');

        redirect('imunisasi_anak/index');
    }
    // SELESAI TAMBAH DATA

    // MULAI TAMBAH DATA
    public function submit_imun()
    {
        $data['title'] = 'Imunisasi Anak | Posyandu EH Indah';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $vitValues = $_POST['vit'];

        $this->Imunisasi_model->add(
            array(
                'anak_id' => $this->input->post('id_anak'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'ibu_id' => $this->input->post('ibu_id'),
                'usia' => $this->input->post('usia'),
                'imunisasi' => $this->input->post('imun'),
                'vit_a' => $vitValues[0],
                'tgl_skrng' => $this->input->post('tgl_skrng'),
                'ket' => $this->input->post('keterangan'),
                'created_by' => $user['id_users'],
            )
        );

        // $this->db->insert('penimbangan', $data);
        $this->session->set_flashdata('msg', 'Berhasil Ditambahkan');

        redirect('imunisasi_anak/imunisasi');
    }
    // SELESAI TAMBAH DATA
}
