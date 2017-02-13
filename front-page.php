<?php get_header(); ?>
  
  <section id="co-potrafimy">
      <div class="container">
         
              <div class="col-md-12">
                  <div class="tytul text-center">
                      <h2><?php the_field('tytul1') ?></h2>
                      <h3><?php the_field('tekst_pod_tytulem1') ?></h3>
                      <hr>
                      <p><?php the_field('opis1') ?>.</p>
                  </div>
              </div>
         
      </div>
      
       <div class="container zdjecia">
              <div class="row">
                  <div class="col-md-4">
                     
                       <?php 

                            $image = get_field('zdj-left');

                            if( !empty($image) ): ?>

                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['obrazek']; ?>" />

                                        <?php endif; ?>
                       <a href="" data-toggle="lightbox" data-gallery="example-gallery" data-type="image">
                      <div class="zdjecia-overlay text-center ">
                         <div class="vertical-align">
                          <i class="fa fa-bolt">
                              
                          </i>
                          <p>Lorem ipsum.</p></div>
                          
                           </div></a>
                      
                      
                  </div>
                  
                  <div class="col-md-4">
                           <div class="image">
                            <?php 

                            $image = get_field('zdj-left');

                            if( !empty($image) ): ?>

                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['obrazek']; ?>" />

                                        <?php endif; ?></div>
                      
                     
                       <?php 

                            $image = get_field('zdj-left');

                            if( !empty($image) ): ?>

                                        <a href="<?php echo $image['url']; ?>" data-toggle="lightbox" data-gallery="example-gallery" data-type="image">

                                        <?php endif; ?>
                                        
                     
                      <div class="zdjecia-overlay text-center ">
                        
                         <div class="vertical-align">
                          <i class="fa fa-rocket">
                              
                          </i>
                          <p>Lorem ipsum.</p></div>
                          
                          </div></a>
                  </div>
                  
                  <div class="col-md-4">
                      <img src="<?=get_template_directory_uri(); ?>/img/img3.jpeg" alt="zdjecie" class="img-fluid">
                       <a href="<?=get_template_directory_uri(); ?>/img/img3.jpeg" data-toggle="lightbox" data-gallery="example-gallery" data-type="image">
                      <div class="zdjecia-overlay text-center ">
                         <div class="vertical-align">
                          <i class="fa fa-taxi">
                              
                          </i>
                          <p>Lorem ipsum.</p></div>
                          
                           </div></a>
                  </div>
              </div>
          </div>
  </section>
  
  <section id="liczby">
      <div class="container">
          <div class="row text-center">
              <div class="item">
                  <span class="counter">1256</span>
                  <p>Lorem ipsum.</p>
              </div>
              <div class="item">
                  <span class="counter">952</span>
                  <p>Lorem ipsum.</p>
              </div>
              <div class="item">
                  <span class="counter">5215</span>
                  <p>Lorem ipsum.</p>
              </div>
              <div class="item">
                  <span class="counter">2516</span>
                  <p>Lorem ipsum.</p>
              </div>
              <div class="item">
                  <span class="counter">142</span>
                  <p>Lorem ipsum.</p>
              </div>
          </div>
      </div>
  </section>
  
  <section id="services">
      <div class="container">
         <div class="col-md-12">
                  <div class="tytul text-center">
                      <h2>Pracuj z nami</h2>
                      <h3>niesamowite technologie</h3>
                      <hr>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic dolorum perferendis quod expedita ratione ea.</p>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-4">
                      <div class="services-tytul">
                         <i class="fa fa-clock-o"></i>
                          <h3>Lorem ipsum dolor.</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, aliquam.</p>
                      </div>
                  </div>
                         
                  <div class="col-md-4">
                      <div class="services-tytul">
                         <i class="fa fa-address-book-o"></i>
                          <h3>Lorem ipsum dolor.</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, aliquam.</p>
                      </div>
                  </div>
                          <div class="col-md-4">
                      <div class="services-tytul">
                         <i class="fa fa-snowflake-o"></i>
                          <h3>Lorem ipsum dolor.</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, aliquam.</p>
                      </div>
                  </div>
                         </div>
                         <hr>
                         <div class="row row-dolny">
                          <div class="col-md-4">
                      <div class="services-tytul">
                         <i class="fa fa-audio-description"></i>
                          <h3>Lorem ipsum dolor.</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, aliquam.</p>
                      </div>
                  </div>
                          <div class="col-md-4">
                      <div class="services-tytul">
                         <i class="fa fa-binoculars"></i>
                          <h3>Lorem ipsum dolor.</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, aliquam.</p>
                      </div>
                  </div>
                          <div class="col-md-4">
                      <div class="services-tytul">
                         <i class="fa fa-bolt"></i>
                          <h3>Lorem ipsum dolor.</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, aliquam.</p>
                      </div>
                  </div>     
                         
                            </div>   
                          
                      
                      
             
          
      </div>
  </section>
  
  <section id="design">
      <div class="container text-center">
          <div class="col-md-12">
              <div class="tytul text-center tytul-design">
                      <h2>Pod wszystkie urządzenia</h2>
                      <h3>Responsywność!</h3>
                      <hr>
                  </div>
          </div>
          
              <div class="col-md-10 offset-md-1">
                 <div class="zdjecie-glowne">
                  <img src="<?=get_template_directory_uri(); ?>/img/ipad.png" alt="ipad" class="img-fluid">
                  </div>
                  <img src="<?=get_template_directory_uri(); ?>/img/iphone.png" alt="iphone" class="img-fluid zdj-iphone">
              </div>
          
      </div>
  </section>
  
  <section id="co-robimy">
      <div class="container">
          <div class="col-md-12">
              <div class="tytul text-center">
                      <h2>Serwis</h2>
                      <h3>Wszystko zepsujemy</h3>
                      <hr>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic dolorum perferendis quod expedita ratione ea.</p>
                  </div>
          </div>
          
          <div class="row">
              <div class="col-md-6">
                 <img src="<?=get_template_directory_uri(); ?>/img/img4.jpeg" alt="zdjecie4" class="img-fluid"> 
              </div>
              <div class="col-md-6">
                  <div id="accordion" role="tablist" aria-multiselectable="true">
  <div class="card">
    <div class="card-header" role="tab" id="headingOne">
       
        <div class="mb-0">
       <div class="row">
         <div class="col-md-8">
             <p><i class="fa fa-picture-o" id="ikonka"></i> Fotografia</p>
         </div>
         <div class="col-md-4 text-right">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
         <i class="fa fa-angle-down" aria-hidden="true"></i>
        </a> 
         </div>
     </div>
       
        
       
       
      </div>
    </div>

    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
      <div class="card-block">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingTwo">
        <div class="mb-0">
       <div class="row">
         <div class="col-md-8">
             <p><i class="fa fa-window-restore" id="ikonka2"></i> Web-Design</p>
         </div>
         <div class="col-md-4 text-right">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         <i class="fa fa-angle-down" aria-hidden="true"></i>
        </a> 
         </div>
     </div>
       
        
       
       
      </div>
    </div>
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="card-block">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingThree">
     
     
     
      <div class="mb-0">
       <div class="row">
         <div class="col-md-8">
             <p><i class="fa fa-hand-pointer-o" id="ikonka3"></i> Pozycjonowanie</p>
         </div>
         <div class="col-md-4 text-right">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         <i class="fa fa-angle-down" aria-hidden="true"></i>
        </a> 
         </div>
     </div>
       
        
       
       
      </div>
    </div>
    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="card-block">
       Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        
      </div>
    </div>
  </div>
