@extends('base')

@section('content')
    <div class="p-3 text-white" style="background-color: rgba(120, 99, 90, .7);">
        @include('components.search-form')
    </div>

    <div class="container pt-3 pb-5">
        <div class="row">
            <div class="col">
                <h4>Looking for free room between {{ \Carbon\Carbon::parse(Request::get('checkin'))->format('Y F d') }} and {{ \Carbon\Carbon::parse(Request::get('checkout'))->format('Y F d') }}</h4>
            </div>
        </div>
        <div class="row">
            @foreach($rooms as $room)
                @if($room->free > 0)
                    <div class="col-md-4 mt-4">
                        <div class="card">
                            <img src="http://www.nicdarkthemes.com/themes/hotel/wp/demo/chalet-wordpress-theme/wp-content/uploads/sites/7/2017/09/room5-1024x664.jpg" class="card-img-top" alt="room-image">
                            <div class="card-body">
                                <h5 class="card-title">{{$room->description}}</h5>
                                {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                                <p>Only {{$room->free}} left</p>
                                <a href="book/{{$room->type_id}}?{{ Request::getQueryString() }}" class="btn btn-block" style="border: 1px solid #715d55; color: #715d55; font-weight: bold;">BOOK NOW FOR &euro;{{$room->standard_price}}</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
