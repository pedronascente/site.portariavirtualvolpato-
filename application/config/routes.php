<?php

defined('BASEPATH') or exit('No direct script access allowed');
$route['translate_uri_dashes'] = FALSE;
$route['default_controller'] = "home/index";

/*
*----------------------------------------------------------------------
* [ HOME ] :
*----------------------------------------------------------------------
*/

$route['termos'] = "home/termos";
$route['politica-de-privacidade'] = "home/politicaPrivacidade";

/*
*----------------------------------------------------------------------
* [ PRESENCIAL ] :
*----------------------------------------------------------------------
*/

$route['presencial'] = "presencial/index";
$route['presencial/empresa'] = "presencial/empresa";
$route['presencial/contato'] = "presencial/contato";
$route['presencial/obrigado'] = "presencial/obrigado";
$route['presencial/salvar'] = "presencial/salvar";
$route['presencial/salvarcontato'] = "presencial/saveContato";

/*
*----------------------------------------------------------------------
* [ VIRTUAL ] :
*----------------------------------------------------------------------
*/

$route['virtual'] = "virtual/index";
$route['virtual/empresa'] = "virtual/empresa";
$route['virtual/contato'] = "virtual/contato";
$route['virtual/obrigado'] = "virtual/obrigado";
$route['virtual/salvar'] = "virtual/salvar";
$route['virtual/salvarcontato'] = "virtual/salvarContato";
