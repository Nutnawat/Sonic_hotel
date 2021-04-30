<!-- Breadcrumb -->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-xs-12 d-flex justify-content-between align-itens-center">
            <div class="input-group px-0">
                <div class="form-outline">
                    <input type="search" id="form1" class="form-control rounded" placeholder="search"
                        style="width: 200px;" />
                </div>
                <button type="button" class="btn btn-dark text-light ">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background:transparent;">
                    <li class="breadcrumb-item active" aria-current="page">Reservations</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<!-- Reservation Table -->
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center" style="height: 50px;">
                    <strong>Reservation Infomation</strong>
                    <button class="btn btn-secondary btn-sm text-light" data-bs-toggle="modal"
                        data-bs-target="#newBooking">New Booking</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Booking ID</th>
                                    <th scope="col">Guest Name</th>
                                    <th scope="col">Check In Date</th>
                                    <th scope="col">Check Out Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">b000015245</th>
                                    <td>Mark Otto</td>
                                    <td>18 june 2021</td>
                                    <td>20 june 2021</td>
                                    <td class="text-success">Checked In</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning disabled">Edit Booking</a>
                                        <a href="#" class="btn btn-sm btn-danger disabled">Cancle Booking</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">b000015242</th>
                                    <td>Jacob Thornton</td>
                                    <td>18 june 2021</td>
                                    <td>22 june 2021</td>
                                    <td class="text-success">Checked In</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning disabled">Edit Booking</a>
                                        <a href="#" class="btn btn-sm btn-danger disabled">Cancle Booking</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">b000158664</th>
                                    <td>Larry the Bird</td>
                                    <td>19 june 2021</td>
                                    <td>20 june 2021</td>
                                    <td class="text-primary">Comfirmed</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">Edit Booking</a>
                                        <a href="#" class="btn btn-sm btn-danger">Cancle Booking</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">b000158882</th>
                                    <td>Turaki the fak</td>
                                    <td>23 june 2021</td>
                                    <td>25 june 2021</td>
                                    <td class="text-danger">Cancalled</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning disabled">Edit Booking</a>
                                        <a href="#" class="btn btn-sm btn-danger disabled">Cancle Booking</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">b000158974</th>
                                    <td>Asada Kumhom</td>
                                    <td>26 june 2021</td>
                                    <td>30 june 2021</td>
                                    <td class="text-warning">Booking</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning ">Edit Booking</a>
                                        <a href="#" class="btn btn-sm btn-danger ">Cancle Booking</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">b000015245</th>
                                    <td>Mark Otto</td>
                                    <td>18 june 2021</td>
                                    <td>20 june 2021</td>
                                    <td class="text-success">Checked In</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning disabled">Edit Booking</a>
                                        <a href="#" class="btn btn-sm btn-danger disabled">Cancle Booking</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">b000015242</th>
                                    <td>Jacob Thornton</td>
                                    <td>18 june 2021</td>
                                    <td>22 june 2021</td>
                                    <td class="text-success">Checked In</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning disabled">Edit Booking</a>
                                        <a href="#" class="btn btn-sm btn-danger disabled">Cancle Booking</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">b000158664</th>
                                    <td>Larry the Bird</td>
                                    <td>19 june 2021</td>
                                    <td>20 june 2021</td>
                                    <td class="text-primary">Comfirmed</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">Edit Booking</a>
                                        <a href="#" class="btn btn-sm btn-danger">Cancle Booking</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">b000158882</th>
                                    <td>Turaki the fak</td>
                                    <td>23 june 2021</td>
                                    <td>25 june 2021</td>
                                    <td class="text-danger">Cancalled</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning disabled">Edit Booking</a>
                                        <a href="#" class="btn btn-sm btn-danger disabled">Cancle Booking</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">b000158974</th>
                                    <td>Asada Kumhom</td>
                                    <td>26 june 2021</td>
                                    <td>30 june 2021</td>
                                    <td class="text-warning">Booking</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning ">Edit Booking</a>
                                        <a href="#" class="btn btn-sm btn-danger ">Cancle Booking</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination my-0">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- New booking Modal -->
<div class="modal" id="newBooking" tabindex="-1" aria-labelledby="new-booking-Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="new-booking-Label">New Booking</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-dark text-light">Booking</button>
            </div>
        </div>
    </div>
</div>