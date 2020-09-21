<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Story Clash</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet"  href="{{ asset('css/app.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" />
        <!-- Styles -->
        <!-- <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style> -->
    </head>
    <body>
        <!-- Side Menu 1 -->
        <div id="sidebar1">
            <div class="sidebar bar-block black large" style="width:40px; margin-right: 30px;">
                <a href="#" class="bar-item button"  onclick="menuOpen()"><i class="fas fa-bolt"></i></a>
                <a href="#" class="bar-item button"  onclick="menuOpen()"><i class="fas fa-pen" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Side Menu 2 -->
        <div id="sidebar2">
            <div class="sidebar bar-block card" style="display:none" id="sidebar">

                <div class="sidebar bar-block black large" style="width:40px">
                    <a href="#" class="bar-item button"  onclick="menuClose()"><i class="fas fa-bolt"></i></a>
                    <a href="#" class="bar-item button"  onclick="menuClose()"></i></a>
                </div>

                <div style="margin-left:40px">
                    <button onclick="menuClose()"><i class="fa fa-chevron-left"></i> <i class="far fa-bookmark">Saved Reports</i></button>

                    <button id="report-accordin" onclick="accordinOpen('report-container')" class="button block left-align"></i>my Reports <i id="accordin-arrow" class="fas fa-chevron-up"></i></button>
                    <div id="report-container" class="hide">
                        <ul id="unordered-list">
                            @foreach($reports as $report)
                            <li class="left-align" id="report{{ $report->id }}">
                            {{ $report->title }}
                                <div class="dropdown-hover">
                                    <button class="fas fa-ellipsis-v right-align"></button>
                                    <ul class="dropdown-content bar-block border" style="right:0">
                                        <li onclick="editReport(event)" class="edit bar-item button" id="ajaxEdit{{$report->id }}" data-id="{{ $report->id}}">Edit</li>
                                        <form id="deleteForm{{$report->id}}">
                                            @method('DELETE')
                                            <li onclick="deleteReport(event)" class="delete bar-item button" id="{{$report->id }}" data-id="{{ $report->id}}" >Delete</li>
                                        </form>
                                    </ul>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="cotainer">
                        <form id="reportForm">
                            <i class="fas fa-trophy"></i>
                            <input type="text" value="test" id="title">
                            <button  class="button btn-primary" type="submit" id="ajaxSave" value="save"><i class="fas fa-plus-circle"></i>Save Report</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>

          <!-- Second Sidebar -->
  <div id="main">

        <div>
            <div class="container">
                <h1>StoryClash</h1>
            </div>
        </div>



        </div>


            <!-- List of the Reports in the database -->
            <!-- <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
            <script type='text/javascript' src="../js/jquery-3.5.1.min.js"></script>
            <script>
                function menuOpen() {
                    document.getElementById("main").style.marginLeft = "25%";
                    document.getElementById("sidebar").style.width = "25%";
                    document.getElementById("sidebar").style.display = "block";
                    document.getElementById("navbar").style.display = 'none';
                    }
                    function menuClose() {
                    document.getElementById("main").style.marginLeft = "0%";
                    document.getElementById("sidebar").style.display = "none";
                    document.getElementById("navbar").style.display = "inline-block";
                    }

                    // Accordin Open and Close
                    function accordinOpen(id) {
                        var x = document.getElementById(id);
                        console.log(x);
                        if (x.className.indexOf("show") == -1) {
                                // Accordin expand
                                $('#accordin-arrow').replaceWith('<i id="accordin-arrow" class="fas fa-chevron-down"></i>');

                                x.className += "show";
                            } else {
                                // Accordin collapse
                                $('#accordin-arrow').replaceWith('<i id="accordin-arrow" class="fas fa-chevron-up"></i>');

                                x.className = x.className.replace("show", "");
                            }
                    }
            </script>
            <script>
                // Check if the page loads
                $(document).ready(function() {
                    console.log( "document loaded" );
                    // On page load, send an ajax GET request to load all reports
                    // $.ajax({
                    //     url: '/reports',
                    //     method: 'GET',
                    //     success: function(response) {
                    //         console.log(response);
                    //     }
                    // })
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
                            $(`#report${id}`).remove();
                        }
                    })

                }


                // Load the edit report form
                function editReport(e) {
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
                            $(`#report${data.id}`).
                            replaceWith(`<form id="updateForm${data.id}">@method('PUT')<input id="update${data.id}" name="title" type="text" value="${data.title}"><button onclick="updateForm(event)" data-id="${data.id}" type="submit" value="update">Update</button></form>`);

                        }
                    })
                }

                // Update report from database
                function updateForm(e) {
                    e.preventDefault();
                    console.log(e);
                    console.log('This is update form');

                    $.ajaxSetup({
                      headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')                            }
                    });

                    // Get id
                    let id = $(e.target).data("id");
                    let url = `/reports/${id}`;

                    // Get From data
                    let formId = `#updateForm${id}`;
                    let form = $(formId);
                    // let data = $('form').val();
                    let data = $(formId).serialize();
                    console.log(data);

                    $.ajax({
                      url: url,
                      method: 'POST',
                      data: data,
                      success: function(response) {
                        console.log(response);
                      }
                    })
                }

                // Delete title input when the use escapes
                $(document).keyup(function(e) {
                    if (e.key === "Escape") {
                        console.log('This is escape');
                        $('#title').attr('value', '');
                        $('#title').attr('type', 'hidden');
                    }
                });

                // Create a new report
                $(document).ready(function() {
                    $('#ajaxSave').click(function(e){
                        e.preventDefault();

                        // Show input field
                        $('#title').attr('type', 'text');
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')                            }
                        });
                        $.ajax({
                            url: "{{ url('/reports') }}",
                            method: 'POST',
                            data: {
                                title: jQuery('#title').val()
                            },
                            success: function(response) {
                                let data = response.data;
                                // console.log(data);
                                let report = '<li>' + data.title + '<button onclick="edit(event.target)" class="edit" id="ajaxEdit' + data.id + '" data-id="' + data.id + '"  value="edit">Edit</button></li>';
                                // console.log(report);
                                $('#unordered-list').append(report);
                            }
                        })
                    });
                });
            </script>
    </body>
</html>