</div>
              </div>
          </div>
      </div>
  </section>
  
 <section id="karuzela1">
    <div class="container">
        <div class="col-md-12">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            
            
            
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
       
           
      
        <div class="carousel-caption d-none d-md-block">
        <div class="karuzela-ikonka"> <i class="fa fa-bluetooth-b"></i></div>
       
        <div class="opis">
    <h3>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores esse maxime, atque, sint consectetur facilis earum quidem dolore eum nesciunt vero quaerat ullam ratione minima."</h3>
     <hr>
    <p>Jon Doe</p>
    </div>
  </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block">
        <div class="karuzela-ikonka"> <i class="fa fa-thermometer-full"></i></div>
       
        <div class="opis">
    <h3>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores esse maxime, atque, sint consectetur facilis earum quidem dolore eum nesciunt vero quaerat ullam ratione minima."</h3>
    <hr>
    <p>Józek</p>
    </div>
  </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block">
        <div class="karuzela-ikonka"> <i class="fa fa-bolt"></i></div>
       
        <div class="opis">
    <h3>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores esse maxime, atque, sint consectetur facilis earum quidem dolore eum nesciunt vero quaerat ullam ratione minima."</h3>
     <hr>
    <p>Franek</p>
    </div>
  </div>
    </div>
  </div>
  
  
  
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <i class="fa fa-angle-left" aria-hidden="true"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next"  href="#carouselExampleControls" role="button" data-slide="next">
    <i class="fa fa-angle-right" aria-hidden="true"></i>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
    </div>
 </section>
 
 <!-- ====NASZ ZESPOL =======-->
 
 <section id="zespol">
     <div class="container zdjecia">
         <div class="col-md-12">
             <div class="tytul text-center">
                      <h2>Kim jesteśmy?</h2>
                      <h3>Poznaj nasz zespół</h3>
                      <hr>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic dolorum perferendis quod expedita ratione ea.</p>
                  </div>
         </div>
         
         <div class="row">
             <div class="col-md-4">
                <div class="zdjecia-zespol">
                 <img src="<?=get_template_directory_uri(); ?>/img/koles11.png" alt="jakis typ" class="img-fluid">
                 <div class="zdjecia-overlay">
                    <div class="row text-center vertical-align">
                        
                           <ul>
                               <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                 <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                  <li><a href=""><i class="fa fa-telegram"></i></a></li>
                                  
                           </ul>
                            
                        
                    </div>
                     
                 </div>
                 <div class="zdjecia-zespol-opis">
                     <h5>Staszsek</h5>
                     <p>Lorem ipsum dolor sit.</p>
                 </div>
                 </div>
                 
             </div>
             
             <div class="col-md-4">
                 <div class="zdjecia-zespol">
                  <img src="<?=get_template_directory_uri(); ?>/img/koles22.png" alt="jakis typ" class="img-fluid">
                   <div class="zdjecia-overlay">
                      <div class="row text-center vertical-align">
                       
                           <ul>
                               <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                 <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                  <li><a href=""><i class="fa fa-telegram"></i></a></li>
                                  
                           </ul>
                            
                       
                    </div>
                 </div>
                  <div class="zdjecia-zespol-opis">
                     <h5>Jolaos</h5>
                     <p>Lorem ipsum dolor sit.</p>
                 </div>
                 </div>
             </div>
             
             <div class="col-md-4">
                <div class="zdjecia-zespol">
                  <img src="<?=get_template_directory_uri(); ?>/img/koles33.png" alt="jakis typ" class="img-fluid">
                   <div class="zdjecia-overlay">
                      <div class="row text-center vertical-align">
                        
                           <ul>
                               <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                 <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                  <li><a href=""><i class="fa fa-telegram"></i></a></li>
                                  
                           </ul>
                            
                       
                    </div>
                 </div>
                  <div class="zdjecia-zespol-opis">
                     <h5>Zbigniew</h5>
                     <p>Lorem ipsum dolor sit.</p>
                 </div>
                 </div>
                 
                 
                 
             
             
            
             </div>
         </div>
     </div>
 </section>
 
 
 <!--- LOGA-->
 
 <section id="loga">
     <div class="container">
         <div class="row">
            <div class="col-md-6">
                <div class="row kolumna">
                     <div class="col-md-4">
               <img src="<?=get_template_directory_uri(); ?>/img/obrazek1.png" alt="obrazek-logo" class="img-fluid">  
             </div>
             <div class="col-md-4">
                 <img src="<?=get_template_directory_uri(); ?>/img/obrazek2.png" alt="obrazek-logo" class="img-fluid">  
             </div>
             <div class="col-md-4">
                 <img src="<?=get_template_directory_uri(); ?>/img/obrazek3.png" alt="obrazek-logo" class="img-fluid">  
             </div>
                </div>
            </div>
             
              <div class="col-md-6">
                <div class="row kolumna">
                     <div class="col-md-4">
               <img src="<?=get_template_directory_uri(); ?>/img/obrazek4.png" alt="obrazek-logo" class="img-fluid">  
             </div>
             <div class="col-md-4">
                 <img src="<?=get_template_directory_uri(); ?>/img/obrazek5.png" alt="obrazek-logo" class="img-fluid">  
             </div>
             <div class="col-md-4">
                 <img src="<?=get_template_directory_uri(); ?>/img/obrazek6.png" alt="obrazek-logo" class="img-fluid">  
             </div>
                </div>
            </div>
         </div>
     </div>
 </section>
 
 
 <!-- KOLEJNE ZDJECIA-->
 
 <section id="zdj-fluid">
     <div class="container-fluid">
        <div class="row">
        
         <div class="col-md-6">
            <div class="row kolumna-sm">
             <div class="col-md-6">
                 <img src="<?=get_template_directory_uri(); ?>/img/zdj1.png" alt="zdjecie" class="img-fluid">
                 <div class="zdjecia-overlay1">
                   <div class="zdjecia-opiss vertical-align text-center">
                  <i class="fa fa-picture-o"></i>
                  <h4>Testowy podgląd</h4>
                  <p>Lorem ipsum dolor sit amet.</p>
                  </div>
               </div>
             </div>
             <div class="col-md-6">
                  <img src="<?=get_template_directory_uri(); ?>/img/zdj2.png" alt="zdjecie" class="img-fluid">
                  <div class="zdjecia-overlay1">
                   <div class="zdjecia-opiss vertical-align text-center">
                  <i class="fa fa-picture-o"></i>
                  <h4>Testowy podgląd</h4>
                  <p>Lorem ipsum dolor sit amet.</p>
                  </div>
               </div>
             </div>
             </div>
             <div class="row kolumna-sm">
             <div class="col-md-6">
                  <img src="<?=get_template_directory_uri(); ?>/img/zdj5.png" alt="zdjecie" class="img-fluid">
                  <div class="zdjecia-overlay1">
                   <div class="zdjecia-opiss vertical-align text-center">
                  <i class="fa fa-picture-o"></i>
                  <h4>Testowy podgląd</h4>
                  <p>Lorem ipsum dolor sit amet.</p>
                  </div>
               </div>
             </div>
             <div class="col-md-6">
                  <img src="<?=get_template_directory_uri(); ?>/img/zdj4.png" alt="zdjecie" class="img-fluid">
                  <div class="zdjecia-overlay1">
                    <div class="zdjecia-opiss vertical-align text-center">
                  <i class="fa fa-picture-o"></i>
                  <h4>Testowy podgląd</h4>
                  <p>Lorem ipsum dolor sit amet.</p>
                  </div>
                   
               </div>
             </div>
             </div>
         </div>
          <div class="col-md-3 kolumna2">
          <img src="<?=get_template_directory_uri(); ?>/img/zdj3.png" alt="zdjecie" class="img-fluid">
              <div class="zdjecia-overlay1">
                  
                  <div class="zdjecia-opiss vertical-align text-center">
                  <i class="fa fa-picture-o"></i>
                  <h4>Testowy podgląd</h4>
                  <p>Lorem ipsum dolor sit amet.</p>
                  </div>
              </div>
               </div>
               
               <div class="col-md-3 kolumna2">
                  <div class="img2">
                      <img src="<?=get_template_directory_uri(); ?>/img/zdj6.png" alt="zdjecie" class="img-fluid">
                  <div class="zdjecia-overlay1 text-center">
                  <div class="zdjecia-opiss1">
                  <i class="fa fa-picture-o"></i>
                  <h4>Testowy podgląd</h4>
                  <p>Lorem ipsum dolor sit amet.</p>
                  </div>
                   
               </div>
                  </div>
                  
                  <div class="img1">
                      <img src="<?=get_template_directory_uri(); ?>/img/zdj7.png" alt="zdjecie" class="img-fluid">
                  <div class="zdjecia-overlay1">
                   <div class="zdjecia-opiss vertical-align text-center">
                  <i class="fa fa-picture-o"></i>
                  <h4>Testowy podgląd</h4>
                  <p>Lorem ipsum dolor sit amet.</p>
                  </div>
               </div>
                 
                 
                  </div>
                   
               </div>
               
            </div>
             
         </div>
         
    
 </section>
 
 <!-- KARUZELA2-->
 
 <section id="karuzela2">
     <div class="container">
         <div class="col-md-12">
            <div id="karuzella" class="carousel slide" data-ride="carousel">
            
            
            
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
       
           
      
        <div class="carousel-caption d-none d-md-block">
        <img src="<?=get_template_directory_uri(); ?>/img/client-01.jpg" alt="malezdj" class="img-fluid ">
       
        <div class="opis">
    <h3>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores esse maxime, atque, sint consectetur facilis earum quidem dolore eum nesciunt vero quaerat ullam ratione minima."</h3>
     <hr>
    <p>Jon Doe</p>
    </div>
  </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block">
        <img src="<?=get_template_directory_uri(); ?>/img/client-02.jpg" alt="malezdj" class="img-fluid ">
       
        <div class="opis">
    <h3>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores esse maxime, atque, sint consectetur facilis earum quidem dolore eum nesciunt vero quaerat ullam ratione minima."</h3>
    <hr>
    <p>Józek</p>
    </div>
  </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block">
         <img src="<?=get_template_directory_uri(); ?>/img/client-03.jpg" alt="malezdj" class="img-fluid ">
       
        <div class="opis">
    <h3>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores esse maxime, atque, sint consectetur facilis earum quidem dolore eum nesciunt vero quaerat ullam ratione minima."</h3>
     <hr>
    <p>Franek</p>
    </div>
  </div>
    </div>
  </div>
  
  
  
  <a class="carousel-control-prev" href="#karuzella" role="button" data-slide="prev">
    <i class="fa fa-angle-left" aria-hidden="true"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next"  href="#karuzella" role="button" data-slide="next">
    <i class="fa fa-angle-right" aria-hidden="true"></i>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
     </div>
 </section>
  
  
  <!--CO MOWIĄ LUDZIE??-->
  
  <section id="co-mowia">
      <div class="container">
         <div class="col-md-12">
            <div class="tytul text-center">
                      <h2>Szczęśliwi klienci</h2>
                      <h3>Co mówią ludzie?</h3>
                      <hr>
                      
                
                  </div>
         </div>
          <div class="col-md-12 co-mowia-opisy">
              <div class="row">
                  <div class="col-md-6">
                     <img src="<?=get_template_directory_uri(); ?>/img/morda1.png" alt="zdj-twarzy" class="img-fluid">
                       <div class="co-mowia-opis">
                      <h3>Józef Komandos</h3>
                      <h4>Aktor w filmie</h4>
                      <hr>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi dolor ea labore dolorem voluptatum, velit.</p>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <img src="<?=get_template_directory_uri(); ?>/img/morda2.png" alt="zdj-twarzy" class="img-fluid">
                      <div class="co-mowia-opis">
                      <h3>Zbigniew kanalarz</h3>
                      <h4>Aktor w filmie</h4>
                      <hr>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi dolor ea labore dolorem voluptatum, velit.</p>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <img src="<?=get_template_directory_uri(); ?>/img/morda3.png" alt="zdj-twarzy" class="img-fluid">
                       <div class="co-mowia-opis">
                      <h3>Olaf Morda</h3>
                      <h4>Aktor w filmie</h4>
                      <hr>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi dolor ea labore dolorem voluptatum, velit.</p>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <img src="<?=get_template_directory_uri(); ?>/img/morda4.png" alt="zdj-twarzy" class="img-fluid">
                        <div class="co-mowia-opis">
                      <h3>Antoni EloZiom</h3>
                      <h4>Miłośnik lola</h4>
                      <hr>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi dolor ea labore dolorem voluptatum, velit.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  
  <!-- nasze historie-->
  
  <section id="nasze-historie">
      <div class="container">
          <div class="col-md-12">
              <div class="tytul text-center">
                      <h2>Nasze Historie</h2>
                      <h3>Najnowsze Blogi</h3>
                      <hr>
                      
                
                  </div>
          </div>
          <div class="row">
              <div class="col-md-4">
                  <div class="historie-zdj">
                      <img src="<?=get_template_directory_uri(); ?>/img/Rectangle%2016%20copy.png" alt="historie-zdj" class="img-fluid">
                      <div class="data text-center">
                          <span>15</span>
                          <p>jan</p>
                      </div>
                  </div>
                  
                  <div class="historie-opis">
                      <h3>Lorem ipsum dolor sit.</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est eligendi, aut architecto debitis!</p>
                      <hr>
                      <div class="podpis">
                          <i class="fa fa-eye"><span>245</span></i>
                          <i class="fa fa-commenting-o"><span>7</span></i>
                      </div>
                      
                  </div>
              </div>
              
               <div class="col-md-4">
                    <div class="historie-zdj">
                      <img src="<?=get_template_directory_uri(); ?>/img/Rectangle%2015%20copy.png" alt="historie-zdj" class="img-fluid">
                      <div class="data text-center">
                          <span>14</span>
                          <p>jan</p>
                      </div>
                  </div>
                  
                  <div class="historie-opis">
                      <h3>Lorem ipsum dolor sit.</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est eligendi, aut architecto debitis!</p>
                      <hr>
                      <div class="podpis">
                          <i class="fa fa-eye"><span>542</span></i>
                          <i class="fa fa-commenting-o"><span>18</span></i>
                      </div>
                      
                  </div>
              </div>
              
               <div class="col-md-4">
                    <div class="historie-zdj">
                      <img src="<?=get_template_directory_uri(); ?>/img/Rectangle%2014%20copy.png" alt="historie-zdj" class="img-fluid">
                      <div class="data text-center">
                          <span>12</span>
                          <p>jan</p>
                      </div>
                  </div>
                  
                  <div class="historie-opis">
                      <h3>Lorem ipsum dolor sit.</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est eligendi, aut architecto debitis!</p>
                      <hr>
                      <div class="podpis">
                          <i class="fa fa-eye"><span>753</span></i>
                          <i class="fa fa-commenting-o"><span>59</span></i>
                      </div>
                      
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  
  <!--- mapa -->
  <section id="mapa">
      <div class="container">
          <div class="col-md-4 offset-md-4 text-center">
              <i class="fa fa-map-marker"></i>
              <a href="https://www.google.pl/maps/place/Krak%C3%B3w/@50.0464284,19.7246942,10z/data=!3m1!4b1!4m5!3m4!1s0x471644c0354e18d1:0xb46bb6b576478abf!8m2!3d50.0646501!4d19.9449799?q=krakow&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjhsu_dztvRAhXJ6CwKHcgpAlwQ_AUICCgB" target="_blank">
                  <h2>Otwórz mapę</h2>
              </a>
              <hr>
              
          </div>
      </div>
  </section>
  
  
  <!-- stopka -->
  <?php get_footer(); ?>