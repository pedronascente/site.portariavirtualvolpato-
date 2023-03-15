<?php   defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <!DOCTYPE html>
    <html lang="pt-BR" class="drag-drop-item">
    <head>
    
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5R2SRPZ');</script>
<!-- End Google Tag Manager -->

    <meta charset="utf-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="HandheldFriendly" content="true" />
    <meta content="INDEX, FOLLOW" name="ROBOTS" />
    <meta name="description" content=" Redução de até 50% com as despesas de folha de pagamento e encargos de funcionários. Monitoramento 24h. 20 anos no mercado. Serviços: Câmeras" />
    <meta name="keywords" content="portaria virtual porto alegre,portaria remota porto alegre,portaria inteligente,portaria virtual
empresas de portaria em canoas," />
    <meta name="og:title" content="" />
    <meta name="og:url" content="" />
    <meta name="geo.region" content="BR-RS" />
    <meta name="geo.placename" content="Porto Alegre" />
    <meta name="geo.position" content="-30.012827;-51.198421" />
    <meta name="ICBM" content="-30.012827, -51.198421" />    
    <meta name="og:image" content="<?=  base_url('assets/img/logo-volpato.jpg')?>" />
    <meta name="classification" content="Internet" />
    <meta name="document-classification" content="VOLPATO" />
    <meta name="REVISIT-AFTER" content="1 days" />
    <meta name="LANGUAGE" content="Portuguese" />
    <meta name="COPYRIGHT" content="" />
    <meta name="audience" content="all" />
    <meta name="copyright" content="VOLPATO" />
    <link rel="image_src" href="<?=base_url('assets/img/logo-volpato.jpg')?>" />
    <link rel="shortcut icon" href="<?=base_url('assets/img/favicon.ico')?>" />
   
    <title>Portaria - Virtual Ligue : 3003-4003</title>

    <?php echo $this->load->view("layout/bootstrap"); ?>
    <?php echo $this->load->view("main"); ?>
      
    <?php //isset($assets['css'])?$assets['css']:'';?>
    <?php //isset($assets['javaScriptHeader'])?$assets['javaScriptHeader']:'';?>
    </head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5R2SRPZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


    <div id="__container-fluid">
        <div class="container-fluid">
            <?php echo $content; ?>       
        </div>  
    </div> 
    <?php echo $this->load->view("jquery.php"); ?>
    <?php echo $this->load->view("bootstrapjs"); ?>
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery-mask-plugin/jquery.mask.js');?>"></script>
       <script type="text/javascript">
            $(function(){
                    /*jquery-mask-plugin*/
                    var SPMaskBehavior = function (val) {
                    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
                },
                spOptions = {
                    onKeyPress: function(val, e, field, options) {
                        field.mask(SPMaskBehavior.apply({}, arguments), options);
                    }
                };
                $('input[data-mask-type="telefone"]').mask(SPMaskBehavior, spOptions);
                $('.msk_telefone').mask(SPMaskBehavior, spOptions);
            });
    </script>

    <?php //echo isset($assets['javaScriptFooter'])?$assets['javaScriptFooter']:'';?>    
    
    <!--RD STATION-->
    <script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/e7d745ff-3cd3-4f64-9915-af1729c76b04-loader.js" ></script>
    <!--GOOGLE RECAPTCH-->  
    <script src="https://www.google.com/recaptcha/api.js?render=6LcY7fUaAAAAANjA3N_5jkztFNK7AonsPNQNw1HP"></script>
    <script type="text/javascript">
        grecaptcha.ready(function() {
          grecaptcha.execute('6LcY7fUaAAAAANjA3N_5jkztFNK7AonsPNQNw1HP', {action: 'submit'}).then(function(token) {
              var response =  document.getElementById('token_response');    
              response.value = token;
          });
         grecaptcha.execute('6LcY7fUaAAAAANjA3N_5jkztFNK7AonsPNQNw1HP', {action: 'submit'}).then(function(token) {
              var response =  document.getElementById('token_response_modal');    
              response.value = token;
          });
      });
    </script>
    <?= $this->load->view("formulario/form_modal"); ?>
</body>
</html>