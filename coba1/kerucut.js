var diameter = 15
var r = 1/2 * diameter
var tinggi = 40
var panjang = 20
var phi = 3.14

function volume(){
    var volume = 1/3 * phi * r * r * tinggi
    console.log("volume kerucut di atas adalah " + volume)
}
volume()

var q = Math.pow(tinggi,2) + Math.pow(r,2)
var s = Math.sqrt(q)

function luas(){
    var luasselimut = phi * r * s
    console.log("luas selimut kerucut \n"+luasselimut)

    var luaslingkaran = phi * r * r
    var luaspersegi = Math.pow(panjang,2)
    var luas = luasselimut + (luaspersegi - luaslingkaran)
    console.log("luas permukaan kerucut adalah \n" +luas)
}
luas()