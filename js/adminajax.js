//admin login 
function adminLog() {
    var adminmail = $('#adminmail').val();
    var adminpass = $('#adminpass').val();
    $.ajax({
        url: 'admin/addadmin.php',
        method: 'POST',
        dataType: 'json',
        data: {
            adminlogin: "adminlogin",

            adminmail: adminmail,
            adminpass: adminpass,
        },
        success: function (data) {
            console.log(data);

            if (data != 0) {
                $("#success").html("<div class='spinner-border text-success' role='status'></div>");
                setTimeout(() => {
                    window.location.href = "admin/admin.php";
                }, 1000);


            }
            else {
                $("#success").html("<span class='alert alert-danger'>Incorrect email or password.</span>");
                // $('#Login').attr("disabled", true);
                setTimeout(() => {

                    clearLOGfield();
                }, 2500);

            }

        },
    });
}
function clearLOGfield() {
    $('#adminForm').trigger('reset');
    $("#success").html(" ");

}
