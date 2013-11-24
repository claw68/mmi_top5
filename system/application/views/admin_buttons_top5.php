
<script type="text/javascript">
$(function()
{
///onload

$('#judge_id').val("1");
$('#event_id').val("1");
$('#a_print_btn').attr('href','reports/generate_judge/'+$('#judge_id').val()+'/'+$('#event_id').val());
$('#a_print_best').attr('href','reports/generate_best/'+$('#event_id').val());

$("#j_btn1").css("background", "#f58400");    
$("#h_btn1").css("background", "#f58400"); 
        $.ajax({
      type: "POST",
      url: "mmi_top5_c/show_grid_m",
      data: $("#global_data").serialize(),
      success: function(data) {
           $(".a_grid_up").html(data);
           }
           });
                   $.ajax({
      type: "POST",
      url: "mmi_top5_c/show_grid_f",
      data: $("#global_data").serialize(),
      success: function(data) {
           $(".a_grid_down").html(data);
           }
           });

<?php foreach($allJudge as $row){?>
$("#j_btn<?php echo $row->judge_id; ?>").button().width(200).click(function() {
<?php foreach($allJudge as $row1){?>$("#j_btn<?php echo $row1->judge_id?>").css("background", "");<?php } ?>
$("#best").css("background", "");
$("#top").css("background", "");
$(this).css("background", "#f58400");
$('#judge_id').val("<?php echo $row->judge_id;?>");
$('#a_print_btn').attr('href','reports/generate_judge/'+$('#judge_id').val()+'/'+$('#event_id').val());
$('#a_print_best').attr('href','reports/generate_best/'+$('#event_id').val());
        $.ajax({
      type: "POST",
      url: "mmi_top5_c/show_grid_m",
      data: $("#global_data").serialize(),
      success: function(data) {
           $(".a_grid_up").html(data);
           }
           });
                              $.ajax({
      type: "POST",
      url: "mmi_top5_c/show_grid_f",
      data: $("#global_data").serialize(),
      success: function(data) {
           $(".a_grid_down").html(data);
           }
           });
});
<?php } ?>

$("#over_all").button().width(200).click(function() {  
$(this).css("background", "#f58400");
$.ajax({
  type: "POST",
  url: "mmi_top5_c/show_best_grid_m",
  data: $("#global_data").serialize(),
  success: function(data) {
    $(".a_grid_up").html(data);
    }
      });
$.ajax({
  type: "POST",
  url: "mmi_top5_c/show_best_grid_f",
  data: $("#global_data").serialize(),
  success: function(data) {
    $(".a_grid_down").html(data);
    }
      });
});

$("#a_print_btn").button().width(200);
$("#a_print_best").button().width(250);

/*$("#a_print_btn").button().width(200).click(function() {  
$.ajax({
  type: "POST",
  url: "mmi_top5_c/print_output",
  data: $("#global_data").serialize(),
  success: function(data) {
    $(".entire").html(data);
    }
      }); 
});
$("#a_print_best").button().click(function() {  
$.ajax({
  type: "POST",
  url: "mmi_top5_c/print_output_best",
  data: $("#global_data").serialize(),
  success: function(data) {
    $(".entire").html(data);
    }
      }); 
});*/    
                            

                                			


});
</script>