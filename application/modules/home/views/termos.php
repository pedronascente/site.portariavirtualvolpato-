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
<!--MENU DESKTOP-->
<div id="menu-superior" class="hidden-xs hidden-sm">
    <div class="container">
        <ul>
            <li><a  href="<?= base_url('/'); ?>" title="Página Principal"><strong>HOME</strong></a></li>
            <li _ngcontent-fci-15="" class="hidden-xs hidden-sm"></li>
        </ul>
    </div>
</div>
<!--MENU MOBILE-->
<section id="header-mobile" class="visible-xs visible-sm">
    <div class="linha-2 z-depth-5 container-fluid bg-white ">
        <div class="tabela">
            <div class="col-xs-9 pl-0"> 
                <a href="<?= base_url('/') ?>">
                    <img class="img-responsive py-2" width="180px" srcset="<?= base_url('assets/img/logo-volpato.jpg') ?>" alt="CargoPress" src="<?= base_url('assets/img/logo-volpato.jpg') ?>">
                </a>
            </div>
            <div class="col-xs-3 pr-0 pull-right">
                <button data-target="#menu-xs" data-toggle="collapse" class="navbar-toggle collapsed" type="button" aria-expanded="false">
                    <span class="navbar-toggle__icon-bar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </span>
                </button>
            </div>
        </div>          
    </div>
    <nav class="hidden-md nav-mobile collapse" id="menu-xs" aria-expanded="false" style="height: 0px;">                 
        <ul class="nav">
            <li class="list-item"><a href="<?=base_url('/');?>"  title="Página Principal">HOME</a></li>
        </ul>                   
    </nav>
</section>
<div class="container-fluid _bg-azul " >        
    <div class="container">
        <div   class="row">
            <div class="col-md-12 col-xs-12">
                <h1 class="_font_title  text-right _color_branco _padding_buttom ">TERMOS</h1>
            </div>
        </div>
    </div>
</div>
<hr class="_margin-bottom-40">
<div  class="container" id="termos-uso ">
   <div class="row">
    <div class="col-md-12">
        <p class="_font_paragrafo">O site da Volpato pode ser visualizado por qualquer pessoa que tenha acesso à Rede Mundial de Computadores, que tem o intuito de atender às necessidades dos usuários, disponibilizando no site (www.rastreadorvolpato.com) informações, dados e materiais da marca e seus produtos.</p>
        <p class="_font_paragrafo">Para acessar este site, usuários menores de idade devem obter a prévia permissão de seus pais, tutores ou representantes legais, os quais serão considerados plenamente responsáveis por todos os atos praticados pelos menores, assim como pelos conteúdos e serviços por eles acessados.</p>
        <p class="_font_paragrafo">Devido à possibilidade de erro humano ou mecânico, bem como a outros fatores, o site www.rastreadorvolpato.com não responde por quaisquer erros ou omissões, dado que toda informação é provida "tal como está" sem nenhuma garantia de qualquer espécie. Nenhuma informação ou opinião aqui expressada constitui uma solicitação ou proposta de compra ou venda.</p>
        <p class="_font_paragrafo">Nem o site www.rastreadorvolpato.com , nem seus executivos, associados, empregados, procuradores ou consultores serão responsáveis perante qualquer pessoa, por qualquer tipo de perda, dano, custo ou despesa resultante de qualquer erro, omissão, ou alteração nas informações aqui fornecidas, nem tampouco por quaisquer atrasos, inexatidões, erros, ou interrupções ocasionados em função destes eventos, durante o suprimento de qualquer informação através das páginas do site, nem, ainda, por vírus de computador ou por qualquer prejuízo resultante do acesso não autorizado ou por qualquer outro mau uso do sistema através do qual a informação sobre o site www.rastreadorvolpato.com é transmitida, nem mesmo por qualquer descontinuidade do serviço.</p>
        <p class="_font_paragrafo">A Volpato apresenta logotipo e marca exibida neste site, que não podem ser usados pelos usuários sem a permissão prévia e escrita da Volpato.</p>
        <p class="_font_paragrafo">Todos os demais materiais apresentados no site, tais como imagens, informações, gráficos, entre outros, também estão protegidos por direitos autorais, portanto não podem ser reproduzidos, modificados sem o nosso prévio consentimento por escrito.</p>
        <p class="_font_paragrafo">A utilização indevida do logotipo marca ou materiais do site poderá acarretar a aplicação de sanções, conforme legislação vigente à época.</p>
        <p class="_font_paragrafo">Este Termo poderá ser atualizado a qualquer momento, porém a Volpato se compromete a mantê-lo atualizado neste endereço. Por conta disso, orientamos que você reveja o Termo regularmente, ficando sempre ciente das possíveis alterações realizadas.</p>
        <p class="_font_paragrafo">Embora use todas as ferramentas e medidas necessárias para garantir o pleno funcionamento de seu site, a Volpato não pode garantir que ele funcionará ininterruptamente e livres de erros, não podendo ser responsabilizada por isso.</p>
        <p class="_font_paragrafo">O provimento de condições apropriadas de acesso à Internet é de responsabilidade da prestadora de serviços contratada pelo usuário para tal finalidade (provedor). Em caso de perda de conexão à Internet, no momento da realização do cadastro ou no envio de informações, não será devida qualquer indenização por parte da Volpato, tendo o usuário que aceitar a implicação da eventual falha.</p>
    </div>
   </div>
</div>
<?=$this->load->view("layout/footer");