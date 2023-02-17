@include('admin.header')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">View Venue</div>
                        </div>
                        <form>
                            <div class="card-body">
                                <div class="form-group form-show-validation row">
                                    <label for="name"
                                        class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Event:</label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 ">
                                            {{ $ingoEvent['ingoEvent']->event }} </label>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">
                                        Text :</label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 ">
                                            {{ $ingoEvent['ingoEvent']->eventtext }} </label>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">
                                        Start Date : </label>
                                    <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 ">
                                        {{ $ingoEvent['ingoEvent']->start_date }} </label>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Start Time :
                                    </label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 ">
                                            {{ $ingoEvent['ingoEvent']->start_time }} </label>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">End Date :
                                    </label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 ">
                                            {{ $ingoEvent['ingoEvent']->end_date }} </label>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">End Time :
                                    </label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 ">
                                            {{ $ingoEvent['ingoEvent']->end_time }} </label>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Zip :
                                    </label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 ">
                                            {{ $ingoEvent['ingoEvent']->zip }} </label>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Venue :
                                    </label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 ">
                                            {{ $ingoEvent['venueName'] }} </label>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Organizer :
                                    </label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 ">
                                            {{ $ingoEvent['organizerName'] }} </label>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Category :
                                    </label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 ">
                                            {{ $ingoEvent['categoryName'] }} </label>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Event Website :
                                    </label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 ">
                                            {{ $ingoEvent['ingoEvent']->event_website }} </label>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Age Restriction :
                                    </label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 ">
                                            {{ $ingoEvent['ingoEvent']->age_restriction }} </label>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Event Chain :
                                    </label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 ">
                                            {{ $ingoEvent['ingoEvent']->eventchain }} </label>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Ticket Amount :
                                    </label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 ">
                                            {{ $ingoEvent['ingoEvent']->ticket_amount }} </label>
                                    </div>
                                </div>

                            </div>
                            <div class="card-action">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ url('admin/ingoevent') }}" class="btn btn-secondary">Back</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.footer')

