<?php include "includes/assets.php"; ?>
<?php 
error_reporting(0);
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

<?php include 'includes/header.php';?>
<?php include 'includes/sidebar.php';?>
<div class="page-content-wrapper">
		<div class="page-content">
						<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Dashboard <small></small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">
								Home
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">
								<?php echo $msg;?>
							</a>
						</li>
						<li class="pull-right">
							<div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
								<i class="fa fa-calendar"></i>
								<span>
								</span>
								<i class="fa fa-angle-down"></i>
							</div>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
		
	<!--		<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i> <h5><?php echo $msg?></h5>
							</div>
							</div>
							</div>-->

<?php
if(isset($dropdown_setup)) {
	$this->load->view('dependent_dropdown', $dropdown_setup);
}
?>


<?php echo $output; ?>

<a href="<?php echo base_url();?>settings/profiledata">BACK</a>
</div>
</div>
</div>
</div>
