////////////////////////////////////////////////////////////////
// Gallery Functions                                          //
////////////////////////////////////////////////////////////////

var gallery = (function () {
  /**
   * Setup the elements needed for the gallery to work
   * @param args
   */
  function create(args) {
    var imgClasses          = (args.imgClasses)           ? args.imgClasses           : "";
    var imgContainerClasses = (args.imgContainerClasses)  ? args.imgContainerClasses  : "";
    var spinner             = (args.spinner)              ? args.spinner              : "";
    var images              = (args.images)               ? args.images               : [];
    var galleryID           = (args.galleryID)            ? args.galleryID            : "";

    var galleryElem           = elem(galleryID);
    var galleryOverlay        = document.createElement("div");
    var galleryOverlayImg     = document.createElement("img");

    galleryOverlayImg.className = "bordered-img";
    galleryOverlay.className    = "gallery-overlay";
    galleryOverlay.onclick = function () {
      hideImage(galleryOverlay);
    };

    galleryElem.appendChild(galleryOverlay);
    galleryOverlay.appendChild(galleryOverlayImg);

    // Loop each gallery image
    for(var i = 0; i < images.length; i++) {
      const galleryImgContainer = document.createElement("div");
      const galleryImage        = document.createElement("img");

      galleryImgContainer.className = imgContainerClasses;
      galleryImage.className        = imgClasses;
      galleryImage.src              = images[i];

      if(spinner) {
        galleryImgContainer.classList.add("relative");
        const spinnerHolder = document.createElement("div");
        const spinnerContent = document.createElement("div");

        spinnerHolder.className = "spinner";
        spinnerContent.className = spinner;

        galleryImgContainer.appendChild(spinnerHolder);
        spinnerHolder.appendChild(spinnerContent);

        if(spinner) {
          galleryImage.classList.add("opacity-0");
        }

        galleryImage.onload = function () {
          galleryImage.classList.remove("opacity-0");
        }
      }

      galleryElem.appendChild(galleryImgContainer);
      galleryImgContainer.appendChild(galleryImage);
    }

    // Loop each image in gallery
    for(var j = 1; j < (galleryElem.children.length); j++) {
      const imgElem = galleryElem.children[j];

      imgElem.onclick = function() {
        showImage(imgElem, galleryOverlay);
      };
    }
  }

  /**
   * Run when a gallery image is clicked show the overlay
   * @param imgElem
   * @param overlayElem
   */
  function showImage(imgElem, overlayElem) {
    overlayElem.getElementsByTagName("img")[0].src = imgElem.getElementsByTagName("img")[0].src;
    overlayElem.classList.remove("gallery-overlay-hidden");
    overlayElem.classList.add("gallery-overlay-visible");
    document.body.style.overflow = "hidden";
  }

  /**
   * Run when the gallery overlay is clicked to hide the overlay
   * @param overlayElem
   */
  function hideImage(overlayElem) {
    overlayElem.classList.add("gallery-overlay-hidden");
    overlayElem.classList.remove("gallery-overlay-visible");
    document.body.style.overflow = "";
  }
  
  return {
    create:     function (args) { return create(args) },
    showImage:  function (imgElem, overlayElem) { return showImage(imgElem, overlayElem) },
    hideImage:  function (overlayElem) { return hideImage(overlayElem) }
  }
}) ();

////////////////////////////////////////////////////////////////