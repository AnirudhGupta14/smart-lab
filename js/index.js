$(document).ready(function()
{
    function alertmsg(message, status)
    {
        $('#liveAlertPlaceholder').html(`<div class="alert alert-${status} alert-dismissible" role="alert">`+
        `   <div>${message}</div>`+
        '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
        '</div>');
    }

    $("#save-btn").on("click",function(e)
    {
        e.preventDefault();
        var title = $("#title").val();
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var aadhar = $("#aadhar").val().toString();
        var email = $("#email").val();
        var mobile = $("#basic-url").val().toString();
        var years = $("#basic-url2").val();
        var months = $("#basic-url3").val();
        var days = $("#basic-url4").val();
        var address = $("#exampleFormControlTextarea5").val();
        var report = "false";
        $(":checkbox").each(function () {
            var ischecked = $(this).is(":checked");
            if (ischecked) {
                report = "true";
            }
        });
        var gender = "";
        var selected = $("input[type='radio'][name='flexRadioDefault']:checked");
        if(selected.length > 0) 
        {
            gender = selected.val();
        } 
        var date = new Date();
        var current_date = date.getDate() + "-" + (date.getMonth()+1) + "-" + date.getFullYear();
        var atposition = email.indexOf("@");  
        var dotposition = email.lastIndexOf(".");  
        if(title == "" || fname == "" || lname == "" || address == "" || email == "" || years.toString().length == 0 || months.toString().length == 0 || days.toString().length == 0)
        {
            alertmsg("All input fields are required", "danger");
            $('html').scrollTop(0);
        }
        else if(atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= email.length)
        {
            alertmsg("Please enter a valid Email ID", "danger");
            $('html').scrollTop(0);
        }
        else if(aadhar.length != 12)
        {
            alertmsg("Incorrect Aadhar Number entered", "danger");
            $('html').scrollTop(0);
        }
        else if(mobile.length != 10)
        {
            alertmsg("Invalid Mobile Number entered", "danger");
            $('html').scrollTop(0);
        }
        else if(years >= 100 || months >= 12 || days >= 31)
        {
            alertmsg("Please enter your correct age", "danger");
            $('html').scrollTop(0);
        }
        else
        {
            $.ajax({
                url: "insert-task.php",
                type : "POST",
                data : {title:title, fname:fname, task_time:current_date, lname:lname, aadhar:aadhar, email:email, mobile:mobile, years:years, months:months, days:days, address:address, report:report, gender:gender},
                success : function(data)
                {
                    if(data == 1)
                    {
                        $("#addForm").trigger("reset");
                        alertmsg("Patients details has been inserted successfully.", "success");
                        $('html').scrollTop(0);
                    }
                    else
                    {
                        alertmsg("Can't save details of patient.", "danger");
                    }
                }
            });
        }
    });
});
