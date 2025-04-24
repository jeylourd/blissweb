jQuery(document).ready(function($) {
    $('#my-media-button').click(function(e) {
        e.preventDefault();

        // Open the media uploader
        var media_uploader = wp.media.editor.open();
        
        media_uploader.on('insert', function(selected, attachment) {
         console.log(selected.models[0].changed.url);
            // Get the attachment URL (or other data)
            var attachment_url =selected.models[0].changed.url;
           // var attachment_id = attachment.id;

            // Set the URL in the input field
            $('#my_media_field').val(attachment_url);
            $('#img_url').attr('src', attachment_url);;
            // You might also want to set an ID for later use
            //$('#my-media-input').data('attachment_id', attachment_id);
        });

        media_uploader.open();
    });
    $('#update-my-media-button').click(function(e) {
        e.preventDefault();

        // Open the media uploader
        var media_uploader = wp.media.editor.open();
        
        media_uploader.on('insert', function(selected, attachment) {
         console.log(selected.models[0].changed.url);
            // Get the attachment URL (or other data)
            var attachment_url =selected.models[0].changed.url;
           // var attachment_id = attachment.id;

            // Set the URL in the input field
            $('#upt_position_featured_photo').val(attachment_url);
            $('#upt_img_url').attr('src', attachment_url);;
            // You might also want to set an ID for later use
            //$('#my-media-input').data('attachment_id', attachment_id);
        });

        media_uploader.open();
    });


    
});
