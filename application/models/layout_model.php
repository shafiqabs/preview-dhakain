<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Layout_model extends Base_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    public function getTopNavigation(){

        $data="";
        $data .='
        <ul class="nav">
                    <li class="active"><a href="index.html">Home	</a></li>
                    <li class=""><a href="about_us.html">Who we are?</a></li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">What we do? <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="nav-header">Web Development</li>
                            <li><a href="webdevelopment.html">Webpage Design</a></li>
                            <li><a href="webdevelopment.html">Web Development</a></li>
                            <li><a href="webdevelopment.html">Search Engine Optimizations</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Software Development</li>
                            <li><a href="softwaredevelopment.html">Financial Software</a></li>
                            <li><a href="softwaredevelopment.html">Mobile Application Development</a></li>
                        </ul>
                    </li>
                    <li class=""><a href="portfolio.html">What we did?</a></li>
                    <li class=""><a href="contact.html">Support</a></li>
                </ul>
        ';

        return $data;

    }

    public function deleteDataExisting($data=0){

        $count=$this->db->select('delivery_zone_id')->where(array('delivery_zone_id'=>$data))->get('orders')->num_rows();
        return $count;
    }


}