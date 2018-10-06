var pageBilder = (function(){
	/** Private **/
	var imageWrapper, imageContainer, loadingImage;

	function openImage(event){
		// Show Image Container
		imageWrapper.css('display','flex');
		setTimeout(function(){
			imageWrapper.addClass('active');
		},0);

		// Load Image
		var newImage = document.createElement('img');
		newImage.src = $(event.target).data('source');

		// Append new Image onload, hide loading, show image
		newImage.onload = function(){
			loadingImage.css('display','none');
			imageContainer.append(newImage);
			imageContainer.css('display','block');
		}
	}

	function closeImage(){
		// Hide Image Container
		imageWrapper.removeClass('active');

		// D-None image-wrapper, clean image container, hide image-container, show loading
		setTimeout(function(){
			imageWrapper.css('display','none');
			imageContainer.css('display','none');
			imageContainer.html('');
			imageContainer.css('display','none');
			loadingImage.css('display','block');
		},500)
	}

	/** Public **/
	function setup(){
		// Setup Initial Vars
		imageWrapper = $('.page-bilder_content_detail');
		imageContainer = $('.page-bilder_content_detail .showImage');
		loadingImage   = $('.page-bilder_content_detail .loading');

		$('.page-bilder_content img').on('click',openImage);
		$('.page-bilder_content_detail .close').on('click',closeImage);
	}

	return {
		setup:setup
	}
})();