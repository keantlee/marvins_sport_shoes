{{-- Product Item Delete Modal --}}
<div id="confirmDelete" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Confirm Delete</h4>
            </div>
            <div class="modal-body">
                <p>Do you want to delete the item?</p>
            </div>
            <div class="modal-footer">
                <form method="POST" action="">
                    {{ csrf_field() }}
                    {{ method_field("DELETE") }}
                    <button type="submit" class="btn btn-primary">Confirm</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>