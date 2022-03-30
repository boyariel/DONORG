export let rules_patient = {
    first_name: {
        required: true,
        minlength: 4,
        maxlength: 20
    },
    last_name_father: {
        required: true,
        minlength: 4,
        maxlength: 20

    },
    personal_id: {
        required: true,
        minlength: 8,
        maxlength: 15
    },
    code: {
        required: true,
    },
    email: {
        required: true,
        email: true
    },
    password: {
        required: true,
        minlength: 8,
        maxlength: 15

    },
    cpassword: {
        required: true,
        minlength: 8,
        equalTo: "#password",
        maxlength: 15

    },
};

export let messages_patient = {

};
