@include('header')

<div class="body-main">
    <div class="body-slideshow">
        <div id="testimonials-slideshow" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active slide-element">
                    <img src="{{ asset('images/outdoors-park-ingo.jpg') }}" alt="First slide">
                    <h1 class="testimonials-h2">The most sensible event registration <br> system in the universe - for
                        all kinds of <br>events. Starting from 0€!!!</h1>
                    <a  href="{{ url('/login') }}" class="btn register-button" type="button" name="button">Register as an event
                        organizer</a>
                </div>
                <div class="carousel-item slide-element">
                    <h1 class="testimonials-h2">You as an event organizer?</h1>
                    <h4 class="testimonials-h2">All you have to do is register </h4>
                    <a href="{{ url('/login') }}" class="btn register-button" type="button" name="button">Register now</a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonials-slideshow"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonials-slideshow"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="ingo-beta">
        <h2 class="ingo-beta-heading">Ingo beta</h2>
        <p class="ingo-beta-text">Free registration system for free events and very affordable for a fee. Forget event
            registrations by e-mail, <br> Excel and even by phone. Money from tickets will immediately go to your own
            account and collection
            worries will be history.</p>
        <button class="btn register-button" type="button" name="button">About Ingo</button>
    </div>

    <div class="body-events-content">
        <h2>Latest Events</h2>

        <p>Below you find latest public events. By clicking on the event, you can also see more detailed information
            about the organizer.</p>
    </div>



    <div class="events-contents-slide">
        <form class="search-form" role="search" id="form">
            <button class="body-search-button">
                <svg viewBox="0 0 1024 1024">
                    <path class="path1"
                        d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z">
                    </path>
                </svg>
            </button>
            <input class="search-input" type="search" id="query" name="q" placeholder="Search for events..."
                aria-label="Search through site content">
            <button class="btn register-button find-events-button" type="button" name="button">Find Events</button>
            <div class="search-menu-dropdown">
                <button onclick="myFunction()" class="search-button">Photo <div id="arrow-d" class="arrow"></div>
                    </button>
                <div id="myDropdown" class="serach-dropdown-options">
                    <a class="dropdown-items" href="#">List</a>
                    <a class="dropdown-items" href="#">Month</a>
                    <a class="dropdown-items" href="#">Day</a>
                    <a class="dropdown-items" href="#">Week</a>
                    <a class="dropdown-items" href="#">Map</a>
                </div>
            </div>
        </form>

        <!-- javascript for the search bar -->
        <script>
            const f = document.getElementById('form');
            const q = document.getElementById('query');
            const google = 'https://www.google.com/search?q=site%3A+';

            function submitted(event) {
                event.preventDefault();
                const url = google + site + '+' + q.value;
                const win = window.open(url, '_blank');
                win.focus();
            }
            f.addEventListener('submit', submitted);
        </script>

        <!-- javascript for search dropdown -->
        <script>
            function myFunction() {
                document.getElementById("arrow-d").classList.toggle("arrow-down");
                document.getElementById("myDropdown").classList.toggle("show");
            }

            window.onclick = function(event) {
                if (!event.target.matches(".search-button")) {
                    document.getElementById("myDropdown").classList.remove("show");
                    document.getElementById("arrow-d").classList.remove("arrow-down");
                }
            }
        </script>


        <div class="upcoming-events">
            <div>
                <i class="event-arrow left arrow-left"> </i>
                <i class="event-arrow right arrow-right"> </i>
            </div>
            <div><button class="upcoming-button" type="button" name="button">Today</button></div>
            <button onclick="showCalander()" class="calnder-button" type="button" name="button">Upcoming <div
                    id="arrowCalander" onclick="myFunction()" class="arrow-calander arrow-calander-up"></div></button>
            <div id="element" />
            <script>
                // initialize the Calendar component
                function showCalander() {
                    document.getElementById("arrowCalander").classList.toggle("arrow-down");
                    var calendar = new ej.calendars.Calendar();
                    // Render the initialized button.
                    calendar.appendTo('#element')
                    document.getElementById("element").classList.toggle("show-calander");
                }
            </script>
        </div>
    </div>

    <div class="container-fluid event-row">

        <div class="row">
            <div class="col event-col col-lg-4 col-md-6">
                <img class="event-image" src="{{ asset('images/Sanna-hoidossa-vaaka.jpeg') }}" alt="first-event">
                <div class="event-description">
                    <div class="event-content-text">
                        <p class="event-short-month">OCT</p>
                        <p class="event-day">21</p>
                    </div>
                    <div class="event-content-text">
                        <p class="event-full-date">October 6, 2021 - December 21, 2022</p>
                        <a class="event-name" href="#">Äänimaljahoito</a>
                        <div class="ticket-link"><a class="get-ticket" href="#">Get Tickets</a>
                            <p class="ticket-price">60,00€ – 90,00€</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col event-col col-lg-4 col-md-6">
                <img class="event-image" src="{{ asset('images/Sanna-hoidossa-vaaka.jpeg') }}" alt="first-event">
                <div class="event-description">
                    <div class="event-content-text">
                        <p class="event-short-month">OCT</p>
                        <p class="event-day">21</p>
                    </div>
                    <div class="event-content-text">
                        <p class="event-full-date">October 6, 2021 - December 21, 2022</p>
                        <a class="event-name" href="#">Äänimaljahoito</a>
                        <div class="ticket-link"><a class="get-ticket" href="#">Get Tickets</a>
                            <p class="ticket-price">60,00€ – 90,00€</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col event-col col-lg-4 col-md-6">
                <img class="event-image" src="{{ asset('images/Sanna-hoidossa-vaaka.jpeg') }}" alt="first-event">
                <div class="event-description">
                    <div class="event-content-text">
                        <p class="event-short-month">OCT</p>
                        <p class="event-day">21</p>
                    </div>
                    <div class="event-content-text">
                        <p class="event-full-date">October 6, 2021 - December 21, 2022</p>
                        <a class="event-name" href="#">Äänimaljahoito</a>
                        <div class="ticket-link"><a class="get-ticket" href="#">Get Tickets</a>
                            <p class="ticket-price">60,00€ – 90,00€</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col event-col col-lg-4 col-md-6">
                <img class="event-image" src="{{ asset('images/Sanna-hoidossa-vaaka.jpeg') }}" alt="first-event">
                <div class="event-description">
                    <div class="event-content-text">
                        <p class="event-short-month">OCT</p>
                        <p class="event-day">21</p>
                    </div>
                    <div class="event-content-text">
                        <p class="event-full-date">October 6, 2021 - December 21, 2022</p>
                        <a class="event-name" href="#">Äänimaljahoito</a>
                        <div class="ticket-link"><a class="get-ticket" href="#">Get Tickets</a>
                            <p class="ticket-price">60,00€ – 90,00€</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col event-col col-lg-4 col-md-6">
                <img class="event-image" src="{{ asset('images/Sanna-hoidossa-vaaka.jpeg') }}" alt="first-event">
                <div class="event-description">
                    <div class="event-content-text">
                        <p class="event-short-month">OCT</p>
                        <p class="event-day">21</p>
                    </div>
                    <div class="event-content-text">
                        <p class="event-full-date">October 6, 2021 - December 21, 2022</p>
                        <a class="event-name" href="#">Äänimaljahoito</a>
                        <div class="ticket-link"><a class="get-ticket" href="#">Get Tickets</a>
                            <p class="ticket-price">60,00€ – 90,00€</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col event-col col-lg-4 col-md-6">
                <img class="event-image" src="{{ asset('images/Sanna-hoidossa-vaaka.jpeg') }}" alt="first-event">
                <div class="event-description">
                    <div class="event-content-text">
                        <p class="event-short-month">OCT</p>
                        <p class="event-day">21</p>
                    </div>
                    <div class="event-content-text">
                        <p class="event-full-date">October 6, 2021 - December 21, 2022</p>
                        <a class="event-name" href="#">Äänimaljahoito</a>
                        <div class="ticket-link"><a class="get-ticket" href="#">Get Tickets</a>
                            <p class="ticket-price">60,00€ – 90,00€</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <hr class="event-line">

        <div class="event-changer">
            <div>
                <button class="event-button-previous" type="button" name="button">
                    <i class="event-arrow left arrow-left event-arrow-Previous"> </i>
                    Previous Events
                </button>
                <button class="event-button-next" type="button" name="button">
                    Next Events
                    <i class="event-arrow right arrow-right event-arrow-Next"> </i>
                </button>
            </div>

            <button type="button" class="btn btn-outline-primary sub-to-calander">Subscribe to Calander </button>

            <button class="btn register-button all-events" type="button" name="button">All Events</button>

        </div>

    </div>

</div>

<div class="instagram-posts">
    instagram
</div>
</body>
@include('footer')
