//verification of the password when changing it

function password() {

    var pwd = document.getElementById("newpwd").value;
    var conf = document.getElementById("confirmepwd").value;
    if (pwd != conf) {
        alert("password dont much");
        document.getElementById("confirmepwd").value = '';
        document.getElementById("newpwd").select();
    };
}
//mail validity
function maile(id) {
    var m = document.getElementById(id).value;
    if (m.search('@') < 0) {
        document.getElementById(id).select();
        alert("E-mail non valid");
    }
}