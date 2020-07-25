const text = ["Nama Saya Irsya Aliffio. saya lahir di Pemalang pada 28 juni 2003 Umur Saya 17 tahun dan saat ini Saya bersekolah di SMK Taruna Bhakti Depok | Selama saya sekolah di SMK Taruna Bhakti saya di ajari untuk belajar programming karena kejuruan saya yaitu Rekayasa Perangkat Lunak, di SMK Taruna Bhakti saya telah belajar beberapa bahasa pemograman yaitu bahasa python, php, javascript, java, dan banyak lagi. Sekarang saya mempunyai pengalaman untuk membuat website atau aplikasi dekstop sederhana, dan sekarang masih berada di tahap belajar untuk mendalami Back-end developer. Dan saya juga membuat UI/UX Design dan Redesign aplikasi yang sudah ada, untuk melihat karya saya kalian bisa lihat ke instagram saya yang 'sya.lif_' Semoga kedepannya saya bisa membuat aplikasi atau website yang berguna bagi orang banyak. "];
let count = 0;
let index = 0;
let currentText = "";
let letter = "";

(function type(){
    if(count === text.length){
        count = 0;
    }
    currentText = text[count];
    letter = currentText.slice(0, ++index);

    document.querySelector('.tulis').textContent = letter;
    if(letter.length === currentText.length){
        count++;
        index = 0;
        return;
    }
    setTimeout(type,50);
}());
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');
    });
});
window.console = window.console || function(t) {};
if (document.location.search.match(/type=embed/gi)) {
window.parent.postMessage("resize", "*");
}
console.log('Ka.');
const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark'); //add this
    }
    else {
        document.documentElement.setAttribute('data-theme', 'light');
    }    
}
toggleSwitch.addEventListener('change', switchTheme, false);

const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;
if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);

    if (currentTheme === 'dark') {
        toggleSwitch.checked = true;
    }
}