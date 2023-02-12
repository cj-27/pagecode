<?php

session_start();
include("connections.php");
include("functions.php");
include("save_template.php");
include("load_template.php");


$user_info = check_login($con);
 $subscribed = is_subscribed($user_info);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Edit Your Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
    <div class="navbar">
       <a href="indexSub.php">Home</a>
       <input  type="file" id="upload-image">
       <button id="download-button" class="tooltip" title="Click to download your current project as an image file">Download Project</button>
       
      
        
    </div>
  

<head>
  <head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/3.6.3/fabric.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/opentype.js/0.8.4/opentype.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Sassy+Frass&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Explora&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
 
  
  


  
  <script src="script.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 
  <div>
  <div class="navbar">
    
    <style>



</style>
    <select class="tooltip" id="type-template" title="Choose your design type catagory">
      <option value="church">Church</option>
      <option value="birthday">Birthday</option>
      <option value="wedding">Wedding</option></select>
      <select class="tooltip" id="canvas-dimensions" title="Choose your design format and dimensions">
        <option value="800:297">Facebook Cover</option>
        <option value="800:450">Youtube Thumbnail</option>
        <option value="450:800">Instagram Story</option>
        <option value="618:800">US Flyer</option>
        <option value="534:800">Poster</option>
        <option value="572:800">A4</option>
        <option value="800:400">Twitter Post</option>
        <option value="800:200">Twitch Banner</option>
        <option value="800:450">Website Header</option>
        <option value="450:450">Logo/Square</option>
      </select>
      <button id="resize-Tcanvas" class="tooltip" title="Resize the canvas to your selected format options">
  <span>Resize Canvas</span>
</button>
<button id="auto-generate" class="tooltip" title="Click to auto generate a template to your specific options">
  <span>Auto Generate</span>
</button>

