<style>
    .container {
        padding: 20px; 
        border-radius: 8px; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        margin: 20px auto; 
        width: 90%; 
    } 

    table {
        width: 260px;
        border-collapse: collapse;
        background-color: #fff;
    }

    table, th, td {
        color: black;
        border: 1px solid #ddd;
    }

    th, td {
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #4CAF50;
        color: black;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }
</style>

<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="ms-3 text-center">
                                        <h3 class="mb-0">Registered Schools</h3>
                                        <p class="ms-2 mb-0 font-weight-medium">{{ $schoolCount }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="ms-3 text-center">
                                        <h3 class="mb-0">Total participants</h3>
                                        <p class="ms-2 mb-0 font-weight-medium">{{ $participants }}</p>
                                    </div>
                                </div>
                                <div class="col-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="ms-3 text-center">
                                        <h3 class="mb-0">Rejected Applicants</h3>
                                        <p class="ms-2 mb-0 font-weight-medium">{{ $rejected }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 grid-margin">
                    <div class="card" style="background-color: #c0c0c0;">
                        <div class="card-body">
                            <!-- <h5>Revenue</h5> -->
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h1>Challenge Statuses</h1>
                                        <!-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> -->
                                    </div>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Challenge Number</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($challengeStatuses as $challenge)
                                                <tr>
                                                    <td>{{ $challenge->challengeNumber }}</td>
                                                    <td>{{ $challenge->status }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <!-- </div>
                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right"> -->
                                    <!-- <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h5>Sales</h5>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">$45850</h2>
                                        <p class="text-success ms-2 mb-0 font-weight-medium">+8.3%</p>
                                    </div>
                                    <h6 class="text-muted font-weight-normal">9.61% Since last month</h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h5>Purchase</h5>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">$2039</h2>
                                        <p class="text-danger ms-2 mb-0 font-weight-medium">-2.1%</p>
                                    </div>
                                    <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
    </div>
    <!-- main-panel ends -->
</div>
