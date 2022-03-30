export let rules_director = {
    name: {
        required: true,
        minlength: 4,
        maxlength: 20
    },
    email: {
        required: true,
        email: true,
    },
    password: {
        required: true,
        minlength: 8,
        maxlength: 15

    },
    password_confirmation: {
        required: true,
        minlength: 8,
        equalTo: "#password",
        maxlength: 15

    },
};

export let rules_director_edit = {
    name: {
        required: true,
        minlength: 4,
        maxlength: 20
    },
    email: {
        required: true,
        email: true,
        maxlength: 30

    },
    password: {
        minlength: 8,
        maxlength: 15

    },
    password_confirmation: {
        minlength: 8,
        equalTo: "#password",
        maxlength: 15

    },
};

export let messages_director = {

};
