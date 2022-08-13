$(document).ready(function () {
	alert();
});

function alert() {
	const flashSuccess = $(".flash-success").data("flashdata");
	const flashError = $(".flash-error").data("flashdata");

	if (flashSuccess) {
		swal.fire({
			icon: "success",
			title: "Berhasil",
			timer: 1500,
			text: flashSuccess,
		});
	}
	if (flashError) {
		swal.fire({
			icon: "error",
			title: "Gagal",
			timer: 1500,
			text: flashError,
		});
	}
}

$(".hapus").click(function (event) {
	event.preventDefault();
	Swal.fire({
		title: "Apakah Anda Yakin ?",
		text: "ingin menghapus data ini",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#d33",
		cancelButtonColor: "#5c5c5c",
		confirmButtonText: "Delete",
		cancelButtonText: "Cancel",
	}).then((result) => {
		if (result.isConfirmed) {
			window.location.href = $(this).attr("href");
		}
	});
});

$(".formHapus").submit(function (event) {
	event.preventDefault();
	Swal.fire({
		title: "Apakah Anda Yakin ?",
		text: "ingin menghapus data ini",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#d33",
		cancelButtonColor: "#5c5c5c",
		confirmButtonText: "Delete",
		cancelButtonText: "Cancel",
	}).then((result) => {
		if (result.isConfirmed) {
			window.location.href = $(this).attr("action");
		}
	});
});
