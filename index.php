<?php 
get_header();
?>


        <!--Content Block-->
        <section id="content" class="row">
            <div class="col-lg-4 col-0"></div>    
            <div class="col-lg-8 col-12">
              <h2 hidden="hidden">Bezstresowe prawo jazdy w Krakowie</h2>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators d-lg-flex d-none">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

    <div class="carousel-item active">
                      <a href="?page_id=77" style="text-decoration: none;">
                <div id="post1">
                    <div class="half info text-center"> NAJBLIŻSZY KURS KAT. B ROZPOCZYNAMY 
                        <?php
                        echo get_option("date")." godz. ".get_option("hour");
                        ?>

                         <span class="d-lg-inline-block d-none more">więcej<i class="fas fa-arrow-right"></i></span>
                         </div>

                    <div class="half picture1"></div>
                </div>
            </a>
    </div>

    <div class="carousel-item">
            <a href="?page_id=77" style="text-decoration: none;">
                <div id="post2">
                    <div class="half info text-center"> 
                       SPRAWDŹ NASZE CENY
                       <span class="d-lg-inline-block d-none more">więcej<i class="fas fa-arrow-right"></i></span>

                         </div>
                    <div class="half picture2"></div>
                </div>
            </a>
    </div>

    <div class="carousel-item ">
                      <a href="?page_id=77" style="text-decoration: none;">
                <div id="post3">
                    <div class="half info text-center">
                        OBEJRZYJ NASZE SAMOCHODY

                        <span class="d-lg-inline-block d-none more">więcej<i class="fas fa-arrow-right"></i></span>
                         </div>

                    <div class="half picture3"></div>
                </div>
            </a>
    </div>

  </div>


  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>


  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>


</div> <!-- end carousel -->


<div class="d-table d-lg-none mobilecarousel">
<div class="half info left">
                Szkolimy od 1994
                <br />
                <br />
                profesjonalnie <br />
                bezstresowo <br />
                bezpiecznie <br />
</div>

<div class="half info" style="margin-left:15px;">Dowiedz się <br /> więcej</div></a>
</div>




</div>    
</section>
</div>


<?php 
get_footer();
?>