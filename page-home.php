<?php /* Template Name: Home - GGC */ ?>
<?php include ('header.php');?>

<div class ="element show-on-scroll">
<div class="container intro">
    <div class="row">
        <div class="col-lg-5">
            <div class="homepage">
            <h1>Verduurzaam de wereld</h1>
            <h2>Start bij jezelf.</h2>
            <p>Makkelijke challenges om samen of alleen uit te proberen. Sluit je aan bij de Global Goals Community en start met het verduurzamen van jouw levensstijl!</p>
            <a href="https://cards.kameleons.globalgoalscommunity.eu/"><button class="button-home">Ik doe mee!</button></a>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="cards">
                        <div class="card-large grijs">
                        </div>
                        <div onclick="rotate()" id = "cardLargeGreen">
                            <img src="https://kameleons.globalgoalscommunity.eu/wp-content/uploads/2020/06/sdgicon-groen.svg">
                            <div class="rotated-card">
                              <div class="rotated-card-content">
                              <img class="sdg-flipped" src="https://kameleons.globalgoalscommunity.eu/wp-content/uploads/2020/06/sdgicon-groen.svg">
                              <p class="sgd-title-flipped">Stel zelf een BMI-meter samen</p>
                              <p class="sgd-body-flipped">Een gezond gewicht is de basis van een goede gezondheid. Om te pijlen of jouw BMI op de...</p>
                              <button class="sgd-button-flipped">Ik doe mee!</button>
                              </div>
                              <div class="largecard-content">
                              <img src="#"/>
                              <p>06.<br>
                              Schoon water en sanitair</p>
                              <h1>Maak een waterfilter van huis, tuin en keuken materialen</h1>
                              <p>Laten we samen het gebruik van water beperken. Door middel van deze zelfgemaakte waterfilter zal je niet alleen thuis, maar ook op kampeertrips...</p>
                              <button>Ik doe mee!</button>
                              <p>Meer uitleg...</p>
                              </div> 
                            </div>
                        </div>
                        <div class="card-large geel">
                            <img src="https://kameleons.globalgoalscommunity.eu/wp-content/uploads/2020/06/sdgicon-geel.svg">
                        </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class ="element show-on-scroll">
<div class="schuit">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="home-h2">Samen in dezelfde schuit</h2>
            </div>
            <div class="col-lg-5">
            <p class="home-p">Je staat er niet alleen voor! Voer challenges uit en hergebruik huis, tuin en keukenmaterialen, ontdek een nieuwe interesse en nog veel meer. Bekijk de communityfeed om oplossingen van andere communityleden te bekijken of doe inspiratie op door foto's van anderen!</p>
            </div>
            <div class="col-lg-5">
            <p class="home-p">Of je de challengekaarten gebruikt in je vrije tijd of in de pauze op je werk, het maakt niet uit wanneer je het doet, zolang je er maar plezier in hebt. Verzin zelf een challenge voor anderen om uit te proberen en bekijk hun voortgang op jouw challenge!</p>
            </div>
                <div class= "col-lg-4">
                <img class="img-schuit" src = "https://kameleons.globalgoalscommunity.eu/wp-content/uploads/2020/06/Rectangle-43.png">
                </div>
                <div class= "col-lg-4">
                <img class="img-schuit" src = "https://kameleons.globalgoalscommunity.eu/wp-content/uploads/2020/06/Rectangle-44.png">
                </div>
                <div class= "col-lg-4">
                <img class="img-schuit" src = "https://kameleons.globalgoalscommunity.eu/wp-content/uploads/2020/06/Rectangle-45.png">
                </div>
        </div>
    </div>
</div>
</div>

<div class="element show-on-scroll">
<div id="recent">
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <h2 class="home-h2 mt">Recent toegevoegd</h2>
            <p class="home-p">De community is constant bezig om samen anderen te stimuleren tot het uitvoeren van makkelijke en leuke dingen.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <div class="meer-kaarten">
                <div class="center">
                <img class="meer-kaarten-img" src="https://kameleons.globalgoalscommunity.eu/wp-content/uploads/2020/06/Group-37.svg">
               <p class="meer-kaarten-p">Meer kaarten</p>
                </div>
            </div>
        </div>
        <div class="col-lg-10">
            <div id="kaartenoverzicht-home">
            
        <?php 
            $args = array(  
                'posts_per_page'   => -1,
                'post_type' => 'kaart',
                'post_status' => 'publish',
                'orderby' => 'modified', 
                'order' => 'DESC'
            );
        ?>

        <?php $loop = new WP_Query($args);
                if ($loop->have_posts()):
                    while ($loop->have_posts()) : $loop->the_post(); ?>
                    <?php $sdg = get_the_terms(get_the_ID(), 'SDG'); ?>
                    <?php $sdgnummer = $sdg[0]->slug;
                    $nummer = substr($sdgnummer, strpos($sdgnummer, "-") + 1);?>
                    <div class="card-small sdg<?php echo $nummer; ?>">
                    <img class="img-card-small" src="/wp-content/themes/ggc/assets/images/<?php echo $nummer; ?>.png"/>
                    <h4><?php echo the_title(); ?></h4>
                    <a class="meer-uitleg" href="<?php echo post_permalink(); ?>">Meer uitleg</a>
                    </div>
                   <?php endwhile;   
                endif;  
                wp_reset_postdata();
        ?>
            </div>
        </div>
        <div class="col-lg-12">
        <a href="https://cards.kameleons.globalgoalscommunity.eu/overzicht.php"><button class="ghostbutton-home">Bekijk alle kaarten</button></a>
        </div>
    </div>
