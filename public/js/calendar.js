// This is for all about calendar

    var date = new Date();
function getTodayDate(shiftDay){
    date.setDate(date.getDate() + shiftDay);
    var year = date.getFullYear();
    var month = date.getMonth() + 1;
    var day = date.getDate();
    document.getElementById("date").innerHTML = year + "/" + month + "/" + day;
}
