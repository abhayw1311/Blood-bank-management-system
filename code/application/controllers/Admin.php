<?php 
class Admin extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('user_session')) {
            redirect(base_url('home/login'));
        }
    }
    public function index(){
        $data['information'] = $this->CM->select_data('bms_appointment','*');
        $this->load->view('includes/header');
        $this->load->view('admin/admin-header');
        $this->load->view('admin/contact',$data);
        $this->load->view('includes/footer');
    }
    public function add_donation(){
        if($this->input->method()=='post') {
            $this->CM->insert_data('bms_donation',$_POST);
            echo json_encode(array('status'=>'true','message'=>'Success','reload'=>base_url('admin/donation_list')));
        } else {
            $this->load->view('includes/header');
            $this->load->view('admin/admin-header');
            $this->load->view('admin/add_donation');
            $this->load->view('includes/footer');
        }
    }
    public function donation_list(){
        $data['information'] = $this->CM->select_data('bms_donation','*');
        $this->load->view('includes/header');
        $this->load->view('admin/admin-header');
        $this->load->view('admin/donation_list',$data);
        $this->load->view('includes/footer');
    }
    public function issue_blood(){
        if($this->input->method()=='post') {
            $this->CM->insert_data('bms_issue',$_POST);
            echo json_encode(array('status'=>'true','message'=>'Success','reload'=>base_url('admin/issue_blood_list')));
        } else {
            $this->load->view('includes/header');
            $this->load->view('admin/admin-header');
            $this->load->view('admin/issue_blood');
            $this->load->view('includes/footer');
        }
    }
    public function issue_blood_list(){
        $data['information'] = $this->CM->select_data('bms_issue','*');
        $this->load->view('includes/header');
        $this->load->view('admin/admin-header');
        $this->load->view('admin/issue_blood_list',$data);
        $this->load->view('includes/footer');
    }
    public function logout(){
        $this->session->unset_userdata('user_session');
        redirect(base_url('home/login'));
    }
}
?>