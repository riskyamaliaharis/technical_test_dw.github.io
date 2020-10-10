function segitiga(alas_tinggi){
	if (alas_tinggi < 11){
		var angka = 2;
		var set;
		for (var i = 0; i <=alas_tinggi-1 ; i++) {
			for (var j = 0; j <=i ; j++) {
				if(angka==2 || angka%2!==0  ){

					document.write(angka + " ");
					
				}
				else {
					
					while (angka%2==0 || angka%3==0 ){
						angka+=1;
					}
					document.write(angka + " ");
				}

				angka+=1;
				
			}
			document.write("<br>");
		}
	}

	else {
		document.write("Maaf, angka input harus di antara 0 dan 10");
	}
}