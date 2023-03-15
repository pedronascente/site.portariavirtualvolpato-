    <?php echo form_open('presencial/salvar',['name'=>'portariavirtualvolpato.com.br']);?>
    <input type="hidden"  name="servico"   value="portaria presencial">
    <input type="hidden"  name="origem" value="<?=base_url(uri_string());?>">
    <div class="form-group">
        <input type="text"  name="nome" class="form-control "  placeholder="Nome" required=""   >
    </div>
    <div class="form-group">
        <input type="text"  name="telefone"  data-mask-type="telefone" class="form-control "    maxlength="20" placeholder="Telefone"  required="">
    </div>
    <div class="form-group">
        <input type="email"  name="email" class="form-control " placeholder="E-mail"  required="">
    </div>
    <button type="submit" class="btn  btn-danger" style=" width: 100%;  padding: 10px 0;  font-size: 16px  ;   border-radius: 5px; background: red "> <b>SOLICITAR ORÇAMENTO</b></button>
    <?php echo form_close();?>



