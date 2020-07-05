// jaavascript code used to show and hide the form below each holiday
// <!-- reference from: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_toggle_hide_show -->

function showOrHide(id) {
  var x = document.getElementById(id);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}