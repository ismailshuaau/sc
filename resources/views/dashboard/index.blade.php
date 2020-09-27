@extends('layouts.app')
@section('content')
<!-- Side Menu 1 -->
<div id="sidebar-one" class="w3-sidebar w3-bar-block w3-black large">
    <div>
        <div style="height:55px; padding: 8px; background: #18b776;">
            <img style='height:100%; width:100%; object-fit:contain;' src="{{ asset('img/logo.png') }}" alt="">
        </div>
    </div>
</div>

<div id="sidebar-two" class="w3-sidebar w3-bar-block border-grey-right" style="display:none">
    <div class="side-nav">
        <button class="color-trans" onclick="menuClose()">
            <div>
                <span class="side-nav-arrow"> <i class="fas fa-chevron-left arrow-light"></i> </span>
                <span class="side-nav-book "><i class="far fa-bookmark bookmark"></i>
                <span class="side-nav-text">Saved Reports</span></span>
            </div>
        </button>
    </div>
    <!-- Accordin Start -->
    <button id="accordinToggle" class="button w3-block w3-left-align list-close" onclick="openAccordin(event)">my
        Reports <i id="accordin-arrow" class="fas fa-chevron-right arrow-light"></i></button>
    <div id="reportAccord" class="w3-bar-block w3-hide w3-white">
        <div id="reportAppend">
            @foreach ($reports as $report)
            <div id="reportBox{{$report->id}}">
                <div class="w3-dropdown-click dropDown{{$report->id}}">
                    <div class="item-container">
                        <div>
                            <span>
                                <i class="fas fa-rocket color-valencia"></i>
                                <span class="item">{{ $report->title }}</span>
                            </span>
                            <i data-id="{{$report->id}}" onclick="dropDown(event)"
                                class="fas fa-ellipsis-v color-trans" style="float: right;"></i>
                        </div>
                    </div>
                    <div id="reportDrop{{$report->id}}" class="dropdown-content w3-bar-block w3-white w3-card-4">
                        <div href="#" onclick="editReport(event)" data-id="{{ $report->id }}"
                            class="w3-bar-item button">Rename</div>
                        <div onclick="deleteModal(event)" data-id="{{ $report->id }}" href="#"
                            class="w3-bar-item button">Delete</div>
                        <!-- <div onclick="document.getElementById('deleteModal{{$report->id}}').style.display='block'" href="#" class="w3-bar-item button">Delete</div> -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Add Report -->
        <div style="">
            <form id="reportForm" class="">
                <div class="">
                    <div id="title-field0" class="button" style="display:none;">
                        <i class="fas fa-rocket" style="color: #D65554"></i>
                        <span><input id="save" type="text" name="title" value="" data-id="0"></span>
                    </div>
                </div>
                <div class="w3-dropdown-click card">
                    <div class="item-container">
                        <i style="color: #19B776;" class="fas fa-plus-circle"></i>
                        <button onclick="saveReport(event)"
                            style="color: #19B776; font-weight: 500; background-color: transparent;" data-id="0"
                            type="submit" id="ajaxSave" value="save">Save Report</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- END / Add Report -->
    </div>
    <!-- Accordin End -->
</div>

<div id="main">
    <div class="teal">
        <div>
            <ul>
                <li>
                    <a href="#bookmark" style="">
                        <button id="openNav" class="teal border-grey nav-button" onclick="menuOpen()"><i class="far fa-bookmark light-gray"></i></button>
                    </a>
                </li>
                <li><a href="#users"></a></li>
                <li><a href="#date"></a></li>
                <li><a href="#country"></a></li>
            </ul>
        </div>

        <div class="w3-container container-right">

        </div>
    </div>


    <!-- List of the Reports in the database -->
    <script type='text/javascript' src="../js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</div>
@endsection
