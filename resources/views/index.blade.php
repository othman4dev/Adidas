@extends('layout')
@section('content')
<section class=" ml-2 ">
    <div class="headerSection">
        <h2>Dashboard</h2>
        <span><span>Home</span> / Dashboard</span>
    </div>
    <div class="mt-3 cards d-flex justify-content-between w-full">
        <div class="">
            <div class="card info-card sales-card">
                <div class="card-body">
                <h5 class="card-title">Sales <span>| Today</span></h5>

                <div class="d-flex align-items-center">
                    <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="card_footr ml-2">
                        <h6>145</h6>
                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                </div>
            </div>

            </div>
        </div>
        <div class="">
            <div class="card info-card sales-card">
                <div class="card-body">
                <h5 class="card-title">Sales <span>| Today</span></h5>

                <div class="d-flex align-items-center">
                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="card_footr ml-2">
                        <h6>145</h6>
                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                </div>
            </div>

            </div>
        </div>
        <div class="">
            <div class="card info-card sales-card">
                <div class="card-body">
                <h5 class="card-title">Sales <span>| Today</span></h5>

                <div class="d-flex align-items-center">
                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="card_footr ml-2">
                        <h6>145</h6>
                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                </div>
            </div>

            </div>
        </div>

    </div>
    <div class="card-body mt-5">
        <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns"><div class="datatable-top">
            
            <div class="datatable-search mt-4 w-25 mb-3">
                <input class="form-control" placeholder="Search..." type="search" title="Search within table">
            </div>
        </div>
        <div class="datatable-container">
            <table class="table table-borderless datatable datatable-table">
                <thead>
                    <tr>
                        <th data-sortable="true" style="width: 10.648148148148149%;">
                            #
                        </th>
                        <th data-sortable="true" style="width: 23.456790123456788%;">
                            Customer
                        </th>
                        <th data-sortable="true" style="width: 39.351851851851855%;">
                            Product
                        </th>
                        <th data-sortable="true" style="width: 11.728395061728394%;">
                            Price
                        </th>
                        <th data-sortable="true" class="red" style="width: 14.814814814814813%;">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody><tr data-index="0"><td><a href="#">#2457</a></td><td>Brandon Jacob</td><td><a href="#" class="text-primary">At praesentium minu</a></td><td>$64</td><td class="green"><span class="badge bg-success">Approved</span></td></tr><tr data-index="1"><td><a href="#">#2147</a></td><td>Bridie Kessler</td><td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td><td>$47</td><td class="green"><span class="badge bg-warning">Pending</span></td></tr><tr data-index="2"><td><a href="#">#2049</a></td><td>Ashleigh Langosh</td><td><a href="#" class="text-primary">At recusandae consectetur</a></td><td>$147</td><td class="green"><span class="badge bg-success">Approved</span></td></tr><tr data-index="3"><td><a href="#">#2644</a></td><td>Angus Grady</td><td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td><td>$67</td><td class="green"><span class="badge bg-danger">Rejected</span></td></tr><tr data-index="4"><td><a href="#">#2644</a></td><td>Raheem Lehner</td><td><a href="#" class="text-primary">Sunt similique distinctio</a></td><td>$165</td><td class="green"><span class="badge bg-success">Approved</span></td></tr></tbody></table></div>
            <div class="datatable-bottom">
                <div class="datatable-info">Showing 1 to 5 of 5 entries</div>
                <nav class="datatable-pagination"><ul class="datatable-pagination-list"></ul></nav>
            </div>
        </div>
    
    </div>
</section>
@endsection