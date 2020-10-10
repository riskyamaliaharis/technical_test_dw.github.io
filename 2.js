
function character(char){
	let char_array = char.split("");
	var hitung = 0;
	for (let i=0; i <= char.length-1; i++) {
		if (char_array[i]=="a" || char_array[i]=="i" || char_array[i]=="u" || char_array[i]=="e" || char_array[i]=="o"){
			hitung=hitung+1;
			
		}
		else {
			hitung = hitung+0;
		}
	}

	console.log("Huruf vokal ada " + hitung);
}

