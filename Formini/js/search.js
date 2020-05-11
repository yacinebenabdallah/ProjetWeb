

const list=document.querySelector('#listname');
console.log(list);

const searchBar =document.forms['search'].querySelector('input');



searchBar.addEventListener('keyup',function(e){
  const term=e.target.value.toLowerCase();

console.log(searchBar);
  
  
  const courses=list.getElementsByClassName('col-md-4 col-sm-6 col-xs-12');
   
  Array.from(courses).forEach(function(course){
    const text=course.getElementsByTagName('h3');
      const title=text[0].firstElementChild.textContent;
    if(title.toLowerCase().indexOf(term)==-1)
    {
      
      console.log(1) ;
      course.style.display='none';
      
      
    }
    else{
      course.style.display='block';
      console.log(1) ;
     
    }
  })    
});
