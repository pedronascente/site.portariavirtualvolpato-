<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MX_Controller
{
	public function index()
	{
		$this->loadPage('home/index');
	}

	public function termos()
	{
		$this->loadPage('home/termos');
	}

	public function politicaPrivacidade()
	{
		$this->loadPage('home/politica-de-privacidade');
	}

	private function loadPage($moduleRoute, $parameters = '')
	{
		$data['assets'] = $this->loadAssets($moduleRoute);
		$data['content'] = $this->load->view($moduleRoute, $parameters, TRUE);
		$this->load->view('page', $data);
	}

	private function loadAssets($moduleRoute)
	{
		$url = base_url();
		switch ($moduleRoute) {
			case '':
				return array('css' => '', 'javaScriptHeader' => '', 'javaScriptFooter' => '');
				break;
		}
	}
}
