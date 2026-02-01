// ==============================
// TOMBOL TOP
// ==============================
const btnTop = document.getElementById("toTop");
const banner = document.querySelector(".container");

btnTop.addEventListener("click", () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});

const observer = new IntersectionObserver(
    ([entry]) => {
        if (!entry.isIntersecting) {
            btnTop.classList.add("show");
        } else {
            btnTop.classList.remove("show");
        }
    },
    { threshold: 0 }
);

observer.observe(banner);

// ==============================
// FORM CONTACT
// ==============================
const form = document.querySelector(".contact");

form.addEventListener("submit", function (e) {
    e.preventDefault(); // supaya halaman tidak reload

    const nama  = document.getElementById("nama").value;
    const email = document.getElementById("email").value;
    const hp    = document.getElementById("nomor").value;
    const kota  = document.getElementById("kota").value;
    const pesan = document.getElementById("pesan").value;

    console.log("DATA USER:");
    console.log({ nama, email, hp, kota, pesan });
});
// ===== POPUP =====
const popup = document.getElementById("popup");
const closePopup = document.getElementById("tutup");

form.addEventListener("submit", function(e){
    e.preventDefault();

    // (nanti di sini kita isi validasi)

    popup.classList.add("show"); // munculkan popup
    form.reset();
});

closePopup.addEventListener("click", function(){
    popup.classList.remove("show");
});
const menuLinks = document.querySelectorAll(".navi a");

menuLinks.forEach(link => {
    link.addEventListener("click", function () {
        // hapus active dari semua menu
        menuLinks.forEach(item => item.classList.remove("active"));

        // tambahkan active ke yang diklik
        this.classList.add("active");
    });
});
