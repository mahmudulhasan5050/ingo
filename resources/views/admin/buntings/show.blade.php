@include('admin.header')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Bunting</div>
                        </div>
                        <form>
                            <div class="card-body">
                                <div class="form-group form-show-validation row">
                                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Bunting
                                        Type :</label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">
                                            {{ $bunting->type }} </label>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">
                                        Description :</label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">
                                            {{ $bunting->type_text }} </label>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">
                                        Sell Starts : </label>
                                    <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">
                                        {{ $bunting->start_sell }} </label>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Sell Ends :
                                    </label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">
                                            {{ $bunting->end_sell }} </label>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Price :
                                    </label>
                                    <div class="col-lg-4 col-md-9 col-sm-8 d-flex align-items-center">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">
                                            {{ $bunting->price }} </label>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Capacity
                                        :
                                    </label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">
                                            {{ $bunting->capacity }} </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ url('admin/bunting') }}" class="btn btn-secondary">Back</a>
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
