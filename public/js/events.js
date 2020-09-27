function menuOpen() {
  document.getElementById("main").style.marginLeft = "25%;";
  document.getElementById("sidebar-two").style.width = "25%;";
  document.getElementById("sidebar-two").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}

function menuClose() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("sidebar-two").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}

// Accordin open
function openAccordin(e) {

  var x = document.getElementById("reportAccord");
  if (x.className.indexOf("w3-show") == -1) {
    // Make the title bold
    $('#accordinToggle').addClass('accordin-select');
    // Show all items
    x.className += " w3-show";
    // Point the arrow downward
    $('#accordin-arrow').replaceWith('<i id="accordin-arrow" class="fas fa-chevron-down arrow-dark"></i>');
  } else {
    // Make tile normal
    $('#accordinToggle').removeClass('accordin-select');
    // Collapse the accordin dropdown
    x.className = x.className.replace(" w3-show", "");
    // Point the arrow right
    $('#accordin-arrow').replaceWith('<i id="accordin-arrow" class="fas fa-chevron-right arrow-dark"></i>');
  }
}

// Dropdown toggle
function dropDown(e) {
  event.stopPropagation();
  let id = $(e.target).data("id");
  $(`#reportDrop${id}`).toggleClass("w3-show");
}
// Close dropdown by clicking outside of the element
$(document).click(function() {
  $("[id^=reportDrop]").removeClass('w3-show');
});

// Modal - Close button template
// Close modal
function closeModal(e) {
  let id = $(e.target).data("id");
  $(`#deleteModal${id}`).remove();
}

// Clear and hide the edit and save form
$(document).keyup(function(e) {
  if (e.key === "Escape") {
    // If the user escapes the edit form
    if ($(e.target).attr('id')) {
      // If the user press escape while filling the edit form, replace it with the old value.
      if ($(e.target).attr('id').substr(0, 6) == "update") {
        let id = $(e.target).data("id");
        let title = $(e.target).attr('value');

        let result = {
          data: {
            id: id,
            title: title
          }
        }

        let item = reportBox(result);
        // Replace the report item with the previous values
        $(`#reportBox${id}`).replaceWith(item);
      }
    }

    // If the user escapes the save form
    if ($(e.target).attr('id') === "save") {
      $(`#title-field0`).toggle();
      // Clear the input field
      $(`#save`).replaceWith('<input id="save" type="text" name="title" value="" data-id="0">');
    }
  }
});
