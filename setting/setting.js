$("#insertfacultyform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to updateusername.php using AJAX
    $.ajax({
        url: "uploadimg.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data){
                $("#uploadmessage").html(data);
            }else{
                location.reload();   
            }
        },
        error: function(){
            $("#uploadmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});

function dataReset() {
    document.getElementById('insertfacultyform').reset();
}
