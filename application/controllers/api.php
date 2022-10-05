<?php
defined('BASEPATH') or exit('No direct script access allowed');

class api extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index()
    {
        // mengarahkan ke sumber API
        $url = "https://booking.kai.id/api/stations2";
        $get_url = file_get_contents($url);
        $data = json_decode($get_url);

        // print_r($data);
        // jadikan array
        $data_array = array(
            'datalist' => $data
        );


        $this->load->view('json/jsonlist', $data_array);
    }
}
