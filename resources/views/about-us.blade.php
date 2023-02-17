
@include('header')




    <div class="body-main">

        <div class="banner-image">
            <div class="banner-image-text">
                <p class="">Yyy – kaa – collect and you are ready to go</p>
            </div>
        </div>

        <div class="ingo-beta ingo-beta-about">
            <div class="ingo-help">
                <div class="icon-background">
                    <i style="color: white; font-size:48px;" class="calendar-icon fa-solid fa-calendar"></i>
                </div>
                <h4>How can Ingo help you?</h4>
                <div class="first-col-para1">
                    <p class="first-col-para-text1">The customized system originally developed for Finnish sports clubs
                        is now an event service implemented for everyone. Tens of thousands of Finns have gone running,
                        swimming or, for example, wrestling through
                        the INGO system. Now this service is accessible to everyone. Of course, the event can be
                        anything from darts competitions to children's camps.</p>
                </div>
                <div class="first-col-para2">
                    <p class="first-col-para-text2">The sale of products is also possible in the future. YES, with
                        product management and the e-commerce system, you can add products to be sold to the event.</p>
                </div>
            </div>

            <div class="pricing-principle">
                <div class="icon-background">
                    <i style="color: white; font-size:48px;" class="calendar-icon fa-solid fa-calendar"></i>
                </div>
                <h4>Pricing Principle</h4>
                <div class="second-col-para1">
                    <p class="second-col-para-text1">The idea has been to create a service that removes the organizers'
                        last reasons to continue sending invoices and browsing Excel. The system is simple and
                        completely under the control of the organizer. Still,
                        the pricing is kept as low as possible so that even small clubs can use it.</p>
                </div>
                <div class="second-col-para2">
                    <p class="second-col-para-text2">A free event is really free, and in paid events the cost is
                        practically less than you could pay with any bank payment in Finland. The idea is to keep the
                        price low with light personnel costs and the
                        possibility of advertising, so-called with a "king advertisement". The organizer using the royal
                        advertisement may even be able to make money from the solution.</p>
                </div>
            </div>
        </div>

        <div class="take-contact">
            <h2 class="take-contact-header">Take Contact</h2>

            <form class="take-contact-form" action="index.html" method="post">
                <input class="int" type="text" name="name" placeholder="Name" />
                <input class="int em" type="email" name="email" placeholder="E-mail" /><br>
                <textarea class="chr" name="message" height="200px;" width="100%" placeholder="Message"></textarea><br>
                <input class="form-submit btn register-button" type="submit" value="send" />
            </form>

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
                <input class="search-input" type="search" id="query" name="q"
                    placeholder="Search for events..." aria-label="Search through site content">
                <button class="btn register-button find-events-button" type="button" name="button">Find
                    Events</button>
                <div class="search-menu-dropdown">
                    <button onclick="myFunction()" class="search-button">Photo <div id="arrow-d" class="arrow">
                        </div></button>
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
                        id="arrowCalander" onclick="myFunction()" class="arrow-calander arrow-calander-up"></div>
                </button>
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
                    <img class="event-image" src="resources/images/Sanna-hoidossa-vaaka.jpeg" alt="first-event">
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
                    <img class="event-image" src="resources/images/Sanna-hoidossa-vaaka.jpeg" alt="first-event">
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
                    <img class="event-image" src="resources/images/Sanna-hoidossa-vaaka.jpeg" alt="first-event">
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
                    <img class="event-image" src="resources/images/Sanna-hoidossa-vaaka.jpeg" alt="first-event">
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
                    <img class="event-image" src="resources/images/Sanna-hoidossa-vaaka.jpeg" alt="first-event">
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
                    <img class="event-image" src="resources/images/Sanna-hoidossa-vaaka.jpeg" alt="first-event">
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

    @include('footer')
