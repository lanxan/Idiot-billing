var dairyMoney = '{ 
    "date" : document.getElementById("date").value,
    "moneyStart" : document.getElementByName("moneyStart").value,
    "moneyEnd" : document.getElementByName("moneyEnd").value,
    "moneyPlus" : document.getElementByName("moneyPlus").value,
    "moneyTotal" : document.getElementByName("moneyTotal").value 
}';

$.ajax(
    url: '../php/savedata.php',
    type: 'POST',
    dataType: 'json',
    data: {dairyMoney: dairyMoney},
    error: function(xhr, ajaxOption, thrownError){
        alert("user list:" + xhr.status);
    },
    success: 
        alert("success!!");
    );
