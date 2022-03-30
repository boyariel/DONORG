export let rules_configuration = {
    name: {
        required: true,
        minlength: 4,
        maxlength: 20
    },
    address: {
        required: true,
        minlength: 4,
        maxlength: 250

    },
    phone: {
        required: true,
        minlength: 4,
        maxlength: 20

    },
    max_score: {
        number: true,
    },
};

export let messages_configuration = {

};
