<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Main extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('Mmember');
    }

    public function index(){
        $this->load->view('layout/header');
        $this->load->view('layout/dashboard');
        $this->load->view('layout/footer');
    }

    public function login(){
        $this->load->view('member/login');
    }

    public function register(){
        $this->load->view('member/register');
    }

    public function save_login(){
        $this ->load->model('Mmember');

        $u= $this->input->post('username');
        $p= $this->input->post('password');

        $cek = $this->Mmember->cek_login($u, $p)->num_rows();
        $result = $this->Mmember->cek_login($u,$p)->row_object();

        if($cek == 1){
            $data_session = array(
                'idMember' => $result -> idMember,
                'username' => $u,
                'status' => 'login'
            );
            $this ->session->set_userdata($data_session);
            redirect('main');
        } else{
            redirect('main/login');
        }
    }

    public function save_register(){
        $username = $this->input->post('username');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $pass = $this->input->post('password');
        $notlp = $this->input->post('nohp');

        $dataInput = array(
            'username' => $username,
            'password' => $pass,
            'nama' => $nama,
            'email' => $email,
            'nohp' => $notlp
        );

        $this->Mmember->insert('member', $dataInput);
        redirect('main/login');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('main/login');
    }
}

?>