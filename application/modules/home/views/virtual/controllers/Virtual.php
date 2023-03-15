<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Virtual extends MX_Controller
{
	private $_rota_de_integracao = "https://seguidor.com.br/api.rdstation.v2/control/IntegrarFormulario.php";
	private $_array_dados  = array();
	public function __construct()
	{
		//parent::__construct();
		$this->_array_dados = [
			'app' => "app.linkadigital",
			'tag' => "volpato_portaria",
			'conversion_identifier' => 'sites_volpato_portaria',
		];
	}

	public function index()
	{
		$this->loadPage('virtual/index');
	}

	public function empresa()
	{
		$this->loadPage('virtual/empresa');
	}

	public function contato()
	{
		$this->loadPage('virtual/contato');
	}

	public function obrigado()
	{
		$this->loadPage('virtual/obrigado');
	}

	public function salvar()
	{
		//verificar se o formulario está validado:
		$vf = $this->validarFormulario();
		if ($vf['success'] === true) {
			$mensagem = $this->formatarMensagemEmail();
			$this->_array_dados = $this->formatarDados();

			$retorno_sendApi = $this->sendApi($this->_array_dados);
			$retorno_sendEmail = $this->EnviarEmail($mensagem);

			$this->dd($retorno_sendApi);
			$this->dd($retorno_sendEmail, true);

			if ($retorno_sendEmail) {
				redirect(base_url('virtual/obrigado'), 'refresh');
			} else {
				die("<b>Não foi possivel registrar sua solicitação, Tente mais Tarde!</b>");
			}
		}
		redirect(base_url('/virtual'), 'refresh');
	}

	public function saveContato()
	{
		$vf = $this->validarFormulario();
		if ($vf['success'] === true) {
			$mensagem = $this->formatarMensagemEmailContato();
			$resultado = $this->EnviarEmail($mensagem, $this->input->post('assunto'));

			if ($resultado) {
				redirect(base_url('virtual/obrigado'), 'refresh');
			}
			die("<b>Não foi possivel registrar sua solicitação, Tente mais Tarde!</b>");
		}
		die("<b>Não foi possivel registrar sua solicitação, Tente mais Tarde!!</b>");
	}

	private function formatarMensagemEmail()
	{
		$dados = $this->input->post();
		$mensagem = '<table border="1">';
		$mensagem .= '<tr><td>Nome:</td><td>'  . $dados['name']     . '</td></tr>';
		$mensagem .= '<tr><td>Email:</td><td>'    . $dados['email']    . '</td></tr>';
		$mensagem .= '<tr><td>Telefone:</td><td>' . $dados['personal_phone'] . '</td></tr>';
		$mensagem .= '<tr><td>Serviço:</td><td>'  . $dados['cf_servico']  . '</td></tr>';
		$mensagem .= '<tr><td>Origem:</td><td>'   . $dados['cf_origem']   . '</td></tr>';
		$mensagem .= '</table>';
		return $mensagem;
	}

	private function formatarMensagemEmailContato()
	{
		$dados = $this->input->post();
		$mensagem = '<table border="1">';
		$mensagem .= '<tr><td><b>Cliente:</b></td><td>' . $dados['nome'] . '</td></tr>';
		$mensagem .= '<tr><td><b>Email:</b></td><td>' . $dados['email']  . '</td></tr>';
		$mensagem .= '<tr><td><b>Telefone:</b></td><td>' . $dados['telefone']  . '</td></tr>';
		$mensagem .= '<tr><td><b>Assunto:</b></td><td>' .  $dados['assunto'] . '</td></tr>';
		$mensagem .= '<tr><td><b>Origem:</b></td><td>' . $dados['origem'] . '</td></tr>';
		$mensagem .= '<tr><td><b>Mensagem:</b></td><td>' . $dados['mensagem'] . '</td></tr>';
		$mensagem .= '</table>';
		return $mensagem;
	}

	private function  validarFormulario()
	{
		$token_response = ($this->input->post('token_response')) ? $this->input->post('token_response') : $this->input->post('token_response_modal');
		$rg = new RecaptchaGoogle();
		$rg->set_recaptchaResponse($token_response);
		$rg->set_url_api_recaptcha_google('https://www.google.com/recaptcha/api/siteverify');
		$rg->set_secret('6LcY7fUaAAAAAKBD31JqgpzMrVnlRhpDnNYn__ls');
		$result = $rg->validaRecapchaGoogle();
		return 	$result;
	}

	private function EnviarEmail($mensagem, $assunto = 'novas Leads portaria')
	{
		$this->email->from("contato@portariavirtualvolpato.com.br", $this->input->post('cf_origem'));
		$this->email->to("simuladorvolpato@gmail.com,desenvolvimento@grupovolpato.com,contato@portariavirtualvolpato.com.br");
		$this->email->subject($assunto);
		$this->email->message($mensagem);
		if ($this->email->send()) {
			return true;
		} else {
			return false;
		}
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
				return array('css' => '', 'javaScriptHeader' => '',	'javaScriptFooter' => '');
				break;
		}
	}

	private function formatarDados()
	{
		$dados = $this->input->post();
		unset($dados['token_response'], $dados['token_response_modal']);
		$this->_array_dados = array_merge($this->_array_dados, $dados);
		return $this->_array_dados;
	}

	private function sendApi($array_dados)
	{
		$postData = http_build_query($array_dados);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->_rota_de_integracao);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$server_output = curl_exec($ch);
		curl_close($ch);
		return $server_output;
	}

	private function dd($dados, $e = false)
	{
		echo '<pre>';
		print_r($dados);
		echo '</pre>';
		echo '<hr>';
		if ($e) {
			die();
		}
	}
}
