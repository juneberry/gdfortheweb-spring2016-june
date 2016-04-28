// function onMouseDown(event) {
//     var path = new Path.Circle(event.point, 15);
//     path.fillColor = 'black';}

// var path = new Path.Circle({
//     center: view.center,
//     radius: 15,
//     fillColor: 'black'
// });

// // When the mouse is clicked on the item,
// // set its fill color to red:
// path.onClick = function(event) {
//     this.opacity = Math.random();
// }

// var circle = new Path.Circle(view.center, 50);
// circle.stokeColor=""


var canvas = document.getElementById("imgCanvas");
var context = canvas.getContext("2d");

function draw(e) {
    var pos = getMousePos(canvas, e);
    posx = pos.x;
    posy = pos.y;
    context.fillStyle = "#000000";
    context.beginPath();
    context.arc(posx, posy, 50, 0, 2*Math.PI);
    context.fill();
}

function getMousePos(canvas, evt) {
    var rect = canvas.getBoundingClientRect();
    return {
      x: evt.clientX - rect.left,
      y: evt.clientY - rect.top
    };
}