</label>
</div>
<style>
.navbar1 {
  display: flex;
  justify-content: space-between;
  background: linear-gradient(to right, 
    #ff0000, #ff7f00, #ffff00, 
    #00ff00, #0000ff, #4b0082, 
    #9400d3);
}



</style>
<div class="navbar1"> 
 
 <button id="saveProject" class="tooltip" title="Click to save the project to your device for later editing">Save Project</button>
 <button id="loadProject" class="tooltip" title="Click to load a project from your device">Load project</button>
 <button id="undo" class="tooltip" title="Click to undo last step">Undo</button>
 <button id="redo" class="tooltip" title="Click to redo previous step">Redo</button>
 <button id="changeBgBtn" class="tooltip" title="Change the background image ,uses your own image">Change Background</button>
 <button id="add-text-button" class="tooltip" title="Adds a text to the project">Add Text</button>
 <button id="add-shape" class="tooltip" title="Adds a selected shape to the project">Add Shape</button>
   
 </div>
 </div>



 <div>
<canvas id="canvas"> </canvas>
</div>
<div>
<select class="tooltip" id="text-alignment" title="Choose the paragraph alignment for the selected text">
<option value="left">Left</option>
<option value="center">Center</option>
<option value="right">Right</option>
</select>
</div>

 
  <div id="options-box">
  
    <input type="color" id="color-picker" class="tooltip" title="Set the color of the selected object">

    <label for="kleur-kieser" id="kleur-kieser">Color Selected Object:</label>
    <select class="tooltip" id="font-select" title="Choose the font type for the selected text">
    <option value="Arial">Arial</option>
    <option value="Helvetica">Helvetica</option>
    <option value="Sassy Frass">Sassy Frass</option>
    <option value="Dancing Script">Dancing Script</option>
    <option value="Lobster">Lobster</option>
    <option value="Explora">Explora</option>
    <option value="Pacifico">Pacifico</option>
    <option value="Great Vibes">Great Vibes</option>
    <option value="Times New Roman">Times New Roman</option>
    <option value="Monospace">Monospace</option>
    <option value="Courier">Courier</option>
    <option value="Open Sans">Open Sans</option>
    <option value="Roboto">Roboto</option>
    <option value="Source Sans Pro">Source Sans Pro</option>
    <option value="Comic Sans MS">Comic Sans MS</option>
    <option value="Cursive">Cursive</option>
    <option value="Fantasy">Fantasy</option>
    <option value="Garamond">Garamond</option>
    <option value="Georgia">Georgia</option>
    <option value="Impact">Impact</option>
    <option value="Lucida Console">Lucida Console</option>
    <option value="Lucida Sans Unicode">Lucida Sans Unicode</option>
    <option value="Palatino Linotype">Palatino Linotype</option>
    <option value="Tahoma">Tahoma</option>
    <option value="Trebuchet MS">Trebuchet MS</option>
    <option value="Verdana">Verdana</option>
  </select>
  </div>
    <button id="align-horizontally" class="tooltip" title="Align all selected objects Horizontally">Align Horizontally</button>
  
    
    
    <select class="tooltip" id="filter" title="Give the selected image a Filter effect">
  <option value="none">None</option>
  <option value="greyscale">Greyscale</option>
  <option value="invert">Invert</option>
  <option value="sepia">Sepia</option>
</select>

    <button id="align-vertically-right" class="tooltip" title="Duplicate all selected objects">Duplicate</button>
    <button id="align-vertically" class="tooltip" title="Align all selected objects Vertically">Align Vertically</button>
    <button id="delete-selected" class="tooltip" title="Delete all selected objects">Delete</button>
    <button id="delete-selected1" class="tooltip" title="Delete selected Object">Delete</button>
    <button id="duplicate" class="tooltip" title="Duplicate the selected object">Duplicate</button>
    <button id="bring-to-front-button" class="tooltip" title="Click to bring selected object one step in front of the next object">Bring to Front</button>
    <button id="send-to-back-button" class="tooltip" title="Click to send selected object one step behind of the object that is behind it">Send to Back</button>
    
   


   
  
 
<label for="transparency-slider" id="transparacy-label">Transparency:</label>
<input type="range" id="transparency-slider"min="0" max="1" step="0.1" class="tooltip" title="Set the transparency of the selected object">
<label class="tooltip"  for="shadow-checkbox" id="shadow-tick">Add Shadow:</label>
<input type="checkbox" id="shadow-checkbox" class="tooltip" title="Add or remove shadow of selected object">
<input type="range" min="0" max="50" value="10" class="tooltip"id="shadow-slider" title="Modify shadow settings">
<div id="download-message" style="display:none">Download in progress...</div>
<div id="loading-spinner" style="display:none"></div>

</body>

<script>

//CANVAS AND RESIZE OF CANVAS CANVAS AND RESIZE OF CANVAS CANVAS AND RESIZE OF CANVAS CANVAS AND RESIZE OF CANVAS CANVAS AND RESIZE OF CANVAS CANVAS AND RESIZE OF CANVAS CANVAS AND RESIZE OF CANVAS

var canvas = new fabric.Canvas('canvas');canvas.setWidth(500);
canvas.setHeight(720);


document.getElementById("auto-generate").addEventListener("click", resizeCanvas);

function resizeCanvas() {
  var dimensions = document.getElementById("canvas-dimensions").value;
  var width = parseFloat(dimensions.split(':')[0]);
  var height = parseFloat(dimensions.split(':')[1]);
  canvas.setWidth(width);
  canvas.setHeight(height);
  // remove all the states after the current state
}
//<button id="speak">Hover me</button>
//<div id="avatar"></div>
//const speakButton = document.querySelector('#speak');
//speakButton.addEventListener('mouseenter', () => {
 // const avatar = document.querySelector('#avatar');
 // const speech = new SpeechSynthesisUtterance('Click to send selected object one step behind of the object that is behind it');
 // window.speechSynthesis.speak(speech);
//});

document.getElementById("resize-Tcanvas").addEventListener("click", resizeCanvas);

function resizeCanvas() {
  var dimensions = document.getElementById("canvas-dimensions").value;
  var width = parseFloat(dimensions.split(':')[0]);
  var height = parseFloat(dimensions.split(':')[1]);
  canvas.setWidth(width);
  canvas.setHeight(height);
  // remove all the states after the current state
}




  
  // ADDING OF OBJECTS TO CANVAS ADDING OF OBJECTS TO CANVAS ADDING OF OBJECTS TO CANVAS ADDING OF OBJECTS TO CANVAS ADDING OF OBJECTS TO CANVAS ADDING OF OBJECTS TO CANVAS ADDING OF OBJECTS TO CANVAS
  //changing the background
  var input = document.createElement("input");
input.setAttribute("type", "file");
input.setAttribute("accept", "image/*");
input.style.display = "none";

var changeBgBtn = document.getElementById("changeBgBtn");
changeBgBtn.addEventListener("click", function() {
  input.click();
});

input.addEventListener("change", function() {
  var file = input.files[0];
  var reader = new FileReader();
  reader.onload = function(event) {
    var img = new Image();
    img.onload = function() {
      var imgInstance = new fabric.Image(img, {});
      var canvasWidth = canvas.width;
      var canvasHeight = canvas.height;
      var imageWidth = imgInstance.width;
      var imageHeight = imgInstance.height;
      var scaleX = canvasWidth / imageWidth;
      var scaleY = canvasHeight / imageHeight;
      var scale = Math.max(scaleX, scaleY);

      if (imgInstance.width > imgInstance.height && canvasHeight > canvasWidth) {
        imgInstance.set({
          angle: 90,
        });
      } else if (imgInstance.height > imgInstance.width && canvasWidth > canvasHeight) {
        imgInstance.set({
          angle: 90,
        });
      }

      if (canvasHeight > canvasWidth) {
        imgInstance.scale(scale * 0.8);
      } else {
        imgInstance.scale(scale);
      }

      imgInstance.set({
        left: canvasWidth / 2,
        top: canvasHeight / 2,
        originX: "center",
        originY: "center",
      });

      canvas.setBackgroundImage(imgInstance, canvas.renderAll.bind(canvas));
    };
    img.src = event.target.result;
  };
  reader.readAsDataURL(file);
});



//saving and loading project
// Save button
document.getElementById("saveProject").addEventListener("click", function() {
  var fileName = prompt("Enter the name of the file to save the project as: ");
  if (!fileName) {
    return;
  }

  // retrieve the default background color of the page
  var bgColor = window.getComputedStyle(document.body).backgroundColor;

  // create a rectangle with the same height and width as the canvas
  var rect = new fabric.Rect({
    left: 0,
    top: 0,
    width: canvas.width,
    height: canvas.height,
    fill: bgColor
  });

  // add the rectangle to the canvas
  canvas.add(rect);

  // convert the canvas and its objects to a JSON string
  var jsonData = JSON.stringify(canvas);

  // remove the rectangle from the canvas
  canvas.remove(rect);

  // create a Blob object from the JSON string
  var blob = new Blob([jsonData], { type: 'application/json' });

  // create an anchor element and set its href to the URL of the Blob object
  var a = document.createElement('a');
  a.href = URL.createObjectURL(blob);
  a.download = fileName + '.json';

  // trigger a click event on the anchor element to initiate the download
  a.click();
});
document.getElementById("loadProject").addEventListener("click", function() {
  var typeTemplate = document.getElementById("type-template").value;
  var canvasDimensions = document.getElementById("canvas-dimensions").value;

  if (typeTemplate === "church" && canvasDimensions === "800:297") {
    var fileIndex = Math.floor(Math.random() * (4 - 1 + 1)) + 1;
    var fileName = "image" + fileIndex + ".json";

    fetch('ElegantChurch/' + fileName)
      .then(function(response) {
        return response.text();
      })
      .then(function(text) {
        var jsonString = text;
        canvas.loadFromJSON(jsonString, function() {
          var objects = canvas.getObjects();
          var rect;

          // get the last object in the canvas
          var lastObject = objects[objects.length - 1];

          // if the last object is a rectangle, set the canvas height and width to its dimensions
          if (lastObject.type === 'rect') {
            rect = lastObject;
            canvas.setWidth(rect.width);
            canvas.setHeight(rect.height);
          }

          canvas.renderAll();
          canvas.remove(rect);
          canvas.renderAll();
        });
      });
  } else if (typeTemplate === "church" && canvasDimensions === "618:800") {
    var fileIndex = Math.floor(Math.random() * (14 - 11 + 1)) + 11;
    var fileName = "image" + fileIndex + ".json";

    fetch('ElegantChurch/' + fileName)
      .then(function(response) {
        return response.text();
      })
      .then(function(text) {
        var jsonString = text;
        canvas.loadFromJSON(jsonString, function() {
          var objects = canvas.getObjects();
          var rect;

          // get the last object in the canvas
          var lastObject = objects[objects.length - 1];

          // if the last object is a rectangle, set the canvas height and width to its dimensions
          if (lastObject.type === 'rect') {
            rect = lastObject;
            canvas.setWidth(rect.width);
            canvas.setHeight(rect.height);
          }

          canvas.renderAll();
          canvas.remove(rect);
          canvas.renderAll();
        });
      });
  } else if (typeTemplate === "church" && canvasDimensions === "450:450") {
    var fileIndex = Math.floor(Math.random() * (24 - 21 + 1)) + 21;
    var fileName = "image" + fileIndex + ".json";

    fetch('ElegantChurch/' + fileName)
      .then(function(response) {
        return response.text();
      })
      .then(function(text) {
        var jsonString = text;
        canvas.loadFromJSON(jsonString, function() {
          var objects = canvas.getObjects();
          var rect;

          // get the last object in the canvas
          var lastObject = objects[objects.length - 1];
                    // if the last object is a rectangle, set the canvas height and width to its dimensions
                    if (lastObject.type === 'rect') {
            rect = lastObject;
            canvas.setWidth(rect.width);
            canvas.setHeight(rect.height);
          }

          canvas.renderAll();
          canvas.remove(rect);
          canvas.renderAll();
        });
      });
  } else {
    // show an error message or do nothing
    console.log("Error: the selected type template and canvas dimensions do not match the desired values");
  }
});





/*
// Load button
// Load button
// Load button
document.getElementById("loadProject").addEventListener("click", function() {
  var input = document.createElement("input");
  input.type = "file";
  input.accept = "application/json";
  input.addEventListener("change", function(e) {
    var file = e.target.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
      var jsonString = e.target.result;
      canvas.loadFromJSON(jsonString, function() {
        var objects = canvas.getObjects();
        var rect;

        // get the last object in the canvas
        var lastObject = objects[objects.length - 1];

        // if the last object is a rectangle, set the canvas height and width to its dimensions
       
          rect = lastObject;
          canvas.setWidth(rect.width);
          canvas.setHeight(rect.height);
          
        

      

        canvas.renderAll();
        canvas.remove(rect);
        canvas.renderAll();


      });
    };
    reader.readAsText(file);
  });
  input.click();
});

*/
  // Add event listeners for shape, text, and image upload
  document.getElementById('add-shape').addEventListener('click', addShape);
  document.getElementById('add-text-button').addEventListener('click', addText);
  document.getElementById('upload-image').addEventListener('change', uploadImage);

  // Function to add a shape to the canvas
function addShape() {
    
    var shape;
// Create the selector window
let selectorWindow = document.createElement("div");
selectorWindow.classList.add("selector-window");


let circleButton = document.createElement("img");
circleButton.src = "Elegant/circle.jpg";
circleButton.width = 300;
circleButton.height = 300;
circleButton.onclick = function() {
	shape = new fabric.Circle({
		radius: 50,
		fill: 'white',
		
	});
	canvas.add(shape);
	selectorWindow.remove();
  // remove all the states after the current state
states.splice(currentState + 1);
// push the new state to the array
states.push(JSON.stringify(canvas));
currentState++;
};

let rectangleButton = document.createElement("img");
rectangleButton.src = "Elegant/square.jpg";
rectangleButton.width = 300;
rectangleButton.height = 300;
rectangleButton.onclick = function() {
	shape = new fabric.Rect({
		width: 100,
		height: 100,
		fill: 'white',
	
	});
	canvas.add(shape);
	selectorWindow.remove();
  // remove all the states after the current state
states.splice(currentState + 1);
// push the new state to the array
states.push(JSON.stringify(canvas));
currentState++;
};

let triangleButton = document.createElement("img");
triangleButton.src = "Elegant/triangle.jpg";
triangleButton.width = 300;
triangleButton.height = 300;
triangleButton.onclick = function() {
	shape = new fabric.Triangle({
		width: 100,
		height: 100,
		fill: 'white',
		
	});
  canvas.add(shape);
	selectorWindow.remove(); // Set a random background image
   // remove all the states after the current state
states.splice(currentState + 1);
// push the new state to the array
states.push(JSON.stringify(canvas));
currentState++;
};
  

let starButton = document.createElement("img");
starButton.src = "Elegant/star.jpg";
starButton.width = 300;
starButton.height = 300;
starButton.onclick = function() {
  let canvasWidth = canvas.getWidth();
  let canvasHeight = canvas.getHeight();

  shape = new fabric.Polygon([
   /* 1*/ { x: 95, y:  120},
   /* 2*/{ x: 45, y:  155}, 
   /* 3*/{ x: 55, y:  100},
   /* 4*/ { x: 10, y: 65 },
   /* 5*/{ x: 70, y:  55},
   /* 6*/ { x: 95, y: 0 },
   /* 7*/{ x:120, y:  55},
    /* 8*/{ x:180, y: 65 },
    /* 9*/{ x: 135, y:  100},
   /* 10*/{ x: 145, y: 155 }
  ], {
    fill: 'white',
    
	});
	canvas.add(shape);
	selectorWindow.remove();
  // remove all the states after the current state
states.splice(currentState + 1);
// push the new state to the array
states.push(JSON.stringify(canvas));
currentState++;
};

let heartButton = document.createElement("img");
heartButton.src = "Elegant/heart.jpg";
heartButton.width = 300;
heartButton.height = 300;
heartButton.onclick = function() {
  
 

  var square = new fabric.Rect({
  left: 150.5,
  top: 167,
  fill: 'white',
  width: 100,
  height: 100,
  angle: 45
});

var circle1 = new fabric.Circle({
  left: 62,
  top: 150,
  fill: 'white',
  radius: 50
});

var circle2 = new fabric.Circle({
  left: 138,
  top: 150,
  fill: 'white',
  radius: 50
});

var group = new fabric.Group([square, circle1, circle2], {
  left: 0,
  top: 0,
  fill: 'green',
 
});


group.set({ fill: 'green' });
group.set({ stroke: 'blue' });
group.set({ strokeWidth: 5 });
canvas.renderAll();

canvas.add(group);
canvas.renderAll();



//var heartPath = squarePath.slice(0, -2) + circle1Path + circle2Path + " Z";



	selectorWindow.remove();
  // remove all the states after the current state
states.splice(currentState + 1);
// push the new state to the array
states.push(JSON.stringify(canvas));
currentState++;

canvas.renderAll();
};

let pentagonButton = document.createElement("img");
pentagonButton.src = "Elegant/pentagon.jpg";
pentagonButton.width = 300;
pentagonButton.height = 300;
pentagonButton.onclick = function() {
	shape = new fabric.Polygon([
   { x: 45, y:  155}, 
    { x: 10, y: 65 }, 
    { x: 95, y: 0 },
    { x:180, y: 65 },
    { x: 145, y: 155 }
  ], {
    fill: 'white',
   
	});
	canvas.add(shape);
	selectorWindow.remove();
  // remove all the states after the current state
states.splice(currentState + 1);
// push the new state to the array
states.push(JSON.stringify(canvas));
currentState++;
};


// Add the buttons to the selector window
selectorWindow.appendChild(circleButton);
selectorWindow.appendChild(rectangleButton);
selectorWindow.appendChild(triangleButton);
selectorWindow.appendChild(starButton);
selectorWindow.appendChild(heartButton);
selectorWindow.appendChild(pentagonButton);

// Add the selector window to the page
document.body.appendChild(selectorWindow);

// Add the CSS


	

}




// Define the path for the heart


// Create the selector window for shapes
let selectorWindow = document.createElement("div");
selectorWindow.classList.add("selector-window1");
selectorWindow.style.width = "500px";

selectorWindow.style.position = "absolute";
selectorWindow.style.right = "0px";
selectorWindow.style.bottom = "100px";
selectorWindow.style.top = canvas.clientHeight + "px";  // set top position to match canvas height
selectorWindow.style.backgroundColor = "rgba(0, 0, 0, 0.5)";
selectorWindow.style.display = "none";






let bringToFrontButton = document.querySelector('#bring-to-front-button');
let sendToBackButton = document.querySelector('#send-to-back-button');
let shadowTick = document.querySelector('#shadow-tick');
let transparencySlider = document.querySelector('#transparency-slider');
let shadowCheckbox = document.querySelector('#shadow-checkbox');
let shadowSlider = document.querySelector('#shadow-slider');
let labelTransparency = document.querySelector('#transparacy-label');
let chooseOfColor = document.querySelector('#kleur-kieser');
let colorPicker = document.querySelector('#color-picker');
let duplicaTe = document.querySelector('#duplicate');
let deleteSelected1 = document.querySelector('#delete-selected1');
let alignTexr = document.querySelector('#text-alignment');
let fontSelect = document.querySelector('#font-select');
let filterSelect = document.querySelector('#filter');





// Add the buttons to the selector window


selectorWindow.appendChild(bringToFrontButton);
selectorWindow.appendChild(sendToBackButton);
selectorWindow.appendChild(labelTransparency);
selectorWindow.appendChild(transparencySlider);
selectorWindow.appendChild(shadowCheckbox);
selectorWindow.appendChild(shadowTick);
selectorWindow.appendChild(shadowSlider);
selectorWindow.appendChild(chooseOfColor);
selectorWindow.appendChild(colorPicker);
selectorWindow.appendChild(duplicaTe);
selectorWindow.appendChild(deleteSelected1);
selectorWindow.appendChild(fontSelect);
selectorWindow.appendChild(alignTexr);
selectorWindow.appendChild(filterSelect);





// Add the selector window to the page
document.body.appendChild(selectorWindow);

// Show the selector window when an object is selected
// Show the selector window when an object is selected
canvas.on('object:selected', function() {
  let selectedObject = canvas.getActiveObject();
    // remove all the states after the current state
    states.splice(currentState + 1);
        // push the new state to the array
        states.push(JSON.stringify(canvas));
        currentState++;
    
  
  
  
  colorPicker.value = selectedObject.fill;
  transparencySlider.value = selectedObject.opacity;
  shadowCheckbox.checked = selectedObject.shadow;
  shadowSlider.value = selectedObject.shadowBlur;
  fontSelect.value = selectedObject.fontFamily;

  selectorWindow.style.display = "true";
  let totalWidth = window.innerWidth;
  let canvasWidth = canvas.width;
  let percentage = (totalWidth - canvasWidth) / totalWidth * 100;
  percentage = percentage - 2;
  document.querySelector('.selector-window1').style.width = percentage + "%";
  selectorWindow.style.display = "block";
  selectorWindow.style.height = percentage + "%";
  if (selectorWindow.style.display === "true") {
    canvas.remove(selectedObject);

    //canvas.setActiveObject(selectedObject);
    //return;
  }
});

canvas.on('selection:cleared', function() {
  selectorWindow.style.display = "none";
});



  // Function to add text to the canvas
  function addText() {
    var text = "Edit Text";
    var fontFamily = "Arial";
    var textObject = new fabric.IText(text, {
        fontFamily: fontFamily,
        left: 100,
        top: 100,
        editable: true
    });
    canvas.add(textObject);
    canvas.setActiveObject(textObject);
    // remove all the states after the current state
states.splice(currentState + 1);
// push the new state to the array
states.push(JSON.stringify(canvas));
currentState++;
}
document.getElementById("font-select").addEventListener("change", changeFont);
function changeFont() {
var select = document.getElementById("font-select");
var selectedValue = select.options[select.selectedIndex].value;
var activeObject = canvas.getActiveObject();
if (activeObject && activeObject.type === 'i-text') {
activeObject.set("fontFamily", selectedValue);
canvas.renderAll();
states.splice(currentState + 1);
states.push(JSON.stringify(canvas));
currentState++;
}
}

canvas.on("object:selected", function (options) {
if (options.target.type === 'i-text') {
var fontFamily = options.target.fontFamily;
var select = document.getElementById("font-select");
for (var i = 0; i < select.options.length; i++) {
if (select.options[i].value === fontFamily) {
select.selectedIndex = i;
break;
}
}
}
});


// Function to upload an image to the canvas
function uploadImage(e) {
var file = e.target.files[0];
var reader = new FileReader();
reader.onload = function(f) {
var data = f.target.result;
fabric.Image.fromURL(data, function(img) {
var oImg = img.set({left: 0, top: 0, angle: 0}).scale(0.2);
canvas.add(oImg).renderAll();
var a = canvas.setActiveObject(oImg);
var dataURL = canvas.toDataURL({format: 'png', quality: 0.8});
});
};
reader.readAsDataURL(file);
// remove all the states after the current state
states.splice(currentState + 1);
// push the new state to the array
states.push(JSON.stringify(canvas));
currentState++;
}


    
// Clipping to a square
// Get reference to currently selected object
//var selectedObject;
//canvas.on('object:selected', function (e) {
 // selectedObject = e.target;
//});

// Clipping to a square


//DELETE DESELECT AND SELECT ALL DELETE DESELECT AND SELECT ALL DELETE DESELECT AND SELECT ALL DELETE DESELECT AND SELECT ALL DELETE DESELECT AND SELECT ALL DELETE DESELECT AND SELECT ALL


document.querySelector('#text-alignment').addEventListener('change', function() {
var selectedOption = this.value;
var activeObjects = canvas.getActiveObjects();
activeObjects.forEach(function(object) {
object.set({
textAlign: selectedOption
}).setCoords();
});
canvas.renderAll();
});

canvas.on("object:selected", function (options) {
if (options.target.type === 'i-text') {
var textAlign = options.target.textAlign;
var select = document.getElementById("text-alignment");
for (var i = 0; i < select.options.length; i++) {
if (select.options[i].value === textAlign) {
select.selectedIndex = i;
break;
}
}
}
});





// array to store states
var states = [];
var currentState = 0;

// push initial state to the array
states.push(JSON.stringify(canvas));

// handle redo button click
document.getElementById("redo").addEventListener("click", function(){
if (currentState < states.length - 1) {
currentState++;
// render the next state
canvas.clear().renderAll();
canvas.loadFromJSON(states[currentState]);
canvas.renderAll();
}
});

document.getElementById("undo").addEventListener("click", function(){
  var clippedObject = canvas.getObjects().find(function(obj) {
    return obj.clipTo !== null;
  });
  if (clippedObject) {
    clippedObject.clipTo = null;
  }
  if (currentState >= 0) {
    currentState--;
    canvas.clear().renderAll();
    canvas.loadFromJSON(states[currentState]);
    canvas.renderAll();
  }
});
 

document.addEventListener("keydown", function(e) {
  if (e.ctrlKey && e.keyCode === 90) {
    document.getElementById("undo").click();
  }
});


document.getElementById("auto-generate").addEventListener("click", function(){
// remove all the states after the current state
states.splice(currentState + 1);
// push the new state to the array
states.push(JSON.stringify(canvas));
currentState++;

});
document.getElementById("auto-generate").addEventListener("click", function(){
// remove all the states after the current state
states.splice(currentState + 1);
// push the new state to the array
states.push(JSON.stringify(canvas));
currentState++;

});
// push state to the array on every modification
canvas.on('object:modified', function(){
// remove all the states after the current state
states.splice(currentState + 1);
// push the new state to the array
states.push(JSON.stringify(canvas));
currentState++;
});


//<button class="controls" id="circle-clip">Circle Clip</button>
//circlle clipping
//document.getElementById('circle-clip').addEventListener('click', function () {
  // activeObject = canvas.getActiveObject();
  // remove all the states after the current state
//states.splice(currentState + 1);
// push the new state to the array
//states.push(JSON.stringify(canvas));
//currentState++;
  //if (!activeObject) return;
 // var radius = Math.min(activeObject.width, activeObject.height) / 2;
  //activeObject.clipTo = function (ctx) {
  //  ctx.arc(0, 0, radius, 0, Math.PI * 2, true);
   
    
    
  //};
 
 // canvas.renderAll();
///  
//});


// Function to delete selected object
document.getElementById("delete-selected").onclick = function() {

  var activeObjects = canvas.getActiveObjects();
  if (activeObjects.length) {
    canvas.discardActiveObject();
    activeObjects.forEach(function(object) {
      canvas.remove(object);
    });
    canvas.renderAll();
      // remove all the states after the current state
states.splice(currentState + 1);
// push the new state to the array
states.push(JSON.stringify(canvas));
currentState++;
  }
}//DELETE USING DEL KEY
document.addEventListener("keydown", function(e) {
  
  if (e.keyCode === 46 && canvas.getActiveObjects().length) {
    var activeObjects = canvas.getActiveObjects();
    canvas.discardActiveObject();
    activeObjects.forEach(function(object) {
      canvas.remove(object);
    });
    canvas.renderAll();
    // remove all the states after the current state
states.splice(currentState + 1);
// push the new state to the array
states.push(JSON.stringify(canvas));
currentState++;
  }
});

//deleete button for window single

document.getElementById("delete-selected1").onclick = function() {

var activeObjects = canvas.getActiveObjects();
if (activeObjects.length) {
  canvas.discardActiveObject();
  activeObjects.forEach(function(object) {
    canvas.remove(object);
  });
  canvas.renderAll();
    // remove all the states after the current state
states.splice(currentState + 1);
// push the new state to the array
states.push(JSON.stringify(canvas));
currentState++;
}
}
//DESELECT ALL
document.addEventListener("click", function(event) {
  if (!event.target.closest(".selector-window1") && event.target !== canvas.upperCanvasEl && event.target.tagName !== 'BUTTON' && !event.target.classList.contains("selector") && !event.target.classList.contains("slider") && !event.target.classList.contains("thickbox") &&!event.target.closest(".navbar")) {
    canvas.discardActiveObject();
    canvas.renderAll();
  }
});
// SELECT ALL
document.addEventListener("keydown", function(event) {
  if (event.ctrlKey && event.keyCode === 65) { // check if ctrl+a is pressed
    event.preventDefault(); // prevent the default behavior of highlighting all elements on the page
  
  }
});

/*document.addEventListener("keydown", function(event) {
if (event.code === "KeyA") {
var objs = canvas.getObjects();
objs.forEach(function(o) {
o.originalFill = o.fill;
o.set('active', true);
});


var group = new fabric.Group(objs, {
  originX: 'center', 
  originY: 'center',
  position: 'absulute',
  top: canvas.height / 2,
  left: canvas.width / 2,
});

canvas.setActiveObject(group).renderAll();

objs.forEach(function(o) {
  o.set('fill', o.originalFill);
});
}
});
*/







  // Apply effect when option is selected
  document.getElementById("filter").addEventListener("change", function() {
    var activeObject = canvas.getActiveObject();
    if (!activeObject) return;

    var value = this.value;
    switch (value) {
      case "none":
        activeObject.filters = [];
        break;
      case "greyscale":
        activeObject.filters = [];
       
        activeObject.filters.push(new fabric.Image.filters.Grayscale());
        break;
      case "invert":
        activeObject.filters = [];
        
        activeObject.filters.push(new fabric.Image.filters.Invert());
        break;
      case "sepia":
        activeObject.filters = [];
       
        activeObject.filters.push(new fabric.Image.filters.Sepia());
        break;
    }
    activeObject.applyFilters();
    canvas.renderAll();
  });



//duplicate




// Function to remove the layer of the object when it is deleted
canvas.on('object:removed', function(e) {
  var removedObject = e.target;
  canvas.remove(removedObject);
});


//EDITING OF OBJECTS ON CANVAS EDITING OF OBJECTS ON CANVAS EDITING OF OBJECTS ON CANVAS EDITING OF OBJECTS ON CANVAS EDITING OF OBJECTS ON CANVAS EDITING OF OBJECTS ON CANVAS EDITING OF OBJECTS ON CANVAS


// Function to change the color of selected object
document.getElementById('color-picker').addEventListener('input', function() {
  var color = this.value;
  var selectedObject = canvas.getActiveObject();
  if (selectedObject) {
    if (selectedObject.type === 'group') {
      selectedObject.forEachObject(function(obj) {
        obj.set('fill', color);
      });
    } else {
      selectedObject.set('fill', color);
    }
    canvas.renderAll();
  }
});




document.getElementById('color-picker').addEventListener('click', function() {
  // remove all the states after the current state
  states.splice(currentState + 1);
        // push the new state to the array
        states.push(JSON.stringify(canvas));
        currentState++;

});

document.getElementById('shadow-checkbox').addEventListener('change', addRemoveShadow);
document.getElementById('shadow-slider').addEventListener('input', changeShadow);

function addRemoveShadow() {
    var checkbox = document.getElementById('shadow-checkbox');
    var selectedObject = canvas.getActiveObject();
    if (selectedObject) {
        if (checkbox.checked) {
            var shadowValue = document.getElementById('shadow-slider').value;
            selectedObject.set('shadow', {
                color: 'rgba(0,0,0,0.9)',
                blur: shadowValue,
                offsetX: 10,
                offsetY: 10
            });
        } else {
            selectedObject.set('shadow', null);
        }
        canvas.renderAll();
        // remove all the states after the current state
        states.splice(currentState + 1);
        // push the new state to the array
        states.push(JSON.stringify(canvas));
        currentState++;
    }
}

// update the checkbox and slider on object selection
canvas.on('object:selected', function() {
    var selectedObject = canvas.getActiveObject();
    if (selectedObject) {
        if (selectedObject.shadow) {
            document.getElementById('shadow-checkbox').checked = true;
            document.getElementById('shadow-slider').value = selectedObject.shadow.blur;
        } else {
            document.getElementById('shadow-checkbox').checked = false;
            document.getElementById('shadow-slider').value = 0;
        }
    }
});

//shadow editing
function changeShadow() {
    var checkbox = document.getElementById('shadow-checkbox');
    if (checkbox.checked) {
        var selectedObject = canvas.getActiveObject();
        if (selectedObject) {
            var shadowValue = document.getElementById('shadow-slider').value;
            selectedObject.set('shadow', {
                color: 'rgba(0,0,0,0.9)',
                blur: shadowValue,
                offsetX: 10,
                offsetY: 10
            });
            canvas.renderAll();
        }
    }
}


  document.getElementById("duplicate").addEventListener('click', function() {
  var activeObject = canvas.getActiveObject();
  if (activeObject && canvas.getActiveObjects().length === 1) {
    var object = canvas.getActiveObject();

object.clone(function(clone) {
    canvas.add(clone.set({
        left: object.left + 10, 
        top: object.top + 10
    }));
  })
    // remove all the states after the current state
    states.splice(currentState + 1);
    // push the new state to the array
    states.push(JSON.stringify(canvas));
    currentState++;
  }
});
document.getElementById("align-vertically-right").addEventListener('click', function() {
var activeObjects = canvas.getActiveObjects();

if (activeObjects) {
    activeObjects.forEach(function(object) {

        object.clone(function(clone) {
            canvas.add(clone.set({
                left:canvas.width / 2 +object.left+5 , 
                top:canvas.height / 2 +object.top +5
            }));
        })

    });
}
});
// Function to set the transparency of selected object
document.getElementById('transparency-slider').addEventListener('input', setTransparency);

canvas.on('object:selected', function() {
  var selectedObject = canvas.getActiveObject();
  if (selectedObject) {
    document.getElementById('transparency-slider').value = selectedObject.get('opacity');
  }
});

function setTransparency() {
  var slider = document.getElementById('transparency-slider');
  var selectedObject = canvas.getActiveObject();
  if (selectedObject) {
    selectedObject.set('opacity', slider.value);
    canvas.renderAll();
  }
}

// Function to download the project on the canvas
document.getElementById('download-button').addEventListener('click', downloadProject);
function downloadProject() {
var dataURL = canvas.toDataURL({format: 'png', quality: 0.8});
document.getElementById('download-message').style.display = 'block';
document.getElementById('loading-spinner').style.display = 'block';
setTimeout(function(){
document.getElementById('download-message').style.display = 'none';
document.getElementById('loading-spinner').style.display = 'none';
download(dataURL, 'project.png');
}, 1000);
}

function download(dataURL, fileName) {
var link = document.createElement('a');
link.href = dataURL;
link.download = fileName;
link.click();
}

//REMOVEING THE BORDER OF OBJECT
//document.getElementById('remove-border-button').addEventListener('click', removeBorder);

//function removeBorder() {
     // remove all the states after the current state
 //states.splice(currentState + 1);
// push the new state to the array
//states.push(JSON.stringify(canvas));
//currentState++;
  //var selectedObject = canvas.getActiveObject();
  //if (selectedObject) {
  //  selectedObject.set('strokeWidth', 0);
   // canvas.renderAll();
    
  //}
//}

//document.getElementById('border-thickness-line').addEventListener('input', setBorderThickness);

//function setBorderThickness() {
  //var slider = document.getElementById('border-thickness-line');
  //var selectedObject = canvas.getActiveObject();
  //if (selectedObject) {
  //  if (selectedObject.get('type') === 'group' || selectedObject.get('type') === 'circlet' || selectedObject.get('type') === 'trianglet' || selectedObject.get('type') === 'image') {
   //   alert("This function is not available for images and certain shapes.");
   // } else if (selectedObject.get('type') === 'group') {
    //  selectedObject.forEachObject(function(obj) {
    //    obj.set('strokeWidth', slider.value);
    //  });
    //} else {
   //   selectedObject.set('strokeWidth', slider.value);
   // }
    //canvas.renderAll();
  


   // }
 // }



//BORDER COLOR CHANGE OR ADD

//document.getElementById('border-color-picker').addEventListener('input', changeBorderColor);

//function changeBorderColor() {
 // var colorPicker = document.getElementById('border-color-picker');
 // var selectedObject = canvas.getActiveObject();
 // if (selectedObject) {
    // Set the stroke property to a default color if it's null
 //   if(!selectedObject.get('stroke')){
  //    selectedObject.set('stroke', 'black');
  //  }
 //   selectedObject.set('stroke', colorPicker.value);
 //   canvas.renderAll();
    
 // }states.splice(currentState + 1);
// push the new state to the array
//states.push(JSON.stringify(canvas));
//currentState++;
//}

// Function to bring selected object to front
document.getElementById('bring-to-front-button').addEventListener('click', bringToFront);

function bringToFront() {
  var selectedObject = canvas.getActiveObject();
  if (selectedObject) {
    var currentIndex = canvas.getObjects().indexOf(selectedObject);
    var newIndex = currentIndex + 1;
    if(newIndex >= 0) {
      canvas.moveTo(selectedObject, newIndex);
      canvas.renderAll();
         // remove all the states after the current state
 states.splice(currentState + 1);
// push the new state to the array
states.push(JSON.stringify(canvas));
currentState++;
    }
  }
}
// Function to send selected object one step backwards
document.getElementById('send-to-back-button').addEventListener('click', sendToBack);

function sendToBack() {
  var selectedObject = canvas.getActiveObject();
  if (selectedObject) {
    var currentIndex = canvas.getObjects().indexOf(selectedObject);
    var newIndex = currentIndex - 1;
    if(newIndex >= 0) {
      canvas.moveTo(selectedObject, newIndex);
         // remove all the states after the current state
 states.splice(currentState + 1);
// push the new state to the array
states.push(JSON.stringify(canvas));
currentState++;
    }
  }
}


document.getElementById('align-vertically').addEventListener('click', function(){
    var activeObjects = canvas.getActiveObjects();
    // Get canvas width and height
var canvasWidth = canvas.getWidth();
var canvasHeight = canvas.getHeight();

// Get vertical mid line and horizontal mid line coordinates
var verticalMidLine = {
x1: canvasWidth / 2,
y1: 0,
x2: canvasWidth / 2,
y2: canvasHeight
};

var horizontalMidLine = {
x1: 0,
y1: canvasHeight / 2,
x2: canvasWidth,
y2: canvasHeight / 2
};

// Create vertical mid line and horizontal mid line on the canvas
var verticalMidLinePath = new fabric.Path("M " + verticalMidLine.x1 + " " + verticalMidLine.y1 + " L " + verticalMidLine.x2 + " " + verticalMidLine.y2);
var horizontalMidLinePath = new fabric.Path("M " + horizontalMidLine.x1 + " " + horizontalMidLine.y1 + " L " + horizontalMidLine.x2 + " " + horizontalMidLine.y2);

// Set properties for the lines
verticalMidLinePath.set({
stroke: 'black',
strokeWidth: 1,
selectable: false,
opacity:0
});
horizontalMidLinePath.set({
stroke: 'black',
strokeWidth: 1,
selectable: false,
opacity:0
});

// Add the lines to the canvas
canvas.add(verticalMidLinePath);
canvas.add(horizontalMidLinePath);
canvas.renderAll();
    if (activeObjects.length < 2) return;
    activeObjects.forEach(function(object) { 
        object.set({
            left: verticalMidLinePath.get('y1') - object.width / 2
        }).setCoords();
        canvas.remove(verticalMidLinePath);
        canvas.remove(horizontalMidLinePath);
    });

    canvas.renderAll();
    // remove all the states after the current state
states.splice(currentState + 1);
// push the new state to the array
states.push(JSON.stringify(canvas));
currentState++;

  });


  
  
    



document.getElementById('align-horizontally').addEventListener('click', function(){
  var activeObjects = canvas.getActiveObjects();
  // Get canvas width and height
var canvasWidth = canvas.getWidth();
var canvasHeight = canvas.getHeight();

// Get vertical mid line and horizontal mid line coordinates
var verticalMidLine = {
x1: canvasWidth / 2,
y1: 0,
x2: canvasWidth / 2,
y2: canvasHeight
};

var horizontalMidLine = {
x1: 0,
y1: canvasHeight / 2,
x2: canvasWidth,
y2: canvasHeight / 2
};

// Create vertical mid line and horizontal mid line on the canvas
var verticalMidLinePath = new fabric.Path("M " + verticalMidLine.x1 + " " + verticalMidLine.y1 + " L " + verticalMidLine.x2 + " " + verticalMidLine.y2);
var horizontalMidLinePath = new fabric.Path("M " + horizontalMidLine.x1 + " " + horizontalMidLine.y1 + " L " + horizontalMidLine.x2 + " " + horizontalMidLine.y2);

// Set properties for the lines
verticalMidLinePath.set({
stroke: 'black',
strokeWidth: 1,
selectable: false,
opacity:0
});
horizontalMidLinePath.set({
stroke: 'black',
strokeWidth: 1,
selectable: false,
opacity:0
});

// Add the lines to the canvas
canvas.add(verticalMidLinePath);
canvas.add(horizontalMidLinePath);
canvas.renderAll();
  if (activeObjects.length < 2) return;
    activeObjects.forEach(function(object) {
        object.set({
            top: horizontalMidLinePath.get('x1') - object.width / 2
        }).setCoords();
        canvas.remove(verticalMidLinePath);
        canvas.remove(horizontalMidLinePath);
    });

    canvas.renderAll();
        // remove all the states after the current state
states.splice(currentState + 1);
// push the new state to the array
states.push(JSON.stringify(canvas));
currentState++;
});


//ADDING TEXT AND IMAGES ON AUTO GEN ADDING TEXT AND IMAGES ON AUTO GEN ADDING TEXT AND IMAGES ON AUTO GEN ADDING TEXT AND IMAGES ON AUTO GEN ADDING TEXT AND IMAGES ON AUTO GEN ADDING TEXT AND IMAGES ON AUTO GEN


//CHURCH CHURCH CHURCH CHURCH CHURCH CHURCH CHURCH CHURCH CHURCH CHURCH CHURCH CHURCH CHURCH CHURCH CHURCH CHURCH CHURCH CHURCH CHURCH CHURCH 


//ADDING OF RANDOM BACKGROUND IMAGE
var addImageBtn = document.getElementById('auto-generate');

// add event listener to the button
addImageBtn.addEventListener('click', function() {
    // show the loading animation
    document.getElementById("loading-overlay").style.display = "block";

    var folderPath = 'ElegantChurch/';
    var imageFiles = ['image1.png', 'image2.png', 'image3.png', 'image4.png', 'image5.png', 'image6.png', 'image7.png', 'image8.png', 'image9.png', 'image10.png', 'image11.png', 'image12.png', 'image13.png', 'image14.png',]

var addImageBtn = document.getElementById('auto-generate');
var canvas = document.getElementById('canvas');
var loadingOverlay = document.createElement('div');
loadingOverlay.style.backgroundColor = 'rgba(255, 255, 255, 0.7)';
loadingOverlay.style.position = 'absolute';
loadingOverlay.style.top = 0;
loadingOverlay.style.left = 0;
loadingOverlay.style.width = canvas.offsetWidth + 'px';
loadingOverlay.style.height = canvas.offsetHeight + 'px';
loadingOverlay.style.pointerEvents = 'none';
loadingOverlay.innerHTML = '<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>';

addImageBtn.addEventListener('click', function() {
    canvas.appendChild(loadingOverlay);
    var folderPath = 'ElegantChurch/';
    var imageFiles = ['image1.png', 'image2.png', 'image3.png', 'image4.png', 'image5.png', 'image6.png', 'image7.png', 'image8.png', 'image9.png', 'image10.png', 'image11.png', 'image12.png', 'image13.png', 'image14.png', 'image15.png', 'image16.png', 'image17.png', 'image18.png', 'image19.png', 'image20.png', 'image21.png', 'image22.png', 'image23.png', 'image24.png'];
    var randomImage = folderPath + imageFiles[Math.floor(Math.random() * imageFiles.length)];

    // create a new instance of the fabric.Image object
    var img = new Image();
    img.onload = function() {
      
      if (document.getElementById("type-template").value == "church") {
    
 
        var img1 = new fabric.Image(img, {});
        var canvasWidth = canvas.width;
        var canvasHeight = canvas.height;
        var imageWidth = img1.width;
        var imageHeight = img1.height;
        var scaleX = canvasWidth / imageWidth;
        var scaleY = canvasHeight / imageHeight;
        var scale = Math.max(scaleX, scaleY);}

    
        if(img1.width > img1.height && canvas.height> canvasWidth){
            img1.set({
                angle:90,
                
            }
            );

            
            if(img1.height > img1.width && canvas.width> canvas.height){
            
              img1.set({
                angle:90
                
            });
            
        }}
        // Scale the image to match the canvas
      
        if(canvasHeight > canvasWidth ) {
        img1.scale(scale*0.8);}
        else{  img1.scale(scale);}
    
        // Position the image in the center of the canvas
        img1.set({
            left: canvasWidth / 2,
            top: canvasHeight / 2,
            originX: 'center',
            originY: 'center',
        });

        // Set the image as the background of the canvas
        canvas.setBackgroundImage(img1, canvas.renderAll.bind(canvas));
    };
    img.src = randomImage;
});

});
//ADDING OF RANDOM TEXT TO CANVAS

// To clear the canvas 
document.getElementById("auto-generate").addEventListener("click", function(){
    canvas.clear();
    var rect = new fabric.Rect({
        left: Math.random() * canvas.width,
        top: Math.random() * canvas.height,
        width: 50,
        height: 50,
        fill: 'red'
    });
    
});

document.getElementById("auto-generate").addEventListener("click", function() {
  if (document.getElementById("type-template").value == "church") {
    setTimeout(function() {
      
    // Create a title element

    var fonts1 = ['Fantasy', 'Times New Roman','Ariel'];
var randomIndex1 = Math.floor(Math.random() * fonts1.length);
var randomFont1 = fonts1[randomIndex1];
    var title = new fabric.IText("CHURCH", {
      fontSize: 80,
      
      selectable: true,
      fontFamily: randomFont1,
    });
    // Add shadow effect
    var shadow = {
        color: 'rgba(0,0,0,0.3)',
        offsetX: 2,
        offsetY: 2,
        blur: 5
    };
    title.setShadow(shadow);
    var fonts = ['Sassy Frass', 'Dancing Script', 'Lobster', 'Explora', 'Pacifico', 'Great Vibes'];
var randomIndex = Math.floor(Math.random() * fonts.length);
var randomFont = fonts[randomIndex];

var time = new fabric.IText("Conference", {
  fontSize: 100,
  top: 87,
  selectable: true,
  fontFamily: randomFont,
});

    var shadow2 = {
        color: 'rgba(0,0,0,0.3)',
        offsetX: 2,
        offsetY: 2,
        blur: 5
    };
    time.setShadow(shadow2);
    

    var date = new fabric.IText("COME AND JOIN THE REVIVAL", {
      fontSize: 27,
      top: 200,
      selectable: true
    });
  

    var venue = new fabric.IText("NOVEMBER 27TH 2027", {
      fontSize: 24,
      top: 230,
    });
  
contacts = new fabric.IText("Contacts: 555-555-5555 or email@example.com", {
      fontSize: 16,
      top: 270,
      selectable: true
    });
    Presents = new fabric.IText("Y o u r  C h u r c h  P r e s e n t s", {
      fontSize: 12,
      top: 270,
      selectable: true
    });
    var name = new fabric.IText("Pastor Name", {
      fontSize: 24,
      fontFamily:'fantasy',
      top: -40,
    });

    function getRandomColor() {
  var colors = ['#FFFFFF', '#FFD720', '#C0C0C0', ];
  var randomIndex = Math.floor(Math.random() * colors.length);
  return colors[randomIndex];
}

title.set({fill: getRandomColor()});
time.set({fill: getRandomColor()});
date.set({fill: getRandomColor()});
contacts.set({fill: getRandomColor()});
Presents.set({fill: getRandomColor()});

venue.set({fill: getRandomColor()});

    // Add the title, time, date, venue and contacts to the canvas
    
    // SET THE POSITION OF THE TEXT ON THE CANVAS
  // CHECK IF CANVAS HEIGHT IS GREATER THAN CANVAS WIDTH
if (canvas.getHeight() > canvas.getWidth()) {
    // SET THE POSITION OF THE TEXT ON THE CANVAS
    name.set("left", (canvas.getWidth()/2) - (name.width/2));
    title.set("left", (canvas.getWidth()/2) - (title.width/2));
    time.set("left", (canvas.getWidth()/2) - (time.width/2));
    date.set("left", (canvas.getWidth()/2) - (date.width/2));
    venue.set("left", (canvas.getWidth()/2) - (venue.width/2));
    contacts.set("left", (canvas.getWidth()/2) - (contacts.width/2));
    Presents.set("left", (canvas.getWidth()/2) - (Presents.width/2));

    title.set("top", (canvas.getHeight()/2) - (title.height/2));
    title.set("top", (canvas.getHeight()/2) - (title.height/2) + 0);
time.set("top", (canvas.getHeight()/2) - (time.height/2) + 25);
name.set("top", (canvas.getHeight()/2) - (name.height/2) -75);
date.set("top", (canvas.getHeight()/2) + 60);
venue.set("top", (canvas.getHeight()/2) + 90);
contacts.set("top", (canvas.getHeight()/2) *2 *0.95);
Presents.set("top", (canvas.getHeight()/2) *2 *0.02);


canvas.add(title);
    canvas.add(time);
    canvas.add(date);
    canvas.add(venue);
    canvas.add(contacts);
    canvas.add(name);
    canvas.add(Presents);
    
    canvas.renderAll();
}
else {
  if (canvas.getWidth() > canvas.getHeight()) {
    // SET THE POSITION OF THE TEXT ON THE CANVAS
    name.set("left", (canvas.getWidth()*0.827) );
    title.set("left", (canvas.getWidth()/2) - (title.width/2));
    time.set("left", (canvas.getWidth()/2) - (time.width/2));
    date.set("left", (canvas.getWidth()/2) - (date.width/2));
    venue.set("left", (canvas.getWidth()/2) - (venue.width/2));
    contacts.set("left", (canvas.getWidth()/2) - (contacts.width/2));
    Presents.set("left", (canvas.getWidth()/2) - (Presents.width/2));
    title.set("top", (canvas.getHeight()/2) - (title.height/2));
    title.set("top", (canvas.getHeight()/2) - (title.height/2) -25);
time.set("top", (canvas.getHeight()/2) - (time.height/2) + 0);
name.set("top", (canvas.height-canvas.height*0.19));
date.set("top", (canvas.getHeight()/2) + 55);
venue.set("top", (canvas.getHeight()/2) + 80);
contacts.set("top", (canvas.getHeight()/2) *2 *0.91);
Presents.set("top", (canvas.getHeight()/2) *2 *0.2);

canvas.add(title);
    canvas.add(time);
    canvas.add(date);
    canvas.add(venue);
    canvas.add(contacts);
    canvas.add(name);
    canvas.add(Presents);
    canvas.renderAll();
}else {
  
    // SET THE POSITION OF THE TEXT ON THE CANVAS
    name.set("left", (canvas.getWidth()/2) - (name.width/2));
    title.set("left", (canvas.getWidth()/2) - (title.width/2));
    time.set("left", (canvas.getWidth()/2) - (time.width/2));
    date.set("left", (canvas.getWidth()/2) - (date.width/2));
    venue.set("left", (canvas.getWidth()/2) - (venue.width/2));
    contacts.set("left", (canvas.getWidth()/2) - (contacts.width/2));
    Presents.set("left", (canvas.getWidth()/2) - (Presents.width/2));

    title.set("top", (canvas.getHeight()/2) - (title.height/2));
    title.set("top", (canvas.getHeight()/2) - (title.height/2) + 0);
time.set("top", (canvas.getHeight()/2) - (time.height/2) + 25);
name.set("top", (canvas.getHeight()/2) - (name.height/2) -77);
date.set("top", (canvas.getHeight()/2) + 60);
venue.set("top", (canvas.getHeight()/2) + 90);
contacts.set("top", (canvas.getHeight()/2) *2 *0.95);
Presents.set("top", (canvas.getHeight()/2) *2 *0.2);

canvas.add(title);
    canvas.add(time);
    canvas.add(date);
    canvas.add(venue);
    canvas.add(contacts);
    canvas.add(name);
    canvas.add(Presents);
    canvas.renderAll();
}}


  }, 720);
 }
});



// ADDING OF RANDOM PASTOR PICTURE
   
addImageBtn.addEventListener('click', function() {
    var selector = document.getElementById('type-template');
    if (selector.value === 'church' && event.target === addImageBtn) {
      var folderPath = 'Pastors/';
    var imageFiles = ['image1.png', 'image2.png','image3.png'];
    var randomImage = folderPath + imageFiles[Math.floor(Math.random() * imageFiles.length)];
	
	var folderPath2 = 'Namespaces/';
    var imageFiles2 = ['image3.png', 'image2.png', 'image4.png','image1.png'];
    var randomImage2 = folderPath2 + imageFiles2[Math.floor(Math.random() * imageFiles2.length)];

    // create a new instance of the fabric.Image object
    var img = new Image();
    img.onload = function() {
        var img1 = new fabric.Image(img, {});
        var canvasWidth = canvas.width;
        var canvasHeight = canvas.height;
        var imageWidth = img1.width;
        var imageHeight = img1.height;
        var scaleX = 0.7;
        var scaleY = 0.7;
       
    
        // Scale the image to match the canvas
        img1.scale(scaleX, scaleY);
if(canvas.width > canvas.height){
            img1.set({
                left: canvas.width *0.72,
               top: canvas.getHeight()/2 *2 *0.05
            });
        } else {if(canvas.height > canvas.width){
            img1.set({
                left: canvas.width/2 ,
                top: canvas.height/2 -170,
                originX: 'center',
                originY: 'center',
            });
        }else {if(canvas.height = canvas.width){
            img1.set({
                left: canvas.width/2 ,
                top: canvas.height/2 -10000,
                originX: 'center',
                originY: 'center',
                display: false
            });
        }}}
        canvas.add(img1);
        
    
        canvas.renderAll();
    }};
    img.src = randomImage;
	

    setTimeout(function() {
    	// create a new instance of the fabric.Image object
  var img2 = new Image();
    img2.onload = function() {
        var img2_obj = new fabric.Image(img2, {});
        var canvasWidth = canvas.width;
        var canvasHeight = canvas.height;
        var imageWidth = img2_obj.width;
        var imageHeight = img2_obj.height;
        var scaleX = 0.27;
        var scaleY = 0.27;

        // Scale the image to match the canvas
       
        if(canvas.width > canvas.height){
            img2_obj.set({
                left: canvas.width *0.75,
                top: canvas.height*0.757,
            });
        } else {if(canvas.height > canvas.width){
            img2_obj.set({
                left: canvas.width/2 ,
                top: canvas.height/2 -77,
                originX: 'center',
                originY: 'center',
            });
        }else {if(canvas.height = canvas.width){
            img2_obj.set({
                left: canvas.width/2 ,
                top: canvas.height/2 -77,
                originX: 'center',
                originY: 'center',
                display: false
            }); 
        }}}img2_obj.scale(scaleX, scaleY);
        canvas.add(img2_obj);
        
        canvas.renderAll();
      
      
    };
    img2.src = randomImage2;
  }, 100);



});
  //  adding of social media icons

var addImageBtn = document.getElementById('auto-generate');

// add event listener to the button
addImageBtn.addEventListener('click', function() {
    var folderPath = 'SocialIcons/';
    var imageFiles = ['image1.png', 'image2.png','image3.png'];
    var randomImage = folderPath + imageFiles[Math.floor(Math.random() * imageFiles.length)];
	
	
    // create a new instance of the fabric.Image object
    if (document.getElementById("type-template").value == "church") {
    var img = new Image();
    img.onload = function() {
        var img1 = new fabric.Image(img, {});
        var canvasWidth = canvas.width;
        var canvasHeight = canvas.height;
        var imageWidth = img1.width;
        var imageHeight = img1.height;
        var scaleX = 0.2;
        var scaleY = 0.2;
       
    
        // Scale the image to match the canvas
        img1.scale(scaleX, scaleY);
if(canvas.width > canvas.height){
            img1.set({
                left: canvas.width*0.03,
                top: canvas.height *0.8
            });
        } else {if(canvas.height > canvas.width){
            img1.set({
                left: canvas.width/2 ,
                top: canvas.height*0.92,
                originX: 'center',
                originY: 'center',
            });
        }else {if(canvas.height = canvas.width){
            img1.set({
                left: canvas.width/2 ,
                top: canvas.height/2 +177,
                originX: 'center',
                originY: 'center',
                display: false
            });
        }}}
        canvas.add(img1);
        
    
        canvas.renderAll();}
    };
    img.src = randomImage;
	



});

//WEDDING WEDDING WEDDING WEDDING WEDDING WEDDING WEDDING WEDDING WEDDING WEDDINGWEDDING WEDDING WEDDING WEDDING WEDDINGWEDDING WEDDING WEDDING WEDDING WEDDINGWEDDING WEDDING WEDDING WEDDING WEDDINGWEDDING WEDDING WEDDING WEDDING WEDDING


var addImageBtn = document.getElementById('auto-generate');

// add event listener to the button
addImageBtn.addEventListener('click', function() {
    var folderPath = '  ElegantWedding/';
    var imageFiles = ['image1.jpg', 'image2.jpg', 'image3.jpg', 'image4.jpg', 'image5.jpg', 'image6.jpg', 'image7.jpg'];
    var randomImage = folderPath + imageFiles[Math.floor(Math.random() * imageFiles.length)];

    // create a new instance of the fabric.Image object
    var img = new Image();
    img.onload = function() {if (document.getElementById("type-template").value == "wedding") {
    
 
        var img1 = new fabric.Image(img, {});
        var canvasWidth = canvas.width;
        var canvasHeight = canvas.height;
        var imageWidth = img1.width;
        var imageHeight = img1.height;
        var scaleX = canvasWidth / imageWidth;
        var scaleY = canvasHeight / imageHeight;
        var scale = Math.max(scaleX, scaleY);}

        if(img1.width > img1.height && canvas.height> canvasWidth){
            img1.set({
                angle:90
            });
            if(img1.height > img1.width && canvas.width> canvas.height){
            img1.set({
                angle:90
            });
        }}
        // Scale the image to match the canvas
        if(canvasHeight > canvasWidth ) {
        img1.scale(scale*0.8);}
        else{  img1.scale(scale);}

        // Position the image in the center of the canvas
        img1.set({
            left: canvasWidth / 2,
            top: canvasHeight / 2,
            originX: 'center',
            originY: 'center',
        });

        // Set the image as the background of the canvas
        canvas.setBackgroundImage(img1, canvas.renderAll.bind(canvas));
    };
    img.src = randomImage;
});


//ADDING OF RANDOM TEXT TO CANVAS

// To clear the canvas 
document.getElementById("auto-generate").addEventListener("click", function(){
    canvas.clear();
    var rect = new fabric.Rect({
        left: Math.random() * canvas.width,
        top: Math.random() * canvas.height,
        width: 50,
        height: 50,
        fill: 'red'
    });
    
});

document.getElementById("auto-generate").addEventListener("click", function() {
  if (document.getElementById("type-template").value == "wedding") {
    setTimeout(function() {
    // Create a title element
  var title = new fabric.IText("WEDDING", {
      fontSize: 80,
      
      selectable: true,
      fontFamily:"Roman",
    });
    // Add shadow effect
    var shadow = {
        color: 'rgba(0,0,0,0.3)',
        offsetX: 2,
        offsetY: 2,
        blur: 5
    };
    title.setShadow(shadow);
    var time = new fabric.IText("James & Anna", {
      fontSize:100,
      top: 77,
      selectable: true,
      fontFamily: 'Sassy Frass', 
     
    });
    var shadow2 = {
        color: 'rgba(0,0,0,0.3)',
        offsetX: 2,
        offsetY: 2,
        blur: 5
    };
    time.setShadow(shadow2);
    

    var date = new fabric.IText("FOODS AND DRINKS", {
      fontSize: 27,
      top: 200,
      selectable: true
    });
  

    var venue = new fabric.IText("NOVEMBER 27TH 2027", {
      fontSize: 24,
      top: 230,
    });
  
contacts = new fabric.IText("RSVP BEFORE: NOVEMBER 02", {
      fontSize: 16,
      top: 270,
      selectable: true
    });
    var name = new fabric.IText("YOU ARE INVITED", {
      fontSize: 18,
      fontFamily:'Roboto',
      top: -40,
    });
    extra = new fabric.IText("Lorem Ipsum Heren Lorem Ipsum Here\r\nLorem Ipsum Here Lorem Ipsum Here\r\nLorem Ipsum Here Lorem Ipsum Here\r\nLorem Ipsum Here Lorem Ipsum Here", {
      fontSize: 12,
      textAlign: 'center',
      top: 270,
      selectable: true,
      fontFamily:'Roman'
    });

    function getRandomColor() {
  var colors = [ '#A67C52', '#C32B39', '#000000','#FFB5B5'];
  var randomIndex = Math.floor(Math.random() * colors.length);
  return colors[randomIndex];
}

title.set({fill: getRandomColor()});
time.set({fill: getRandomColor()});
date.set({fill: getRandomColor()});
contacts.set({fill: getRandomColor()});
venue.set({fill: getRandomColor()});

   
     extra.set({ textAlign: 'center' });
   
   

    // SET THE POSITION OF THE TEXT ON THE CANVAS
  // CHECK IF CANVAS HEIGHT IS GREATER THAN CANVAS WIDTH
if (canvas.getHeight() > canvas.getWidth()) {
    // SET THE POSITION OF THE TEXT ON THE CANVAS
    name.set("left", (canvas.getWidth()/2+ 5) - (name.width/2));
    title.set("left", (canvas.getWidth()/2) - (title.width/2));
    time.set("left", (canvas.getWidth()/2) - (time.width/2));
    date.set("left", (canvas.getWidth()/2) - (date.width/2));
    extra.set("left", (canvas.getWidth()/2+ 40) - (date.width/2));
    venue.set("left", (canvas.getWidth()/2) - (venue.width/2));
    contacts.set("left", (canvas.getWidth()/2) - (contacts.width/2));
    title.set("top", (canvas.getHeight()/2) - (title.height/2));
    title.set("top", (canvas.getHeight()/2) - (title.height/2) -70);
time.set("top", (canvas.getHeight()/2) - (time.height/2) -10);
name.set("top", (canvas.getHeight()/2) - (name.height/2) -170);
date.set("top", (canvas.getHeight()/2) + 100);
extra.set("top", (canvas.getHeight()/2)*2 *0.72);
venue.set("top", (canvas.getHeight()/2) + 50);
contacts.set("top", (canvas.getHeight()/2) +140);

canvas.add(title);
    canvas.add(time);
    canvas.add(date);
    canvas.add(venue);
    canvas.add(contacts);
    canvas.add(name);
    canvas.add(extra);
    
    canvas.renderAll();
}
else {
  if (canvas.getWidth() > canvas.getHeight()) {
    // SET THE POSITION OF THE TEXT ON THE CANVAS
    name.set("left", (canvas.getWidth()/2) - (name.width/2));
    title.set("left", (canvas.getWidth()/2) - (title.width/2));
    time.set("left", (canvas.getWidth()/2) - (time.width/2));
    date.set("left", (canvas.getWidth()/2) - (date.width/2));
    venue.set("left", (canvas.getWidth()/2) - (venue.width/2));
    contacts.set("left", (canvas.getWidth()/2) - (contacts.width/2));
    title.set("top", (canvas.getHeight()/2) - (title.height/2));
    title.set("top", (canvas.getHeight()/2) - (title.height/2) + -60);
time.set("top", (canvas.getHeight()/2) - (time.height/2) + 5);
name.set("top", (canvas.getHeight()/2) - (name.height/2) -120);
date.set("top", (canvas.getHeight()/2) + 60);
venue.set("top", (canvas.getHeight()/2) + 90);
contacts.set("top", (canvas.getHeight()/2) *2 *0.9);

canvas.add(title);
    canvas.add(time);
    canvas.add(date);
    canvas.add(venue);
    canvas.add(contacts);
    canvas.add(name);
    canvas.renderAll();
}else {
  
    // SET THE POSITION OF THE TEXT ON THE CANVAS
    name.set("left", (canvas.getWidth()/2) - (name.width/2));
    title.set("left", (canvas.getWidth()/2) - (title.width/2));
    time.set("left", (canvas.getWidth()/2) - (time.width/2));
    date.set("left", (canvas.getWidth()/2) - (date.width/2));
    venue.set("left", (canvas.getWidth()/2) - (venue.width/2));
    contacts.set("left", (canvas.getWidth()/2) - (contacts.width/2));
    title.set("top", (canvas.getHeight()/2) - (title.height/2));
    title.set("top", (canvas.getHeight()/2) - (title.height/2) + -60);
time.set("top", (canvas.getHeight()/2) - (time.height/2) + 5);
name.set("top", (canvas.getHeight()/2) - (name.height/2) -130);
date.set("top", (canvas.getHeight()/2) + 60);
venue.set("top", (canvas.getHeight()/2) + 90);
contacts.set("top", (canvas.getHeight()/2) *2 *0.8);

canvas.add(title);
    canvas.add(time);
    canvas.add(date);
    canvas.add(venue);
    canvas.add(contacts);
    canvas.add(name);
    canvas.renderAll();
}}


  }, 720);
 }
});



// ADDING OF RANDOM PASTOR PICTURE
   
addImageBtn.addEventListener('click', function() {
    var selector = document.getElementById('type-template');
    if (selector.value === 'wedding' && event.target === addImageBtn) {
      var folderPath = 'Couples/';
    var imageFiles = ['image12.png', 'image22.png','image3.png','image4.png', 'image27.png'];
    var randomImage = folderPath + imageFiles[Math.floor(Math.random() * imageFiles.length)];
	
	
    // create a new instance of the fabric.Image object
    var img = new Image();
    img.onload = function() {
        var img1 = new fabric.Image(img, {});
        var canvasWidth = canvas.width;
        var canvasHeight = canvas.height;
        var imageWidth = img1.width;
        var imageHeight = img1.height;
        var scaleX = 0.7;
        var scaleY = 0.7;
       
    
        // Scale the image to match the canvas
        img1.scale(scaleX, scaleY);
if(canvas.width > canvas.height){
            img1.set({
                left: canvas.width *0.72,
               top: canvas.getHeight()/2 *2 *0.05
            });
        } else {if(canvas.height > canvas.width){
            img1.set({
                left: canvas.width/2 ,
                top: canvas.height/2 -170,
                originX: 'center',
                originY: 'center',
            });
        }else {if(canvas.height = canvas.width){
            img1.set({
                left: canvas.width/2 ,
                top: canvas.height/2 -10000,
                originX: 'center',
                originY: 'center',
                display: false
            });
        }}}
        canvas.add(img1);
        
    
        canvas.renderAll();
    }};
    img.src = randomImage;
	

    setTimeout(function() {
    	// create a new instance of the fabric.Image object
  var img2 = new Image();
    img2.onload = function() {
        var img2_obj = new fabric.Image(img2, {});
        var canvasWidth = canvas.width;
        var canvasHeight = canvas.height;
        var imageWidth = img2_obj.width;
        var imageHeight = img2_obj.height;
        var scaleX = 0.27;
        var scaleY = 0.27;

        // Scale the image to match the canvas
       
        if(canvas.width > canvas.height){
            img2_obj.set({
                left: canvas.width *0.75,
                top: canvas.height*0.757,
            });
        } else {if(canvas.height > canvas.width){
            img2_obj.set({
                left: canvas.width/2 ,
                top: canvas.height/2 -170,
                originX: 'center',
                originY: 'center',
            });
        }else {if(canvas.height = canvas.width){
            img2_obj.set({
                left: canvas.width/2 ,
                top: canvas.height/2 -77,
                originX: 'center',
                originY: 'center',
                display: false
            }); 
        }}}img2_obj.scale(scaleX, scaleY);
        canvas.add(img2_obj);
        
        canvas.renderAll();
      
      
    };
    img2.src = randomImage2;
  }, 200);



});
  //  adding of social media icons


// BIRTHDAY BIRTHDAY BIRTHDAY BIRTHDAY BIRTHDAY BIRTHDAY BIRTHDAY BIRTHDAY BIRTHDAY BIRTHDAY BIRTHDAY BIRTHDAY BIRTHDAY BIRTHDAY BIRTHDAY BIRTHDAY BIRTHDAY BIRTHDAY BIRTHDAY BIRTHDAY

var addImageBtn = document.getElementById('auto-generate');

// add event listener to the button
addImageBtn.addEventListener('click', function() {
    var folderPath = '  ElegantBirthday/';
    var imageFiles = ['image31.png', 'image32.png', 'image33.png', 'image34.png', 'image35.png', 'image36.png', 'image37.png', 'image38.png', 'image39.png'];
    var randomImage = folderPath + imageFiles[Math.floor(Math.random() * imageFiles.length)];

    // create a new instance of the fabric.Image object
    var img = new Image();
    img.onload = function() {if (document.getElementById("type-template").value == "birthday") {
    
 
        var img1 = new fabric.Image(img, {});
        var canvasWidth = canvas.width;
        var canvasHeight = canvas.height;
        var imageWidth = img1.width;
        var imageHeight = img1.height;
        var scaleX = canvasWidth / imageWidth;
        var scaleY = canvasHeight / imageHeight;
        var scale = Math.max(scaleX, scaleY);}

        if(img1.width > img1.height && canvas.height> canvasWidth){
            img1.set({
                angle:90
            });
            if(img1.height > img1.width && canvas.width> canvas.height){
            img1.set({
                angle:90
            });
        }}
        // Scale the image to match the canvas
        if(canvasHeight > canvasWidth ) {
        img1.scale(scale*0.8);}
        else{  img1.scale(scale);}

        // Position the image in the center of the canvas
        img1.set({
            left: canvasWidth / 2,
            top: canvasHeight / 2,
            originX: 'center',
            originY: 'center',
        });

        // Set the image as the background of the canvas
        canvas.setBackgroundImage(img1, canvas.renderAll.bind(canvas));
    };
    img.src = randomImage;
});


//ADDING OF RANDOM TEXT TO CANVAS

// To clear the canvas 
document.getElementById("auto-generate").addEventListener("click", function(){
    canvas.clear();
    var rect = new fabric.Rect({
        left: Math.random() * canvas.width,
        top: Math.random() * canvas.height,
        width: 50,
        height: 50,
        fill: 'red'
    });
    
});

document.getElementById("auto-generate").addEventListener("click", function() {
  if (document.getElementById("type-template").value == "birthday") {
    setTimeout(function() {
    // Create a title element
  var title = new fabric.IText("BIRTHDAY", {
      fontSize: 80,
      
      selectable: true,
      fontFamily:"Fantasy",
    });
    // Add shadow effect
    var shadow = {
        color: 'rgba(0,0,0,0.5)',
        offsetX: 2,
        offsetY: 2,
        blur: 5
    };
    title.setShadow(shadow);
    var time = new fabric.IText("Happy", {
      fontSize: 75,
      top: 70,
      selectable: true,
      fontFamily:"Lobster",
     
    });
    var shadow2 = {
        color: 'rgba(0,0,0,0.3)',
        offsetX: 2,
        offsetY: 2,
        blur: 5
    };
    time.setShadow(shadow2);
    

    var date = new fabric.IText("Party", {
      fontSize: 80,
      top: 200,
      selectable: true,
      fontFamily:"Lobster",
    });
  

    var venue = new fabric.IText("PAUL", {
      fontSize: 75,
      top: 230,
      fontFamily:"Fantasy",
    });
  
contacts = new fabric.IText("RSVP BEFORE: NOVEMBER 02", {
      fontSize: 16,
      top: 270,
      selectable: true
    });
    var name = new fabric.IText("Johnson", {
      fontSize: 45,
      fontFamily:'Roboto',
      top: -40,
    });
    extra = new fabric.IText("West Road 1234 Verginia West", {
      fontSize: 12,
      textAlign: 'center',
      top: 270,
      selectable: true,
      fontFamily:'Roman'
    });



    function getRandomColor() {
      var colors = ['#000000', '#FF0000', '#00FF00', '#0000FF', '#FFFF00', '#00FFFF', '#FF00FF', '#C0C0C0', '#808080', '#800000', '#008000', '#000080', '#808000', '#800080', '#008080'];
  var randomIndex = Math.floor(Math.random() * colors.length);
  return colors[randomIndex];
}

title.set({fill: getRandomColor()});
time.set({fill: getRandomColor()});
date.set({fill: getRandomColor()});
contacts.set({fill: getRandomColor()});
venue.set({fill: getRandomColor()});
   
   

    // SET THE POSITION OF THE TEXT ON THE CANVAS
  // CHECK IF CANVAS HEIGHT IS GREATER THAN CANVAS WIDTH
if (canvas.getHeight() > canvas.getWidth()) {
    // SET THE POSITION OF THE TEXT ON THE CANVAS
    name.set("left", (canvas.getWidth()/2) - (name.width/2));
    title.set("left", (canvas.getWidth()/2) - (title.width/2));
    time.set("left", (canvas.getWidth()/2) - (time.width/2));
    date.set("left", (canvas.getWidth()/2) - (date.width/2));
    extra.set("left", (canvas.getWidth()/2+ 10) - (date.width/2));
    venue.set("left", (canvas.getWidth()/2) - (venue.width/2));
    contacts.set("left", (canvas.getWidth()/2) - (contacts.width/2));
   
    title.set("top", (canvas.getHeight()/2) - (title.height/2) -110);
time.set("top", (canvas.getHeight()/2) - (time.height/2) -195);
name.set("top", (canvas.getHeight()/2) - (name.height/2) +140);
date.set("top", (canvas.getHeight()/2) -90);
extra.set("top", (canvas.getHeight()/2) + 200);
venue.set("top", (canvas.getHeight()/2) + 55);
contacts.set("top", (canvas.getHeight()/2) +20);

canvas.add(title);
    canvas.add(time);
    canvas.add(date);
    canvas.add(venue);
    canvas.add(contacts);
    canvas.add(name);
    canvas.add(extra);
    
    canvas.renderAll();
}
else {
  if (canvas.getWidth() > canvas.getHeight()) {
    // SET THE POSITION OF THE TEXT ON THE CANVAS
    name.set("left", (canvas.getWidth()/2) - (name.width/2));
    title.set("left", (canvas.getWidth()/2) - (title.width/2));
    time.set("left", (canvas.getWidth()/2) - (time.width/2));
    date.set("left", (canvas.getWidth()/2) - (date.width/2));
    extra.set("left", (canvas.getWidth()/2+ 10) - (date.width/2));
    venue.set("left", (canvas.getWidth()/2) - (venue.width/2));
    contacts.set("left", (canvas.getWidth()/2) - (contacts.width/2));
   
    title.set("top", (canvas.getHeight()/2) - (title.height/2) -90);
time.set("top", (canvas.getHeight()/2) - (time.height/2) -1000);
name.set("top", (canvas.getHeight()/2) - (name.height/2) +125);
date.set("top", (canvas.getHeight()/2) -77);
extra.set("top", (canvas.getHeight()/2) + 90);
venue.set("top", (canvas.getHeight()/2) + 40);
contacts.set("top", (canvas.getHeight()/2) +17);
canvas.add(title);
    canvas.add(time);
    canvas.add(date);
    canvas.add(venue);
    canvas.add(contacts);
    canvas.add(name);
    canvas.renderAll();
}else {
  
    // SET THE POSITION OF THE TEXT ON THE CANVAS
    name.set("left", (canvas.getWidth()/2) - (name.width/2));
    title.set("left", (canvas.getWidth()/2) - (title.width/2));
    time.set("left", (canvas.getWidth()/2) - (time.width/2));
    date.set("left", (canvas.getWidth()/2) - (date.width/2));
    extra.set("left", (canvas.getWidth()/2+ 10) - (date.width/2));
    venue.set("left", (canvas.getWidth()/2) - (venue.width/2));
    contacts.set("left", (canvas.getWidth()/2) - (contacts.width/2));
   
    title.set("top", (canvas.getHeight()/2) - (title.height/2) -80);
time.set("top", (canvas.getHeight()/2) - (time.height/2) -1000);
name.set("top", (canvas.getHeight()/2) - (name.height/2) +135);
date.set("top", (canvas.getHeight()/2) -67);
extra.set("top", (canvas.getHeight()/2) + 100);
venue.set("top", (canvas.getHeight()/2) + 50);
contacts.set("top", (canvas.getHeight()/2) +27);

canvas.add(title);
    canvas.add(time);
    canvas.add(date);
    canvas.add(venue);
    canvas.add(contacts);
    canvas.add(name);
    canvas.renderAll();
}}


  }, 720);
 }
});


addImageBtn.addEventListener('click', function() {
    var selector = document.getElementById('type-template');
    if (selector.value === 'birthday' && event.target === addImageBtn) {
      var folderPath = 'BirthdayPerson/';
    var imageFiles = ['image1.png', 'image2.png','image3.png','image4.png', 'image5.png', 'image6.png'];
    var randomImage = folderPath + imageFiles[Math.floor(Math.random() * imageFiles.length)];

    var img = new Image();
    img.onload = function() {
        var img1 = new fabric.Image(img, {});
        var canvasWidth = canvas.width;
        var canvasHeight = canvas.height;
        var imageWidth = img1.width;
        var imageHeight = img1.height;
        var scaleX = 0.7;
        var scaleY = 0.7;
       
    
        // Scale the image to match the canvas
        img1.scale(scaleX, scaleY);
if(canvas.width > canvas.height){
            img1.set({
                left: canvas.width *0.72,
               top: canvas.getHeight()/2 *2 *0.05
            });
        } else {if(canvas.height > canvas.width){
            img1.set({
                left: canvas.width/2 ,
                top: canvas.height/2 -170,
                originX: 'center',
                originY: 'center',
            });
        }else {if(canvas.height = canvas.width){
            img1.set({
                left: canvas.width/2 ,
                top: canvas.height/2 -10000,
                originX: 'center',
                originY: 'center',
                display: false
            });
        }}}
        canvas.add(img1);
        
    
        canvas.renderAll();
    }};
    img.src = randomImage;
  });
  
addImageBtn.addEventListener('click', function() {
    var selector = document.getElementById('type-template');
    if (selector.value === 'birthday' && event.target === addImageBtn) {
      var folderPath = 'BirthdayPerson/';
    var imageFiles = ['image1.png', 'image2.png','image3.png','image4.png', 'image5.png', 'image6.png'];
    var randomImage = folderPath + imageFiles[Math.floor(Math.random() * imageFiles.length)];

    var img = new Image();
    img.onload = function() {
        var img1 = new fabric.Image(img, {});
        var canvasWidth = canvas.width;
        var canvasHeight = canvas.height;
        var imageWidth = img1.width;
        var imageHeight = img1.height;
        var scaleX = 0.7;
        var scaleY = 0.7;
       
    
        // Scale the image to match the canvas
        img1.scale(scaleX, scaleY);
if(canvas.width > canvas.height){
            img1.set({
                left: canvas.width *0.1-200,
               top: canvas.getHeight()/2 *2 *0.05
            });
        } else {if(canvas.height > canvas.width){
            img1.set({
                left: canvas.width/2 ,
                top: canvas.height/2 -170,
                originX: 'center',
                originY: 'center',
            });
        }else {if(canvas.height = canvas.width){
            img1.set({
                left: canvas.width/2 ,
                top: canvas.height/2 -10000,
                originX: 'center',
                originY: 'center',
                display: false
            });
        }}}
        canvas.add(img1);
        
    
        canvas.renderAll();
    }};
    img.src = randomImage;
  });

//OPENING AND CLOSING OF THE WINDOW THAT OUTO GENERATES
/*
document.getElementById("auto-generate").addEventListener("click", function(){
    // Create the selector window
    let selectorWindow7 = document.createElement("div");
    selectorWindow7.classList.add("selector-window3");
    selectorWindow7.style.width = "100%";
    selectorWindow7.style.height = "30px";
    selectorWindow7.style.position = "absolute";
    selectorWindow7.style.right = "0px";
    selectorWindow7.style.top = "0px";


    
   // selectorWindow.style.top = canvas.clientHeight + "px";  // set top position to match canvas height
   selectorWindow7.style.backgroundColor = "rgba(0, 0, 0, 0.5)";
   selectorWindow7.style.display = "block";
   selectorWindow7.style.display = "flex";
   

  
    let templateSelect = document.getElementById("type-template");
let canvasSelect = document.getElementById("canvas-dimensions");
let generateButton = document.getElementById("auto-generate");
    // Add the buttons to the selector window
    selectorWindow7.appendChild(templateSelect);
    selectorWindow7.appendChild(canvasSelect);
    selectorWindow7.appendChild(generateButton);
    // Add the selector window to the page
    document.body.appendChild(selectorWindow7);
  //  let totalWidth = window.innerWidth;
    let canvasWidth = canvas.width;
  //  let persentasie1 = (totalWidth-canvasWidth) / totalWidth * 100;
 //   persentasie1 = persentasie1 - 2
    document.querySelector('.selector-window7').style.width = canvas.width;
  //  selectorWindow7.style.height = `${persentasie}%`;
  //  generateButton.addEventListener("click", function(){
   //   selectorWindow7.style.display = false;
   // });
});

*/
// SUBMIT TEMPLATE SUBMIT TEMPLATE SUBMIT TEMPLATE SUBMIT TEMPLATE SUBMIT TEMPLATE SUBMIT TEMPLATESUBMIT TEMPLATE SUBMIT TEMPLATE SUBMIT TEMPLATESUBMIT TEMPLATE SUBMIT TEMPLATE SUBMIT TEMPLATESUBMIT TEMPLATE SUBMIT TEMPLATE SUBMIT TEMPLATESUBMIT TEMPLATE SUBMIT TEMPLATE SUBMIT TEMPLATE




//function saveCanvas() {
 // var canvasData = JSON.stringify(canvas);
//  var canvasWidth = canvas.width;
 // var canvasHeight = canvas.height;
 // var canvasImage = canvas.toDataURL('image/jpeg').replace(/^data:image\/(png|jpeg);base64,/, '');

//  $.ajax({
  //  type: "POST",
  //  url: "save_canvas.php",
  //  data: {
  //    canvasData: canvasData,
  //    canvasWidth: canvasWidth,
  //    canvasHeight: canvasHeight,
  //    canvasImage: canvasImage,
  //    tagOne: "church",
  //    tagTwo: "service"
 //   },
//  //  success: function(data) {
  //    console.log("Canvas saved successfully!");
  //  },
 //   error: function(xhr, status, error) {
//      alert("Error saving canvas: " + error);
 //   }
//  });
//}




document.getElementById("loadImageButton").addEventListener("click", function(){
  $.ajax({
    url: 'get_random_image.php',
    type: 'post',
    success: function(data) {
      // Decode the base64 encoded image
      var imageData = atob(data);
      // Create an image element
      var image = document.createElement('img');
      // Set the source of the image element to the decoded image
      image.src = "data:image/jpeg;base64," + imageData;
      // Add the image to the DOM
      document.getElementById("imageContainer").appendChild(image);
    }
  });
});





   
</script>


<script>
  let selectorWindow2 = document.createElement("div");
  selectorWindow2.classList.add("selector-window7");
  selectorWindow2.style.width = "500px";
  selectorWindow2.style.position = "absolute";
  selectorWindow2.style.right = "0px";
  
   selectorWindow2.style.top = "227px"
  selectorWindow2.style.backgroundColor = "rgba(0, 0, 0, 0.5)";
  selectorWindow2.style.display = "none";

  let alignHorizontallyButton = document.querySelector('#align-horizontally');
  let alignVerticallyButton = document.querySelector('#align-vertically');
  //let duplicaTe = document.querySelector('#duplicate');
  let deleteSelectedButton = document.querySelector('#delete-selected');
  
  let alignToright = document.querySelector('#align-vertically-right');

  selectorWindow2.appendChild(alignHorizontallyButton);
  selectorWindow2.appendChild(alignVerticallyButton);
  //selectorWindow2.appendChild(duplicaTe);
  selectorWindow2.appendChild(deleteSelectedButton);
  
  selectorWindow2.appendChild(alignToright);


  document.body.appendChild(selectorWindow2);

  // check if canvas variable exists before trying to attach an event listener to it
  if (canvas) {
    canvas.on('selection:created', function(event) {
      let selectedObjects = event.selected;
      if (selectedObjects.length > 1) {   // remove all the states after the current state
 states.splice(currentState + 1);
// push the new state to the array
states.push(JSON.stringify(canvas));
currentState++;
        let totalWidth = window.innerWidth;
        let canvasWidth = canvas.width;
        let percentage = (totalWidth - canvasWidth) / totalWidth * 100;
        percentage = percentage - 2;
        document.querySelector('.selector-window7').style.width = percentage + "%";
        selectorWindow2.style.display = "block";
        selectorWindow2.style.height = percentage + "%";
      }
    });

    canvas.on('selection:cleared', function() {
      selectorWindow2.style.display = "none";
    });
  }
  



</script>
<script>
 


window.onbeforeunload = function () {
    return "Are you sure you want to leave? Any unsaved progress will be lost.";
};

</script>
</html>
