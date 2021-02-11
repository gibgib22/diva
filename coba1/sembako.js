let sembako = [
    [nama = 'beras', harga = 10000 , jumlah = 5 ],
    [nama = 'gula', harga = 14000 , jumlah = 5],
    [nama = 'telur', harga = 20000 , jumlah = 2],
    [nama = 'minyak', harga = 9000 , jumlah = 10]
]
sembako[0][0] = sembako[0][1] * sembako[0][2]
sembako[1][0] = sembako[1][1] * sembako[1][2]
sembako[2][0] = sembako[2][1] * sembako[2][2]
sembako[3][0] = sembako[3][1] * sembako[3][2]

console.log(sembako[0][0],sembako[1][0],sembako[2][0],sembako[3][0])
var jumlah = sembako[0][0] + sembako[1][0] + sembako[2][0] + sembako[3][0]
console.log("jumlah yang harus di bayarkan " + jumlah)