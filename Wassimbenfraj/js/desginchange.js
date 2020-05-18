/* const list=document.querySelector('#listname'); */
console.log(list);

const view_module =document.getElementById('view_module');
const list_module =document.getElementById('list_module');
/* const filter =document.getElementById('filter_choices'); */

console.log(view_module);
console.log(list_module);

view_module.addEventListener('click',function(){
  
  filter.style.display='none';
  
  const courses=list.getElementsByClassName('col-md-444');
   
  Array.from(courses).forEach(function(course){
      
      course.style.display='none';
      
  }) 
  const courses2=list.getElementsByClassName('col-md-4 col-sm-6 col-xs-12');
   
  Array.from(courses2).forEach(function(course){
      
      course.style.display='block';
      
  })       
});

list_module.addEventListener('click',function(){

   filter.style.display='block' ;

  
  const courses=list.getElementsByClassName('col-md-444');
   
  Array.from(courses).forEach(function(course){
      
      course.style.display='block';
      
  }) 

  const courses2=list.getElementsByClassName('col-md-4 col-sm-6 col-xs-12');
   
  Array.from(courses2).forEach(function(course){
      
      course.style.display='none';
      
  })    
});
