<?= $this->load->view("/layout/nav"); ?>
<div class="container-fluid _bg-azul" >     
    <div class="container">
        <div   class="row">
            <div class="col-md-12 col-xs-12">
                <h1 class="_font_title  text-right _color_branco _padding_buttom">Registrado com sucesso!</h1>
            </div>
        </div>
    </div>
</div>
<div class="container text-center">
    <div class="row _margin-bottom-40">  <div class="col-md-12"></div></div>
    <div class="row">
        <div class="col-md-12  col-xs-12">
            <i class="fa fa-check" style="font-size: 30px ; color: seagreen" ></i>
            <h2 class="_font_title_h3"  style="font-size: 26px"> Em Breve, um de nossos colaboradores<br> entrará em contato com você.</h2>
        </div>
    </div>    
    <div class="row _margin-bottom-40">  <div class="col-md-12"></div></div>
    <div class="row _margin-bottom-70">  <div class="col-md-12"></div></div>
</div>

<!-- Facebook Pixel Code -->
<script> 
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod? 
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '767468864062172');
fbq('track', 'PageView');
fbq('track', 'Lead');
</script>
<noscript><img height="1" width="1" style="display:none" 
src="https://www.facebook.com/tr?id=767468864062172&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</section> 
<?= $this->load->view("layout/footer"); ?>
