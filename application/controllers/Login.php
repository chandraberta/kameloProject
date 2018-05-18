<?php 

class Login extends CI_Controller{

  function __construct(){
    parent::__construct();    
    $this->load->model('m_login');

  }

  function index(){
    $data = array(
      'judul'=> 'Halaman Login',
      'error_a'=>'',
    );
    $this->load->view('login');
  }

  /*function auth(){
    if($_POST){
      $username = $this->input->post('username');
      $password = $this->input->encrypt->sha1($this->input->post('password'));

      $temp = $this->M_login->login("where username = '$username' and password = '$password'")->result_array();

      if($temp != NULL){

      $data = array(

      'username' => $temp[0]['username'],
      'password' => $temp[0]['password'],
      );

      $this->session->set_userdata('loginista', $data);
      session_start();
      echo "BERHASIL LOGIN";

    }
    else{
      $data = array(
        'judul' => 'Halaman Login',
        'error_a' => 'Username atau password tidak benar',
      );

      $this->load->view('login', $data);
    } 
  }*/

  function aksi_login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $where = array(
      'username' => $username,
      'password' => sha1($password)
      );
    $cek = $this->m_login->cek_login("tb_user",$where)->num_rows();
    if($cek > 0){
 
      $data_session = array(
        'nama' => $username,
        'status' => "login"
        );
 
      $this->session->set_userdata($data_session);
 
      redirect(base_url("admin"));
 
    }else{
      echo "Username dan password salah !";
    }
  }

  function logout(){
    $this->session->sess_destroy();
    redirect('login');
  }

}