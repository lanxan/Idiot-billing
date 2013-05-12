var data = { 
    "date" : document.getElementById("date").value,
    "moneyStart" : document.getElementByName("moneyStart").value,
    "moneyEnd" : document.getElementByName("moneyEnd").value,
    "moneyPlus" : document.getElementByName("moneyPlus").value,
    "moneyTotal" : document.getElementByName("moneyTotal").value 
};

$(document).ready(function(){
    $("#dairyForm").live('click', function(){
        $.ajax({
            url: '../php/savedata.php',
            type: 'POST',
            dataType: 'json',
            data: {data: data},
            error: function(xhr, ajaxOption, thrownError){
                alert("user list:" + xhr.status);
            },
            success: 
            alert("success!!")
        });
    });
});
