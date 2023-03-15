     <div id="logo-volpato-telefones" class="hidden-xs hidden-sm">
     	<div class="container">
     		<div class="row">
     			<div class="col-md-6">
     				<a id="logo-volpato" href="<?= base_url('/'); ?>" title="VOLPATO Em todo Brasil prote&ccedil;&atilde;o " style="float: left"></a>
     			</div>
     			<div class="col-md-6 text-right  ">
     				<p style="margin:o; margin-top: 10px "> Cote agora pelo telefone:<br><b style="font-size:30px">3003-4003</b></p>
     			</div>
     		</div>
     	</div>
     </div>
     <div class="container text-center hidden-md hidden-lg">
     	<div class="row">
     		<div class="col-xs-12">
     			<img   src="<?= base_url('assets/img/logo-volpato.jpg'); ?>" width="200" >
     		</div>  
     	</div>
     </div>
     <div class="container-fluid background-vermelho">
     	<div class="container text-center  background-vermelho">
     		<div class="row">
     			<div class="col-lg-12 col-md-12">
     				<h1 style=" color: #fff; padding:0px  0  5px 0 ; " class="_font_title" >QUAL SERVIÇO DE PORTARIA VOCÊ DESEJA? </h1>
     			</div>  
     		</div>
     	</div>
     </div>
     <div class="container-fluid background-vermelho visible-lg  visible-md  hidden-xs  hidden-sm "  >
     	<img src="<?php echo base_url('/assets/img/banner/pagina_principal/3e00d43f47916905116f4e7c2aa384e58ced438e.jpg');?>"  alt="3e00d43f47916905116f4e7c2aa384e58ced438e.jpg" style="max-width: 100%" >
     	<div class="container "   style="position: absolute;  top: 300px; left: 0; right: 0">
     		<div class="row">
     			<div class="col-lg-4 col-md-4" >
     				<p style="font-size: 2vw; color: #fff;line-height: 1.2;">PORTARIA <span style="font-size:4vw;font-weight: bold; ">PRESENCIAL</span></p>
     				<a href="<?php echo base_url('presencial');?>" title="Clique aqui" class="btn btn-lg btn-danger">SAIBA MAIS</a>
     			</div>	
     			<div class="col-lg-4 col-md-4 hidden-xs">						
     			</div>	
     			<div class="col-lg-4 col-md-4    hidden-xs">
     				<p style="font-size: 2vw; color: #fff;line-height: 1.2;">PORTARIA <span style="font-size:4vw; font-weight: bold;">VIRTUAL</span></p>
     				<a href="<?=base_url('virtual');?>"  title="Clique aqui" class="btn  btn-lg btn-danger">SAIBA MAIS</a>	
     			</div>	
     		</div>
     	</div>	
     </div>
     <!--mobile-->
     <div class="container-fluid background-vermelho  visible-xs  visible-sm  hidden-md  hidden-lg "  >
     	<div class="row text-center  " style="border-bottom: 15px solid #fff">
     		<div class="col-xs-12">
     			<a href="<?=base_url('presencial')?>"  style="display: block;" >
     				<img src="<?php echo base_url('/assets/img/banner/pagina_principal/m/portaria-presencial.jpg');?>"   alt="portaria-presencial.jpg" width="100%"   >	
     			</a>		
     		</div>
     		<div class="row text-center">
     			<div class="col-xs-12" >
     				<a href="<?=base_url('virtual')?>"   style="display: block;"   >
     					<img src="<?php echo base_url('/assets/img/banner/pagina_principal/m/portaria-virtual.jpg');?>"  alt="portaria-virtual.jpg" width="100%"  >
     				</a>
     			</div>
     		</div>
     	</div>
     </div>
     <?=$this->load->view("layout/footer");