<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    // public function __construct()
    // {
    //   parent::__construct();
    //   $this->load->model('auth_model');
    //   if(!$this->auth_model->current_user()){
    //     redirect(base_url('Login'));
    //   }
    // }


    public function index(){
      $this->load->model('M_pwc','pwc');
      $data['PWC'] = $this->pwc->get_all_pwc();

      $this->load->view('_partial/head-dash');
      $this->load->view('admin-page/admin', $data);
      $this->load->view('_partial/foot-dash');
    }

    public function nt_admin(){
      $this->load->model('M_nt','nt');
      $data['NT'] = $this->nt->get_all_nt();

      $this->load->view('_partial/head-dash');
      $this->load->view('admin-page/tatil2021/tatil_admin', $data);
      $this->load->view('_partial/foot-dash');
    }

    public function gs_admin(){
      $this->load->model('M_gelas','gs');
      $data['GS'] = $this->gs->get_all_gelas();

      $this->load->view('_partial/head-dash');
      $this->load->view('admin-page/gelas2021/gelas_admin', $data);
      $this->load->view('_partial/foot-dash');
    }

}
