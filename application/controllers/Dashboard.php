<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model');
    }

    // Display dashboard for petugas
    public function petugas()
    {
        $data['title'] = 'Dashboard | Posyandu EH Indah';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        if ($data['user']) {
            $id = $data['user']['id_users'];
            $data['count_ibu'] = $this->Dashboard_model->dataIbu();
            $data['count_anak'] = $this->Dashboard_model->dataAnak();
            $data['count_petugas'] = $this->Dashboard_model->dataPetugas();
            $data['count_log'] = $this->Dashboard_model->dataLog($id);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('dashboard/petugas', $data);
            $this->load->view('templates/footer');
        } else {
            show_error('User not found', 500, 'An Error Was Encountered');
        }
    }

    // Display dashboard for bidan
    public function bidan()
    {
        $data['title'] = 'Dashboard | Posyandu EH Indah';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        if ($data['user']) {
            $id = $data['user']['id_users'];
            $data['count_ibu'] = $this->Dashboard_model->dataIbu();
            $data['count_anak'] = $this->Dashboard_model->dataAnak();
            $data['count_bidan'] = $this->Dashboard_model->dataBidan();
            $data['count_log'] = $this->Dashboard_model->dataLog($id);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar-bidan');
            $this->load->view('templates/topbar-bidan', $data);
            $this->load->view('dashboard/bidan', $data);
            $this->load->view('templates/footer');
        } else {
            show_error('User not found', 500, 'An Error Was Encountered');
        }
    }
}
