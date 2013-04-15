// This is for all about calendar

function getTodayDate(){
    var date = new Date();

    document.write(date.getFullYear() + "/" + (date.getMonth()+1) + "/" + date.getDate());
}
