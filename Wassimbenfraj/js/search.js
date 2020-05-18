

/* const list=document.querySelector('#listname'); */


const searchBar =document.forms['search'].querySelector('input');


    const courses=list.getElementsByClassName('col-md-4 col-sm-6 col-xs-12');
    

    
    const courses22=list.getElementsByClassName('col-md-444');
  

searchBar.addEventListener('keyup',function(e){
  const term=e.target.value.toLowerCase();


  

  
  if(filter.style.display=='none')
  {
    Array.from(courses).forEach(function(course){
      const text=course.getElementsByTagName('h3');
        const title=text[0].firstElementChild.textContent;
      if(title.toLowerCase().indexOf(term)==-1)
      {
        
       
        course.style.display='none';
        
        
      }
      else{
        course.style.display='block';
        
       
      } 
    }) 
  }
  else if(filter.style.display=='block')
  {
    Array.from(courses2).forEach(function(course){
      const text=course.getElementsByTagName('h3');
        const title=text[0].firstElementChild.textContent;
      if(title.toLowerCase().indexOf(term)==-1)
      {
        
       
        course.style.display='none';
        
        
      }
      else{
        course.style.display='block';
        
       
      }
    }) 
  }
   
});
