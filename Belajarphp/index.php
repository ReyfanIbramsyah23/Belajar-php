<?php 

class manusia{
 
    var $nama;
    var $warna;
    

    function tampilkan_nama(){
        print "Nama Saya Reyfan Ibramsyah <br/>";
    }
    
    function warna_kulit(){
        print "Rombel RPL XI-4 <br/>";
    }
    
}

$manusia = new manusia();
 

echo $manusia->tampilkan_nama();
 

echo $manusia->warna_kulit();

?>