</div>
</div>
</div>

<div class ="element show-on-scroll">
<div class="gmta bg-color">
    <div class = "container">
        <div class="row">
            <div class="col-lg-5 z-i">
                <h2 class="home-h2">Great minds think alike</h2>
                <p class="home-p">Met een groeiende community van momenteel 2324 individuen sta je altijd sterker dan alleen. Kom in contact met mensen met dezelfde interesses als jij en ga samen challenges aan en verbeter de wereld op jouw eigen manier!</p>
                <button class="button-home">Ik word lid!</button>
            </div>
            <div class="col-lg-7">
            <img class="img-web" src="https://kameleons.globalgoalscommunity.eu/wp-content/uploads/2020/06/Group-318.svg">
            </div>
        </div>
    </div>
</div>
</div>

<div class ="element show-on-scroll">
<div id="app">
<div class="container">
    <div class="row">
        <div class="col-lg-4">
        <h2 class="home-h2">Ook te gebruiken als app!</h2>
        <p class="home-p">Het deck met challengekaarten is ook te downloaden als app voor op je telefoon! Hiermee kan er altijd snel even gekeken worden naar jouw actieve challenges en naar het communityform! </br></br>
        De GGC-app is niet te vinden in de App Store of Google Play Store, maar wordt direct gedownload vanuit de browser. Klik op de onderstaande knop om het kaartendeck automatisch toe te laten voegen aan het homescherm van je telefoon!</p>
        <button class="ghostbutton-home left">Download de app</button>
        </div>
        <div class="col-lg-8">
        <img class="mockup-home" src="https://kameleons.globalgoalscommunity.eu/wp-content/uploads/2020/06/mockup.svg">
        <img class="elipse-home" src="https://kameleons.globalgoalscommunity.eu/wp-content/uploads/2020/06/Ellipse-144.svg">
        </div>
    </row>
</div>
</div>
</div>

<?php include ('footer.php');?>

<script>

let el = document.getElementById('cardLargeGreen')
const height = el.clientHeight
const width = el.clientWidth
el.addEventListener('mousemove', handleMove)
function handleMove(e) {
  const xVal = e.layerX
  const yVal = e.layerY
  const yRotation = 20 * ((xVal - width / 2) / width)
  const xRotation = -20 * ((yVal - height / 2) / height)
  const string = 'perspective(500px) scale(1.1) rotateX(' + xRotation + 'deg) rotateY(' + yRotation + 'deg)'
  el.style.transform = string
}
el.addEventListener('mouseout', function() {
  el.style.transform = 'perspective(500px) scale(1) rotateX(0) rotateY(0)'
})
el.addEventListener('mousedown', function() {
  el.style.transform = 'perspective(500px) scale(0.9) rotateX(0) rotateY(0)'
})
el.addEventListener('mouseup', function() {
  el.style.transform = 'perspective(500px) scale(1.1) rotateX(0) rotateY(0)'

})

var card = document.getElementById("cardLargeGreen");
var flip = false;
function rotate() {
card.classList.toggle("rotated-card");
if(flip == true) {
flip = false;

document.querySelector('.rotated-card-content').style.display = 'none';
} else {
flip = true;
document.querySelector('.rotated-card-content').style.display = 'block';
}
}

/* mobile menu */
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

window.addEventListener('scroll', function() {
    console.log("Scrolling");
});

// Detect request animation frame
var scroll = window.requestAnimationFrame ||
             // IE Fallback
             function(callback){ window.setTimeout(callback, 1000/60)};
var elementsToShow = document.querySelectorAll('.show-on-scroll'); 

function loop() {

  elementsToShow.forEach(function (element) {
    if (isElementInViewport(element)) {
      element.classList.add('is-visible');
    } else {
      element.classList.remove('is-visible');
    }
  });

  scroll(loop);
}

// Call the loop for the first time
loop();

// Helper function from: http://stackoverflow.com/a/7557433/274826
function isElementInViewport(el) {
  // special bonus for those using jQuery
  if (typeof jQuery === "function" && el instanceof jQuery) {
    el = el[0];
  }
  var rect = el.getBoundingClientRect();
  return (
    (rect.top <= 0
      && rect.bottom >= 0)
    ||
    (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.top <= (window.innerHeight || document.documentElement.clientHeight))
    ||
    (rect.top >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
  );
}

</script>

