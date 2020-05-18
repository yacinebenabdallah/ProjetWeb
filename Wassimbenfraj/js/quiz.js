let question_number=document.getElementsByClassName("text-white flex m-0");
let question=document.getElementsByClassName("hero__lead measure-hero-lead text-white-50");
let choices=document.getElementsByClassName("custom-control-label");
let boxes=document.getElementsByClassName("custom-control-input");
let note=document.getElementsByClassName("text-50mb-00");
let nextbutton=document.getElementsByClassName("btn justify-content-center btn-accent w-100 w-sm-auto mb-16pt mb-sm-0 ml-sm-16pt");

let counter =0 ;
let chosen=0;
let score=0 ;

question[0].innerHTML=questions[counter].question ;
choices[0].innerHTML=questions[counter].rep1 ;
choices[1].innerHTML=questions[counter].rep2 ;
choices[2].innerHTML=questions[counter].rep3 ;
boxes[0].checked=false ;
boxes[1].checked=false ;
boxes[2].checked=false ;  

nextbutton[0].addEventListener('click',function(e){
  if(boxes[0].checked==true ||boxes[1].checked==true ||boxes[2].checked==true  )
  {
    if(boxes[0].checked==true && boxes[1].checked==false && boxes[2].checked==false )
    chosen=1 ;
  else if (boxes[0].checked==false && boxes[1].checked==true && boxes[2].checked==false)  
    chosen=2 ;
  else if (boxes[0].checked==false && boxes[1].checked==false && boxes[2].checked==true)  
    chosen=3 ;

    if(chosen==questions[counter].reponse)
        score ++ ;

        console.log(chosen);
        console.log(score);
         counter ++ ;



    if(counter==5)
    {
      nextbutton[0].innerHTML="Go to Results";
      nextbutton[0].href="quizresults.php?id="+questions[0].id_course+"&score="+score;
      boxes[0].checked=false ;
      boxes[1].checked=false ;
      boxes[2].checked=false ;
    }
      
  else
  {
    note[0].innerHTML="";
    question_number[0].innerHTML="Question "+(counter +1) +" of 5" ;
    question[0].innerHTML=questions[counter].question ;
    choices[0].innerHTML=questions[counter].rep1 ;
    choices[1].innerHTML=questions[counter].rep2 ;
    choices[2].innerHTML=questions[counter].rep3 ;
    boxes[0].checked=false ;
    boxes[1].checked=false ;
    boxes[2].checked=false ;
  }
  }
  else
  {
    note[0].innerHTML="pick at least a choice";
  }



});






