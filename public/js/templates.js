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
                                                  <button onclick="closeModal(event)" data-id="${id}" type="button" class="button button-gray button-outline-gray"><i class="fas fa-times text-gray button-outline-gray"></i> Cancel</button>
                                                  <button onclick="deleteReport(event)" id="${id}" data-id="${id}" type="button" class="button button-red button-outline-red"><i class="far fa-trash-alt text-red button-outline-red"></i> Delete</button>
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

// Generate a new report template
function reportBox(response) {
  // Get the values
  let id = response.data.id;
  let title = response.data.title;

  // Insert it into the template
  let report = `<div id="reportBox${id}">
                    <div class="w3-dropdown-click dropDown${id}">
                        <div class="item-container">
                            <div>
                                <span>
                                    <i class="fas fa-rocket color-valencia"></i>
                                    <span class="item">${title}</span>
                                </span>
                                <i data-id="${id}" onclick="dropDown(event)" class="fas fa-ellipsis-v color-trans" style="float: right;"></i>
                            </div>
                        </div>
                        <div id="reportDrop${id}" class="dropdown-content w3-bar-block w3-white w3-card-4">
                            <div onclick="deleteModal(event)" data-id="${id}" href="#" class="w3-bar-item button"><i class="far fa-trash-alt dropdown-icon"></i> Delete</div>
                            <div href="#" onclick="editReport(event)" data-id="${id}" class="w3-bar-item button"><i class="fas fa-pen dropdown-icon"></i> Rename</div>
                        </div>
                    </div>`;
  return report;
}
