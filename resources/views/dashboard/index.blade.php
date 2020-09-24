<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Story Clash</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

      <!-- Style -->
      <style>
        /*! normalize.css v8.0.1    | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
      </style>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet"  href="{{ asset('css/app.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" />

   </head>
   <body>
      <!-- Side Menu 1 -->
      <div id="sidebar1">
         <div class="sidebar bar-block black large" style="max-width:55px; margin-right: 30px;">
            <div style="height:55px;">
                <img style='height:100%; width:100%; object-fit:contain' src="{{ asset('img/logo.png') }}" alt="">
            </div>
            <a href="#" class="bar-item button" style="background-color: #333333;"><i class="fas fa-rocket" style="color: #ffffff"></i></a>
         </div>
      </div>

      <div id="sidebar-two" class="sidebar w3-bar-block w3-card" style="display:none">
        <button class="w3-bar-item w3-button" style="padding: 15px;" onclick="menuClose()">
            <div>
                <span style="margin-right: 20px; position: relative; bottom: 3px;"> <i class="fas fa-chevron-left arrow"></i> </span>
                <span style="font-size:14px;font-weight:500;position: relative;top:1px;"><i class="far fa-bookmark bookmark"></i><span style="font-size:14px;font-weight:500;position: relative;bottom: 3px;margin-left: 20px;">Saved Reports</span></span>
            </div>
        </button>
        <!-- Accordin Start -->
        <button class="w3-button w3-block w3-left-align" style="font-weight: 100; font-size: 14px;" onclick="openAccordin()">my Reports <i id="accordin-arrow" class="fas fa-chevron-right arrow-dark"></i></button>
        <div id="demoAcc" class="w3-bar-block w3-hide w3-white w3-card-4">
            @foreach ($reports as $report)
            <div id="reportBox{{$report->id}}">
                <div class="w3-dropdown-click dropDown{{$report->id}}">
                    <div class="w3-button">
                        <div>
                           <span>
                                <i class="fas fa-rocket" style="color: #D65554"></i>
                                <span style="margin-left: 5px;">{{ $report->title }}</span>
                            </span>
                           <i data-id="reportDrop{{$report->id}}" onclick="dropDown(event)" class="fas fa-ellipsis-v" style="float: right;"></i>
                        </div>
                    </div>
                    <div id="reportDrop{{$report->id}}" class="w3-dropdown-content w3-bar-block w3-white w3-card-4">
                        <div href="#" onclick="editReport(event)" data-id="{{ $report->id }}"  class="w3-bar-item w3-button">Rename</div>
                        <div onclick="document.getElementById('deleteModal{{$report->id}}').style.display='block'" href="#" class="w3-bar-item w3-button">Delete</div>
                    </div>
                </div>

                 <!-- Modal for Delete -->
                <div id="deleteModal{{$report->id}}" class="w3-modal">
                    <div class="w3-modal-content w3-animate-opacity w3-card-1">

                        <form id="deleteForm{{$report->id}}">
                            @method('DELETE')
                            <header class="w3-container w3-teal">
                            <span onclick="" class="w3-button w3-display-topright">&times;</span>
                            <h2>Delete Report: {{ $report->title }}</h2>
                            </header>
                            <div class="w3-container">
                                <p> Are you sure you want to delete this Report? </p>
                                <div class="modal-footer">
                                    <div class="w3-container w3-padding-16">
                                        <button onclick="deleteReport(event)" id="{{ $report->id }}" data-id="{{ $report->id }}" type="button" class="button button3 w3-right">Delete</button>
                                        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="button button3 w3-right">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Continue from here -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Add Report -->
        <div class="">
            <form id="reportForm" class="">
                <div class="w3-dropdown-click card">
                    <div id="title-field0" class="w3-button">
                        <i class="fas fa-rocket" style="color: #D65554"></i>
                        <span><input type="text" name="title" value="" data-id="0"></span>
                    </div>
                </div>
                <div class="w3-dropdown-click card">
                    <div class="w3-button">
                        <i style="color: #19B776;" class="fas fa-plus-circle"></i>
                        <button style="color: #19B776; font-weight: 500; background-color: transparent;" data-id="0" type="submit" id="ajaxSave" value="save">Save Report</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- END / Add Report -->

        <!-- Accordin End -->
      </div>

      <div id="main">

        <div class="teal">
            <div style="">
                <ul style="padding: 0;">
                    <li>
                        <a href="#bookmark" style="">
                            <button id="openNav" class="button teal"style="border: 1px solid #e5e5e5; height: 56px;" onclick="menuOpen()"><i class="far fa-bookmark"></i></button>
                        </a>
                    </li>
                    <li><a href="#users"></a></li>
                    <li><a href="#date"></a></li>
                    <li><a href="#country"></a></li>
                </ul>
            </div>
            <div class="container">
                <h1>Story Clash</h1>
            </div>
        </divv>


        <!-- List of the Reports in the database -->
        <script type='text/javascript' src="../js/jquery-3.5.1.min.js"></script>
        <script>
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
        </script>
        <script>
            // Accordin open
            function openAccordin() {
                var x = document.getElementById("demoAcc");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                    $('#accordin-arrow').replaceWith('<i id="accordin-arrow" class="fas fa-chevron-down arrow-dark"></i>');
                } else {
                    // Collapse the accordin dropdown
                    x.className = x.className.replace(" w3-show", "");
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

            // Close modal
            function closeModal(e) {
                let id = $(e.target).data("id");
                $(`#deleteModal${id}`).remove();
            }

        </script>
        <script>
            // Check if the page loads
            $(document).ready(function() {
                console.log("document loaded");
                // On page load, send an ajax GET request to load all reports
                // $.ajax({
                //     url: '/reports',
                //     method: 'GET',
                //     success: function(response) {
                //         console.log(response);
                //     }
                // })
            });

            // After hovering a report-entry a button (3 points) appears to open a context menu
            // $(".fa-ellipsis-v").css( "display", "none" );

            // $("li").hover(function(){
            //     $(this).find(".fa-ellipsis-v").css( "display", "block" );
            //     }, function(){
            //     $(this).find(".fa-ellipsis-v").css( "display", "none" );
            // });




            // Load the edit report form
            function editReport(e) {

                console.log(e);

                e.preventDefault();
                console.log('Edit Report Function');
                // console.log(e);

                let id = $(e.target).data("id");

                console.log(id);
                let url = `/reports/${id}`;
                // console.log(_url);

                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(response) {
                        let data = response.data;
                        console.log(response);
                        console.log('Response received');
                        $(`#reportBox${data.id}`).
                        replaceWith(`<div id="reportBox${id}"><form id="updateForm${data.id}">@method('PUT')<input id="update${data.id}" data-id="${data.id}" name="title" type="text" value="${data.title}"><button onclick="updateForm(event)" data-id="${data.id}" type="submit" value="update"></button></form></div>`);

                    }
                })
            }

            // Update report from database
            function updateForm(e) {
                e.preventDefault();


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
                    console.log(response);
                    // hide input field and hide it
                    // CONTINUE FROM HERE
                    let title = form.find(titleId).val();

                    console.log(id);

                    console.log(title);
                    // Prepare the form
                    let item = `<div id="reportBox${id}">
                                    <div class="w3-dropdown-click dropDown${id}">
                                        <button class="w3-button" data-id="reportDrop${id}" onclick="dropDown(event)">${title}</button>
                                        <div id="reportDrop${id}" class="w3-dropdown-content w3-bar-block w3-white w3-card-4">
                                            <a href="#" onclick="editReport(event)" data-id="{{ $report->id }}"  class="w3-bar-item w3-button">Rename</a>
                                            <a onclick="document.getElementById('deleteModal${id}').style.display='block'" href="#" class="w3-bar-item w3-button">Delete</a>
                                        </div>
                                    </div>

                                    <!-- Modal for Delete -->
                                    <div id="deleteModal${id}" class="w3-modal">
                                        <div class="w3-modal-content w3-animate-opacity w3-card-1">

                                            <form id="deleteForm${id}">
                                                @method('DELETE')
                                                <header class="w3-container w3-teal">
                                                <span onclick="" class="w3-button w3-display-topright">&times;</span>
                                                <h2>Delete Report: ${title}</h2>
                                                </header>
                                                <div class="w3-container">
                                                    <p> Are you sure you want to delete this Report? </p>
                                                    <div class="modal-footer">
                                                        <div class="w3-container w3-padding-16">
                                                            <button onclick="deleteReport(event)" id="${id}" data-id="${id}" type="button" class="button button3 w3-right">Delete</button>
                                                            <button onclick="document.getElementById('id01').style.display='none'" type="button" class="button button3 w3-right">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- Continue from here -->
                                        </div>
                                    </div>
                                </div>`;

                    // Insert a new form with the updated title

                    console.log(item);

                    $(`#reportBox${id}`).replaceWith(item);
                }
            })
            }

            // Delete title input when the use escapes
            $(document).keyup(function(e) {

                let id = $(e.target).data("id");
                console.log($(e.target).data("id"));

                if (e.key === "Escape") {
                    console.log('This is escape');

                    $(`#title-field${id}`).toggle();
                }
            });

            // Create a new report
            $(document).ready(function() {
                $('#ajaxSave').click(function(e){

                    console.log(e);

                    e.preventDefault();

                    let reportForm = $('#reportForm');

                    console.log(reportForm.find('input[name="title"]')); // Continue from here

                    // Get the title value
                    let title = $('#title').val();

                    console.log(title);

                    // Clear the values of the input field
                    $('#title').attr('value', '');

                    // Show input field
                    $('#title-field0').show();

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')                            }
                    });

                    if (title !== '') {
                        $.ajax({
                            url: "{{ url('/reports') }}",
                            method: 'POST',
                            data: {
                                title: $('#title').val()
                            },
                            success: function(response) {
                                // let data = response.data;
                                // hide input field and hide it
                                $(`#title-field${id}`).toggle();


                                // Prepare the item to append
                                let item =  `<div class="w3-dropdown-click dropDown{{$report->id}}">
                                                <button class="w3-button" data-id="reportDrop{{$report->id}}" onclick="dropDown(event)">{{ $report->title }}</button>
                                                <div id="reportDrop{{$report->id}}" class="w3-dropdown-content w3-bar-block w3-white w3-card-4">
                                                    <a href="#" class="w3-bar-item w3-button">Rename</a>
                                                    <a onclick="document.getElementById('deleteModal{{$report->id}}').style.display='block'" href="#" class="w3-bar-item w3-button">Delete</a>
                                                </div>
                                            </div>

                                            <!-- Modal for Delete -->
                                            <div id="deleteModal{{$report->id}}" class="w3-modal">
                                                <div class="w3-modal-content w3-animate-opacity w3-card-1">

                                                    <form id="deleteForm{{$report->id}}">
                                                        @method('DELETE')
                                                        <header class="w3-container w3-teal">
                                                        <span onclick="" class="w3-button w3-display-topright">&times;</span>
                                                        <h2>Delete Report: {{ $report->title }}</h2>
                                                        </header>
                                                        <div class="w3-container">
                                                            <p> Are you sure you want to delete this Report? </p>
                                                            <div class="modal-footer">
                                                                <div class="w3-container w3-padding-16">
                                                                    <button onclick="deleteReport(event)" id="{{ $report->id }}" data-id="{{ $report->id }}" type="button" class="button button3 w3-right">Delete</button>
                                                                    <button onclick="document.getElementById('id01').style.display='none'" type="button" class="button button3 w3-right">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!-- Continue from here -->
                                                </div>
                                            </div>`;


                                $('#demoAcc').append(item);
                            }
                        })
                    }
                });
            });


            // Delete Report
            function deleteReport(e) {
                e.preventDefault();
                console.log('Delete report function');

                $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')                            }
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
        </script>
   </body>
</html>
