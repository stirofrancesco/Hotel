<form method="post" action="<?= e(route('reservation', ['id_type'=> $type_id])) ?>">
    <?= e(csrf_field()); ?>
    <input type="hidden" name="start_date" value="{{$checkin}}">
    <input type="hidden" name="end_date" value="{{$checkout}}">
    <div>
      <label for="name">Name</label>
      <input type="text" name="name" id="name">
    </div>
    <div>
      <label for="surname">Surname</label>
      <input type="text" name="surname" id="surname">
    </div>
    <div>
      <label for="email">Email</label>
      <input type="text" name="email" id="email">
    </div>
    <div>
      <label for="arrival_time">Arrival_time</label>
      <input type="text" name="arrival_time" id="arrival_time">
    </div>
    <input type="submit" value="send">
</form>
