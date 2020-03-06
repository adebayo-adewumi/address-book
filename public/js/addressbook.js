$(".ui.dropdown").dropdown();
let _url = window.location.href;

function saveContact(e){
    $(e).addClass("disabled");
    $(e).html("Please wait...");

    let day = $("select[name='day']").val();
    let month = $("select[name='month']").val();
    let year = $("select[name='year']").val();
    let birthday = day+" "+month+" "+year;

    let contact = $.ajax({
        url:_url,
        type:"POST",
        data: $(".add-contact-form").serialize()+"&birthday="+birthday+"&method=POST",
        dataType:"json",
    });

    contact.done(function(response){
        $(e).removeClass("disabled");
        $(e).html("Save");

        if(response.status == "success"){
            $(".responseMsg").html('<div class="ui green message">Contact saved successfully!</div>');
        }
        else{
            $(".responseMsg").html('<div class="ui red message">Error occured</div>');
        }
    });

    contact.fail(function(err){});
}