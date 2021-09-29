<?php 
/*
ÖDEV AÇIKLAMASI
N tane elemanı olan bir dizideki en küçük elemanı ekrana bastıran bir fonksiyon yazınız. 
N sayısı bir değişken üzerinden dinamik olarak tanımlanmalıdır.
PHP için önceden asort vb. önceden tanımlanmış (builtin) fonksiyonları kullanılmamalıdır.
*/

//Dışarıdan verilen sayı adedi kadar, bir dizinin içerisini rastgele doldurup en küçük değerli sayıyı ekrana yazdırır.
function enKucukSayiyiYazdir($elemanSayisi)
{
	$sayiDizisi = array();
	$bilgilendirmeMetni=" Dizi İçerisindeki Sayılar: <br/> ";
	for($i=0; $i<$elemanSayisi; $i++)
	{
		$rastgeleSayi = rand(1,1000);
		array_push($sayiDizisi, $rastgeleSayi);
		$bilgilendirmeMetni.=$rastgeleSayi."<br/>";
	}
	
	$enKucukSayi = $sayiDizisi[0];  
	for ($k = 0; $k < count($sayiDizisi); $k++)
	{ 
		$sayiDizisi[$k] < $enKucukSayi ? $enKucukSayi = $sayiDizisi[$k] :	$enKucukSayi;
	} 
	$bilgilendirmeMetni.="Dizi İçerisindeki En Küçük Sayı: <strong>$enKucukSayi</strong> ";
	echo $bilgilendirmeMetni;
}


$elemanSayisi=40;
enKucukSayiyiYazdir ($elemanSayisi);





?>