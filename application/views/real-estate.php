<html>
<head>
<title>Real Estate</title>
<meta name="distributor" content="Global" />
    <meta itemprop="contentRating" content="General" />
    <meta name="robots" content="All" />
    <meta name="revisit-after" content="7 days" />
    <meta name="description" content="The source of truly unique and awesome jquery plugins." />
    <meta name="keywords" content="slider, carousel, responsive, swipe, one to one movement, touch devices, jquery, plugin, bootstrap compatible, html5, css3" />
    <meta name="author" content="w3widgets.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <!-- Respomsive slider -->
    <link href="<?php echo base_url() ?>responsive-calendar/0.8/css/responsive-calendar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
    
<link rel="stylesheet" href="http://1plify.com/assets/css/alertify.css" />



<link rel="stylesheet" href="http://1plify.com/assets/css/alertify.default.css" id="toggleCSS" />



<script src="http://1plify.com/assets/js/alertify.min.js"></script>
</head>

<style>
.wrapper{
width:90%;
margin:5%;
}
.one_half{
width:49%;
float:left;
display:inline-block;
}
.one_half img{
width:300px;
height:200px;
}
div.responsive-calendar {

}
.one_half {
width: 49%;
float: left;
}
.container {
width: 574px;
}
.slotbutton {
background: #1D86C8;
color: #fff;
margin: 2px;
}
</style>
<header>
<h1>Real Estate Demo</h1>
</header>
<body>
<div class="wrapper">
<?php 
$pids=array();
$pq=mysql_query("select count(id) as ppid from property_details");
$rpq=mysql_fetch_array($pq); ?>
<input type="text" name="ppid" id="ppid" value="<?php echo $rpq['ppid'];?>" />
<?php 
$sql = "select * from property_details";
		$query = mysql_query($sql);
		$i=1;
		while($result = mysql_fetch_array($query)){
			array_push($pids,$result['id']);
?>
<div class="one_half">
<h2><font color="2863c2"><?php echo $result['title'] ?></font></h2><br>
<img src='<?php echo base_url() ?>assets/propertyimageuploads/<?php echo $result['property_image'] ?>' alt='cover image' />
<br>
    
                <a class="btn default slotbutton" data-toggle="modal" href="#basic<?php echo $result['id']; ?>">
										 Book Slot
									</a>
<p><?php echo $result['description'] ?></p>
				</div>
				<div class="one_half last">
				<div class="container">
      <!-- Responsive calendar - START -->
    	<!-- Responsive calendar - START -->
   	<div class="responsive-calendar" id="calendar<?php echo $result['id']; ?>" data-id="<?php echo $result['id']; ?>" >
        <div class="controls">
            <a class="pull-left" data-go="prev"><div class="btn btn-primary">Prev</div></a>
            <h4><span data-head-year></span> <span data-head-month></span></h4>
            <a class="pull-right" data-go="next"><div class="btn btn-primary">Next</div></a>
        </div><hr/>
        <div class="day-headers">
          <div class="day header">Mon</div>
          <div class="day header">Tue</div>
          <div class="day header">Wed</div>
          <div class="day header">Thu</div>
          <div class="day header">Fri</div>
          <div class="day header">Sat</div>
          <div class="day header">Sun</div>
        </div>
        <div class="days" data-group="days">
          
        </div>
      </div>
      <!-- Responsive calendar - END -->
    </div>
    <div style="clear:both"></div>
	<script src="<?php echo base_url() ?>responsive-calendar/0.8/js/jquery.js"></script>
    <script src="<?php echo base_url() ?>responsive-calendar/0.8/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>responsive-calendar/0.8/js/responsive-calendar.js"></script>
   
				</div>
                <hr>
                <?php
                $i++;
                 } ?>
                </div>
            <?php foreach($pids as $pida) { ?>
                                    <div class="modal fade" id="basic<?php echo $pida;?>" tabindex="-1" role="basic" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Book Slot</h4>
										</div>
										<div class="modal-body">
											 <div class="form-group">
                                             <input id="pid<?php echo $pida; ?>" type="text" readonly value="<?php echo $pida; ?>" />
                                             <label class="control-label col-md-3">Property Name</label>
                     <!--                    <input type="text" readonly value="<?php echo $result['title']; ?>" />-->
                                    		<label class="control-label col-md-3">Date Range</label>
										<div class="col-md-4">
											<div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
												<input id="bfdate<?php echo $pida; ?>" type="text" class="form-control" name="from">
												<span class="input-group-addon">
													 to
												</span>
												<input id="btdate<?php echo $pida; ?>" type="text" class="form-control" name="to">
											</div>
											<!-- /input-group -->
											<span class="help-block">
												 Select date range
											</span>
										</div>
									</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn default" data-dismiss="modal">Close</button>
											<button type="button" class="btn blue" onClick="bookslot(<?php echo $pida; ?>)" >Book Slot</button>
										</div>
									</div>
									<!-- /.modal-content -->
								</div>
								<!-- /.modal-dialog -->
							</div>

<?php } ?>
				<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/clockface/js/clockface.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/scripts/core/app.js"></script>
<script src="<?php echo base_url(); ?>assets/scripts/custom/components-pickers.js"></script>

<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
   App.init();
        ComponentsPickers.init();
});
</script>
<!-- END JAVASCRIPTS -->

<script type="text/javascript">
     $(document).ready(function () {

       $("[id^='calendar']").responsiveCalendar({
         time: '2014-11',          
       });


$("[id^='calendar']").each(function(){
 var id=$(this).data('id');

console.log("request:"+id);	
//$(".responsive-calendar").responsiveCalendar('clearAll');
         $.ajax({
           type:'POST',
           url:'http://localhost/realestate/ajax/calendar-ajax.php',
           data: {id:id},          
dataType:'json',	
           success: function (response)
           {	
var idx=response.id;
console.log("#calendar"+idx);
console.log(response.id);
console.log(response.json);
 //$("#calendar"+idx).responsiveCalendar('clearAll');	
             $("#calendar"+idx).responsiveCalendar('edit', response.json);
 response.empty();
           }
         });
 
 });//each
     }); 
   </script>
    <script>
function bookslot(str)
{

var



d = Alertify.dialog,



l = Alertify.log,



$a = Alertify.get,



reset = function () {



$a("toggleCSS").href = "http://1plify.com/assets/css/alertify.default.css";







d.labels.ok = "OK";



d.labels.cancel = "Cancel";



d.buttonReverse = false;



d.buttonFocus = "ok";



l.delay = 5000;



};

segment=$("#pid"+str).val();
segment2=$("#bfdate"+str).val();
segment3=$("#btdate"+str).val();
//alert(segment);



//alert(segment3);


var xmlhttp;    
if (window.XMLHttpRequest)
{

// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
if(xmlhttp.responseText.trim()=='success')
{
	$("#basic"+str).modal('toggle');
d.alert('Booked Successfully.', function (e) {
if (e) {
alert('aa')
} else {
//	$('#basic'+str).modal('toggle');
	//$("#basic"+str).modal('toggle');
	
}
});
}
else
{
d.alert("Could not Book");
}
}
}

xmlhttp.open("POST","<?php echo base_url();?>ajax/bookingform.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

xmlhttp.send("bookingid="+segment+"&bfromdate="+segment2+"&btodate="+segment3);
}
</script>
</body>
</html>