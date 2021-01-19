<div class="modal fade " id="add-product-modal" name="add-product-modal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD PRODUCT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span id="success_result"></span>
                <form id="add_modal_form" class="add_modal_form" data-route="{{ route('product-inventory.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <span id="name_error"></span>
                                    <label for="">Product Name</label>
                                    <input id="product-name" name="name" class="form-control" type="text">
                                </div>
                            </div>
        
                            <div class="form-group">
                                <div class="col-md-12">
                                    <span id="item_desc_error"></span>
                                    <label for="">Product Description</label>
                                    <textarea id="product-description" name="item_description" placeholder=""
                                        class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row col-md-12">
                                    <div class="col-md-4">
                                        <label for="">Brand</label>
                                        <select id="product-brand" name="brand_id" class="form-control">
                                            @foreach(\App\Brand::all() as $brands)
                                            <option value="{{ $brands->id }}">{{ $brands->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Sizes</label>
                                        <select id="product-size" name="size_id" placeholder="Size" class="form-control">
                                            @foreach (\App\Size::all() as $sizes)
                                            <option value="{{ $sizes->id }}">{{ $sizes->size_number }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Color</label>
                                        <select id="product-color" name="color_id" placeholder="Size" class="form-control">
                                            @foreach (\App\Color::all() as $colors)
                                            <option value="{{ $colors->id }}">{{ $colors->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <span id="quantity_error"></span>
                                    <label for="">Quantity</label>
                                    <input id="product-quantity" name="quantity" placeholder="" class="form-control"
                                        type="number">
                                </div>
                            </div>

                            <div class="form-group">
                                <span id="price_error"></span>
                                <div class="col-md-12 mb-1">Amount</div>
                                <div class="input-group col-md-12 mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                    <input id="product-price" name="price" type="number" class="form-control" step="0.1" min=0>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-12 mb-2">
                                    <span id="image_error"></span>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    {{-- <div id="img-here" class="img-here"></div> --}}
                                    <img class="load-first-image" src="/images/shoes/air jordan 5 retro  (1).jpg" alt="" sizes="" srcset="">
                                    <img class="load-second-image" src="/images/shoes/air jordan 5 retro  (1).jpg" alt="" sizes="" srcset="">
                                    <img class="load-third-image" src="/images/shoes/air jordan 5 retro  (1).jpg" alt="" sizes="" srcset="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="mt-4">
                    <div class="form-group">
                        <button type="button" class="btn btn-danger modal-btns" data-dismiss="modal">Close</button>
                        <button type="submit" id="modal-save-product" class="btn btn-primary modal-btns">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>