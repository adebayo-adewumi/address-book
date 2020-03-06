$(".ui.dropdown").dropdown();

function addContact(e){
    $(e).addClass("disabled");
    $(e).html("Please wait...");

    let day = $("select[name='day']").val();
    let month = $("select[name='month']").val();
    let year = $("select[name='year']").val();
    let birthday = day+" "+month+" "+year;

    let contact = $.ajax({
        url:"/contact/new",
        type:"POST",
        data: $(".add-contact-form").serialize()+"&birthday="+birthday+"&method=POST",
        dataType:"json",
    });

    contact.done(function(response){
        $(e).removeClass("disabled");
        $(e).html("Save");

        if(response.status == "success"){
            $(".responseMsg").html('<div class="ui green message">Contact added successfully!</div>');
        }
        else{
            $(".responseMsg").html('<div class="ui red message">Error occured</div>');
        }
    });

    contact.fail(function(err){});
}