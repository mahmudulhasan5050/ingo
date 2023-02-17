@include('admin.header')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Coupon</div>
                        </div>
                        <form>
                            <div class="card-body">
                                <div class="form-group form-show-validation row">
                                    <label for="name"
                                        class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Name:</label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 ">
                                            {{ $category->name }} </label>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">
                                        Description :</label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 ">
                                            {{ $category->description }} </label>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">
                                        Path ID : </label>
                                    <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 ">
                                        {{ $category->pathid }} </label>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Date :
                                    </label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 ">
                                            {{ $category->number }} </label>
                                    </div>
                                </div>

                            </div>
                            <div class="card-action">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ url('admin/category') }}" class="btn btn-secondary">Back</a>
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
