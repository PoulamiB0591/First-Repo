$(document).ready(function(){
$('body').addClass('stop-scrolling');
   var val= $(".wrapper").find(".SFPTWO_EDITFORM").length;
  
   if(val==1){
    
   $("#settings").show();
   }
   else{
     $("#settings").hide();
   }

        // call your code here that you want to run after all $(document).ready() calls have run
  
$('#walkthrough').pagewalkthrough({
                  
		steps:
        [
               {
                   wrapper: '',
                   margin: 0,
                   popup:
                   {
                       content: '#type-modal',
                       type: 'modal',
                       offsetHorizontal: 0,
                       offsetVertical: 0,
                       width: '400'
                   }        
               },
        
              
               {
                   wrapper: 'ul#leftPanelContainer li.undo-redo',
                   margin: '0',
                   popup:
                   {
                       content: '#type-tooltip-right',
                       type: 'tooltip',
                       position: 'right',
                       offsetHorizontal: 0,
                       offsetVertical: 0,
                       width: '400'
                   }                
               },
                {
                   wrapper: 'ul#leftPanelContainer li#pages',
                   margin: '0',
                   popup:
                   {
                       content: '#type-tooltip-right-pages',
                       type: 'tooltip',
                       position: 'right',
                       offsetHorizontal: 0,
                       offsetVertical: 0,
                       width: '400'
                   }                
               },
              {
                   wrapper: 'ul#leftPanelContainer li#bin',
                   margin: '0',
                   popup:
                   {
                       content: '#type-tooltip-right-bin',
                       type: 'tooltip',
                       position: 'right',
                       offsetHorizontal: 0,
                       offsetVertical: 0,
                       width: '400'
                   }                
               },
                 {
                   wrapper: '.open3',
                   margin: '0',
                   popup:
                   { 
                       content: '#type-tooltip-right-settings',
                       type: 'tooltip',
                       position: 'top',
                       offsetHorizontal: 0,
                       offsetVertical: 0,
                       width: '400'
                   }                
               },
              /* {
                   wrapper: '#formelement',
                   margin: '0',
                   popup:
                   { 
                       content: '#type-tooltip-right-drag-drop',
                       type: 'tooltip',
                       position: 'top',
                       offsetHorizontal: 0,
                       offsetVertical: 0,
                       width: '400'
                   }                
               },*/
                {
                   wrapper: '#front',
                   margin: '0',
                   popup:
                   {
                       content: '#type-tooltip-right-front',
                       type: 'tooltip',
                       position: 'left',
                       offsetHorizontal: 0,
                       offsetVertical: 0,
                       width: '400'
                   }                
               },                                                                         
               {
                   wrapper: '',
                   margin: '0',
                   popup:
                   {
                       content: '#done-walkthrough',
                       type: 'modal',
                       position: '',
                       offsetHorizontal: 0,
                       offsetVertical: 0,
                       width: '400'
                   }             
               },

        ],
        name: 'Walkthrough',
        onLoad: true,
        onClose: function(){
            $('.main-menu ul li a#open-walkthrough').removeClass('active');
            return true;
        },
        onCookieLoad: function(){
            alert('This callback executed when onLoad cookie is FALSE');
            return false;
        }

	});


  /***
   * CALLBACK
   **/

 


  /***
   * METHODS
   */



  /***
   * EXTRA
   */
 

	/***
   * NAVIGATION
   */
    
                
	$('.main-menu ul li a').each(function(){
      $('.main-menu ul li').find('a.active').removeClass('active');
      $(this).live('click', function(){
          $(this).addClass('active');
          var id = $(this).attr('id').split('-');

          if(id == 'parameters') return;

          $.pagewalkthrough('show', id[1]); 
      });
  });


  $('.prev-step').live('click', function(e){
      $.pagewalkthrough('prev',e);
  });

  $('.next-step').live('click', function(e){
      $.pagewalkthrough('next',e);
  });

  $('.restart-step').live('click', function(e){
      $.pagewalkthrough('restart',e);
  });

  $('.close-step').live('click', function(e){
      $.pagewalkthrough('close');
  });
  
});

        