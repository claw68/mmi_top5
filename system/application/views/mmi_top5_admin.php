<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mr & Miss Bukidnon State University 2013</title>

<link rel="stylesheet" type="text/css" media="screen" href="system/application/static/top5.css" />  
<link rel="stylesheet" type="text/css" media="screen" href="system/application/static/JQ/css/custom-theme/jquery-ui-1.8.4.custom.css" />
<link rel="stylesheet" type="text/css" media="screen" href="jqGrid/themes/ui.jqgrid.css" />
<link rel="stylesheet" type="text/css" media="screen" href="jqGrid/themes/custom-theme/jquery-ui-1.8.4.custom.css" />

<script src="system/application/static/JQ/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="system/application/static/JQ/js/jquery-ui-1.8.4.custom.min.js" type="text/javascript"></script>
<script src="system/application/static/JQ/js/jquery.validate.js" type="text/javascript"></script>

<script src="system/application/static/top5_func.js" type="text/javascript"></script>

<script src="system/application/static/JQ/ui/jquery.ui.core.js" type="text/javascript"></script>
<script src="system/application/static/JQ/ui/jquery.effects.core.js" type="text/javascript"></script>
<script src="system/application/static/JQ/ui/jquery.ui.widget.js" type="text/javascript"></script>

<script src="jqGrid/js/jquery.layout.js" type="text/javascript"></script>
<script src="jqGrid/js/i18n/grid.locale-en.js" type="text/javascript"></script>
<script src="jqGrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>
<script src="jqGrid/js/jquery.tablednd.js" type="text/javascript"></script>
<script src="jqGrid/js/jquery.contextmenu.js" type="text/javascript"></script>
<script src="jqGrid/js/jquery.json-2.2.js" type="text/javascript"></script>


<script> var gridimgpath = 'themes/basic/images';</script>
<?php $this->load->view('admin_buttons_top5');?> 
</head>

<body>


  	<form id="global_data">
  	<input type="hidden" name="event_id" id="event_id" value="1"/>
  	<input type="hidden" name="judge_id" id="judge_id" value="1"/>
  	</form>

<div class="entire">
  
  <!-- HEADER SECTION -->
  <div class="header">        
      <div class="headert">Mr & Miss Bukidnon State University 2013</div>
	</div>
	

	
  <div class="a_whole">	  
  
    <!-- LEFT SECTION -->
    <div class="a_left">  
  	    <div class="a_categbtn">
           <ul>
                        <?php for($i=0;$i<sizeof($allJudge);$i++){ ?>
             <li><a id="j_btn<?php echo $allJudge[$i]->judge_id; ?>"><?php echo $allJudge[$i]->judge_name; ?></a></li>
             <?php } ?>
           </ul>
        </div>
        <div class="a_categbtn" style="padding-top:0px;">
           <ul>
             <li><a id="over_all">Over All</a></li>
             <!--<li><a id="proj">PROJECTOR</a></li>-->
              <li><a id="logout_a">Logout</a></li>
           </ul>
        </div>
  	</div>
	
  
  	<!-- RIGHT SECTION -->
  	<div class="a_right">
  	  <fieldset class="text ui-widget-content ui-corner-all" style="border: 1px solid #bbb;font-family:lucida calligraphy;">
  	    	
                <div class="a_grid_up">
                
                   
                </div> 
                
                <div class="a_grid_down">      

                </div> 
                
                <div class="categbtn"><a id="a_print_btn" style="margin-right: 15px;">PRINT</a><a id="a_print_best">PRINT Over All</a></div>
                 
             </div> 
                
              
              
  	  </fieldset>
  	</div>	
  
  </div>	
  
</div>
</body>
</html>


