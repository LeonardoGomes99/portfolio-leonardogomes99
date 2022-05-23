function codeAddress() {
    document.querySelectorAll(".navbar").forEach(el => el.remove());
    birthDate = '1999-09-09'
    var age = Math.floor((new Date() - new Date(birthDate).getTime()) / 3.15576e+10)
	document.getElementById("actual-age").innerHTML=age;
}

window.onload = codeAddress;