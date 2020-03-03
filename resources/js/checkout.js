let pay    = document.getElementById('pay');
let credit = document.getElementById('credit');

function hideButtons() {
    document.getElementById("pay").classList.add('hidden');
    document.getElementById("credit").classList.add('hidden');
}

function removeHidden() {
    document.getElementById("pay-form").classList.remove('hidden');
}

function setValue(value) {
    document.getElementById("pay-submit").innerHTML = value;
}

if (pay != null) {
    pay.addEventListener('click', function() {
        document.getElementById("method").value = 'pay';
        hideButtons();
        removeHidden();
        setValue('Pay');
    });
}

if (credit != null) {
    credit.addEventListener('click', function() {
        document.getElementById("method").value = "credit";
        hideButtons();
        removeHidden();
        setValue('Use Credit');
    });
}
