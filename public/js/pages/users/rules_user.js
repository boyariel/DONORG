export let rules_user = {
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
        required: true,
        minlength: 8,
        maxlength: 15

    },
    cpassword: {
        required: true,
        minlength: 8,
        equalTo: "input[name='password']",
        maxlength: 15

    },
    rule_id: {
        required: true,
    },
};

export let rules_user_edit = {
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
    cpassword: {
        minlength: 8,
        equalTo: "input[name='password']",
        maxlength: 15

    },
    rule_id: {
        required: true,
    },
};



export let messages_user = {

};
