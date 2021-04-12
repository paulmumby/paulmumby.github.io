var html = document.querySelector("html");

//prevent scrollling when mobile menus are open
document.addEventListener('click', function (event) {

  if (!event.target.matches('.nav--level-1--checkbox')) return;

  //if (!html.classList.contains("nav-sub-open")) {
    html.classList.toggle("overflow-hidden");
  //}

}, false);

//document.addEventListener('click', function (event) {

//  if (!event.target.matches('.nav-sub-checkbox')) return;
//  html.classList.toggle("overflow-hidden");
//  html.classList.toggle("nav-sub-open");

//}, false);

//temp carousel solution

document.addEventListener('click', function (event) {

  if (!event.target.matches('#carousel-button--open') && !event.target.matches('#carousel-button--open svg') && !event.target.matches('#carousel-button--open span')) return;
  //window.alert('');
  document.getElementById('carousel').classList.toggle("hidden");
  document.getElementById('carousel-button--open').classList.toggle("hidden");

}, false);