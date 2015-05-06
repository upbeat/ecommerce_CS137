//rotate.js
//Get all of today's information in a JavaScript Date object
//Build the appropriate prefix for filenames, depending on whether
//today is a weekday (indoor images) or the weekend (outdoor images).
var prefix = "bookCoverImg/cover";

//Use that prefix to put the proper sequence of image filenames into an array
var imageArray = new Array(5);
for (i=0; i<imageArray.length; i++)
  imageArray[i] = prefix + i + ".jpg";

 //Rotate the images in the array
var imageCounter = 0;
function rotate()
{
 var imageObject = document.getElementById('coverRotate');
 imageObject.src = imageArray[imageCounter];
 ++imageCounter;
 if (imageCounter == 5) imageCounter = 0;
}

function startRotation()
{
 document.getElementById('coverRotate').src=imageArray[0];
 setInterval('rotate()', 2000);
}
