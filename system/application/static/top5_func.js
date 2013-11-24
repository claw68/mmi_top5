// JavaScript Document
$(function()
        { 
         
         
            $("#logout").button();
            
                        $("#login").dialog({
                        height: 'auto',
                        width: 'auto',
                        closeOnEscape: false,
                  			buttons: {
                            Submit: function(){
                                            $.ajax({
      type: "POST",
      url: "mmi_top5_c/ajax_user_login",
      data: $("#login_form").serialize(),
      success: function(data) {
             if(data == 'OK') // LOGIN OK?
          {  
        window.location = '';   
           }
           else if(data == 'admin')
           {
           window.location = ''; 
           }
                           else{
                   $("#error").dialog('open');    //window.location = '';
                  // $("#error").focus();
                }
           ////put error something in login
           }
           
           });
                                
    
                            }
                        }
            }).parent('.ui-dialog').find('.ui-dialog-titlebar-close').hide();
            
                                        $('#login').keyup(function(e) {
    if (e.keyCode == 13) {
        $.ajax({
            type: "POST",
            url: "mmi_top5_c/ajax_user_login",
            data: $("#login_form").serialize(),
            success: function(data) {
                if(data == 'OK'){
                    window.location = '';
                }
                           else if(data == 'admin')
           {
           window.location = ''; 
           }
                else{
                   $("#error").dialog('open');    //window.location = '';
                  // $("#error").focus();
                }
           ////put error something in login
           }

           });
    }
});  
              
   
         //////////ppppppppppppppprrrrrrrrrrroooooooojjjjjjjjjjjjj
         
          $("#a_print_btn").button().width(200).click(function() {  });
         $("#proj").button().width(200).click(function() {  
                                         window.location = 'mmi_top5_c/proj';
                                			});
            $("#logout_a").button().width(200).click(function() {  
                                               window.location = 'mmi_top5_c/logout';
                                               
                                			}); 
                                			               $("#toggle_lcol").button().click(function() {
               $(".leftcol").toggle();
               });
                              $("#toggle_rcol").button().click(function() {
               $(".rightcol").toggle();
               });
                              $("#toggle_ccol").button().click(function() {
               $(".centercol").toggle();
               });
         
         
          
                                			
    //ADMIN----------------------------------------------------------------------------------------
          
            
            
          /////////////////dddddiiiiiiiiaaaaaaalllllooooooooggggggggggg bbbbboooooxxxxxxeeeeesssssssss
            
          $("#success").dialog({
                autoOpen: false,
          			show: 'blind',
          			hide: 'explode',
          			width: 380,
          			modal: true,
          			buttons: {
                
                      OK: function() {
            					$(this).dialog('close');
            				}
                }
          });    
          
          
          $("#error").dialog({
                autoOpen: false,
          			show: 'blind',
          			hide: 'explode',
          			width: 380,
          			modal: true,
          			buttons: {
                
                      OK: function() {
            					$(this).dialog('close');
            				}
                }
          });
          
});
