<!-- Add Picasso Report -->
<div class="row">
    <div class="preloader">
        <div class="loading">
            <div class="spinner-grow text-danger" role="status"></div>
            <div class="spinner-grow text-danger" role="status"></div>
            <div class="spinner-grow text-danger" role="status"><span class="sr-only">Loading...</span></div>
            <strong>Loading...</strong>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Cash Pick Up Report</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <!-- Deposit Form-->
                <form method="post" id="counterform" name="counterform">
                    @csrf
                    <input type="hidden" name="hiddeniddeposit" id="hiddeniddeposit">
                    <div class="form-group row">
                        <label for="labelcashiercode" class="col-sm-2 col-form-label">Cashier Employee :</label>
                        <div class="form-line">
                            <select class="custom-select" id="selectemp" name="selectemp">
                                <option value="">-- Please select --</option>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                                <option value="Normal">Normal</option>
                                <option value="Broken">Broken</option>
                                <option value="Queueing">Queueing</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="labeltype" class="col-sm-2 col-form-label">Deposit Type:</label>
                        <div class="form-line">
                            <select class="custom-select" id="selecttype" name="selecttype">
                                <option value="">-- Please select --</option>
                                <option value="Active">MDS</option>
                                <option value="Inactive">CVS</option>
                                <option value="Normal">OP</option>
                                <option value="Broken">SC</option>
                                <option value="Broken">TH</option>
                                <option value="Broken">Billpayment</option>
                                <option value="Queueing">Warung</option>
                                <option value="Broken">Simpatindo</option>
                                <option value="Broken">Antum</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="labeldate" class="col-sm-2 col-form-label">Date :</label>
                        <div class="form-line">
                            <input type="text" class="form-control" id="inputdate" name="inputdate" placeholder="Enter Date">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="labeldate" class="col-sm-2 col-form-label">Time :</label>
                        <div class="form-line">
                            <input type="text" class="form-control" id="inputtime" name="inputtime" placeholder="Enter Time">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="labeldate" class="col-sm-2 col-form-label">Cashier Name :</label>
                        <div class="form-line">
                            <input type="text" class="form-control" id="inputname" name="inputname" placeholder="Enter Cashier Name"  readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="labeldate" class="col-sm-2 col-form-label">Counter Number :</label>
                        <div class="form-line">
                            <input type="text" class="form-control" id="inputcounter" name="inputcounter" placeholder="Enter Counter Number">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" name="buttonsave" id="buttonsave" value="create">Save</button>
                </form>


                    <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="CodeShiftDatatable">
                        <thead>
                            <tr>
                                <th>Currency Type</th>
                                <th>Denomination</th>
                                <th>Number Of Unit</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>   
                            <tr>
                                <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control" value="Banknote" readonly/></td>
                                <td>Rp. 100.000</td>
                                <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                                <td><input type="text" name="inputamount" id="inputamount" class="form-control" value="tes" readonly/></td>
                                <td><div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit" onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" name="savedeposit" id="savedeposit" onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                            <a class="dropdown-item"  name="deletedeposit" id="deletedeposit"><i class="fas fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control" value="Banknote" readonly/></td>
                                <td>Rp. 50.000</td>
                                <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                                <td><input type="text" name="inputamount" id="inputamount" class="form-control" value="tes" readonly/></td>
                                <td><div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit" onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" name="savedeposit" id="savedeposit" onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                            <a class="dropdown-item"  name="deletedeposit" id="deletedeposit"><i class="fas fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control" value="Banknote" readonly/></td>
                                <td>Rp. 20.000</td>
                                <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                                <td><input type="text" name="inputamount" id="inputamount" class="form-control" value="tes" readonly/></td>
                                <td><div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit" onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" name="savedeposit" id="savedeposit" onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                            <a class="dropdown-item"  name="deletedeposit" id="deletedeposit"><i class="fas fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control" value="Banknote" readonly/></td>
                                <td>Rp. 10.000</td>
                                <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                                <td><input type="text" name="inputamount" id="inputamount" class="form-control" value="tes" readonly/></td>
                                <td><div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit" onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" name="savedeposit" id="savedeposit" onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                            <a class="dropdown-item"  name="deletedeposit" id="deletedeposit"><i class="fas fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control" value="Banknote" readonly/></td>
                                <td>Rp. 5.000</td>
                                <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                                <td><input type="text" name="inputamount" id="inputamount" class="form-control" value="tes" readonly/></td>
                                <td><div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit" onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" name="savedeposit" id="savedeposit" onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                            <a class="dropdown-item"  name="deletedeposit" id="deletedeposit"><i class="fas fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control" value="Banknote" readonly/></td>
                                <td>Rp. 2.000</td>
                                <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                                <td><input type="text" name="inputamount" id="inputamount" class="form-control" value="tes" readonly/></td>
                                <td><div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit" onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" name="savedeposit" id="savedeposit" onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                            <a class="dropdown-item"  name="deletedeposit" id="deletedeposit"><i class="fas fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control" value="Banknote" readonly/></td>
                                <td>Rp. 1.000</td>
                                <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                                <td><input type="text" name="inputamount" id="inputamount" class="form-control" value="tes" readonly/></td>
                                <td><div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit" onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" name="savedeposit" id="savedeposit" onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                            <a class="dropdown-item"  name="deletedeposit" id="deletedeposit"><i class="fas fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control" value="Coin" readonly/></td>
                                <td>Rp. 1.000</td>
                                <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                                <td><input type="text" name="inputamount" id="inputamount" class="form-control" value="tes" readonly/></td>
                                <td><div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit" onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" name="savedeposit" id="savedeposit" onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                            <a class="dropdown-item"  name="deletedeposit" id="deletedeposit"><i class="fas fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control" value="Coin" readonly/></td>
                                <td>Rp. 500</td>
                                <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                                <td><input type="text" name="inputamount" id="inputamount" class="form-control" value="tes" readonly/></td>
                                <td><div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit" onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" name="savedeposit" id="savedeposit" onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                            <a class="dropdown-item"  name="deletedeposit" id="deletedeposit"><i class="fas fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control" value="Coin" readonly/></td>
                                <td>Rp. 200</td>
                                <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                                <td><input type="text" name="inputamount" id="inputamount" class="form-control" value="tes" readonly/></td>
                                <td><div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit" onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" name="savedeposit" id="savedeposit" onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                            <a class="dropdown-item"  name="deletedeposit" id="deletedeposit"><i class="fas fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control" value="Coin" readonly/></td>
                                <td>Rp. 100</td>
                                <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                                <td><input type="text" name="inputamount" id="inputamount" class="form-control" value="tes" readonly/></td>
                                <td><div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit" onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" name="savedeposit" id="savedeposit" onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                            <a class="dropdown-item"  name="deletedeposit" id="deletedeposit"><i class="fas fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control" value="Coin" readonly/></td>
                                <td>Rp. 50</td>
                                <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                                <td><input type="text" name="inputamount" id="inputamount" class="form-control" value="tes" readonly/></td>
                                <td><div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit" onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" name="savedeposit" id="savedeposit" onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                            <a class="dropdown-item"  name="deletedeposit" id="deletedeposit"><i class="fas fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Currency Type</th>
                                <th>Denomination</th>
                                <th>Number Of Unit</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table> 

                <div class="card-footer">
                Project Website Cashier Carrefour Taman Palem
            </div>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

<script>
    $(".preloader").fadeOut("slow");
    $(document).ready(function() {

    });

</script>