<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><b>Solicitar Orçamento </b>, Preencha o formulário abaixo e receba uma proposta detalhada sem compromisso.</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open('virtual/salvar', ['name' => 'portariavirtualvolpato.com.br/virtual']); ?>
                <input type="hidden" name="cf_servico" value="portaria virtual">
                <input type="hidden" name="cf_origem" value="<?= base_url(uri_string()); ?>">
                <input type="hidden" name="token_response_modal" id="token_response_modal">
                <div class="form-group">
                    <input type="text" name="name" class="form-control " placeholder="Nome" required="">
                </div>
                <div class="form-group">
                    <input type="text" name="personal_phone" data-mask-type="telefone" class="form-control" maxlength="20" placeholder="Telefone" required="">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="E-mail" required="">
                </div>
                <button type="submit" class="btn  btn-danger" style=" width:100%;padding:10px 0;font-size:16px;border-radius:5px;background:red"> <b>SOLICITAR ORÇAMENTO</b></button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>