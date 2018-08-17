/*  --- LIBRARIUM. COVER MANAGEMENT ---
    This is the front-end script for managing cover images on Librarium.
    It mostly manages the cropper, and sending data to the equivalent 
    server-side script.

    In comparison to V2, we've moved a lot of the hard work to the cropper
    script, meaning the only functions we need to provide server-side are
    saving and retrieving of the image data. This reduces the amount of
    extra code we need.

    (C) 2018 Logan Burrell / Green Warrior Productions
    (C) 2017-2018 SPLITelevision Productions c/o Troy .J. Malcolm

    Version 3.180507                                                         */

function startCropper(input) {
    // Check a file has actually been selected
    if (input.files && input.files[0]) {
        // Create a new object to read the file (FileReader)
        var reader = new FileReader();
        // Run when the reader has loaded
        reader.onload = function(e) {
            // Set the source of the crop image to the "uploaded" image
            $('#BKDCropImage').attr('src', e.target.result);
            // Set the "image" variable to the uploaded image element for easier access
            var image = document.getElementById('BKDCropImage');
            // Start the cropper on the uploaded image
            var cropper = new Cropper(image, {
                // Make sure the cropper stays within the image boundaries
                strict: true,
                viewMode: 1,
                // Allow user zooming via pinching etc
                zoomable: true,
                // Allow user rotation
                rotatable: true,
                // Allow the user to move the image
                movable: true,
                // Sets the initial cropping area to be a third of the image
                autoCropArea: 0.3,
                // Functions to run when the user is interacting with the cropper
                crop: function(e) {
                    // NOTE: These may be removed at a later point. I'm currently
                    // experimenting with other options that may negate the need for these
                    $('#BKDCropX').val(e.detail.x);
                    $('#BKDCropY').val(e.detail.y);
                    $('#BKDCropW').val(e.detail.width);
                    $('#BKDCropH').val(e.detail.height);
                },
                // Functions to run when the cropper is ready
                ready: function() {
                    // NOTE: Due to how the cropper works, any buttons etc need to have their
                    // "onclick" attribute and function set here - this is not my choice, 
                    // unfortunately it's just how the developer designed it

                    // Code for the "Rotate Left" button (rotates by -90 degrees)
                    $("#CVRCRRotateL").click( function() {
                        cropper.rotate(-90);
                    });

                    // Code for the "Save"/"Done" button
                    $("#CVRCRSave").click( function() {
                        // A low performance polyfill for canvas.toBlob() based on toDataURL from MDN
                        // Don't ask me exactly what this does as it is a copy/paste jobby from MDN.
                        // This is used for any browser that doesn't support canvas.toBlob()
                        if (!HTMLCanvasElement.prototype.toBlob) {
                            Object.defineProperty(HTMLCanvasElement.prototype, 'toBlob', {
                                value: function (callback, type, quality) {
                                    var canvas = this;
                                    setTimeout(function() {
                          
                                        var binStr = atob( canvas.toDataURL(type, quality).split(',')[1] ),
                                            len = binStr.length,
                                            arr = new Uint8Array(len);
                          
                                        for (var i = 0; i < len; i++ ) {
                                            arr[i] = binStr.charCodeAt(i);
                                        }
                          
                                        callback( new Blob( [arr], {type: type || 'image/png'} ) );
                          
                                    });
                                }
                            });
                        }

                        // Get the cropped canvas from the cropper (the area the user has selected),
                        // scaled to a maximum of 640 x 640 pixels, and convert it to a blob.
                        cropper.getCroppedCanvas({maxWidth: 640,maxHeight: 640}).toBlob(function(blob) {
                            // Create a new FormData object to store our "form" data (the image) as "formData"
                            var formData = new FormData();
                            // This is only for development, it will be replaced with a reference in production
                            // Set the item ID
                            var id = 1;
                            
                            // Add the blob to the FormData object, as "croppedImage"
                            formData.append('croppedImage', blob);

                            // Start AJAX
                            $.ajax({
                                // The URL to post the data to
                                url: '/collmanage/coverart.php?id=testdb&upload=' + id,
                                // The data to send (our FormData object as "formData")
                                data: formData,
                                // Don't cache the data
                                cache: false,
                                // Setting these to "true" will cause AJAX to send our image as text
                                contentType: false,
                                processData: false,
                                // Protocol to send our data with ("POST")
                                method: 'POST',
                                // Functions to run if the query is a success
                                success: function() {
                                    // Close the cropping dialogue
                                    diagClose("#CoverCrop");
                                    // There will be more here, but for testing, just closing the
                                    // dialogue is fine
                                },
                                // Functions to run if the query returned an error
                                error: function() {
                                    // There will be more here as well, but currently all errors are
                                    // output to the console so this is fine for testing.
                                    // Ultimately there shouldn't be any errors when using this script anyway
                                }

                            });
                            // Output as a JPEG image, at 95% quality
                          }, 'image/jpeg', 0.95);
                    });
                }
            });
            // Show the cropper interface when the reader is ready
            diagOpen("#CoverCrop");
        }
        // Read the "uploaded" image
        reader.readAsDataURL(input.files[0]);
    }
}