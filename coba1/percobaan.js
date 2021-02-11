var c
function tanah(a,b,f,m) {
    a = '20.5'
    b = '30'
    var c = (a * b) 
    console.log('luas tanah ' + c + ' m')

    m = '1500000'
    f = c * m
    console.log('harga tanah ' + f)

    var ppn = f * 15 / 100
    console.log('ppn ' + ppn)

    var bayar = ppn + f
    console.log('harga yang harus dibayar pak arman adalah ' + bayar)
}

tanah()