<?php
$TITLE = 'Dead Coders Society - a meetup in Glasgow for anyone who loves theoretical computer science.';
require '_header.php';
?>

<div id='header'>
  <h1>Dead Coders Society</h1>
  <p>
    The Dead Coders Society is an informal, semi-regular meetup for anyone and everyone
    interested in computer science.
  </p>
</div>

<div class='col-left'>
  <section>
    <h2>Next Talk: Closure Tables</h2>
    <p class='meta'>
      By <a href='http://twitter.com/alisdair'>Alisdair McDiarmid</a>.<br />
      1pm Tuesday 30th September @ Ad Lib
    </p>
    <p>There are several ways to represent hierarchical structures in a flat relational database. One way to do this is using a concept from set theory called transitive closures. This method is fairly easy to understand, very efficient to query and update, and provides referential integrity.</p>
    <p>This talk will briefly explain transitive closures, then describe how to store and access a tree using a closure table in an SQL database.</p>
  </section>
</div>

<div class='col-right'>

  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
  </script>
  <div id="gmap_canvas" style="height:300px;width:450px;"></div>
  <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
  <script type="text/javascript">
    function init_map(){
      var myOptions = {zoom:14,center:new google.maps.LatLng(55.8590009,-4.242338600000039),mapTypeId: google.maps.MapTypeId.ROADMAP};
      map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
      marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(55.8590009, -4.242338600000039)});
      infowindow = new google.maps.InfoWindow({content:"<b>Ad Lib</b><br/>33 Ingram Street<br/>Glasgow<br/>G1 1HA" });
      google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);
    }
    google.maps.event.addDomListener(window, 'load', init_map);
  </script>
  
  <p> 
    <b>When:</b> 1pm Tuesday 30th September<br/>
    <b>Venue:</b> Ad Lib, 33 Ingram St Glasgow, G1 1HA.
  </p>

</div>

<div id='bottom'>

  <section>
    <h3>Format</h3>

    <ol>
      <li>Turn up at the pre-arranged venue</li>
      <li>Chant the society motto <i>(optional step)</i></li>
      <li>Order food &amp; drinks. Precondition: <code>|forks| &#8805; |people|</code></li>
      <li>Whilst awaiting food, one person presents a topic or paper from any field of computing science
      <li>Eat food and discuss said topic</li>
    </ol>

    <p>
      Why not check out some of our <a href='previous-talks.php'>previous talks</a>?
    </p>
  </section>

  <section>
    <h3>FAQs</h3>

    <dl>
      <dt>Must the topics discussed originate from literally dead programmers?</dt>
      <dd>No, we're just future-proofing.</dd>

      <dt>Why a lunchtime meet? Seems a bit tame - didn't the Dead Poets meet in a cave?</dt>
      <dd>
        We wanted to make the meetings accessible to as wide an audience as possible; a lunchtime
        meetup is convenient for a) people with kids, b) anyone too young to go to a pub in the evening
        and c) commuters. <i>That said,</i> if you have a suitable cave handy I'm sure we could organise
        something.
      </dd>

      <dt>How can I suggest a topic?</dt>
      <dd>
        Please the Github issue tracker on the <code>deadcoders/meetings</code> repository. You can find it <a href='https://github.com/deadcoders/meetings/issues'>here.</a>
      </dd>
    </dl>
  </section>

  <section>
    <h3>Contact</h3>
    <p>
      Twitter: <a href='http://twitter.com/deadcoders'><code>@deadcoders</code></a><br>
      IRC: Freenode, <code>#deadcoders</code>
    </p>
  </section>

</div>

<div class='logo'>
  <img src='assets/logo.png'>
</div>

<? require '_footer.php' ?>