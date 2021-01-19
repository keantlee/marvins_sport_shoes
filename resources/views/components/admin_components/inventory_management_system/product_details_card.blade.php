<form id="" class="">
    <div class="row product-container">

        @foreach($shoes as $shoe)

        <div class="col-md-7 mt-3 mb-5">
            {{-- The main product picture --}}
            <div id="product-image">
                <img id="show_img" src="/{{ $shoe->img }}" class="image-item-01">
            </div>
            <br>
            {{-- 3 images --}}
            <div class="image-list">
                <img class="image-item" src="/{{ $shoe->img }}" alt="" sizes="" srcset="" onclick="myFunction(this);">
                <img class="image-item" src="/images/shoes/air jordan 5 retro  (1).jpg" alt="" sizes="" srcset=""
                    onclick="myFunction(this);">
                <img class="image-item" src="/images/shoes/air jordan xxxiv-basketball (2).jpg" alt="" sizes=""
                    srcset="" onclick="myFunction(this);">
            </div>
        </div>

        <div class="col-md-5">
            <div class="text-space-name mt-5 ml-3">
                <h3>{{ $shoe->name }}</h3>
            </div>

            <div class="text-space-price ml-3">
                ₱{{ $shoe->price }}.99
            </div>
            <hr>

            <div class="row form-group">
                <label for="" class="col-sm-2 col-form-label">Size:</label>
                <div class="col-sm-10">
                    <button type="button" id="number-size-button" class="">4</button>
                    <button type="button" id="number-size-button" class="">5</button>
                    <button type="button" id="number-size-button" class="">6</button>
                    <button type="button" id="number-size-button" class="">7</button>
                    <button type="button" id="number-size-button" class="">8</button>
                    <button type="button" id="number-size-button" class="">9</button>
                    <button type="button" id="number-size-button" class="">10</button>
                    <button type="button" id="number-size-button" class="">11</button>
                    <button type="button" id="number-size-button" class="">12</button>
                    <button type="button" id="number-size-button" class="">13</button>
                </div>
            </div>

            <span id="maximum-quantity-message-error"></span>
            <div class="row form-group">
                <label for="" class="col-sm-2 col-form-label">Quantity:</label>
                <div class="col-sm-10 input-group quantity-counter">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary minus-btn" type="button">-</button>
                      </div>
                          <input id="quantity-value" class="form-control quantity-value"  type="number" value="0">
                      <div class="input-group-append">
                          <button class="btn btn-outline-secondary plus-btn" type="button">+</button>
                      </div>
                </div>
            </div>

            <div class="text-space-stock">
                <label  id="total-stock" data-quantity="{{ $shoe->quantity }}" for="" class="ml-3">Available stock: {{ $shoe->quantity }}</label>
            </div>

            <button type="submit" id="add-to-cart-btn" class="btn btn-outline-dark btn-block">ADD TO CART</button>
            <button type="submit" id="add-to-cart-btn" class="btn btn-light btn-block">ADD TO WISHLIST</button>

            <div class="text-space-description">
                {{ $shoe->item_description }}
            </div>
        </div>
        @endforeach
    </div>
</form>