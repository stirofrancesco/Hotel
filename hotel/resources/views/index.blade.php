<form method="get" action="<?= e(route('rooms')); ?>">
    <?= e(csrf_field()); ?>
    <input type="number" name="type_id" id="type_id">
    <input type="date" name="checkin" id="checkin">
    <input type="date" name="checkout" id="checkout">
    <input type="submit" value="submit">
</form>