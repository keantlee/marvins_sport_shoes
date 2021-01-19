{{-- <div id="delete-product-modal" class="modal fade" role="dialog">
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
</div> --}}

<div class="modal fade" id="delete-product-modal" name="deleteModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form method="post" id="delete_modal_form" data-route="/home/dashboard/admin/product-inventory" class="form-horizontal">
                    {{ csrf_field() }}
                    {{-- {{ method_field("DELETE") }} --}}
                    <div class="form-group">
                        <div class="text-center">
                            <span id="delete_img"></span>
                        </div>
                        <div class="text-center">
                            <span id="delete_name"></span>
                        </div>
                    </div>
                    <div class="delete_footer modal-footer">
                        <button type="submit" class="btn btn-primary modal-btns" id="delete_button" name="delete_button">
                            Confirm </button>
                        <button type="button" class="btn btn-danger modal-btns" data-dismiss="modal"> Cancel </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
