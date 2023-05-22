
$(document).ready(function () {
    //ajax for email validation
    $("#Smail").on("blur", function () {
        var smail = $('#Smail').val();
        $.ajax({
            url: 'Student/addstu.php',
            method: 'POST',

            data: {
                checkmail: "checkmail",
                smail: smail,
            },
            success: function (data) {
                console.log(data);
                if (data != 0) {
                    $("#msg2").html("<small class='text-danger'>  Email is already used..!</small>");
                    $('#SignUp').attr("disabled", true);
                }
                else {
                    $("#msg2").html("<small class='text-danger'></small>");

                    $('#SignUp').attr("disabled", false);

                }
            },
        });
    });
});


function addStd() {
    var sname = $('#Sname').val();
    var smail = $('#Smail').val();
    var spass = $('#Spassword').val();
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    // check data
    if (sname.trim() == "") {
        $("#msg1").html('<small class="text-danger">  Please Enter Name</small>');
        $("#sname").focus();
        return false;
    }
    else if (smail.trim() == "") {
        $("#msg2").html("<small class='text-danger'>  Please Enter Email</small>");
        $("#smail").focus();
        return false;
    }
    else if (smail.trim() != "" && !reg.test(smail)) {
        $("#msg2").html("<small class='text-danger'>  Please Enter valid email</small>");
        $("#smail").focus();
        return false;
    }
    else if (spass.trim() == "") {
        $("#msg3").html("<small class='text-danger'>  Please Enter Password</small>");
        $("#spass").focus();
        return false;
    }

    else {


        //console.log(sname + smail + spass);
        $.ajax({
            url: 'Student/addstu.php',
            method: 'POST',
            dataType: 'json',
            data: {
                stusignup: "stusignup",
                sname: sname,
                smail: smail,
                spass: spass,
            },
            success: function (data) {
                console.log(data);
                if (data == "OK") {
                    $("#successMsg").html("<span class='alert alert-success'>Registration Successfull</span>");
                    clearfield();
                }
                else if (data == "FAIL") {
                    $("#successMsg").html("<span class='alert alert-danger'>Registration Unsuccessfull!!!</span>");

                }

            },
        });
    }
}
function clearfield() {
    $('#RegForm').trigger('reset');
    $("#msg1").html(" ");
    $("#msg2").html(" ");
    $("#msg3").html(" ");
}

//login varification
function stulogin() {
    var lemail = $('#lemail').val();
    var lpass = $('#lpass').val();
    $.ajax({
        url: 'Student/addstu.php',
        method: 'POST',
        dataType: 'json',
        data: {
            stulogin: "stulogin",

            lemail: lemail,
            lpass: lpass,
        },
        success: function (data) {
            console.log(data);

            if (data != 0) {
                $("#successMsgLogin").html("<div class='spinner-border text-success' role='status'></div>");
                setTimeout(() => {
                    window.location.href = "index.php";
                }, 1000);


            }
            else {
                $("#successMsgLogin").html("<span class='alert alert-danger'>Incorrect email or password.</span>");
                // $('#Login').attr("disabled", true);
                setTimeout(() => {

                    clearLOGfield();
                }, 2500);

            }

        },
    });
}
function clearLOGfield() {
    $('#logForm').trigger('reset');
    $("#successMsgLogin").html(" ");

}
