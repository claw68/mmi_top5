
   	  <fieldset class="text ui-widget-content ui-corner-all" style="height: 620px; border: 1px solid #bbb;font-family:lucida calligraphy;">
  	  <legend style="font-size: 30px; font-weight: bold;">Female</legend>
 <div class="cf1">
  <img style="background-color:#fff" src="../files/cont_pic/<?php echo $contInfo->cont_pic; ?>" />
 </div>
  	  
  	   
  	     <table class="criteria"> 
  	        <?php for($i=0;$i<sizeof($judge);$i++){ ?>
           <tr>
            <td>Judge</td>
            
            <td class="quantity">
              
            </td> 
            <td>
             <?php echo $total[$i]['total']?>
            </td>
           </tr>  
            <?php } ?>
  
          
             
  	     </table>
  	   
  	  
  	      </fieldset>
