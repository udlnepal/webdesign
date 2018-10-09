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
                	<table class="table table-bordered table-striped">
                		<tr><th>Client Name</th><th>Package Name</th><th>Client Number</th><th>Client Email</th><th>Requirements</th></tr>
                		<?php foreach($package_book as $key=>$pb): ?>
                		<tr><td><?php echo $pb['name']; ?></td><td><?php echo $pb['package_name']; ?></td><td><?php echo $pb['phone']; ?></td><td><?php echo $pb['email']; ?></td><td><?php echo $pb['requirements']; ?></td></tr>
                		<?php endforeach; ?>
                	</table>
            	</div>
        		</div>
        	</div>
        </div>

 </div>