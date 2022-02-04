<?php class Product {
	private $nama;
	private $kategory;
	private $harga;
	private $qty;

	// method untuk setter
	public function setNama($nama){
		$this->nama = $nama;
	}
	public function setKategory($kategory){
		$this->kategory = $kategory;
	}
	public function setHarga($harga){
		$this->harga = $harga;
	}
	public function setQty($qty){
		$this->qty = $qty;
	}

	// method untuk getter
	public function getNama() {
		return $this->nama; 
	}
	public function getKategory() {
		return $this->kategory;
	}
	public function getHarga() {
		return $this->harga;
	}
	public function getQty() {
		return $this->qty;
	}
}

// proses instansiasi object
// buat sebuah object kendaraan
$Product = new Product;
// masukan sebuah nama didalam method setter
$Product->setNama("Buku Sejarah Islam");
$Product->setKategory("Edukasi");
$Product->setHarga(50000);
$Product->setQty(20);

// menampilkan  nama yang telah di set diatas
echo "Nama Buku : <b>".$Product->getNama()."</b> <br>"; 
echo "Kategory Buku : <b>".$Product->getKategory()."</b> <br>";
echo "Harga Buku : <b>".$Product->getHarga()."</b> <br>";
echo "Qyt : <b>".$Product->getQty()."</b> <br>"; 
?>