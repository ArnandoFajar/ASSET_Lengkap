$("#commentForm").validate({
    rules: {
        nama: {
            required: true,
            minlength: 5,
        },
        phone: {
            required: true,
        },
        email: {
            required: true,
        },
        comment: {
            required: true,
            minlength: 5,
        },
    },
    messages: {
        nama: {
            required: "name harus diisi",
            minlength: "name harus lebih dari 5 huruf",
        },
        phone: {
            required: "phone harus diisi",
        },
        email: {
            required: "email harus diisi",
        },
        comment: {
            required: "Comment harus diisi",
            minlength: "Comment harus lebih dari 5 huruf",
        },
    },
    errorClass: "is-invalid",
    validClass: "is-valid"
});