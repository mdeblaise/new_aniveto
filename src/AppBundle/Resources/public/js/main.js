function getFormValues(status){
    switch(status) {
        case 0:
            return getStep1Values();

        case 1:
            return getStep2Values();

        case 2:
            return getStep3values();

        default:
            return false;
    }
}

function getStep1Values(){
    return {
        'email' : $('#').val()
    };
}

function getStep2Values(){
    return {
        'gender' : $('#').val(),
        'lastname' : $('#').val(),
        'firstname' : $('#').val(),
        'phone' : $('#').val(),
        'street' : $('#').val(),
        'postcode' : $('#').val(),
        'city' : $('#').val()
    };
}

function getStep3values(){
    return {
        'name' : $('#').val(),
        'specie' : $('#').val(),
        'sex' : $('#').val(),
        'breed' : $('#').val(),
        'birthdate' : $('#').val(),
        'vaccinated' : $('#').val(),
        'identified' : $('#').val(),
        'sterilized' : $('#').val()
    }
}

function saveDevis(status, quitBeforeEnded) {
    var form = getFormValues(status);

    if(form !== false) {
        $.ajax({
            type: 'post',
            async: false,
            url: '/api/save',
            data: {
                form: form,
                status: status,
                quitBeforeEnded: quitBeforeEnded
            }
        });
    }
}