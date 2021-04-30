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
                    <li class="breadcrumb-item active" aria-current="page">Rooms</li>
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
                    <strong>Room Infomation</strong>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Room No</th>
                                    <th scope="col">Room type</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">3202</th>
                                    <td>Sweet</td>
                                    <td>Guest In</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">House Keeper</a>
                                        <a href="#" class="btn btn-sm btn-danger">Check out</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3203</th>
                                    <td>Sweet</td>
                                    <td>Guest In</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">House Keeper</a>
                                        <a href="#" class="btn btn-sm btn-danger">Check out</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3204</th>
                                    <td>Sweet</td>
                                    <td>Guest In</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">House Keeper</a>
                                        <a href="#" class="btn btn-sm btn-danger">Check out</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3205</th>
                                    <td>Sweet</td>
                                    <td>Guest In</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">House Keeper</a>
                                        <a href="#" class="btn btn-sm btn-danger">Check out</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3206</th>
                                    <td>Sweet</td>
                                    <td>Guest In</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">House Keeper</a>
                                        <a href="#" class="btn btn-sm btn-danger">Check out</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3207</th>
                                    <td>Sweet</td>
                                    <td>Guest In</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">House Keeper</a>
                                        <a href="#" class="btn btn-sm btn-danger">Check out</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3208</th>
                                    <td>Sweet</td>
                                    <td>Guest In</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">House Keeper</a>
                                        <a href="#" class="btn btn-sm btn-danger">Check out</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3209</th>
                                    <td>Sweet</td>
                                    <td>Guest In</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">House Keeper</a>
                                        <a href="#" class="btn btn-sm btn-danger">Check out</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3210</th>
                                    <td>Sweet</td>
                                    <td>Guest In</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">House Keeper</a>
                                        <a href="#" class="btn btn-sm btn-danger">Check out</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3211</th>
                                    <td>Sweet</td>
                                    <td>Guest In</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">House Keeper</a>
                                        <a href="#" class="btn btn-sm btn-danger">Check out</a>
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