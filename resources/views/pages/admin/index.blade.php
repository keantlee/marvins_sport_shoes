@extends('layouts.admin_dashboard_template')

@section('contents')
    <div class="container-fluid">
        <div class="row mt-4 mb-3">
            <div class="col-md-10 admin-dashboard-header">
                ADMIN DASHBOARD
            </div>
            <div class="col-md-2 admin-dashboard-header">
                Welcome Kent! / Logout
            </div>
        </div>
    </div>

    <div class="welcome">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h2>Welcome to Dashboard</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mt-3">
            {{-- *Note: Total of Order card should be real-time updated --}}
            <div class="col-md-3">
                <div class="card border-primary flex-md-row mb-4 box-shadow h-md-250">
                  <div class="card-body">
                    <img class="admin_db_icons" src="/images/icons/order.png" alt="shipment_icon">
                    <hr>
                    <h3 class="stats-title">353</h3>
                    <h6 class="info-title text-muted">Todays Order</h5>
                  </div>
                </div>
            </div>

            {{-- *Note: Total of ship prodcuts card should be real-time updated --}}
            <div class="col-md-3">
                <div class="card border-primary flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body">
                        <img class="admin_db_icons" src="/images/icons/delivery-truck.png" alt="shipment_icon">
                        <hr>
                        <h3 class="stats-title">457</h3>
                        <h6 class="info-title text-muted">Shipping</h5>
                    </div>
                </div>
            </div>

            {{-- *Note: Total customers register should be real-time updated --}}
            <div class="col-md-3">
                <div class="card border-primary flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body">
                        <img class="admin_db_icons" src="/images/icons/customer.png" alt="shipment_icon">
                        <hr>
                        <h3 class="stats-title">689</h3>
                        <h6 class="info-title text-muted">Customer</h5>
                    </div>
                </div>
            </div>

            {{-- *Note: AToday's Revenue card should be real-time updated --}}
            <div class="col-md-3">
                <div class="card border-primary flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body">
                        <img class="admin_db_icons" src="/images/icons/income.png" alt="shipment_icon">
                        <hr>
                        <h3 class="stats-title"><small>$</small>3,521</h3>
                        <h6 class="info-title text-muted">Today's Revenue</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="product-row-cards mb-3">
                    <div class="card border-primary mb-3 dashboard_card_products">
                        <div class="card-header card-table-dashboard">SHIPPING STATUS</div>
                        <div class="card-body text-primary">
                            <h5 class="card-title admin-card-title-table">
                                <div>Latest update as of 12/07/2020</div>
                                <div><a href="">View more</a></div>
                            </h5>
                            {{-- This table should be real-time updated --}}
                            <table class="table">
                                <thead class="admin-dashboard-table">
                                    <tr>
                                        <th>Product ID</th>
                                        <th>Product name</th>
                                        <th>Product brand</th>
                                        <th>Order No.</th>
                                        <th>Status</th>
                                        <th>Time</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody class="admin-dashboard-table">
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>Rubber ni Kobe</td>
                                        <td>Kobe</td>
                                        <td>#201201FHK7PPSV</td>
                                        <td>Still on Process</td>
                                        <td>10:52:06 AM</td>
                                        <td>December 07, 2020</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">3</td>
                                        <td>Rubber ni Jordan</td>
                                        <td>Jordan</td>
                                        <td>#201201FHK7PPSV </td>
                                        <td>Have been shipped out</td>
                                        <td>10:52:06 AM</td>
                                        <td>December 07, 2020</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">4</td>
                                        <td>Rubber ni Jordan</td>
                                        <td>Jordan</td>
                                        <td>#201201FHK7PPSV </td>
                                        <td>Still on Process</td>
                                        <td>10:52:06 AM</td>
                                        <td>December 07, 2020</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">5</td>
                                        <td>Rubber ni Jordan</td>
                                        <td>Jordan</td>
                                        <td>#201201FHK7PPSV </td>
                                        <td>Have been shipped out</td>
                                        <td>10:52:06 AM</td>
                                        <td>December 07, 2020</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="product-row-cards mb-3">
                    <div class="card border-primary mb-3 dashboard_card_products">
                        <div class="card-header card-table-dashboard">ORDER STATUS</div>
                        <div class="card-body text-primary">
                            <h5 class="card-title admin-card-title-table">
                                <div>Latest update as of 12/07/2020</div>
                                <div><a href="">View more</a></div>
                            </h5>
                            {{-- This table should be real-time updated --}}
                            <table class="table">
                                <thead class="admin-dashboard-table">
                                    <tr>
                                        <th>Product ID</th>
                                        <th>Product name</th>
                                        <th>Product brand</th>
                                        <th>Order No.</th>
                                        <th>Status</th>
                                        <th>Time</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody class="admin-dashboard-table">
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>Rubber ni Kobe</td>
                                        <td>Kobe</td>
                                        <td>#201201FHK7PPSV</td>
                                        <td>Still on Process</td>
                                        <td>10:52:06 AM</td>
                                        <td>December 07, 2020</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">3</td>
                                        <td>Rubber ni Jordan</td>
                                        <td>Jordan</td>
                                        <td>#201201FHK7PPSV </td>
                                        <td>Have been shipped out</td>
                                        <td>10:52:06 AM</td>
                                        <td>December 07, 2020</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">4</td>
                                        <td>Rubber ni Jordan</td>
                                        <td>Jordan</td>
                                        <td>#201201FHK7PPSV </td>
                                        <td>Still on Process</td>
                                        <td>10:52:06 AM</td>
                                        <td>December 07, 2020</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">5</td>
                                        <td>Rubber ni Jordan</td>
                                        <td>Jordan</td>
                                        <td>#201201FHK7PPSV </td>
                                        <td>Have been shipped out</td>
                                        <td>10:52:06 AM</td>
                                        <td>December 07, 2020</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="product-row-cards mb-3">
                    <div class="card border-primary mb-3 dashboard_card_products">
                        <div class="card-header card-table-dashboard">INVENTORY</div>
                        <div class="card-body text-primary">
                            <h5 class="card-title admin-card-title-table">
                                <div>Latest update as of 12/07/2020</div>
                                <div><a href="">View more</a></div>
                            </h5>
                            {{-- This table should be real-time updated --}}
                            <table class="table">
                                <thead class="admin-dashboard-table">
                                    <tr>
                                        <th>Product ID</th>
                                        <th>Product name</th>
                                        <th>Product brand</th>
                                        <th>Order No.</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody class="admin-dashboard-table">
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>Rubber ni Kobe</td>
                                        <td>Kobe</td>
                                        <td>#201201FHK7PPSV</td>
                                        <td>Newly Added</td>
                                        <td>December 07, 2020</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">3</td>
                                        <td>Rubber ni Jordan</td>
                                        <td>Jordan</td>
                                        <td>#201201FHK7PPSV </td>
                                        <td>Newly Added</td>
                                        <td>December 07, 2020</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">4</td>
                                        <td>Rubber ni Jordan</td>
                                        <td>Jordan</td>
                                        <td>#201201FHK7PPSV </td>
                                        <td>Newly Added</td>
                                        <td>December 07, 2020</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">5</td>
                                        <td>Rubber ni Jordan</td>
                                        <td>Jordan</td>
                                        <td>#201201FHK7PPSV </td>
                                        <td>Newly Added</td>
                                        <td>December 07, 2020</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection