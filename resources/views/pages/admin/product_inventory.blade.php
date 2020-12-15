@extends('layouts.admin_dashboard_template')

@section('contents')
<div class="container-fluid">
    <div class="row mt-4 mb-5">
        <div class="col-md-10 admin-dashboard-header">
            ADMIN DASHBOARD
        </div>
        <div class="col-md-2 admin-dashboard-header">
            Welcome Kent! / Logout
        </div>
    </div>
</div>

@include('pages.admin.crud.add_product')

<div class="col-md-12">
    <div class="product-row-cards mb-3">
        <div class="card border-primary mb-3 dashboard_card_products">
            <div class="card-header card-table-dashboard">INVENTORY HISTORY</div>
            <div class="card-body text-primary">
                <h5 class="card-title admin-card-title-table">
                    <div>Latest update as of 12/07/2020</div>
                </h5>
                {{-- This table should be real-time updated --}}
                <table class="table admin-inventory-table">
                    <thead class="">
                        <tr>
                            <th>Product ID</th>
                            <th>Product name</th>
                            <th>Product brand</th>
                            <th>Order No.</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr>
                            <td scope="row">1</td>
                            <td>Rubber ni Kobe</td>
                            <td>Kobe</td>
                            <td>#201201FHK7PPSV</td>
                            <td>$3,500.00</td>
                            <td>Newly Added</td>
                            <td>December 07, 2020</td>
                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td>Rubber ni Jordan</td>
                            <td>Jordan</td>
                            <td>#201201FHK7PPSV </td>
                            <td>$3,500.00</td>
                            <td>Newly Added</td>
                            <td>December 07, 2020</td>
                        </tr>
                        <tr>
                            <td scope="row">4</td>
                            <td>Rubber ni Jordan</td>
                            <td>Jordan</td>
                            <td>#201201FHK7PPSV </td>
                            <td>$3,500.00</td>
                            <td>Newly Added</td>
                            <td>December 07, 2020</td>
                        </tr>
                        <tr>
                            <td scope="row">6</td>
                            <td>Rubber ni Jordan</td>
                            <td>Jordan</td>
                            <td>#201201FHK7PPSV </td>
                            <td>$3,500.00</td>
                            <td>Newly Added</td>
                            <td>December 07, 2020</td>
                        </tr>
                        <tr>
                            <td scope="row">7</td>
                            <td>Rubber ni Jordan</td>
                            <td>Jordan</td>
                            <td>#201201FHK7PPSV </td>
                            <td>$3,500.00</td>
                            <td>Newly Added</td>
                            <td>December 07, 2020</td>
                        </tr>
                        <tr>
                            <td scope="row">8</td>
                            <td>Rubber ni Jordan</td>
                            <td>Jordan</td>
                            <td>#201201FHK7PPSV </td>
                            <td>$3,500.00</td>
                            <td>Newly Added</td>
                            <td>December 07, 2020</td>
                        </tr>
                        <tr>
                            <td scope="row">9</td>
                            <td>Rubber ni Jordan</td>
                            <td>Jordan</td>
                            <td>#201201FHK7PPSV </td>
                            <td>$3,500.00</td>
                            <td>Newly Added</td>
                            <td>December 07, 2020</td>
                        </tr>
                        <tr>
                            <td scope="row">10</td>
                            <td>Rubber ni Jordan</td>
                            <td>Jordan</td>
                            <td>#201201FHK7PPSV </td>
                            <td>$3,500.00</td>
                            <td>Newly Added</td>
                            <td>December 07, 2020</td>
                        </tr>
                        <tr>
                            <td scope="row">11</td>
                            <td>Rubber ni Jordan</td>
                            <td>Jordan</td>
                            <td>#201201FHK7PPSV </td>
                            <td>$3,500.00</td>
                            <td>Newly Added</td>
                            <td>December 07, 2020</td>
                        </tr>
                        <tr>
                            <td scope="row">12</td>
                            <td>Rubber ni Jordan</td>
                            <td>Jordan</td>
                            <td>#201201FHK7PPSV </td>
                            <td>$3,500.00</td>
                            <td>Newly Added</td>
                            <td>December 07, 2020</td>
                        </tr>
                        <tr>
                            <td scope="row">13</td>
                            <td>Rubber ni Jordan</td>
                            <td>Jordan</td>
                            <td>#201201FHK7PPSV </td>
                            <td>$3,500.00</td>
                            <td>Newly Added</td>
                            <td>December 07, 2020</td>
                        </tr>
                        <tr>
                            <td scope="row">14</td>
                            <td>Rubber ni Jordan</td>
                            <td>Jordan</td>
                            <td>#201201FHK7PPSV </td>
                            <td>$3,500.00</td>
                            <td>Newly Added</td>
                            <td>December 07, 2020</td>
                        </tr>
                        <tr>
                            <td scope="row">15</td>
                            <td>Rubber ni Jordan</td>
                            <td>Jordan</td>
                            <td>#201201FHK7PPSV </td>
                            <td>$3,500.00</td>
                            <td>Newly Added</td>
                            <td>December 07, 2020</td>
                        </tr>
                        <tr>
                            <td scope="row">16</td>
                            <td>Rubber ni Jordan</td>
                            <td>Jordan</td>
                            <td>#201201FHK7PPSV </td>
                            <td>$3,500.00</td>
                            <td>Newly Added</td>
                            <td>December 07, 2020</td>
                        </tr>
                    </tbody>
                </table>
                {{-- Pagination --}}
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection