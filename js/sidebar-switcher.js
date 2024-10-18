( function( $ ) { 
  
  $( 'button.sidebar-left-toggle' ).click( function() {
  
    if ( !$( '.sidebar' ).hasClass( 'sidebar-left' ) ) {
        $( '.sidebar' ).addClass( 'sidebar-left' ); 
    }     
    
  }); 
  
  
  $( 'button.sidebar-right-toggle' ).click( function() {
  
    if ( $( '.sidebar' ).hasClass( 'sidebar-left' ) ) {
        $( '.sidebar' ).removeClass( 'sidebar-left' );
    }; 
    
  }); 
  
  /* fügt die Klasse .hide hinzu oder entfernt sie falls vorhanden */ 
  $( 'button.sidebar-hide-toggle' ).click( function() {

    $( '.sidebar' ).toggleClass( 'hide' );
    
    /* optional - Buttons anpassen */ 
    if ( $( '.sidebar' ).hasClass( 'hide' ) ) {
      
      $( '.fa-arrow-circle-right' ).css( 'transform', 'rotate(180deg)' ); 
      $( '.sidebar-left-toggle, .sidebar-right-toggle' ).attr( 'disabled', true ).css( 'opacity', '0.5' ); 
      
    } else { 
      
      $( '.sidebar-left-toggle, .sidebar-right-toggle' ).attr( 'disabled', false ); 
      $( '.fa-arrow-circle-right, .sidebar-left-toggle, .sidebar-right-toggle' ).removeAttr( 'style' );
    
    };
  
  });
  
  
})( jQuery );