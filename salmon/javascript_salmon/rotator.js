var imageMain = document.getElementById("carousel");
// var captionMain = document.getElementById("carouselcaption");

var imageArray = ["/salmon/images_salmon/river_rapids_kayaker.jpg", "/salmon/images_salmon/river_hiker_dog.jpg", "/salmon/images_salmon/river_rapids_rafts_family2.jpg", "/salmon/images_salmon/river_fishermen.jpg", "/salmon/images_salmon/river_grandma_paddling.jpg", "/salmon/images_salmon/river_hiking.jpg", "/salmon/images_salmon/river_red_kayak.jpg", "/salmon/images_salmon/river_tent.jpg"]; 
// var captionArray = ["Kayaker navigating rapids", "Hiking solitude", "Rapids", "River fishing", "There is no age limit on fun!", "River Hiking", "Kayaking the rapids", "Camping river-side"];

var imageIndex = 1;
// var captionIndex = 1;

function changeImage() {
  imageMain.setAttribute("src", imageArray[imageIndex]);
  // imageMain.setAttribute("alt", captionArray[captionIndex]);
  // captionMain.innerHTML = captionArray[captionIndex];
  imageIndex++;
  // captionIndex++;
  if (imageIndex >= imageArray.length) {
    imageIndex = 0;
    //captionIndex = 0;
  }
}

var rotateAction = setInterval(changeImage, 5000); 

imageMain.onmouseover = function( ) {
  clearInterval(rotateAction);
};
imageMain.onmouseout = function( ) {
  rotateAction = setInterval(changeImage, 5000);
};