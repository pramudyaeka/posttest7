var body = document.getElementsByTagName('body')[0];

var katalog = document.getElementById('katalog');
katalog.addEventListener('click',function()
{
    alert("Mohon Maaf Menu Catalogue Belum Tersedia !")
})

var ubah = document.getElementById('ubah');
ubah.addEventListener('click',function(){
    ubah.classList.toggle('active');
    body.classList.toggle('night');
})

var kategori1 = document.getElementById('kategori1');
kategori1.style.color='#616060';

var kategori2 = document.getElementById('kategori1');
kategori2.style.color='#616060';