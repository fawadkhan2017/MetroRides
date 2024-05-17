<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                Edit Coupon
                            </div>
                            <div class="col-md-6 text-end">
                                <a href="{{ route('admin.coupons') }}" class="btn btn-success">All Coupons</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <form class="row g-3" wire:submit.prevent="updateCoupon">
                            <div class="col-md-6">
                                <label for="code" class="form-label">Coupon code</label>
                                <input type="text" class="form-control" id="code" placeholder="Coupon code" wire:model="code">
                            </div>
                            <div class="col-md-6">
                                <label for="type" class="form-label">Coupon Type</label>
                                <select id="type" class="form-select" wire:model="type">
                                    <option value="">Select</option>
                                    <option value="fixed">Fixed</option>
                                    <option value="percent">Percent</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="value" class="form-label">Coupon Value</label>
                                <input type="text" class="form-control" id="value" placeholder="Coupon Value" wire:model="value">
                            </div>
                            <div class="col-md-6">
                                <label for="cart_value" class="form-label">Cart Value</label>
                                <input type="text" class="form-control" id="cart_value" placeholder="Cart Value" wire:model="cart_value">
                            </div>
                            <div class="col-md-6">
                                <label for="expiry_date" class="form-label">Expiry Date</label>
                                <input type="date" class="form-control" id="expiry_date" wire:model="expiry_date">
                                @error('expiry_date')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('expiry_date').addEventListener('change', function (e) {
                @this.set('expiry_date', e.target.value);
            });
        });
    </script>
@endpush

