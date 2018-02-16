
  <div id="contentContainer">
   <div id="wrapper">
   
      <div id="itemFour" class="content btn-default portfolio-link" data-toggle="modal" href="#prayer_pop">
      </div>
<!-- 
      <div  onClick="openLoveFest()" id="itemFive" class="content">
      </div>

      <div id="itemSix" class="content">
      </div> -->
  </div>
</div>
<script>
 // just querying the DOM...like a boss!
var links = document.querySelectorAll(".itemLinks");
var wrapper = document.querySelector("#wrapper");

var contents = document.querySelectorAll(".content");

// the activeLink provides a pointer to the currently displayed item
var activeLink = 0;
 
// setup the event listeners
for (var i = 0; i < links.length; i++) {
    var link = links[i];
    link.addEventListener('click', setClickedItem, false);
    // link.setAttribute('data-pos',-i*wid+"px");
 
    // identify the item for the activeLink
    link.itemID = i;

}
 
// set first item as active
links[activeLink].classList.add("active");


function setClickedItem(e) {
    removeActiveLinks();
 
    var clickedLink = e.target;
    activeLink = clickedLink.itemID;
 
    changePosition(clickedLink);
}
 
function removeActiveLinks() {
    for (var i = 0; i < links.length; i++) {
        links[i].classList.remove("active");
    }
}
 
// Handle changing the slider position as well as ensure
// the correct link is highlighted as being active
function changePosition(link) {
    var position = link.getAttribute("data-pos");
 
    var translateValue = "translate3d(" + position + ", 0px, 0)";
    wrapper.style.transform = translateValue;
 
    link.classList.add("active");
}

function slideTime(){

    for (var i = 0; i < links.length; i++) {
        links[i].classList.remove("active");
    }

    activeLink +=1;
    if(activeLink >= links.length){
        activeLink = 0;
    }

    var position = links[activeLink].getAttribute("data-pos");
    
    var translateValue = "translate3d(" + position + ", 0px, 0)";
    wrapper.style.transform = translateValue;
 
    link.classList.add("active");
    
    setTimeout(function(){ 
        slideTime(); }, 4000);
}

setTimeout(function(){ 
    slideTime() }, 4000);

</script>