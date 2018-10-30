
<section class=" main_body">
	<form id="contents">
<div class="container">
<!-- <div class="row"> -->
<div class="col-lg-12 pad_fix">
 
<div class="row justify-content-md-center">
	
	<div class="col-md-auto">
		<div class="col-lg-12 pad_fix">
			<?php if(!empty(validation_errors())){ ?>
			<div class="col-lg-12 alert alert-danger">
			<?php echo validation_errors(); ?>
			</div>
			<?php } ?>
		</div>
		<div class="col-lg-12 pad_fix">
			<?php echo form_open_multipart('package/confirm_book'); ?>
			<div class="img-thumbnail box-form">
			<div class="input-group mb-3">
				<span class="input-group-addon">
					Package Selected: 
				</span>
				<h5 class="input-group-addon text-success" ><?php foreach($package_setup as $key=>$ps): ?>
		<?php if($ps['package_id']==$user_book_id){ ?>
			<?php echo $ps['package_name'];} ?>
	<?php endforeach; ?></h5>
			</div>

			<input type="text" class="d-none" value="<?php echo $user_book_id?>" name="pack_id">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				<span class="input-group-text wid130">
					Name:
				</span>
				</div>
				<input class="form-control" type="text" name="name" id="name">
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				<span class="input-group-text wid130">
					Phone:
				</span>
			</div>
				<input class="form-control" type="text" name="phone" id="phone">
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				<span class="input-group-text wid130">
					Email:
				</span>
			</div>
				<input class="form-control" type="text" name="email" id="email">
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				<span class="input-group-text wid130">
					Requirements:
				</span>
			</div>
				<textarea class="form-control" name="requirements" id="requirements" ></textarea>
			</div>
			<div class="col-lg-12">
				<h5 class="text-success"><?php echo $this->session->flashdata('Success'); ?></h5>
			</div>
			<div class="col-lg-12 text-right pad_fix">
				<button type="submit"  class="btn btn-success">Send</button>
			</div>

			</div>
			<?php echo form_close(); ?>
		</div>
		
		</div>
	</div>
</div>

<!-- </div> -->
</div>
</form>
</section>


<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"admin.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $('#contents').on('submit', function(event){
  event.preventDefault();
  if($('#subject').val() != '' && $('#comment').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
     load_unseen_notification();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>
