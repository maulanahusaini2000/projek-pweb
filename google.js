function cari() {//fungsi cari
var kata = document.formcari.keyword.value;
var hasil= "https://www.google.com/search?q="+kata;//link pada google chrom
var config= 'height=500, width=750, scrollbars=yes location=yes';//pengaturan bentuk
window.open(hasil, 'google', config)//google menghasilkan hasil pencarian kata
}