<?php
echo $this->load->view("layout/nav");
echo $this->load->view("layout/banner-principal");
echo $this->load->view("formulario/form_principal");
echo '<hr class="_margin-bottom-60 hidden-xs hidden-sm">';
echo $this->load->view("video-como-funciona-portaria-virtual");
echo '<hr class="_margin-bottom-60">';
echo $this->load->view("saiba-como-podemos-te-ajudar");
echo '<hr class="_margin-bottom-60 hidden-xs hidden-sm">';
echo $this->load->view("como-funciona-o-processo");
echo $this->load->view("pronto-atendimento");
echo $this->load->view("aplicativo-portaria-virtual");
echo $this->load->view("ultimas-do-blog");
?>

<?php

echo $this->load->view("layout/footer");