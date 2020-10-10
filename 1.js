function hitungbarang(quality, qty){
	let harga = 0;
	let potongan;
	let harga_bayar;

	if (quality=="A" || quality=="a") {
		harga = 3000;
		harga = harga*qty;
		if (qty>10) {

			potongan = qty * 500;
			harga_bayar = harga - potongan;
		}
		else{
			
			potongan = 0;
			harga_bayar = harga;
		}

		console.log("Total Harga Barang : " + harga);
		console.log("Potongan : " + potongan);
		console.log("Total yang Harus Dibayar : " + harga_bayar);
	}

	else if (quality=="B" || quality=="b") {
		harga = 3500;
		harga = harga*qty;
		if (qty>5) {

			potongan = (0.5) * harga;
			harga_bayar = harga - potongan;
		}
		else{
			
			potongan = 0;
			harga_bayar = harga;
		}

		console.log("Total Harga Barang : " + harga);
		console.log("Potongan : " + potongan);
		console.log("Total yang Harus Dibayar : " + harga_bayar);
	}


	else if (quality=="C" || quality=="c") {
		harga = 5000;
		harga = harga*qty;
	
		potongan = 0;
		harga_bayar = harga;
		

		console.log("Total Harga Barang : " + harga);
		console.log("Potongan : " + potongan);
		console.log("Total yang Harus Dibayar : " + harga_bayar);
	}

	else {
		console.log("Tidak ada barang berkualitas " + quality)
	}

}




