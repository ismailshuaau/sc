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
                     <li class="left-align show" id="report{{ $report->id }}">
                     {{ $report->title }}

                        <div class="dropdown-hover">
                            <span class="showme"><i class="fas fa-ellipsis-v"></i></span>

                            <ul class="dropdown-content bar-block border" style="right:0">
                                <li onclick="editReport(event)" class="edit bar-item button" id="ajaxEdit{{$report->id }}" data-id="{{ $report->id}}">Edit</li>
                                <li>
                                    <form id="deleteForm{{$report->id}}">
                                        @method('DELETE')
                                        <li onclick="deleteReport(event)" class="delete bar-item button" id="{{$report->id }}" data-id="{{ $report->id}}" >Delete</li>
                                    </form>
                                </li>
                            </ul>
                        </div>
                     </li>
                     @endforeach
                  </ul>
               </div>
               <div class="cotainer">
                  <form id="reportForm">
                     <i class="fas fa-trophy"></i>
                     <input type="text" name="title" value="" id="title">
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

        // After hovering a report-entry a button (3 points) appears to open a context menu
        // $(".fa-ellipsis-v").css( "display", "none" );

        // $("li").hover(function(){
        //     $(this).find(".fa-ellipsis-v").css( "display", "block" );
        //     }, function(){
        //     $(this).find(".fa-ellipsis-v").css( "display", "none" );
        // });

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
                    replaceWith(`<form id="updateForm${data.id}">@method('PUT')<input id="update${data.id}" name="title" type="text" value="${data.title}"><button onclick="updateForm(event)" data-id="${data.id}" type="submit" value="update"></button></form>`);

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
                console.log(title);
                // Prepare the form
                let item =
                `<li class="left-align" id="report${id}">
                    ${title}
                    <div class="dropdown-hover">
                        <button class="showhim">
                                <span class="showme"><i class="fas fa-ellipsis-v"></i></span>
                        </button>
                        <ul class="dropdown-content bar-block border" style="right:0">
                            <li onclick="editReport(event)" class="edit bar-item button" id="ajaxEdit${id}" data-id="${id}">Edit</li>
                            <form id="deleteForm${id}">
                                @method('DELETE')
                                <li onclick="deleteReport(event)" class="delete bar-item button" id="${id}" data-id="${id}">Delete</li>
                            </form>
                        </ul>
                    </div>
                </li>`;
                // Insert a new form with the updated title
                $(form).replaceWith(item);
               }
             })
         }

         // Delete title input when the use escapes
         $(document).keyup(function(e) {
             if (e.key === "Escape") {
                 console.log('This is escape');
                 $('[name ="title"]').attr('value', '');
                 $('[name ="title"]').attr('type', 'hidden');
             }
         });

         // Create a new report
         $(document).ready(function() {
             $('#ajaxSave').click(function(e){
                 e.preventDefault();

                 // Get the title value
                 let title = $('#title').val();
                 // Clear the values of the input field
                 $('#title').attr('value', '');

                 // Show input field
                 $('#title').attr('type', 'text');

                 $.ajaxSetup({
                     headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')                            }
                 });

                 if(title !== '') {
                     $.ajax({
                         url: "{{ url('/reports') }}",
                         method: 'POST',
                         data: {
                             title: $('#title').val()
                         },
                         success: function(response) {
                             let data = response.data;
                             // console.log(data);
                             let report = '<li>' + data.title + '<button onclick="edit(event.target)" class="edit" id="ajaxEdit' + data.id + '" data-id="' + data.id + '"  value="edit">Edit</button></li>';
                             // console.log(report);
                             $('#unordered-list').append(report);

                             // hide input field and hide it
                             $('#title').attr('type', 'hidden');
                         }
                     })
                 }
             });
        });
      </script>
   </body>
</html>
