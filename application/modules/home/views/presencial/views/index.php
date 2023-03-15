<?=$this->load->view("layout/nav"); ?>
<section class="visible-lg visible-md responsivo text-center" style="position: relative; cursor: pointer" >
    <div   style="position: relative"  >
        <div>
            <img src="<?=base_url().'assets/img/banner/6d2c5c0736efd16b137b954ae82e8db77c10697d.jpg'?>" width="100%" >
        </div>
    </div>
</section> 
<section class="visible-sm visible-xs responsivo text-center" style="position: relative; cursor: pointer" >
    <div   style="position: relative"  >
        <div>
            <img  src="<?=base_url().'assets/img/banner/340985ec52a72f23b4151923bf7c3133c215da33.jpg'?>"  width="100%" >
        </div>
    </div>
</section> 
<?php echo $this->load->view("formulario/form_principal"); ?>
<?php echo $this->load->view("video-como-funciona-portaria-presencial");?>
<?php echo $this->load->view("vantagens-portaria-presencial");?>
<div class="container-fluid">
    <div class="container _margin-bottom-100 ">
        <div class="row">
            <div class="col-md-12">
                    <h2 class="_font_title text-center _margin-bottom-40" >ZELADORIA E AUXILIAR DE SERVIÇOS GERAIS</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6">
                <img src="<?php echo base_url('assets/img/porteiro-676x419.jpeg')?>" width="100%"  alt="imagem 001"><br><br>
                <p class="_font_paragrafo ">O <strong>zelador</strong> é o profissional responsável pela manutenção da limpeza e conservação das áreas comuns do condomínio. É ele que garante as condições de higiene das escadas, elevadores, hall de entrada, garagens, entre outros locais. </p>
            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url('assets/img/servicos-gerais.jpg')?>" width="100%"  alt="imagem 001"><br><br>
                <p class="_font_paragrafo ">O <strong>auxiliar de serviços</strong> gerais também é responsável pela manutenção da limpeza do condomínio, mas também fazem a manutenção de equipamentos, retirada de lixo, entrega de correspondência, transmissão de informações e recados.</p>
            </div>
            <div class="col-md-12">
                 <p  class="_font_paragrafo ">Para que o melhor <strong>serviço de limpeza</strong> e conservação de ambiente seja oferecido ao nosso cliente, fazemos um estudo detalhado da infraestrutura do condomínio. Desta forma, é possível traçar uma estratégia personalizada de trabalho que atenda as demandas do cliente. Em caso de faltas, atestados e férias, esses profissionais são substituídos.</p>
            </div>   
        </div>
    </div>
</div>
<?php  echo $this->load->view("layout/footer");