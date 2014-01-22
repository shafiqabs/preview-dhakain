<?php //if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->layout->setLayout('layouts');
    }

    public function index()
    {
        $data['title']="Dashboard";
       // $this->data['top_navigation']=$this->layout_model->getTopNAvigation();
        $this->layout->view('dashboard_view', $data);
    }


}