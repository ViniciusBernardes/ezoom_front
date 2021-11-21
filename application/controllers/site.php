<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	private $tpl; // template
    private $dados;

    public function __construct()
    {
        parent::__construct();
		
        $this->load->helper(array('form','url','download'));
        //seta o template a ser utilizado
        $this->tpl = 'site';

        $this->dados['css'] = array('css/bootstrap.min.css', 'css/fontawesome.min.css', 'css/LineIcons.css', 'css/fakeLoader.min.css', 'css/style.css');
        $this->dados['js'] = array('js/jquery.min.js', 'js/bootstrap.min.js', 'js/fakeLoader.min.js', 'js/imagesloaded.pkgd.min.js', 'js/main.js');
		
  	
    }//fim do contrutor
	public function index()
	{
		$this->load->view($this->tpl, $this->dados);
	}
}
