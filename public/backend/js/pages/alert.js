$(function () {
    $(document).on("click", "#delete", function (e) {
        e.preventDefault();
        var link = $(this).attr("href");
        Swal.fire({
            title: "¿Eliminar este dato?",
            icon: "Advertencia",
            iconColor: "#EF3737",
            background: "#1A233B",
            showCancelButton: true,
            confirmButtonColor: "#EF3737",
            cancelButtonColor: "#7A15F7",
            confirmButtonText: "¡Eliminar!",
            cancelButtonText: "Cancelar",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
            }
        });
    });
});
