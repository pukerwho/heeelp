jQuery(function($){
  $('.loadmore').click(function(){
 
    var button = $(this),
        data = {
      'action': 'loadmore',
      'query': loadmore_params.posts, // that's how we get params from wp_localize_script() function
      'page' : loadmore_params.current_page
    };
 
    $.ajax({
      url : loadmore_params.ajaxurl, // AJAX handler
      data : data,
      type : 'POST',
      beforeSend : function ( xhr ) {
        button.text('Loading...'); // change the button text, you can also add a preloader image
      },
      success : function( data ){
        if( data ) { 
          button.text( 'LOAD MORE' ).prev().before(data); // insert new posts          
          loadmore_params.current_page++;
          console.log(data);
          $('.entry-section .container-fluid .row:first-child').append(data);

          if ( loadmore_params.current_page == loadmore_params.max_page ) 
            button.remove(); // if last page, remove the button
 
          // you can also fire the "post-load" event here if you use a plugin that requires it
          // $( document.body ).trigger( 'post-load' );
        } else {
          button.remove(); // if no data, remove the button as well
        }
      }
    });
  });
});