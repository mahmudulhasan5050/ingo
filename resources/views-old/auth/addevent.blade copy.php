<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add new event</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='C:\Users\MSI\Desktop\javascript\myProjects\file.css' rel='stylesheet' type='file/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="AddEvent.css">



</head>

<body>
    <nav class="topnav navbar navbar-expand-md">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto" style="color:black;">
                <li class="nav-item">
                    <img class="img-logo" src="images/logo-1.png" alt="logo">
                </li>
                <li class="nav-item ">
                    <a class="nav-link" style="text-align:center;"
                        href="C:\Users\MSI\Downloads\Ingo.fi\about-ingo.html">INGO</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active" style="text-align:center;" href="#">Add a new
                        event</a>
                </li>
            </ul>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" style="text-align:right;"><a class="navbar-brand" href="#"><img class="img"
                            src="images/eye.png" alt="img"></a></li>
                <li class="nav-item" style="text-align:right;"><a class="navbar-brand" href="#"><img class="img"
                            src="images/NaviconVentilationFan_petit.png" alt="img"></a></li>
                <li class="nav-item" style="text-align:right;">
                    <a class="nav-link" href="#">Clear the cache</a>
                </li>
                <li class="nav-item" style="text-align:right;">
                    <a class="nav-link" href="#"><i class="fa fa-fw fa-calendar" target="_blank"></i>
                        Proceedings</a>
                </li>
                <li class="nav-item" style="text-align:right;">
                    <a class="nav-link" href="#"><i class="fa fa-fw fa-user-circle-o"
                            style="margin:3px ;"></i>Profile</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="sidebar">
        <div class="main-menu">
            <a class="active" href="#home"><i class="fa fa-fw fa-calendar" target="_blank"></i>Proceedings</a>
        </div>
        <div class="first-sidebar">
            <a href="#home">Proceedings</a>
            <a href="#Add_new">Add a new one</a>
            <a href="#Event_categories">Event categories</a>
            <a href="#Venues">Venues</a>
            <a href="#Organizers">Organizers</a>
        </div>
        <div class="second-sidebar">
            <a class="" href="#home"><i class="second fa fa-fw fa-sticky-note"></i>Media</a>
            <a href="#news"><i class="second fa fa-fw fa-archive" target="_blank"></i>Product</a>
            <a href="#contact"><i class="second fa fa-fw fa-thumb-tack" target="_blank"></i>coupons</a>
        </div>
        <div class="third-sidebar">
            <a href="#home"><i class="fa fa-fw fa-user"></i>Profile</a>
        </div>
        <div class="forth-sidebar">
            <a class="" href="#home"><i class="fa fa-fw fa-gear" target="_blank"></i>Store setting</a>
            <a href="#news"><i class="fa fa-fw fa-gear" target="_blank"></i>Orders</a>
        </div>
        <button class="hide_menu_button" href="#home"><i class="fa fa-fw fa-caret-square-o-left"
                target="_blank"></i>HIDE MENU</button>
    </div>
    <div class="main_body">
        <h3 class="main_page_heading">ADD A NEW EVENT</h3>
        <div class="row">
            <div class="accordion_list col-sm-8">
                <div class="add_title">
                    <input name="inputTitle" class="input_title form-control mr-sm-2" type="text"
                        placeholder="Add a title">
                </div>
                <button class="BUNTING save_draft"><i class="fa fa-fw fa-sticky-note"></i> ADD MEDIA</button>
                <button class="BUNTING save_draft"><i class="fa fa-flag"></i> ADD FONT AWESOME</button>
                <div class="textarea">
                    <textarea></textarea>
                </div>
                <div class="accordion_table">
                    <button class="accordion " style=" outline: none !important;">
                        <h5 style="margin:1%;">CALENDAR OF EVENTS<i style="float: right;box-sizing: inherit; "
                                class="fa fa-angle-down down_iconEstatus"></i></h5>
                    </button>
                    <div class="eventCategory_buttons_calendar">
                        <hr>
                        <h6>TIME & DAY</h6>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p>Start/End:</p>
                            </div>
                            <div class="col-sm-9">
                                <input id="liveCalenderDate" type="datetime-local" id="Test_DatetimeLocal"> - <input
                                    id="liveCalenderDate" type="datetime-local" id="Test_DatetimeLocal">
                                <label class="selectit" style="width: 100%; padding: 2%;">
                                    <input value="yes" class="checkbox" type="checkbox" name="EventHideFromUpcoming"
                                        style="margin:1%;">All day event</label>
                                <p style="opacity: 50%;">This event starts at 08:00 November 10 and ends at 17:00
                                    December
                                    7, 2022</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p>Event Chain:</p>
                            </div>
                            <div class="col-sm-9">
                                <button class="BUNTING">SCHEDULE MULTIPLE EVENTS</button>
                            </div>
                        </div>
                        <h6>LOCATION</h6>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p>Place:</p>
                                <p>Show map:</p>
                                <p>Show map link:</p>
                            </div>
                            <div class="col-sm-9">
                                <select name="Schedule" class="Event" style="height: 25%; margin-bottom: 3%;">
                                    <option value="Place">Create or find a Place</option>
                                    <option value="Platform">Platform pavilion</option>
                                    <option value="Askola">Askola church</option>
                                    <option value="Casa">Casa Maria</option>
                                    <option value="Hotel">Hotel Helka</option>
                                    <option value="Joensuu">Joensuu</option>
                                    <option value="Barracks">Barracks Club</option>
                                    <option value="Bonfire">Bonfire</option>
                                    <option value="Kokkola">Kokkola Central Field</option>
                                    <option value="Kontiolahti">Kontiolahti Biathlon Stadium</option>
                                    <option value="Kukonnotko">Kukonnotko camp center</option>
                                    <option value="Merenoja">Merenoja school</option>
                                    <option value="Meri">Meri- Teijo Bike Park</option>
                                    <option value="Mihikkikälä">Mihikkikälä</option>
                                    <option value="Naantali">Naantali</option>
                                    <option value="Nuuksio">Nuuksio Bikepark</option>
                                    <option value="Online">Online Teams</option>
                                    <option value="IS">IS V</option>
                                    <option value="Påminne">Påminne Bike Park</option>
                                    <option value="Turus">The best places in Turus, Finland</option>
                                    <option value="Radisson">Radisson Blu, Oulu</option>
                                    <option value="Retkeilijänkatu">Retkeilijänkatu 7A</option>
                                    <option value="Tampere">Tampere</option>
                                    <option value="Event">Event basement Pohoja</option>
                                    <option value="Töölönranta">Töölönranta</option>
                                    <option value="TurusenSaha">TurusenSaha</option>
                                    <option value="Vaasa">Vaasa VPK</option>
                                    <option value="Valo">Valo-Varmennusyhdistys ry</option>
                                    <option value="Zoom">Zoom</option>
                                </select>
                                <label class="selectit" style="width: 100%; padding: 1%;">
                                    <input value="yes" class="checkbox" type="checkbox" name="EventHideFromUpcoming"
                                        checked></label>
                                <label class="selectit" style="width: 100%; padding: 1%;">
                                    <input value="checked" class="checkbox" type="checkbox" name="EventHideFromUpcoming"
                                        checked></label>
                            </div>
                        </div>
                        <h6>ORGANIZERS</h6>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p>Organizer:</p>
                            </div>
                            <div class="col-sm-9">
                                <select name="Schedule" class="Event" style="height: 30%; margin-bottom: 3%;">
                                    <option value="Place">Create or find an Organizer</option>
                                    <option value="Platform">Alfa Oy Law Firm</option>
                                    <option value="Askola">Basla</option>
                                    <option value="Casa">Green Company Effect</option>
                                    <option value="Hotel">Habanero Mountainbikers Association</option>
                                    <option value="Joensuu">NNKY og Helsinki</option>
                                    <option value="Barracks">Ingo Cloud Service</option>
                                    <option value="Bonfire">Eastern Finland School of Physical Education ISLO</option>
                                    <option value="Kokkola">Kattotutka Oy</option>
                                    <option value="Kontiolahti">Keskipohjanmaa Liikunta</option>
                                    <option value="Kukonnotko">Kokkola Swimming club</option>
                                    <option value="Merenoja">Kokkola's Enterpreneurs</option>
                                    <option value="Meri">Lohja Trails ry</option>
                                    <option value="Mihikkikälä">Landscape planners association</option>
                                    <option value="Naantali">OT-222 Turku</option>
                                    <option value="Nuuksio">OT-957 & TC-1 Tampere</option>
                                    <option value="Online">Oy Vallila Interior Ab<Abbr></Abbr></option>
                                    <option value="IS">Pohjois Karjanlan Liikunta ry</option>
                                    <option value="Påminne">RT-21</option>
                                    <option value="Turus">Tango Royal Association</option>
                                    <option value="Radisson">TC-789 Turku</option>
                                    <option value="Retkeilijänkatu">Vaasa VPK</option>
                                    <option value="Tampere">Valo-Varmennusyhdistys ry</option>
                                </select>
                                <label class="selectit" style="width: 100%; padding: 1%;">
                                    <button class="BUNTING">ADD ANOTHER ORGANIZER</button></label>
                            </div>
                        </div>
                        <h6>EVENT WEBSITE</h6>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p>URL:</p>
                            </div>
                            <div class="col-sm-9">
                                <input name="inputpassword" class="inputpassword form-control mr-sm-2" type="password"
                                    placeholder="password" style="width: 60%;  padding: 1%; margin-bottom: 3%;">
                            </div>
                        </div>
                        <h6>ADDITIONAL FIELDS FOR THE EVENT</h6>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p>Age restriction:</p>
                            </div>
                            <div class="col-sm-9">
                                <select name="Schedule" class="Event" style="height: 90%; margin-bottom: 3%;">
                                    <option value="Place">Nothing</option>
                                    <option value="Platform">Age restriction: for all ages</option>
                                    <option value="Askola">Age limit:18+</option>
                                    <option value="Casa">Age limit: 21+</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion_table">
                    <button class="accordion " style=" outline: none !important;">
                        <h5 style="margin:1%;">ARTICLE IMAGE<i style="float: right;box-sizing: inherit; "
                                class="fa fa-angle-down down_iconEstatus"></i></h5>
                    </button>
                    <div class="eventCategory_buttons">
                        <hr>
                        <p for="Schedule"><a href="#">Set article image</a></p>
                        <p>We recommend a 16:9 aspect ratio for article images</p>
                    </div>
                </div>
                <div class="accordion_table">
                    <button class="accordion " style=" outline: none !important;">
                        <h5 style="margin:1%;">BUNTING<i style="float: right;box-sizing: inherit; "
                                class="fa fa-angle-down down_iconEstatus"></i></h5>
                    </button>
                    <div class="eventCategory_buttons">
                        <hr>
                        <button class="BUNTING save_draft"><i class="fa fa-plus"></i> TICKET</button>
                        <button class="BUNTING save_draft"><i class="fa fa-plus"></i> NEW FREE TICKET</button>
                        <button class="BUNTING  preview" style="float:right"><i class="fa fa-fw fa-gear"></i>
                            SETTINGS</button>
                    </div>
                </div>
            </div>
            <div class="accordion_list col-sm-4">
                <div class="accordion_table">
                    <button class="accordion " style=" outline: none !important;">
                        <h5 style="margin:1%;">EVENT CATEGORIES<i style="float: right;box-sizing: inherit; "
                                class="fa fa-angle-down down_icon"></i></h5>

                    </button>
                    <div class="eventCategory_buttons">
                        <hr>
                        <button class="accordion1_button">All event categories</button>
                        <button class="accordion1_button">The most used</button>
                        <div class="Selectlist">
                            <ul class="SelectlistUl">
                                <li>
                                    <label class="selectit" style="width: 100%;">
                                        <input type="checkbox" name="EventHideFromUpcoming" style="margin:1%;">Free
                                        time</label>
                                </li>
                                <li>
                                    <label class="selectit" style="width: 100%;">
                                        <input value="yes" type="checkbox" name="EventHideFromUpcoming"
                                            style="margin:1%;">Sport</label>
                                </li>
                                <li>
                                    <label class="selectit" style="width: 100%;">
                                        <input value="yes" type="checkbox" name="EventHideFromUpcoming"
                                            style="margin:1%;">Concert</label>
                                </li>
                                <li>
                                    <label class="selectit" style="width: 100%;">
                                        <input value="yes" type="checkbox" name="EventHideFromUpcoming"
                                            style="margin:1%;">Experience</label>
                                </li>
                                <li>
                                    <label class="selectit" style="width: 100%;">
                                        <input value="yes" type="checkbox" name="EventHideFromUpcoming"
                                            style="margin:1%;">Other</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion_table">
                    <button class="accordion " style=" outline: none !important;">
                        <h5 style="margin:1%;">EVENT STATUS<i style="float: right;box-sizing: inherit; "
                                class="fa fa-angle-down down_iconEstatus"></i></h5>
                    </button>
                    <div class="eventCategory_buttons">
                        <hr>
                        <label for="Schedule">Set Status:</label>
                        <select name="Schedule" class="Schedule">
                            <option value="volvo">Scheduled</option>
                            <option value="saab">Off</option>
                            <option value="opel">On the table</option>
                        </select>
                    </div>
                </div>
                <div class="accordion_table">
                    <button class="accordion " style=" outline: none !important;">
                        <h5 style="margin:1%;">PUBLISH<i style="float: right;box-sizing: inherit; "
                                class="fa fa-angle-down down_icon"></i></h5>
                    </button>
                    <div class="eventCategory_buttons">
                        <hr>
                        <button class="publish save_draft">SAVE DRAFT</button>
                        <button class="publish  preview" style="float:right">PREVIEW</button>
                        <div style="width: 100%">
                            <label for="Schedule"><i class="fa fa-key"></i>Status:</label>
                            <select name="Schedule" class="Schedule">
                                <option value="volvo">Under review</option>
                                <option value="saab">draft</option>
                            </select>
                        </div>

                        <div class="accordion">
                            <label for="Schedule"><i class="fa fa-eye"></i>Visibility:</label>
                        </div>
                        <div class="visibility">
                            <ul class="visibilityul">
                                <li>
                                    <label class="selectit" style="width: 100%;">
                                        <input type="radio" name="EventHideFromUpcoming"
                                            style="margin:1%;">Public</label>
                                </li>
                                <li>
                                    <div class="accordion">
                                        <label class="selectit" style="width: 100%;">
                                            <input value="yes" type="radio" name="EventHideFromUpcoming"
                                                style="margin:1%;">Password protection</label>
                                    </div>
                                    <div class="password_protection">
                                        <label class="password"></label>
                                        <input name="inputpassword" class="inputpassword form-control mr-sm-2"
                                            type="password" placeholder="password">
                                    </div>
                                </li>
                                <li>
                                    <label class="selectit" style="width: 100%;">
                                        <input value="yes" type="radio" name="EventHideFromUpcoming"
                                            style="margin:1%;">Private</label>
                                </li>
                            </ul>
                        </div>
                        <div style="width: 100%">
                            <label for="Schedule"><i class="fa fa-calendar"></i>Publish <b>now</b></label>
                        </div>
                    </div>
                </div>
                <div class="accordion_table">
                    <button class="accordion " style=" outline: none !important;">
                        <h5 style="margin:1%;">EVENT SETTINGS<i style="float: right; "
                                class="fa fa-angle-down down_icon"></i></h5>
                    </button>
                    <div class="eventCategory_buttons">
                        <hr>
                        <div class="Selectlist">
                            <ul style="list-style-type: none; padding: 0%;">
                                <li>
                                    <label class="selectit" style="width: 100%;">
                                        <input value="yes" class="checkbox" type="checkbox" name="EventHideFromUpcoming"
                                            style="margin:1%;">Hide Event from listings</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    /* Script for the panel from the nav bar*/
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }

    /* function for the live calendar */
    $(function () {
        $('#liveCalenderDate').datetimepicker();
    });

</script>
