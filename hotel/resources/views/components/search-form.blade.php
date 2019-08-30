<form method="get" action="<?= e(route('rooms')); ?>">
    <div class="row pr-3">
        <div class="col-8">
            <div>
                <label for="checkin">Checkin</label>
                <input type="date" name="checkin" id="checkin" class="form-control" value="{{ Request::get('checkin') }}" required min="{{ Carbon\Carbon::today()->format('Y-m-d') }}">
            </div>
            <div>
                <label for="checkout">Checkout</label>
                <input type="date" name="checkout" id="checkout" class="form-control" value="{{ Request::get('checkout') }}" required min="{{ Carbon\Carbon::today()->format('Y-m-d') }}">
            </div>
        </div>
        <div class="col-4 align-self-center">
            <input type="submit" class="btn btn-block" style="background-color: #715d55; color: #fff;" value="Submit">
        </div>
    </div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('checkin').addEventListener('change', function(event) {
            const checkout = document.getElementById('checkout')
            checkout.setAttribute('min', this.value);
            if (checkout.value < this.value) {
                checkout.value = this.value;
            }
        })
    });
</script>