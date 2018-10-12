<!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-left">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Bookings</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
           
 <div class="container-fluid">
            <div class="row">
            	<div class="col-lg-12">
            	<div class="card">
                <div class="card-body">
                    <div class="col-lg-12 pad_fix">
                      <div class="col-lg-4 pad_fix">  
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text wid130">
                                    List By:
                                </span>
                            </div>
                            <select class="form-control" type="text" name="book_status" id="book_status">
                                <option value="confirmed">Confirmed</option>
                                <option value="pending">Pending</option>
                                <option value="pending">Cancelled</option>
                            </select>
                        </div>
                    </div>
                    </div>
                	<table class="table table-bordered table-striped">
                		<tr><th>Client Name</th><th>Package Name</th><th>Client Number</th><th>Client Email</th><th>Requirements</th><th>Status</th></tr>
                		<?php foreach($package_book as $key=>$pb): ?>
                		<tr><td><?php echo $pb['name']; ?></td><td><?php echo $pb['package_name']; ?></td><td><?php echo $pb['phone']; ?></td><td><?php echo $pb['email']; ?></td><td><?php echo $pb['requirements']; ?></td><td>
                      <button class="btn btn-success btn-xs">Confirm</button>&nbsp;<button class="btn btn-warning btn-xs">On Hold</button>&nbsp;<button class="btn btn-danger btn-xs">Cancel</button>      
                        </td></tr>
                		<?php endforeach; ?>
                	</table>
            	</div>
        		</div>
        	</div>
        </div>

 </div>