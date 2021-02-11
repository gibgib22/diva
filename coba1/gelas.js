var diameter = 15
var r = 1/2 * diameter
var phi = 3.14
var tinggi = 50

function luas(){
    var luasselimut =  phi * diameter * tinggi
    var luasalas = phi * r * r
    var permukaan = luasselimut + luasalas
    console.log("luas selimut tabung adalah "+ luasselimut)
    console.log("luas permukaan tabung adalah "+ permukaan)
}
luas()
function volume(){
    var volume = phi * r * r * tinggi
    console.log("volume tabung adalah " + volume)
}
volume()