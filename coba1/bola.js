var diameter = 30
var r = 1/2 * diameter
var phi = 3.14

function volume(){
    var volume = 4/3 * phi * r * r
    console.log("volume bola adalah "+  volume)
}

function luas(){
    var luas = 4 * phi * r * r
    console.log("luas permukaan bola adalah " + luas)
}
volume()
luas()