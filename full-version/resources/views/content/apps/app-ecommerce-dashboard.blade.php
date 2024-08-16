@extends('layouts/layoutMaster')

@section('title', 'eCommerce - Dashboards')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
@endsection

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/card-analytics.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/app-ecommerce-dashboard.js')}}"></script>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12 col-lg-4 mb-4">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-8">
          <div class="card-body">
            <h6 class="card-title mb-1 text-nowrap">Congratulations Katie!</h6>
            <small class="d-block mb-3 text-nowrap">Best seller of the month</small>

            <h5 class="card-title text-primary mb-1">$48.9k</h5>
            <small class="d-block mb-4 pb-1 text-muted">78% of target</small>

            <a href="javascript:;" class="btn btn-sm btn-primary">View sales</a>
          </div>
        </div>
        <div class="col-4 pt-3 ps-0">
          <img src="{{asset('assets/img/illustrations/prize-light.png')}}" width="90" height="140" class="rounded-start" alt="View Sales">
        </div>
      </div>
    </div>
  </div>
  <!-- New Visitors & Activity -->
  <div class="col-lg-8 mb-4">
    <div class="card">
      <div class="card-body row g-4">
        <div class="col-md-6 pe-md-4 card-separator">
          <div class="card-title d-flex align-items-start justify-content-between">
            <h5 class="mb-0">New Visitors</h5>
            <small>Last Week</small>
          </div>
          <div class="d-flex justify-content-between">
            <div class="mt-auto">
              <h2 class="mb-2">23%</h2>
              <small class="text-danger text-nowrap fw-medium"><i class='bx bx-down-arrow-alt'></i> -13.24%</small>
            </div>
            <div id="visitorsChart"></div>
          </div>
        </div>
        <div class="col-md-6 ps-md-4">
          <div class="card-title d-flex align-items-start justify-content-between">
            <h5 class="mb-0">Activity</h5>
            <small>Last Week</small>
          </div>
          <div class="d-flex justify-content-between">
            <div class="mt-auto">
              <h2 class="mb-2">82%</h2>
              <small class="text-success text-nowrap fw-medium"><i class='bx bx-up-arrow-alt'></i> 24.8%</small>
            </div>
            <div id="activityChart"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ New Visitors & Activity -->

  <div class="col-md-12 col-lg-4">
    <div class="row">
      <div class="col-lg-6 col-md-3 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('assets/img/icons/unicons/wallet-info.png')}}" alt="Credit Card" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="cardOpt6">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span class="d-block">Sales</span>
            <h4 class="card-title mb-1">$4,679</h4>
            <small class="text-success fw-medium"><i class='bx bx-up-arrow-alt'></i> +28.42%</small>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-3 col-6 mb-4">
        <div class="card">
          <div class="card-body pb-2">
            <span class="d-block fw-medium">Profit</span>
            <h3 class="card-title mb-0">624k</h3>
            <div id="profitChart"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-3 col-6 mb-4">
        <div class="card">
          <div class="card-body pb-0">
            <span class="d-block fw-medium">Expenses</span>
          </div>
          <div id="expensesChart" class="mb-2"></div>
          <div class="p-3 pt-2">
            <small class="text-muted d-block text-center">$21k Expenses more than last month</small>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-3 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('assets/img/icons/unicons/briefcase.png')}}" alt="Credit Card" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt1">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span class="d-block">Transactions</span>
            <h4 class="card-title mb-1">$14,857</h4>
            <small class="text-success fw-medium"><i class='bx bx-up-arrow-alt'></i> +28.14%</small>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Total Income -->
  <div class="col-md-12 col-lg-8 mb-4">
    <div class="card">
      <div class="row row-bordered g-0">
        <div class="col-md-8">
          <div class="card-header">
            <h5 class="card-title mb-0">Total Income</h5>
            <small class="card-subtitle">Yearly report overview</small>
          </div>
          <div class="card-body">
            <div id="totalIncomeChart"></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-header d-flex justify-content-between">
            <div>
              <h5 class="card-title mb-0">Report</h5>
              <small class="card-subtitle">Monthly Avg. $45.578k</small>
            </div>
            <div class="dropdown">
              <button class="btn p-0" type="button" id="totalIncome" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalIncome">
                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="report-list">
              <div class="report-list-item rounded-2 mb-3">
                <div class="d-flex align-items-start">
                  <div class="report-list-icon shadow-sm me-2">
                    <img src="{{asset('assets/svg/icons/paypal-icon.svg')}}" width="22" height="22" alt="Paypal">
                  </div>
                  <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                    <div class="d-flex flex-column">
                      <span>Income</span>
                      <h5 class="mb-0">$42,845</h5>
                    </div>
                    <small class="text-success">+2.34k</small>
                  </div>
                </div>
              </div>
              <div class="report-list-item rounded-2 mb-3">
                <div class="d-flex align-items-start">
                  <div class="report-list-icon shadow-sm me-2">
                    <img src="{{asset('assets/svg/icons/shopping-bag-icon.svg')}}" width="22" height="22" alt="Shopping Bag">
                  </div>
                  <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                    <div class="d-flex flex-column">
                      <span>Expense</span>
                      <h5 class="mb-0">$38,658</h5>
                    </div>
                    <small class="text-danger">-1.15k</small>
                  </div>
                </div>
              </div>
              <div class="report-list-item rounded-2">
                <div class="d-flex align-items-start">
                  <div class="report-list-icon shadow-sm me-2">
                    <img src="{{asset('assets/svg/icons/wallet-icon.svg')}}" width="22" height="22" alt="Wallet">
                  </div>
                  <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                    <div class="d-flex flex-column">
                      <span>Profit</span>
                      <h5 class="mb-0">$18,220</h5>
                    </div>
                    <small class="text-success">+1.35k</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Total Income -->
  </div>
  <!--/ Total Income -->
