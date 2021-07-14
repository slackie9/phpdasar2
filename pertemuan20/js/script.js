$(document).ready(function () {
    //hilangkan tombol cari
    $("#tombol-cari").hide();

    // buat event ketika keyword di tulis
    $("#keyword").on("keyup", function () {
        //munculkan icond loading
        $(".loader").show();
        // ajak menggunakan load
        // $("#container").load("ajax/mahasiswa.php?keyword=" + $("#keyword").val());

        //$.get()
        $.get("ajax/mahasiswa.php?keyword=" + $("#keyword").val(), function (data) {
            $("#container").html(data);
            $(".loader").hide();
        });
    });
});
