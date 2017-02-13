
   <?php get_header() ?>

   <section id="kontaktt">
   <div class="container">
   <div class="row">
       <div class="col-md-8 offset-md-2 text-center">
         
          <div class="tytul text-center">
                              <h2>Kontakt</h2>
                                  
                                      <hr>
          
          
          <p>Imię i Nazwisko:  <?php the_field('imie') ?></p>
           <p>Adres: <?php the_field('adres') ?></p>
          <p>Telefon: <?php the_field('telefon') ?></p>
           <div id="map_canvas"></div>
           
          <?php echo CFS()->get( 'elo' ); ?>
          

           
           
       </div>
   </div>
    
</div>
      
       </div>
       
       <div class="container">
          <div class="row">
           
           
  
                 
       <?php     
 $galeria = CFS()->get('galeria');
  foreach ($galeria as $image) {
    echo '<div class="col-md-4">';
    echo '<h2>'.$image["tekst"].'</h2>';
    echo '<a href="'.$image["galeria_zdjecia"].'" data-toggle="lightbox" data-gallery="example-gallery" data-type="image">';
    echo '<img src="'.$image["galeria_zdjecia"].'"/>';
    echo '</a>';
    echo '</div>';
  }
               
               
                   
                   ?>
                   
                   </div>
        
        

               

           
           
          
        
           
       </div>
</section>

<?php $map = get_field('mapa', get_the_ID()); ?>

<script> 

  function initialize() {
        var myLatlng = new google.maps.LatLng(<?php echo $map['lat']; ?>, <?php echo $map['lng']; ?>);
        var myOptions = {
          zoom: 11,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
      }

      function loadScript() {
        var script = document.createElement("script");
        script.type = "text/javascript";
        script.src = "http://maps.google.com/maps/api/js?sensor=false&callback=initialize";
        document.body.appendChild(script);
      }

      window.onload = loadScript;
    </script>


<?php get_footer() ?>