@extends('base')

@section('content')
    <div style="position: absolute; left: 0; right: 0; top: 0; bottom: 0; z-index: 0; background-position: center; background-image: url('http://www.nicdarkthemes.com/themes/hotel/wp/demo/chalet-wordpress-theme/wp-content/uploads/sites/7/2017/09/parallax6.jpg')">
        <div class="container h-100 pb-4">
            <div class="row h-100 align-content-end">
                <div class="col-md-3 p-3 text-white" style="background-color: rgb(120, 99, 90);">
                    <h3>Quote post</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="col-md-3 p-3 text-white" style="background-color: #715d55;">
                    <h3>Hotel Info</h3>
                    <table cellspacing=12>
                        <tr>
                            <td>Check-in</td>
                            <td class="pl-2">14:00 - 19:00</td>
                        </tr>
                        <tr>
                            <td>Check-out</td>
                            <td class="pl-2">08:00 - 12:00</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6 p-3" style="background-color: #fff;">
                    @include('components.search-form')
                </div>
            </div>
        </div>
    </div>
@endsection
