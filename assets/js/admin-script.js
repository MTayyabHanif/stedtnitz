jQuery(function($){

  // Set all variables to be used in scope
  var frame,
      imagesList = $('#list_images'),
      saveImages = $('#save_images'),
      addImgLink = $("#select_images");
  
  // ADD IMAGE LINK
  addImgLink.on( 'click', function( event ){
    
    event.preventDefault();
    
    // If the media frame already exists, reopen it.
    if ( frame ) {
      frame.open();
      return;
    }
    
    // Create a new media frame
    frame = wp.media({
      title: 'Select or Upload Media Of Your Chosen Persuasion',
      button: {
        text: 'Use this media'
      },
      multiple: true  // Set to true to allow multiple files to be selected
    });

    
    // When an image is selected in the media frame...
    frame.on( 'select', function() {
      
      var attachments = frame.state().get('selection').toJSON();
      var finalImagesList = [];

      for (var i = attachments.length - 1; i >= 0; i--) {

        imagesList.append( '<li><img src="'+attachments[i].url+'" style="width:100px;"/></li>' );

        finalImagesList.push(attachments[i].id);

      }
      
      saveImages.val(JSON.stringify(finalImagesList));
    });

    // Finally, open the modal on click
    frame.open();
  });
});