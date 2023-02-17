@include('admin.header')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Create Venue </div>
                        </div>
                        <form id="exampleValidation" action="{{ url('admin/ingoevent/' . $ingoEvent['ingoEvent']->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method('PATCH')
                            <input type="hidden" name="id" id="id" value="{{ $ingoEvent['ingoEvent']->id }}" id="id" />
                            <div class="card-body">
                                <div class="form-group form-show-validation row">
                                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">
                                        Event Name
                                        <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="event" name="event"
                                            placeholder="Enter Event Name" value="{{ $ingoEvent['ingoEvent']->event }}" required>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Text
                                        <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="eventtext" name="eventtext"
                                            placeholder="Enter Text" value="{{ $ingoEvent['ingoEvent']->eventtext }}" required>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Start
                                        Date
                                        <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="start_date" name="start_date"
                                        value="{{ $ingoEvent['ingoEvent']->start_date }}" required>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Start
                                        Time
                                        <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <input type="time" class="form-control" id="start_time" name="start_time"
                                        value="{{ $ingoEvent['ingoEvent']->start_time }}" required>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">End Date
                                        <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="end_date" name="end_date"
                                        value="{{ $ingoEvent['ingoEvent']->end_date }}" required>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">End Time
                                        <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <input type="time" class="form-control" id="end_time" name="end_time"
                                        value="{{ $ingoEvent['ingoEvent']->end_time }}" required>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Venue
                                        <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <div class="select2-input">
                                            <select id="venueid" name="venueid" class="form-control" required>
                                                <option selected disabled>Choose </option>
                                                @foreach ($ingoEvent['venues'] as $item)
                        <option value="{{ $item->id }}" @if ($ingoEvent['ingoEvent']->venueid == $item->id) selected @endif>
                            {{ $item->title }}</option>
                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth"
                                        class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Organizer <span
                                            class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <div class="select2-input">
                                            <select id="organizerid" name="organizerid" class="form-control" required>
                                                <option selected disabled>Choose </option>
                                                @foreach ($ingoEvent['organizers'] as $item)
                        <option value="{{ $item->id }}" @if ($ingoEvent['ingoEvent']->organizerid == $item->id) selected @endif>
                            {{ $item->name }}</option>
                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Category
                                        <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <div class="select2-input">
                                            <select id="categoryid" name="categoryid" class="form-control" required>
                                                <option selected disabled>Choose </option>
                                                @foreach ($ingoEvent['categories'] as $item)
                                                <option value="{{ $item->id }}" @if ($ingoEvent['ingoEvent']->categoryid == $item->id) selected @endif>
                                                    {{ $item->name }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Event
                                        Website
                                        <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="event_website"
                                            name="event_website" value="{{ $ingoEvent['ingoEvent']->event_website }}" placeholder="Enter Event Website" required>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Age
                                        Restriction
                                        <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <div class="select2-input">
                                            <select id="age_restriction" name="age_restriction" class="form-control"
                                                required>
                                                <option selected disabled>Choose </option>
                                                @foreach ($ingoEvent['age_restriction_array'] as $item)
                        <option value="{{ $item }}" @if ($ingoEvent['ingoEvent']->age_restriction == $item) selected @endif>Age Limit:
                            {{ $item }}</option>
                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">
                                        Event Chain
                                        <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <div class="select2-input">
                                            <select id="eventchain" name="eventchain" class="form-control" required>
                                                <option selected disabled>Choose </option>
                                                @foreach ($ingoEvent['event_chain_array'] as $item)
                        <option value="{{ $item }}" @if ($ingoEvent['ingoEvent']->eventchain == $item) selected @endif>
                            {{ $item }}</option>
                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Ticket Amount

                                        <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="ticket_amount"
                                            name="ticket_amount" value="{{ $ingoEvent['ingoEvent']->ticket_amount }}" placeholder="Enter Ticket Amount" required>
                                    </div>
                                </div>

                                <div class="card-action">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="btn btn-success" type="submit" value="Update">
                                            <a href="{{ url('/admin/ingoevent') }}"
                                                class="btn btn-secondary">Cancel</a>
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
