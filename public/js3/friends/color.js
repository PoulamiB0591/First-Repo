$(document).ready( function() {
//$('.minicolors').css('display','none');
            $('.demo').each( function() {
            	
                //
                // Dear reader, it's actually very easy to initialize MiniColors. For example:
                //
                //  $(selector).minicolors();
                //
                // The way I've done it below is just for the demo, so don't get confused
                // by it. Also, data- attributes aren't supported at this time. Again,
                // they're only used for the purposes of this demo.
                //
                $(this).minicolors({
                
                    control: $(this).attr('data-control') || 'hue',
                    defaultValue: $(this).attr('data-defaultValue') || '',
                    inline: $(this).attr('data-inline') === 'true',
                    letterCase: $(this).attr('data-letterCase') || 'lowercase',
                    opacity: $(this).attr('data-opacity'),
                    position: $(this).attr('data-position') || 'bottom left',
                    change: function(hex, opacity) {
                        var log;
                        try {
                            log = hex ? hex : 'transparent';
                            if( opacity ) log += ', ' + opacity;
                            //console.log(log);
                             $('#SFPcolorcode').val(log);
                      	   document.execCommand("foreColor", !1, log); 
                             var getColorSFP = $('#hue-demo').html();
                             $('.demo').click(function() {
                            	// alert( document.getSelection());
                            	   document.execCommand("foreColor", !1, getColorSFP);
                            	
                             });
                         
                        } catch(e) {}
                    },
                    theme: 'default'
                });

            });
            $('body').on('click',".toolbar_text", function(event)
           
            		{
            	       $(this).toggleClass("open");
                        if($(this).hasClass('open'))
                       {
                      
            	        $('.form-group').show();
            	        $('.minicolors').css('display','block');
            			$('.minicolors').trigger('click');
            			$('.minicolors-panel').css('display','block');
            			
            		  	
                        }
                        
                        else
                        {
                            
                	        $('.form-group').hide();
                	        $('.minicolors').css('display','none');
                			$('.minicolors-panel').css('display','none');
                			
                		  	
                         }
                        
            		});
            
          
            
            $('body').on('click',".toolbar-btn", function(event)
                    
            		{
            	     
            	if($(this).hasClass('toolbar_text'))
                {  
            		 $('.form-group').show();
         	        $('.minicolors').css('display','block');
         			$('.minicolors').trigger('click');
         			$('.minicolors-panel').css('display','block');
         			
                }
            	else
            	{
            		//alert("not_pr");
            		$('.toolbar_text').removeClass('open');
            	
            		 $('.form-group').hide();
          	        $('.minicolors').css('display','none');
          			$('.minicolors-panel').hide();
            	}
                        
            		});
            
        });







