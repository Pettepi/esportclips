var httpRequest = new XMLHttpRequest();

httpRequest.addEventListener('load', clipsLoaded);
httpRequest.open('GET', 'https://api.twitch.tv/kraken/clips/top?limit=10&channel=playoverwatch');
httpRequest.setRequestHeader('Client-ID', 'twju3nujb0re80iedmtl9ritk3kig2');
httpRequest.setRequestHeader('Accept', 'application/vnd.twitchtv.v5+json');
httpRequest.send();

function clipsLoaded() {
  var clipsDisplay = document.getElementById('clips-display'),
      clipList = JSON.parse(httpRequest.responseText);

  clipList.clips.forEach(function(clip, index, array) {
    clipItem = document.createElement('div');
    clipItem.innerHTML = clip.embed_html;
    clipItem.querySelector('iframe').src = clipItem.querySelector('iframe').src + '&autoplay=false';
    clipsDisplay.appendChild(clipItem);
  });
}


/*var nav = document.getElementById('access_nav'),
    body = document.body;

nav.addEventListener('click', function(e) {
  body.className = body.className? '' : 'with_nav';
  e.preventDefault();
});
*/
//ei pakosti toimi v
/*
var channel = "monstercat";
$( document ).ready( function() {
  $.ajax( {
    dataType: "jsonp",
    type: "GET",
    url: "https://api.twitch.tv/kraken/channels/" + channel,
    success: function( data ) {
      var title = data.status;
      $( "#streamtitle" ).html( title );
    }
  });
});
*/
//hakutesti

// MODAL
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}
