<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Clients extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->layout->setLayout('layouts');


    }



    public function hotel()
    {

        $this->data['title']="Hotels";
        $this->data['top_navigation']=$this->layout_model->getTopNAvigation();
        $this->layout->view('frontend/clients_view', $this->data);
    }

    public function tourism()
    {

        $this->data['title']="Tourism";
        $this->data['top_navigation']=$this->layout_model->getTopNAvigation();
        $this->layout->view('frontend/clients_view', $this->data);
    }

    public function transports()
    {

        $this->data['title']="Transports";
        $this->data['top_navigation']=$this->layout_model->getTopNAvigation();
        $this->layout->view('frontend/clients_view', $this->data);
    }


}