</div>
<div class="row">
  <!-- Performance -->
  <div class="col-md-6 col-lg-4 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Performance</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="performanceId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="performanceId">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-6">
            <small>Earnings: <span class="fw-medium">$846.17</span></small>
          </div>
          <div class="col-6">
            <small>Sales: <span class="fw-medium">25.7M</span></small>
          </div>
        </div>
      </div>
      <div id="performanceChart"></div>
    </div>
  </div>
  <!--/ Performance -->

  <!-- Conversion rate -->
  <div class="col-md-6 col-lg-4 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Conversion Rate</h5>
          <small class="text-muted">Compared To Last Month</small>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="conversionRate" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="conversionRate">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex flex-row align-items-center gap-1 mb-4">
            <h2 class="mb-2">8.72%</h2>
            <small class="text-success fw-medium">
              <i class='bx bx-chevron-up'></i>
              4.8%
            </small>
          </div>
          <div id="conversionRateChart"></div>
        </div>
        <ul class="p-0 m-0">
          <li class="d-flex mb-4">
            <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Impressions</h6>
                <small class="text-muted">12.4k Visits</small>
              </div>
              <div class="user-progress">
                <i class='bx bx-up-arrow-alt text-success me-2'></i> <span>12.8%</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4">
            <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Added To Cart</h6>
                <small class="text-muted">32 Product in cart</small>
              </div>
              <div class="user-progress">
                <i class='bx bx-down-arrow-alt text-danger me-2'></i> <span>- 8.5% </span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4">
            <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Checkout</h6>
                <small class="text-muted">21 Products checkout</small>
              </div>
              <div class="user-progress">
                <i class='bx bx-up-arrow-alt text-success me-2'></i> <span>9.12%</span>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Purchased</h6>
                <small class="text-muted">12 Orders</small>
              </div>
              <div class="user-progress">
                <i class='bx bx-up-arrow-alt text-success me-2'></i> <span>2.83%</span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Conversion rate -->

  <div class="col-md-12 col-lg-4">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3 col-lg-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('assets/img/icons/unicons/cc-warning.png')}}" alt="Credit Card" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt5">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span class="d-block mb-1">Revenue</span>
            <h3 class="card-title text-nowrap mb-2">$42,389</h3>
            <small class="text-success fw-medium"><i class='bx bx-up-arrow-alt'></i> +52.18%</small>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3 col-lg-6 mb-4">
        <div class="card">
          <div class="card-body">
            <span class="d-block fw-medium">Sales</span>
            <h3 class="card-title mb-2">482k</h3>
            <span class="badge bg-label-info mb-3">+34%</span>
            <small class="text-muted d-block">Sales Target</small>
            <div class="d-flex align-items-center">
              <div class="progress w-75 me-2" style="height: 8px;">
                <div class="progress-bar bg-info" style="width: 78%" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span>78%</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between gap-3">
              <div class="d-flex align-items-start flex-column justify-content-between">
                <div class="card-title">
                  <h5 class="mb-0">Expenses</h5>
                </div>
                <div class="d-flex justify-content-between">
                  <div class="mt-auto">
                    <h3 class="mb-2">$84.7k</h3>
                    <small class="text-danger text-nowrap fw-medium"><i class='bx bx-down-arrow-alt'></i> 8.2%</small>
                  </div>
                </div>
                <span class="badge bg-label-secondary rounded-pill">2021 Year</span>
              </div>
              <div id="expensesBarChart"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-8 mb-4 mb-md-0">
    <div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table text-nowrap">
          <thead>
            <tr>
              <th>Product</th>
              <th>Category</th>
              <th>Payment</th>
              <th>Order Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <img src="{{asset('assets/img/products/oneplus-lg.png')}}" alt="Oneplus" height="32" width="32" class="me-2">
                  <div class="d-flex flex-column">
                    <span class="fw-medium lh-1">OnePlus 7Pro</span>
                    <small class="text-muted">OnePlus</small>
                  </div>
                </div>
              </td>
              <td><span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"><i class="bx bx-mobile-alt bx-xs"></i></span> Smart Phone</td>
              <td>
                <div class="text-muted lh-1"><span class="text-primary fw-medium">$120</span>/499</div>
                <small class="text-muted">Partially Paid</small>
              </td>
              <td><span class="badge bg-label-primary">Confirmed</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> View Details</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <img src="{{asset('assets/img/products/magic-mouse.png')}}" alt="Apple" height="32" width="32" class="me-2">
                  <div class="d-flex flex-column">
                    <span class="fw-medium lh-1">Magic Mouse</span>
                    <small class="text-muted">Apple</small>
                  </div>
                </div>
              </td>
              <td><span class="badge bg-label-warning rounded-pill badge-center p-3 me-2"><i class="bx bx-mouse bx-xs"></i></span> Mouse</td>
              <td>
                <div class="lh-1"><span class="text-primary fw-medium">$149</span></div>
                <small class="text-muted">Fully Paid</small>
              </td>
              <td><span class="badge bg-label-success">Completed</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> View Details</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <img src="{{asset('assets/img/products/imac-pro.png')}}" alt="Apple" height="32" width="32" class="me-2">
                  <div class="d-flex flex-column">
                    <span class="fw-medium lh-1">iMac Pro</span>
                    <small class="text-muted">Apple</small>
                  </div>
                </div>
              </td>
              <td><span class="badge bg-label-info rounded-pill badge-center p-3 me-2"><i class="bx bx-desktop bx-xs"></i></span> Computer</td>
              <td>
                <div class="text-muted lh-1"><span class="text-primary fw-medium">$0</span>/899</div>
                <small class="text-muted">Unpaid</small>
              </td>
              <td><span class="badge bg-label-danger">Cancelled</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> View Details</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <img src="{{asset('assets/img/products/note10.png')}}" alt="Samsung" height="32" width="32" class="me-2">
                  <div class="d-flex flex-column">
                    <span class="fw-medium lh-1">Note 10</span>
                    <small class="text-muted">Samsung</small>
                  </div>
                </div>
              </td>
              <td><span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"><i class="bx bx-mobile-alt bx-xs"></i></span> Smart Phone</td>
              <td>
                <div class="lh-1"><span class="text-primary fw-medium">$149</span></div>
                <small class="text-muted">Fully Paid</small>
              </td>
              <td><span class="badge bg-label-success">Completed</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> View Details</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <img src="{{asset('assets/img/products/iphone.png')}}" alt="Apple" height="32" width="32" class="me-2">
                  <div class="d-flex flex-column">
                    <span class="fw-medium lh-1">iPhone 11 Pro</span>
                    <small class="text-muted">Apple</small>
                  </div>
                </div>
              </td>
              <td><span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"><i class="bx bx-mobile-alt bx-xs"></i></span> Smart Phone</td>
              <td>
                <div class="lh-1"><span class="text-primary fw-medium">$399</span></div>
                <small class="text-muted">Fully Paid</small>
              </td>
              <td><span class="badge bg-label-success">Completed</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> View Details</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <img src="{{asset('assets/img/products/mi-tv.png')}}" alt="Xiaomi" height="32" width="32" class="me-2">
                  <div class="d-flex flex-column">
                    <span class="fw-medium lh-1">Mi LED TV 4X</span>
                    <small class="text-muted">Xiaomi</small>
                  </div>
                </div>
              </td>
              <td><span class="badge bg-label-danger rounded-pill badge-center p-3 me-2"><i class="bx bx-tv bx-xs"></i></span> Smart TV</td>
              <td>
                <div class="text-muted lh-1"><span class="text-primary fw-medium">$349</span>/2499</div>
                <small class="text-muted">Partially Paid</small>
              </td>
              <td><span class="badge bg-label-primary">Confirmed</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> View Details</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <img src="{{asset('assets/img/products/logitech-mx.png')}}" alt="Logitech" height="32" width="32" class="me-2">
                  <div class="d-flex flex-column">
                    <span class="fw-medium lh-1">Logitech MX</span>
                    <small class="text-muted">Logitech</small>
                  </div>
                </div>
              </td>
              <td><span class="badge bg-label-warning rounded-pill badge-center p-3 me-2"><i class="bx bx-mouse bx-xs"></i></span> Mouse</td>
              <td>
                <div class="lh-1"><span class="text-primary fw-medium">$89</span></div>
                <small class="text-muted">Fully Paid</small>
              </td>
              <td><span class="badge bg-label-primary">Completed</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> View Details</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Total Balance -->
  <div class="col-md-6 col-lg-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Total Balance</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="totalBalance" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalBalance">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-start">
          <div class="d-flex pe-4">
            <div class="me-3">
              <span class="badge bg-label-warning p-2"><i class="bx bx-wallet text-warning"></i></span>
            </div>
            <div>
              <h6 class="mb-0">$2.54k</h6>
              <small>Wallet</small>
            </div>
          </div>
          <div class="d-flex">
            <div class="me-3">
              <span class="badge bg-label-secondary p-2"><i class="bx bx-dollar text-secondary"></i></span>
            </div>
            <div>
              <h6 class="mb-0">$4.2k</h6>
              <small>Paypal</small>
            </div>
          </div>
        </div>
        <div id="totalBalanceChart" class="border-bottom mb-3"></div>
        <div class="d-flex justify-content-between">
          <small class="text-muted">You have done <span class="fw-medium">57.6%</span> more sales.<br>Check your new badge in your profile.</small>
          <div>
            <span class="badge bg-label-warning p-2"><i class="bx bx-chevron-right text-warning scaleX-n1-rtl"></i></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Total Balance -->
</div>
@endsection
