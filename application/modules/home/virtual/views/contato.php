<?= $this->load->view("layout/nav"); ?>
<div  class="container-fliuid" style="background: #eee; padding-bottom: 100px" >
    <div class="container-fluid _bg-azul" >     
        <div class="container">
            <div   class="row">
                <div class="col-md-12 col-xs-12">
                    <h1 class="_font_title  text-right _color_branco _padding_buttom">CONTATO</h1>
                </div>
            </div>
        </div>
    </div>
    <div  class="container">
        <div class="row">
            <hr class="_margin-bottom-40">
             <div class=" col-md-5">
                <div class="panel panel-default" > 
                    <div class="panel-body"> 
                        <h2 class="_font_paragrafo" title="Seja bem-vindo a VOLPATO">Deixe seus dados abaixo, que em breve entraremos em contato. </h2>
                        <?= $this->load->view("formulario/form_contato"); ?>  
                    </div> 
                </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-6">
                  <div class="row _margin-bottom-40">
                      <div class="col-md-12">
                           <img src="<?= base_url('assets/img/fale-conosco.jpg'); ?>" width="100%"  alt="imagem da central de monitomenro" title="base Volpato" >
                      </div>
                  </div>
                  <div class="row _margin-bottom-40" style="border-bottom: 1px Solid; padding-bottom: 30px">
                      <div class="col-md-12 ">
                          <p class="_font_title_h3">Horário de Atendimento:</p>
                          <ul>
                              <li><p><i class="fa fa-mail-forward" aria-hidden="true"></i>   Seg. a Sex. - 08:00 às 20:00 | Sábado - 09:00 às 14:00</p></li>
                              <li><p><i class="fa fa-envelope" aria-hidden="true"></i>  volpato@grupovolpato.com</p></li>
                              <li><p><i class="fa fa-phone" aria-hidden="true"></i> 3003-4003</p>  </li>
                          </ul>
                      </div>
                  </div>
           </div>   
        </div>
    </div>
</div>
<?=  $this->load->view("layout/footer"); ?>