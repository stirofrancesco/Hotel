<table>
    <thead>
        <tr>
            <th>type_id</th>
            <th>standard_price</th>
            <th>free</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($rooms as $room)
            @if($room->free > 0)
                <tr>
                    <td>{{$room->type_id}}</td>
                    <td>{{$room->standard_price}}</td>
                    <td>{{$room->free}}</td>
                    <td>
                        <a href="book/{{$room->type_id}}">
                            book
                        </a>
                    </td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>
