@include('modals.add_product_modal')
@include('modals.update_product_modal')
@include('modals.delete_product_modal')

<div class="col-md-12">
    <div class="product-row-cards mb-3">
        <div class="card border-primary mb-3 dashboard_card_products">
            <div class="card-header card-table-dashboard">INVENTORY MANAGMENT SYSTEM</div>
            <div class="card-body text-primary">
                <div class="tab-pane fade show active mb-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    {{-- Modal button --}}
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-product-modal">
                        Add Product
                    </button>
                </div>
                {{-- Get the data table from shoe product table in database --}}
                <table class="table table-striped table-custom">
                    <thead class="">
                        <tr>
                            <th>Product ID</th>
                            <th>Image</th>
                            <th>Product name</th>
                            <th>Brand</th>
                            <th>Sizes</th>
                            <th>Colors</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                            <th>Time</th>
                            <th>Date</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @foreach ($shoes as $shoe)
                            <tr>
                                <td>{{ $shoe->id }}</td>
                                <td><img src="/{{ $shoe->img }}" class="img-thumbnail img-custom-size" alt=""></td>
                                <td>{{ $shoe->name }}</td>
                                <td>{{ $shoe->brand_id }}</td>
                                <td>{{ $shoe->size_id }}</td>
                                <td>{{ $shoe->color_id }}</td>
                                <td>{{ $shoe->quantity }}</td>
                                <td>{{ $shoe->price }}</td>
                                <td>10:52:06 AM</td>
                                <td>December 07, 2020</td>
                                <td>
                                    {{-- View Button --}}
                                    <a href="{{ route('product-inventory.show', $shoe->id) }}" class="btn btn-primary" role="button" aria-disabled="true"><i class="fas fa-eye"></i></a>
                                    {{-- Update Modal Button --}}
                                    <button class="btn btn-success update-modal-btn" 
                                        data-id="{{ $shoe->id }}" 
                                        data-image='<img src="/{{ $shoe->img }}" id="load-first-image">'
                                        data-name="{{ $shoe->name }}" 
                                        data-item_description="{{ $shoe->item_description }}" 
                                        data-brand="{{ $shoe->brand_id }}" 
                                        data-size="{{ $shoe->size_id }}" 
                                        data-color="{{ $shoe->color_id }}" 
                                        data-quantity="{{ $shoe->quantity }}" 
                                        data-price="{{ $shoe->price }}" 
                                        data-toggle="modal" 
                                        data-target="#update-product-modal">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                    {{-- Delete Modal Button --}}
                                    <button class="btn btn-danger delete-modal-btn" 
                                        data-image='<img src="/{{ $shoe->img }}" id="delete_img">'
                                        data-name="{{ $shoe->name }}" 
                                        data-toggle="modal" 
                                        data-target="#delete-product-modal">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>