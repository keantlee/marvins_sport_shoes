@include('modals.add_product')
@include('modals.delete_product')

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
                <table class="table">
                    <thead class="">
                        <tr>
                            <th>Product ID</th>
                            <th>Image</th>
                            <th>Product name</th>
                            <th>Brand</th>
                            <th>Sizes</th>
                            <th>Colors</th>
                            <th>Amount</th>
                            <th>Time</th>
                            <th>Date</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr>
                            <td>1</td>
                            <td>Rubber ni Kobe</td>
                            <td>Image</td>
                            <td>Kobe</td>
                            <td>11</td>
                            <td></td>
                            <td>$4,500.00</td>
                            <td>10:52:06 AM</td>
                            <td>December 07, 2020</td>
                            <td>
                                <button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                <button class="btn btn-danger" data-toggle="modal"
                                    data-target="#delete-product-modal"><i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
