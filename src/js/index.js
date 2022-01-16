document.addEventListener("DOMContentLoaded", function() {
  let title = document.querySelector('title')
  let nav_bts = document.getElementsByClassName("nav_bt");
  let buttons = {}

  for (let i = 0; i < nav_bts.length; i++) {
    buttons[nav_bts[i].firstChild.innerHTML] = nav_bts[i].firstChild
  }

  let page = title.innerHTML.slice(title.innerHTML.lastIndexOf(' ')+1, title.innerHTML.length)
  if (page == "Recherche" || title.innerHTML == "FiscaParadise") {
    buttons["HOME"].style.color = "#fb8122"
    return
  }
  buttons[page].style.color = "#fb8122"
})
