@extends('layouts.master')

@section('content')
<div class="row">
    <div class="pull-right" style="margin-bottom: 10px;">
        <button type="button" class="btn btn-default add-room" data-toggle="modal" data-target="#add-room-modal">
            新增房間
        </button>
    </div>
</div>
<div class="row">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>名稱</th>
                    <th>房型</th>
                    <th>間數</th>
                    <th>價格</th>
                    <th>功能</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rooms as $room)
                    @include('partials.room_list_row', (array)$room)
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@foreach($modals as $modal)
    @include('partials.room_list_modal', $modal)
@endforeach

@endsection

@section('js')
<script>
    $(function () {
        $('#add-room-modal button.submit').on('click', function () {
            var url = '{{ route('admin.room_list.add') }}',
                data = {
                    title: $('#add-room-modal input.room-title').val(),
                    type: $('#add-room-modal input.room-type').val(),
                    total: $('#add-room-modal input.room-total').val(),
                    price: $('#add-room-modal input.room-price').val(),
                    _token: '{{ csrf_token() }}'
                },
                afterPost = function (resp) {
                    if (resp['type'] === 'success') {
                        location.href = '{{ route('admin.room_list') }}';
                    }
                };

            $.post(url, data, afterPost)
        });

        $('.mod-room').on('click', function() {
            var url = '{{ route('admin.room_list.sel') }}',
                data = {
                    id: $(this).attr('data-room-id'),
                    _token: '{{ csrf_token() }}'
                },
                afterPost = function (resp) {
                    if (resp['type'] === 'success') {
                        $('#mod-room-modal input.room-title').val(resp['room'].title);
                        $('#mod-room-modal input.room-type').val(resp['room'].type);
                        $('#mod-room-modal input.room-total').val(resp['room'].total);
                        $('#mod-room-modal input.room-price').val(resp['room'].price);
                        $('#mod-room-modal button.submit').attr('data-room-id', data.id);
                    }
                };

            $.post(url, data, afterPost)
        });

        $('#mod-room-modal button.submit').on('click', function () {
            var url = '{{ route('admin.room_list.mod') }}',
                data = {
                    id: $(this).attr('data-room-id'),
                    title: $('#mod-room-modal input.room-title').val(),
                    type: $('#mod-room-modal input.room-type').val(),
                    total: $('#mod-room-modal input.room-total').val(),
                    price: $('#mod-room-modal input.room-price').val(),
                    _token: '{{ csrf_token() }}'
                },
                afterPost = function (resp) {
                    if (resp['type'] === 'success') {
                        location.href = '{{ route('admin.room_list') }}';
                    }
                };

            $.post(url, data, afterPost)
        });

        $('.del-room').on('click', function () {
            var url = '{{ route('admin.room_list.del') }}',
                data = {
                    id: $(this).attr('data-room-id'),
                    _token: '{{ csrf_token() }}'
                },
                afterPost = function (resp) {
                    if (resp['type'] === 'success') {
                        location.href = '{{ route('admin.room_list') }}';
                    }
                };

            $.post(url, data, afterPost)
        });
    });
</script>
@endsection