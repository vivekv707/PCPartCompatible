// Get the modal
const Cpumodal = document.getElementById("CpuSelectionModal");

// Get the button that opens the modal
var CpuModalBtn = document.getElementById("OpenCpuModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
CpuModalBtn.onclick = function() {
  Cpumodal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  Cpumodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == Cpumodal) {
    Cpumodal.style.display = "none";
  }
}