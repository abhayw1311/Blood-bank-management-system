<?php 
class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $this->load->view('includes/header');
        $this->load->view('home');
        $this->load->view('includes/footer');
    }
    public function about(){
        $this->load->view('includes/header');
        $this->load->view('about');
        $this->load->view('includes/footer');
    }
    public function contact(){
        $this->load->view('includes/header');
        $this->load->view('contact');
        $this->load->view('includes/footer');
    }
    public function login(){
        if($this->input->method()=='post') {
            $resp = $this->CM->select_data('bms_users','*',$_POST);
            if(count($resp)>0) {
                $this->session->set_userdata('user_session',$resp[0]);
                echo json_encode(array('status'=>'true','message'=>"Success",'reload'=>base_url(('admin'))));
            } else {
                echo json_encode(array('status'=>'false','message'=>"Username and password not match"));
            }
        } else {
            $this->load->view('includes/header');
            $this->load->view('login');
            $this->load->view('includes/footer');
        }
    }
    public function appointment(){
        $data = $this->input->post();
        $this->CM->insert_data('bms_appointment',$data);
        echo json_encode(array('status'=>'true','message'=>'Success','reload'=>base_url('/')));
    }
}
?>