<div id="delete-product-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
            </div>
            <div class="modal-body">
                <p>Do you want to delete the book?</p>
            </div>
            <div class="modal-footer">
                <form method="POST" action="">
                    {{ csrf_field() }}
                    {{ method_field("DELETE") }}
                    <button type="button" class="btn btn-danger modal-btns" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary modal-btns">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>