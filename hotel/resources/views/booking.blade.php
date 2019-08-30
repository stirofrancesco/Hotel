@extends('base')

@section('content')
    <div class="py-3" style="background-position: center; background-image: url('http://www.nicdarkthemes.com/themes/hotel/wp/demo/chalet-wordpress-theme/wp-content/uploads/sites/7/2017/09/parallax6.jpg')">
        <h2 class="text-white text-center m-0">BOOKING</h2>
    </div>

    <div class="container pt-3 pb-5">
        <div class="row mt-sm-3">
            <div class="col-md-4">
                <div class="card" style="border: none;">
                    <div>
                        <img src="http://www.nicdarkthemes.com/themes/hotel/wp/demo/chalet-wordpress-theme/wp-content/uploads/sites/7/2017/09/room5-1024x664.jpg" class="card-img-top" alt="room-image">
                    </div>
                    <div class="card-body" style="background-color: #78635a;">
                        <h6 class="card-title text-uppercase text-white text-center"><small>Your reservation</small></h6>
                        <div class="row">
                            <div class="col-6">
                                <div class="text-white text-center text-uppercase p-3" style="font-size: .7rem; background-color: #715d55">
                                    <p class="m-0">check-in</p>
                                    <p class="m-0" style="font-size: 3rem">{{ \Carbon\Carbon::parse($checkin)->format('d') }}</p>
                                    <p class="m-0">{{ \Carbon\Carbon::parse($checkin)->format('F Y') }}</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-white text-center text-uppercase p-3" style="font-size: .7rem; background-color: #715d55">
                                    <p class="m-0">check-out</p>
                                    <p class="m-0" style="font-size: 3rem">{{ \Carbon\Carbon::parse($checkout)->format('d') }}</p>
                                    <p class="m-0">{{ \Carbon\Carbon::parse($checkout)->format('F Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center text-white" style="background-color: #715d55;">
                        <p style="font-size: 1.3rem; margin-bottom: 0;">&euro; {{ $standard_price }} / <small>night</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mt-4 mt-sm-0">
                <h4>Add Your Informations:</h4>

                <form method="post" action="<?= e(route('reservation', ['id_type'=> $type_id])) ?>">
                    <?= e(csrf_field()); ?>
                    <input type="hidden" name="start_date" value="{{$checkin}}">
                    <input type="hidden" name="end_date" value="{{$checkout}}">

                    <label for="name">Name</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" id="name" required pattern="[a-zA-Z 'àèéòùì]*">
                    </div>

                    <label for="surname">Surname</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="surname" id="surname" required pattern="[a-zA-Z 'àèéòùì]*">
                    </div>

                    <label for="email">Email</label>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>

                    <label for="arrival_time">Arrival time (hour)</label>
                    <div class="input-group mb-3">
                        <select class="custom-select" name="arrival_time" required>
                            @for ($i = 0; $i < 24; ++$i)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="text-center text-md-left mt-4 mt-md-0">
                        <input type="submit" class="btn" style="background-color: #78635a; color: #fff;" value="CHECKOUT">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
