<div class="container-fluid visible-md visible-lg" style="background: #073361">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php  

          for($i = 1; $i<=3  ;$i++){
              $ATIVO = ($i==1)   ?'active' :'';

              $IMAGEM = base_url().'assets/img/banner/'.$i.'.jpg';
              echo '<div class="item '.$ATIVO.'">';         
              echo ' <img src="'.$IMAGEM.'"   width="100%"  style="height: auto; background-position: center; ">';
              echo'</div>';   
          }
		?>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!--mobie-->

<div class="container-fluid visible-sm visible-xs responsivo text-center" style="background: #073361">
  <div id="myCarousel1" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel1" data-slide-to="1"></li>
      <li data-target="#myCarousel1" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php  
			   for($i = 1; $i<=3  ;$i++){
              $ATIVO = ($i==1)   ?'active' :'';

              $IMAGEM = base_url().'assets/img/banner/m/'.$i.'.jpg';
              echo '<div class="item '.$ATIVO.'">';         
              echo ' <img src="'.$IMAGEM.'"   width="100%"  style="height: auto; background-position: center; ">';
              echo'</div>';   
          }
            
		?>  
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel1" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
