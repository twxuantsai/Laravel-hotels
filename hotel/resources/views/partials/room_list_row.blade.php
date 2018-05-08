<tr>
    <td><b>{{ $room->title }}</b></td>
    <td>{{ $room->type }}</td>
    <td>
        <span>{{ $room->current }}</span> / <span>{{ $room->total }}</span>
    </td>
    <td>{{ $room->price }}</td>
    <td>
        <button type="button" class="btn btn-default btn-xs mod-room" data-room-id="{{ $room->id }}" data-toggle="modal" data-target="#mod-room-modal">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
        </button>
        <button type="button" class="btn btn-default btn-xs del-room" data-room-id="{{ $room->id }}">
            <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
        </button>
    </td>
</tr>