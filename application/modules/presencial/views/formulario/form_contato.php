<?php echo form_open('presencial/salvarcontato', ['name' => 'portariavirtualvolpato.com.br/presencial/contato']); ?>
<input type="hidden" name="cf_origem" value="<?= base_url(uri_string()); ?>">
<input type="hidden" name="token_response" id="token_response">
<div class="form-group">
    <input type="text" name="nome" value="" class="form-control " placeholder="Nome" required="">
</div>
<div class="form-group">
    <input type="email" name="email" class="form-control " value="" placeholder="E-mail" required="">
</div>
<div class="form-group">
    <input type="text" name="telefone" value="" class="form-control msk_telefone" maxlength="20" placeholder=" Telefone" required="">
</div>
<div class="form-group">
    <select name="assunto" class="form-control " required="">
        <option value="">::Selecione um Interesse::</option>
        <option value="FAQ">FAQ</option>
        <option value="Trabalhe Conosco">Trabalhe Conosco</option>
    </select>
</div>
<div class="form-group">
    <textarea name="mensagem" class="form-control form-control_fale_conosco" cols="5" rows="5" placeholder="Deixe sua Mensagem" required=""></textarea>
</div>
<div class="form-group text-center">
    <button type="submit" class="btn  btn-danger" style="width: 100%">Enviar Contato
    </button>
</div>
<?php echo form_close(); ?>