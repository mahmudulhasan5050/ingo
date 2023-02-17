@include('admin.header')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">View Organizer</div>
                        </div>
                        <form>
                            <div class="card-body">
                                <div class="form-group form-show-validation row">
                                    <label for="name"
                                        class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Name:</label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 ">
                                            {{$organizer->name }} </label>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">
                                        Text :</label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 ">
                                            {{ $organizer->organizertext }} </label>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">
                                        Phone : </label>
                                    <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 ">
                                        {{ $organizer->phone }} </label>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Home Page :
                                    </label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 ">
                                            {{ $organizer->homepage }} </label>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Email :
                                    </label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 ">
                                            {{ $organizer->email }} </label>
                                    </div>
                                </div>

                            </div>
                            <div class="card-action">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ url('admin/organizer') }}" class="btn btn-secondary">Back</a>
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
