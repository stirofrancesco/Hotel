<form method="get" action="<?= e(route('rooms')); ?>">
    <div>
      <label for="checkin">Checkin</label>
      <input type="date" name="checkin" id="checkin">
    </div>
    <div>
      <label for="checkout">Checkout</label>
      <input type="date" name="checkout" id="checkout">
    </div>
    <input type="submit" value="submit">
</form>
