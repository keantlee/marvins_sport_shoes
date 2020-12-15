<div class="modal fade " id="add-product-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">PRODUCT INVENTORY SYSTEM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- FORM --}}
                <form action="" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div>
                        {{-- Product Details --}}
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">Product Name</label>
                                <input id="product-name" name="name" placeholder="" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">Product Description</label>
                                <textarea id="product-description" name="item_description" placeholder="" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row col-md-9">
                                <div class="col-md-3">
                                    <label for="">Brand</label>
                                    <select id="product-brand" name="brand" class="form-control">
                                        @foreach(\App\Brand::all() as $brands)
                                            <option value="{{ $brands->id }}">{{ $brands->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Sizes</label>
                                    <select id="product-size" name="size" placeholder="Size" class="form-control">
                                        @foreach (\App\Size::all() as $sizes)
                                          <option value="{{ $sizes->id }}">{{ $sizes->size_number }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Quantity</label>
                                    <input id="product-quantity" name="quantity" placeholder="" class="form-control" type="number">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4 mb-1">Amount</div> 
                            <div class="input-group col-md-3 mb-3">
                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                <input id="product-price" name="price" type="number" class="form-control" step="0.1" min=0 required="">
                            </div>
                        </div>

                        {{-- Image --}}
                        <div class="form-group">
                            <div class="col-md-4">
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger modal-btns" data-dismiss="modal">Close</button>
                <button type="button" id="modal-save-product" class="btn btn-primary modal-btns">Save</button>
            </div>
        </div>
    </div>
</div>