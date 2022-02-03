let state = 1

let midZone = document.getElementById("hot_mid_zone")
let leftArrow = document.getElementById("l_arrow")
let rightArrow = document.getElementById("r_arrow")

leftArrow.onclick = function(){ changeState(false) };
rightArrow.onclick = function(){ changeState(true) };
midZone.onclick = function(){
  let redirectionUrl = "src/php/article.php?Article=" + document.getElementById("art_" + state).className.slice(-1)
  location.href = redirectionUrl
};

function changeState(up) {
  state = (up) ? (state+1) : (state-1)
  state = (state<1) ? 3 : state
  state = (state>3) ? 1 : state
  refresh()
}

function refresh() {
  let id = "art_" + state
  for (let i = 1; i <= 3; i++) {
    let id = "art_" + i
    if (i == state) {
      document.getElementById(id).style.display = "block"
    } else {
      document.getElementById(id).style.display = "none"
    }
  }
  document.getElementById("hot_title").innerHTML = document.getElementById("holder"+state).innerHTML
}

refresh()
