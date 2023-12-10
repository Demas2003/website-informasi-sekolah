<footer>
    &copy; <?php date("2023"); ?> Web Informasi SMK WAKANDA
</footer>
<script>
    window.onscroll = function() {
        // Ambil elemen navbar
        var navbar = document.querySelector("header");

        // Jika posisi scroll melebihi tinggi navbar, tambahkan kelas 'sticky' untuk membuatnya tetap menempel.
        if (window.pageYOffset >= navbar.offsetTop) {
            navbar.classList.add("sticky");
        } else {
            // Jika tidak, hapus kelas 'sticky'.
            navbar.classList.remove("sticky");
        }
    };

    
</script>


</body>
</html>