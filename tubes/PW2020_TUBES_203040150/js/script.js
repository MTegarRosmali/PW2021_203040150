const tombolCari = document.querySelector('.tombolCari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container');

// hilangkan tombol cari
tombolCari.style.display = 'none';

// event ketika menulis keyword
keyword.addEventListener('keyup', function() {
    // ajax
    // xmlhttpprequest
    // const xhr = new XMLHttpRequest();

    // xhr.onreadystatechange = function(){
    //     if (xhr.readyState == 4 && xhr.status == 200)
    //     {
    //         container.innerHTML = xhr.responseText;
    //     }
    // }

    // xhr.open('get','ajax/ajax_cari.php' + keyword.value);
    // xhr.send();

    // fetch()
    fetch('ajax/ajax.php?keyword=' + keyword.value)
    .then((Response) => Response.text())
    .then((Response) => (container.innerHTML = Response));
});

// preview image umtuk tambah dan ubah
function preview()
{
    const gambar = document.querySelector('.Gambar');
    const imgPreview = document.querySelector('.imgPreview');

    const oFReader = new FileReader();
    oFReader.readAsDataURL(gambar.file[0]);

    oFReader.onload = function (oFREvent) 
    {
        imgPreview.src = oFREvent.target.result;
    };
}