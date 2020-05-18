
let quiz_date=document.getElementsByClassName("lead text-white-50 measure-lead-max mb-0");

const d=new Date() ;

quiz_date[0].innerHTML="Submited on "+d.toDateString();