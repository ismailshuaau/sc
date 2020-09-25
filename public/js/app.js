
function menuOpen() {
    document.getElementById("main").style.marginLeft = "23%";
    document.getElementById("sidebar-two").style.width = "23%";
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

// Drop down
function dropDown(e) {
    console.log('drop is working');
    let id = $(e.target).data("id");
    var dropdown = $(`#${id}`);
    dropdown.toggleClass("w3-show");
}

// Load the edit report form
function editReport(e) {

    console.log(e);

    e.preventDefault();
    console.log('Edit Report Function');
    // console.log(e);

    let id = $(e.target).data("id");

    console.log(id);
    let url = `/reports/${id}`;

    $.ajax({
        url: url,
        method: 'GET',
        success: function(response) {
            let data = response.data;
            let id = data.id;
            let title = data.title;

            console.log(response);
            console.log('Response received');
            let item = `<div id="reportBox${id}">
                            <form id="updateForm${id}">
                                <input type="hidden" name="_method" value="PUT">
                                <div class="w3-dropdown-click card">
                                    <div id="title-field0" class="button">
                                        <i class="fas fa-rocket" style="color: #D65554"></i>
                                        <span><input id="update${id}" type="text" name="title" data-id="${id}" value="${title}"></span>
                                        <button class="w3-hide" onclick="updateForm(event)" data-id="${id}" type="hidden" value="update"></button>
                                    </div>
                                </div>
                            </form>
                        </div>`;

            $(`#reportBox${id}`).replaceWith(item);
        }
    })
}

// Update report from database
function updateForm(e) {
    e.preventDefault();

    let event = e;

    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')                            }
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

    console.log(form);

    let data = $(formId).serialize();
    console.log(data);

    $.ajax({
    url: url,
    method: 'POST',
    data: data,
    success: function(response) {
        // Prepare the form with the updated value
        // Get the values from the server - CONTINUE FROM HERE!
        console.log('form with the updated title');
        console.log(response);
        // generate the template for the updated report and replace it with the previous item
        let item = reportBox(response);

        $(`#reportBox${id}`).replaceWith(item);
    }
})
}

// Save a report record in the database
function saveReport(e) {
    console.log(e)
    e.preventDefault();

    // Select the form
    let reportForm = $('#reportForm');

    console.log(reportForm);

    // Get the value of title
    let title = reportForm.find('input[name="title"]');
    title = title.val();

    console.log(title);

    // Clear the input field
    reportForm.find('input[name="title"]').val('');

    // Show input field
    $('#title-field0').show();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')                            }
    });

    if (title !== '') {
        $.ajax({
            url: '/reports',
            method: 'POST',
            data: {
                title: title
            },
            success: function(response) {
                console.log(response);
                // let data = response.data;
                // hide input field and hide it
                $(`#title-field0`).hide();

                let item = reportBox(response);

                $('#reportAppend').append(item);
            }
        })
    }
}

// Generate a new report template
function reportBox(response) {
    console.log('reportBox');
    // Get the values
    let data = response.data;
    let id = response.data.id;
    let title = response.data.title;

    // Insert it into the template
    let report = `<div id="reportBox${id}">
                    <div class="w3-dropdown-click dropDown${id}">
                        <div class="button item-container button-hover">
                            <div>
                                <span>
                                    <i class="fas fa-rocket color-valencia"></i>
                                    <span class="item">${title}</span>
                                </span>
                                <i data-id="reportDrop${id}" onclick="dropDown(event)" class="fas fa-ellipsis-v color-trans" style="float: right;"></i>
                            </div>
                        </div>
                        <div id="reportDrop${id}" class="dropdown-content w3-bar-block w3-white w3-card-4">
                            <div href="#" onclick="editReport(event)" data-id="${id}"  class="w3-bar-item button">Rename</div>
                            <div onclick="deleteModal(event)" data-id="${id}" href="#" class="w3-bar-item button">Delete</div>
                        </div>
                    </div>`;
    return report;
}

// Generate a delete modal template
// <!-- Modal for Delete -->
function deleteModal(e) {

    let id = $(e.target).data("id");

    let modal = `<div id="deleteModal${id}" class="w3-modal" style="display:block">
                    <div class="w3-modal-content w3-animate-opacity w3-card-1" style="width: 500px;">
                            <form id="deleteForm${id}">
                            <input type="hidden" name="_method" value="DELETE">
                                <header class="w3-container">
                                <span onclick="closeModal(event)" data-id="${id}" class="button w3-display-topright">&times;</span>
                                    <h5 style="font-size: 20px; font-weight: 400;">Delete Report</h5>
                                </header>
                                <div class="w3-container" style="font-weight: 100;">
                                    <p> Are you sure you want to delete this Report? </p>
                                    <div class="modal-footer">
                                        <div class="w3-container w3-padding-16 w3-right">
                                            <div class="w3-bar">
                                                <button onclick="deleteReport(event)" id="${id}" data-id="${id}" type="button" class="button w3-border w3-hover-red button3"><i class="far fa-trash-alt"></i> Delete</button>
                                                <button onclick="closeModal(event)" type="button" data-id="${id}" class="button w3-border w3-hover-red button3">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>`;

    $(`#reportBox${id}`).append(modal);
}

// Modal - Close button template
// Close modal
function closeModal(e) {
    let id = $(e.target).data("id");
    console.log(id);
    $(`#deleteModal${id}`).remove();
}
