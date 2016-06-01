$( document ).ready(function() {
    
    //Apply appropriate borders
    
    $( "#table_head .col-xs-2, #table_content .col-xs-2" ).each(function() {
      
      //If not last child element in row, apply border
      if(!$(this).is(':last-child')) {
        $( this ).addClass( "panel-border-right" );
      }
      
    });
    
    //Define colors for post its;
    $pink = "#EB4C5D";
    $yellow = "#C2A100";
    $lightblue = "#59A7BA";
    $green = "#789D33";
    
    //Add event handlers to categories
    
    //Incrementing id for each post it
    $count = 1;
    
    $( ".cat_box-1" ).click(function() {
       //Append div
        $("#ice_box_content").prepend("<div contenteditable='true' class='pink_post_it' id='post_it_"+$count+"'></div>");
        $(".pink_post_it").draggable();
        $("#post_it_"+$count).animate({left: '23.5%', top: '30%'});
        $count++;
    });
    
    $( ".cat_box-2, .cat_box-5, .cat_box-8" ).click(function() {
       //Append div
        $("#ice_box_content").append("<div contenteditable='true' class='yellow_post_it' id='post_it_"+$count+"'></div>");
        $(".yellow_post_it").draggable();
        $("#post_it_"+$count).animate({left: '23.5%', top: '40%'});
        $count++;
    });
    
    $( ".cat_box-3, .cat_box-6, .cat_box-9" ).click(function() {
       //Append div
        $("#ice_box_content").append("<div contenteditable='true' class='green_post_it' id='post_it_"+$count+"'></div>");
        $(".green_post_it").draggable();
        $("#post_it_"+$count).animate({left: '23.5%', top: '50%'});
        $count++;
    });
    
    $( ".cat_box-4, .cat_box-7" ).click(function() {
       //Append div
        $("#ice_box_content").append("<div contenteditable='true' class='lightblue_post_it' id='post_it_"+$count+"'></div>");
        $(".lightblue_post_it").draggable();
        $("#post_it_"+$count).animate({left: '23.5%', top: '60%'});
        $count++;
    });
    
    //Collisions to remove elements
     $( "#trash" ).droppable({
      drop: function( event, ui ) {
        $(ui.draggable).remove();
      }
    });
});