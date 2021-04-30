<!-- Breadcrumb -->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-xs-12 d-flex justify-content-end">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background:transparent;">
                    <li class="breadcrumb-item active" aria-current="page">Overviews</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Room schedule -->
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-xs-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center" style="height: 50px;">
                    <strong>Rooms Infomation</strong>
                    <a class="btn btn-secondary btn-sm text-light" href="/office/rooms">View more</a>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="mx-2"><i class="fas fa-users me-2 "></i> Booked</span>
                            <span class="ms-2"><i class="fas fa-users me-2  text-success"></i> Stay</span>
                        </div>
                        <nav aria-label="Page navigation ">
                            <ul class="pagination my-2">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">June 2021</a></li>

                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>


                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">All Rooms</a></li>
                        <li><a data-toggle="tab" href="#menu1">Sweet Rooms</a></li>
                        <li><a data-toggle="tab" href="#menu2">Single Rooms</a></li>
                        <li><a data-toggle="tab" href="#menu3">Dual Rooms</a></li>
                    </ul>
                    <div class="tab-content mt-3" style="overflow: auto; max-height:400px">

                        <div id="home" class="tab-pane fade in active">
                            <?php require('rooms_table.php'); ?>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <?php require('rooms_table.php'); ?>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <?php require('rooms_table.php'); ?>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <?php require('rooms_table.php'); ?>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-xs-4">
            <div class="card">
                <div class="card-header d-flex align-items-center" style="height: 50px;">
                    <strong>Room Booking</strong>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <label for="room_type" class="form-label">Room type</label>
                        <select class="form-select-lg form-select" id="room_type" aria-label="Default select example">
                            <option value="1">Sweet</option>
                            <option value="2">Single</option>
                            <option value="3">Duo</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="stay_at" class="form-label">Check In Date:</label>
                        <input type="date" class="form-control" id="stay_at" placeholder="name@example.com">
                    </div>
                    <div class="mb-4">
                        <label for="stay_end" class="form-label">Check Out Date:</label>
                        <input type="date" class="form-control" id="stay_end" placeholder="name@example.com">
                    </div>
                    <div class="mt-5">
                        <button class="btn btn-dark text-light w-100">Booking</button>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="row card-body">
                    <div class="col-xs-6">
                        <a class="btn-icon btn btn-dark text-light" href="/office/reservations">
                            <div class="icon-box"><i class="fas fa-sign-in-alt"></i></div>
                            <div class="text-box">Check In</div>
                        </a>

                    </div>

                    <div class="col-xs-6">
                        <a class="btn-icon btn btn-secondary text-light" href="/office/reservations">
                            <div class="icon-box"><i class="fas fa-sign-out-alt"></i></div>
                            <div class="text-box">Check Out</div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Rooms -->