// Load the edit report form
function editReport(e) {
  e.preventDefault();

  let id = $(e.target).data("id");
  let url = `/reports/${id}`;

  $.ajax({
    url: url,
    method: 'GET',
    success: function(response) {
      let data = response.data;
      let id = data.id;
      let title = data.title;

      let item = `<div id="reportBox${id}">
                                <form id="updateForm${id}" class="item-container">
                                    <div>
                                        <input type="hidden" name="_method" value="PUT">
                                        <i class="fas fa-rocket color-valencia"></i>
                                        <span class="item"><input id="update${id}" type="text" name="title" data-id="${id}" value="${title}" autofocus></span>
                                        <button class="w3-hide" onclick="updateForm(event)" data-id="${id}" type="hidden" value="update"></button>
                                    </div>
                                </form>
                            </div>`;

      // Replace with a new form
      $(`#reportBox${id}`).replaceWith(item);
      // Focus the input field
      $(`#update${id}`).focus();

    }
  })
}

// Update report from database
function updateForm(e) {
  e.preventDefault();

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  // Get id
  let id = $(e.target).data("id");
  // Clear the values of the input field
  let titleId = `#update${id}`;
  $(titleId).attr('value', '');

  // Show input field
  $(titleId).attr('type', 'text');

  let url = `/reports/${id}`;
  // Get From data
  let formId = `#updateForm${id}`;
  let form = $(formId);
  let data = $(formId).serialize();

  $.ajax({
    url: url,
    method: 'POST',
    data: data,
    success: function(response) {
      // Prepare the form with the updated value
      // Get the values from the server
      // generate the template for the updated report and replace it with the previous item
      let item = reportBox(response);
      $(`#reportBox${id}`).replaceWith(item);
    }
  })
}

// Save a report record in the database
function saveReport(e) {
  e.preventDefault();

  // Select the form
  let reportForm = $('#reportForm');

  // Get the value of title
  let title = reportForm.find('input[name="title"]');
  title = title.val();

  // Clear the input field
  reportForm.find('input[name="title"]').val('');

  // Show input field
  $('#title-field0').show();
  // Focus the input field
  $('#save').focus();

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  if (title !== '') {
    $.ajax({
      url: '/reports',
      method: 'POST',
      data: {
        title: title
      },
      success: function(response) {
        // let data = response.data;
        // hide input field and hide it
        $(`#title-field0`).hide();
        let item = reportBox(response);
        $('#reportAppend').append(item);
      }
    })
  }
}

// Delete Report
function deleteReport(e) {
  e.preventDefault();
  console.log('Delete report function');

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  // Get id
  let id = $(e.target).data("id");
  let url = `reports/${id}`;

  // Get From data
  let formId = `#deleteForm${id}`;
  let form = $(formId);
  let data = $('form').serialize();

  $.ajax({
    url: url,
    type: 'DELETE',
    data: data,
    success: function(response) {
      console.log(response);
      $(`.dropDown${id}`).remove();
      // Continue from here
      closeModal(e);
    }
  })

}
