<div id="{{ $modal['type'] }}" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{ $modal['title'] }}</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>名稱</label>
                        <input type="text" class="form-control room-title">
                    </div>
                    <div class="form-group">
                        <label>房型</label>
                        <input type="text" class="form-control room-type">
                    </div>
                    <div class="form-group">
                        <label>間數</label>
                        <input type="number" class="form-control room-total">
                    </div>
                    <div class="form-group">
                        <label>價格</label>
                        <input type="number" class="form-control room-price">
                    </div>
                    @if($modal['type'] == 'mod-room-modal')
                        <input type="hidden" class="form-control room-id">
                    @endif
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary submit">{{ $modal['submit'] }}</button>
            </div>
        </div>
    </div>
</div>