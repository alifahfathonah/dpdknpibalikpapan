$(document).ready(function () {
    $('#btn_log').click(function () {

        var user = $('#txt_user').val();
        var pass = $('#txt_pass').val();

        if (user == "" && pass == "") {
            alert('username dan password masih kosong');
            $('#txt_user').focus()
            return false;
        }
        else if (user == "") {
            alert('username masih kosong');
            $('#txt_user').focus()
            return false;
        }
        else if (pass == "") {
            alert('password masih kosong');
            $('#txt_pass').focus()
            return false;
        }
        else {
            return true;
        }
    });
});