@include('admin.header')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Add Coupon</div>
                        </div>
                        <form action="{{ url('admin/coupon') }}" method="post">
                            {!! csrf_field() !!}
                            <div class="card-body">
                                <div class="form-group form-show-validation row">
                                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Coupon
                                        Code
                                        <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <input type="text" name="coupon_code" required id="coupon_code"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">
                                        Description
                                        <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <input type="text" name="coupon_text" id="coupon_text" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Status <span
                                            class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8 d-flex align-items-center">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="status"
                                                value='inactive' id="state_inactive" checked='checked'><label
                                                for='state_inactive'>
                                                <label class="custom-control-label" for="male">Inactive</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="status"
                                                value='active' id="state_active"><label for='state_active'>
                                                <label class="custom-control-label" for="male">Active</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Date
                                        <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="date_time" name="date_time"
                                                required>
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-calendar-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Type of Coupon <span
                                            class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8 d-flex align-items-center">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="discount_type"
                                                value='percent' id="type_percent" checked='checked'>
                                            <label class="custom-control-label" for="male">Discount Percentage
                                                Amount</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="discount_type"
                                                value='amount' id="type_amount">
                                            <label class="custom-control-label" for="male">Discount Amount</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Discount
                                        Amount <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <div class="input-group">
                                            <input type="number" name="discount_amount" id="discount_amount"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="birth" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Capacity
                                        <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="capacity"
                                                id="capacity" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="btn btn-success" type="submit" value="Save">
                                        <a href="{{ url('/admin/coupon') }}" class="btn btn-secondary">Cancel</a>
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
