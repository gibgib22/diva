var bmi
function rodey(tinggi,berat){
    tinggi = 1.7
    berat = 90
    bmi = berat / (tinggi * tinggi)
    // console.log(bmi)

    if (bmi < 18.5){
        console.log("BMI = "+ bmi + " \n status kekurangan berat badan")
    } else if(18.6 < bmi >= 24.9){
        console.log("BMI = "+ bmi +" \n normal")
    } else if(25 < bmi >= 29.9){
        console.log("BMI = "+ bmi +" \n kelebihan berat badan")
    } else if(bmi > 30){
        console.log("BMI = "+ bmi + " \n kegemukan atau obesitas")
    }
}
rodey()