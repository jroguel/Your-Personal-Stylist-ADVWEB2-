<?php
class Product extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('view_model');
                $this->load->helper('url_helper');
        }

        public function index()
		{
        $data['product'] = $this->view_model->get_product();
        $data['title'] = 'List of Brand and Prices';

       $this->load->view('templates/header');
    $this->load->view('templates/nav');
    $this->load->view('product/index', $data);
    $this->load->view('templates/footer');
		}

        public function view($slug = NULL)
		{
        $data['product_item'] = $this->view_model->get_product($slug);

        if (empty($data['product_item']))
        {
                show_404();
        }

        $data['brand'] = $data['product_item']['brand'];

        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('product/view', $data);
        $this->load->view('templates/footer');
		}
}