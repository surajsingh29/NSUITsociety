//Ajax call for contactus form

$("#contactform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to signup.php using AJAX
    $.ajax({
        url: "contactus.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data){
                $("#contactusmessage").html(data);
            }
        },
        error: function(){
            $("#contactusmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});

function dataReset()
{
    document.getElementById('contactform').reset();
}


document.getElementById('evtmem').style.display = "none";
        document.getElementById('pubrelmem').style.display = "none";
        document.getElementById('techcelmem').style.display = "none";
        document.getElementById('webappmem').style.display = "none";
        document.getElementById('contwriter').style.display = "none";
        function teamMem(){
            document.getElementById('team_members').style.display = "block";
            document.getElementById('evtmem').style.display = "none";
        document.getElementById('pubrelmem').style.display = "none";
        document.getElementById('techcelmem').style.display = "none";
        document.getElementById('webappmem').style.display = "none";
        document.getElementById('contwriter').style.display = "none";
        }
        function evt(){
            document.getElementById('team_members').style.display = "none";
            document.getElementById('evtmem').style.display = "block";
            document.getElementById('pubrelmem').style.display = "none";
        document.getElementById('techcelmem').style.display = "none";
        document.getElementById('webappmem').style.display = "none";
        document.getElementById('contwriter').style.display = "none";
        }
        function prt(){
        document.getElementById('evtmem').style.display = "none";
            document.getElementById('team_members').style.display = "none";
            document.getElementById('pubrelmem').style.display = "block";
            document.getElementById('techcelmem').style.display = "none";
        document.getElementById('webappmem').style.display = "none";
        document.getElementById('contwriter').style.display = "none";
        }
        function tct(){
            document.getElementById('techcelmem').style.display = "block";
            document.getElementById('evtmem').style.display = "none";
        document.getElementById('pubrelmem').style.display = "none";
            document.getElementById('team_members').style.display = "none";
            document.getElementById('webappmem').style.display = "none";
        document.getElementById('contwriter').style.display = "none";
        }
        function wat(){
            document.getElementById('webappmem').style.display = "block";
            document.getElementById('evtmem').style.display = "none";
        document.getElementById('pubrelmem').style.display = "none";
        document.getElementById('techcelmem').style.display = "none";
            document.getElementById('team_members').style.display = "none";
            document.getElementById('contwriter').style.display = "none";
        }
        function cwt(){
            document.getElementById('webappmem').style.display = "none";
            document.getElementById('evtmem').style.display = "none";
        document.getElementById('pubrelmem').style.display = "none";
        document.getElementById('techcelmem').style.display = "none";
            document.getElementById('contwriter').style.display = "block";
            document.getElementById('team_members').style.display = "none";
        }