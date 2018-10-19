<?php
require_once ("view/navi.php");
?>


<?php
require_once ("view/modal.php");
?>



<aside id="hakukentta">
    <form action="search.php">
        Search clips:
        <input type="search" name="clipsearch" id="clipsearch">
        <input type="submit" id="hakunappi" value="Search">
    </form>
</aside>

<div id="sivukuva">
    <img src="sivulogo.png">
</div>

<div id="twitter"> <!--haku vaikuttaisi myös twitteriin-->
        <header id="twitterheader">Latest tweets from #Overwatchleague</header>
        <a class="twitter-timeline"  href="https://twitter.com/hashtag/Overwatchleague" data-widget-id="936184460202168320">#Overwatchleague Tweets</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>



<?php
require_once ("view/stream.php");
?>



<?php
require_once ("view/clips.php");
?>


<?php
require_once ("view/footer.php");
?>


