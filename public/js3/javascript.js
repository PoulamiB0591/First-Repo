$(document).ready(function() {
	
	// Makes sure the dataTransfer information is sent when we
	// Drop the item in the drop box.
	jQuery.event.props.push('dataTransfer');
	
	var z = -40;
	// The number of images to display
	var maxFiles = 5;
	var errMessage = 0;
	
	// Get all of the data URIs and put them in an array
	var dataArray = [];
	
	// Bind the drop event to the dropzone.
	$('#upload').bind('drop', function(e) {
			
		// Stop the default action, which is to redirect the page
		// To the dropped file
		
		var files = e.dataTransfer.files;
		
		
		// For each file
		$.each(files, function(index, file) {
						
			// Some error messaging
			if (!files[index].type.match('image.*')) {
				
				if(errMessage == 0) {
					$('#upload').html('Hey! Images only');
					++errMessage
				}
				else if(errMessage == 1) {
					$('#upload').html('Stop it! Images only!');
					++errMessage
				}
				else if(errMessage == 2) {
					$('#upload').html("Can't you read?! Images only!");
					++errMessage
				}
				else if(errMessage == 3) {
					$('#upload').html("Fine! Keep dropping non-images.");
					errMessage = 0;
				}
				return false;
			}
			
		
			// Start a new instance of FileReader
			var fileReader = new FileReader();
				
				// When the filereader loads initiate a function
				fileReader.onload = (function(file) {
					
					return function(e) { 
						
						// Push the data URI into an array
						dataArray.push({name : file.name, value : this.result});
						
						// Move each image 40 more pixels across
						z = z+40;
						var image = this.result;
						
						
						
                            $('#upload').append('<div class="image" style="left: '+z+'px; background: url('+image+'); background-size: cover;"> </div>');
                            
                            $("#upload-button .upload").trigger('click');
					}; 
					
				})(files[index]);
				
			// For data URI purposes
			fileReader.readAsDataURL(file);
	
		});
		

	});
	
	function restartFiles() {
	
		// This is to set the loading bar back to its default state
		$('#loading-bar .loading-color').css({'width' : '0%'});
		$('#loading').css({'display' : 'none'});
		$('#loading-content').html(' ');
		// --------------------------------------------------------
		
		// We need to remove all the images and li elements as
		// appropriate. We'll also make the upload button disappear
		
		$('#upload-button').hide();
		$('#dropped-files > .image').remove();
		$('#extra-files #file-list li').remove();
		$('#extra-files').hide();
		$('#uploaded-holder').hide();
	
		// And finally, empty the array/set z to -40
		dataArray.length = 0;
		z = -40;
		
		return false;
	}
	
	$('#upload-button .upload').click(function() {
		
		//$("#loading").show();
		var totalPercent = 100 / dataArray.length;
		var x = 0;
		var y = 0;
        var base_url = window.location.origin;
		
		//$('#loading-content').html('Uploading '+dataArray[0].name);
		
		$.each(dataArray, function(index, file) {	
			var uri = document.URL;
            var res = uri.split("edit/");
            var res2 = res[1].split("/");
            var newurl = res2[0];
			$.post(base_url+'/Frontend/dragdropupload/'+newurl, dataArray[index], function(data) {
			     alert(data);
				
				
			});
		});
		
		return false;
	});
	
	// Just some styling for the drop file container.
	$('#upload').bind('dragenter', function() {
		$(this).css({'box-shadow' : 'inset 0px 0px 20px rgba(0, 0, 0, 0.1)', 'border' : '4px dashed #bb2b2b'});
		return false;
	});
	
	$('#upload').bind('drop', function() {
		$(this).css({'box-shadow' : 'none', 'border' : '4px dashed rgba(0,0,0,0.2)'});
		return false;
	});
	
	// For the file list
	$('#extra-files .number').toggle(function() {
		$('#file-list').show();
	}, function() {
		$('#file-list').hide();
	});
	
	$('#dropped-files #upload-button .delete').click(restartFiles);
	
	// Append the localstorage the the uploaded files section
	if(window.localStorage.length > 0) {
		$('#uploaded-files').show();
		for (var t = 0; t < window.localStorage.length; t++) {
			var key = window.localStorage.key(t);
			var value = window.localStorage[key];
			// Append the list items
			if(value != undefined || value != '') {
				$('#uploaded-files').append(value);
			}
		}
	} else {
		$('#uploaded-files').hide();
	}
});