$(function()
{
 
//onload functions here!
$("#cbtn1").css("background", "#f58400");    
$("#cont_id1").css("background", "#f58400"); 
$('#cat_dis').text("<?php echo $event[0]->event_name; ?>");
$('#id_dis').text("Finalist #1");
$('#cont_id').val("1");
$('#event_id').val("1");

      $.ajax({
      type: "POST",
      url: "../mmi_top5_c/proj_m",
      data: $("#global_data").serialize(),
      success: function(data) {
           $(".leftcol").html(data);
           }
           });
      $.ajax({
      type: "POST",
      url: "../mmi_top5_c/proj_f",
      data: $("#global_data").serialize(),
      success: function(data) {
           $(".rightcol").html(data);
           }
           });
          

//select event (category)


//select contestant
<?php for($i=1;$i<=$countCont/2;$i++){ ?> 
$("#cont_id<?php echo $i?>").click(function() {  
var  txt = "<?php echo "Finalist #".$i; ?>";
$('#id_dis').text(txt).addClass('newClass');  
            			setTimeout(function() {
            				$('#id_dis').removeClass('newClass', 1000);
            			}, 500); 
<?php for($ii=1;$ii<=$countCont/2;$ii++){ ?> 
$("#cont_id<?php echo $ii; ?>").css("background", "");
<?php }?>
$(this).css("background", "#f58400");
$('#cont_id').val("<?php echo $i; ?>");
      $.ajax({
      type: "POST",
      url: "../mmi_top5_c/proj_m",
      data: $("#global_data").serialize(),
      success: function(data) {
           $(".leftcol").html(data);
           }
           });
      $.ajax({
      type: "POST",
      url: "../mmi_top5_c/proj_f",
      data: $("#global_data").serialize(),
      success: function(data) {
           $(".rightcol").html(data);
           }
           });
});
<?php } ?>
     
});