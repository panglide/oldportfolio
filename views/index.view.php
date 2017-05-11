<!DOCTYPE html>
<html>
<title>Phillip Glidewell</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/master.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>


<style>
body,h1,h2,h3,h4,h5,h6 {font-family: 'Source Sans Pro', sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('media/parallax-top.png');
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("media/parallax-bottom.png");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>

</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->

<div id="header" class="bgimg-1 w3-display-container w3-opacity-min">
    <div class="w3-display-bottomright">
        <h1 class="w3-center text title">Phillip Glidewell</h1>
        <br/>
        <h5 class="w3-center text tag-line">Full Stack Web Developer</h5>
    </div>

    <div id="arrow" class="w3-center">
        <i class="fa fa-angle-down fa-angle-up arrow"></i>
    </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT ME</h3>
  <p class="w3-center"><em>I love learning and building</em></p>
  <p>
      I have an MA in Teaching and Learning from Lipscomb
      University.  I began teaching myself web design and development in 2012 when I
      decided spredsheets were not the ONLY way.

  </p>
  <p>
      I very vividly remember the Friday evening I sat down at my brand new Mac Mini
      and wrote my first line of code.
    I did not understand <strong><em>ANYTHING</em></strong> about what I was doing.
    I did have a very clear vision of what I wanted to build and that is what kept
    me moving forward.  I learned very quickly that web development is hard so, I dug
    my heels in and I have not been able to get enough since.  I LOVE THIS STUFF.
  </p>
  <p>
      I work mostly with server-side languages like PHP.  I am trying to move towards
      a more client-side approach to my builds and catch the JavaScript wave.  I have a
      foot in both worlds right now and that makes my brain wiggle.
  </div>

  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p><b><i class="fa fa-user w3-margin-right"></i>Phillip Glidewell</b></p><br>
      <img src="media/lost_in_trees.png" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>
          "If you build it, they will come," spoken in that deep and powerful, yet gently encouraging
          voice of James Earl Jones, makes me feel like the world is just waiting, with baited breath,
          for me to devliver my next piece of work.  If only it were that simple.
    </p>
    <p>
        Quick note...that voice was also Lord Vader.  I digress.
    </p>
    <p>
          I love "pounding the books." I further love applying what I have learned.  My "books"
          aren't the books I used in school though, and I find I have had to develop a new way of
          "reading."
    </p>

    <p>
        There is <strong><em>SO</em></strong> much information on the internet.  It comes
        in every form of media imaginable. There is just about anything you can afford the time, energy, paitence,
        and or money to consume.  "Yeah I know, it's the internet. Duh!" you might say.
    </p>
      <p>
          Well, here is my point.  I have been trying to answer these questions.
          How are they going to find my work and if they do will it matter to them?
      </p>
      <p>
          I have been reading and listening, watching and emulating, as best I
          can, those web designers and web developers that catch my attention and interest.
          I have been spending <strong><em>A LOT</em></strong> of time deep in the back-end
          "forest," trying to make sense of the latest new trends and techniques
        in web development. I have gotten a little lost.  It seems that nothing really matters
        if it all matters and none of
          it matters unless something matters to someone.
      </p>
    </div>
  </div>
  <p class="w3-large w3-center w3-padding-16">Im currenly working on:</p>
  <p class="w3-wide"><i class="fa fa-laptop"></i>Web App Integrations</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:70%">70%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-area-chart"></i>API(development and consumption)</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:25%">25%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>Front-end Design</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:5%">5%</div>
  </div>
</div>



<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">MY WORK</h3>
  <p class="w3-center"><em>These are some of the projects I have worked on.<br> Click on the images to make them bigger</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m12 screenshot-wrapper">
      <a href="http://www.songwritercity.com" target="_blank">
          <img src="media/swc.png" class="w3-hover-opacity" alt="Songwriter City dot com langin page screenshot">
      </a>
    </div>

    <div class="w3-col m12 screenshot-wrapper">
        <a href="http://www.freethenews.org" target="_blank">
            <img src="media/freethenews.org.png" class="w3-hover-opacity" alt="Free the news dot org landing page screenshot">
        </a>
    </div>

    <div class="w3-col m12 screenshot-wrapper">
        <a href="http://www.glencliffalumni.com" target="_blank">
            <img src="media/ghsalum.com.png" class="w3-hover-opacity" alt="Glencliff alumni association dot com landing page screenshot">
        </a>
    </div>

    <div class="w3-col m12 screenshot-wrapper">
      <img src="media/ghsonline.org.png" onclick="onClick(this)" class="w3-hover-opacity" alt="Glencliff High School Student Project">
    </div>

    <div class="w3-col m12 screenshot-wrapper">
      <img src="media/teachknowledgy.png" onclick="onClick(this)" class="w3-hover-opacity" alt="Teachknowledgy API">
    </div>
    </div>
  </div>


<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>
-->

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">WORKING ON SOMETHING NEAR ME?</h3>
  <p class="w3-center"><em>Get in touch!</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <!-- Add Google Maps -->
      <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Nashville, US<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: panthonyglidewell&commat;gee mail.com<br>
      </div>
        <p>Ask a question or share your thoughts below!</p>
      <form action="/names" method="POST">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#header" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <a href="https://www.facebook.com/phillip.glidewell" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.instagram.com/phillipglidewell/" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://twitter.com/PhillipGlidewel" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://www.linkedin.com/in/phillip-glidewell-bb9014a6?trk=hp-identity-photo" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
  </div>
  <p>Based on theme found at <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(36.1627, -86.7816);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}



</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB83ccdNJBMexHfvo-bUSl5UO65rdccVKw&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
