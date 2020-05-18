$(document).ready(function () {
  $("#accordion__toggle1").click(function () {
    console.log(1);
    $(".accordion__menu1").slideToggle();
  });
});
$(document).ready(function () {
  $("#accordion__toggle2").click(function () {
    console.log(1);
    $(".accordion__menu2").slideToggle();
  });
});

const filter = document.getElementById('filter_choices');
const list = document.querySelector('#listname');
const elements = document.getElementsByClassName('accordion__menu-link');
const boxes = document.getElementsByClassName('custom-control-input');
const children = document.getElementById('library-all').children;
const courses2 = list.getElementsByClassName('col-md-444');

var myFunction = function () {

  Array.from(children).forEach(function (child) {

    child.style.fontWeight = '400';
  });

  if (this.textContent == 'Computer Engineering') {

    this.style.fontWeight = '700';
    Array.from(courses2).forEach(function (course) {
      const text = course.getElementsByTagName('h3');
      const title = text[1].textContent;
      if (title == 'Computer Engineering') {
        course.style.display = 'block';
      }
      else {
        course.style.display = 'none';
      }


    })
  }
  else if (this.textContent == 'All categories') {

    this.style.fontWeight = '700';
    Array.from(courses2).forEach(function (course) {


      course.style.display = 'block';



    })
  }
  else if (this.textContent == 'Hacking') {

    this.style.fontWeight = '700';
    Array.from(courses2).forEach(function (course) {

      const text = course.getElementsByTagName('h3');
      const title = text[1].textContent;
      if (title == 'Hacking') {
        course.style.display = 'block';
      }
      else {
        course.style.display = 'none';
      }



    })
  }
  else if (this.textContent == 'Architecture') {

    this.style.fontWeight = '700';
    Array.from(courses2).forEach(function (course) {


      const text = course.getElementsByTagName('h3');
      const title = text[1].textContent;
      if (title == 'Architecture') {
        course.style.display = 'block';
      }
      else {
        course.style.display = 'none';
      }




    })
  }
  else if (this.textContent == 'Management') {

    this.style.fontWeight = '700';
    Array.from(courses2).forEach(function (course) {


      const text = course.getElementsByTagName('h3');
      const title = text[1].textContent;
      if (title == 'Management') {
        course.style.display = 'block';
      }
      else {
        course.style.display = 'none';
      }




    })
  }
  else if (this.textContent == 'Design') {

    this.style.fontWeight = '700';
    Array.from(courses2).forEach(function (course) {


      const text = course.getElementsByTagName('h3');
      const title = text[1].textContent;
      if (title == 'Design') {
        course.style.display = 'block';
      }
      else {
        course.style.display = 'none';
      }




    })
  }
  else if (this.textContent == 'Web Programming') {

    this.style.fontWeight = '700';
    Array.from(courses2).forEach(function (course) {


      const text = course.getElementsByTagName('h3');
      const title = text[1].textContent;
      if (title == 'Web Programming') {
        course.style.display = 'block';
      }
      else {
        course.style.display = 'none';
      }




    })
  }
  else if (this.textContent == 'Computer Basics') {

    this.style.fontWeight = '700';
    Array.from(courses2).forEach(function (course) {

      const text = course.getElementsByTagName('h3');
      const title = text[1].textContent;
      if (title == 'Computer Basics') {
        course.style.display = 'block';
      }
      else {
        course.style.display = 'none';
      }




    })
  }
};

const online = document.getElementById('difficulty-beginner');
const workshop= document.getElementById('difficulty-intermediate');

var myFunction1 = function () {
  console.log(this.id) ;
  if (this.id == 'difficulty-beginner') {

    if (this.checked) {
      Array.from(courses2).forEach(function (course) {

        const text = course.getElementsByTagName('i');
        const title = text[1].textContent;
        if(workshop.checked)
        {
          course.style.display = 'block';
        }
        else
        {
          if (title == 'Online') {
            course.style.display = 'block';
          }
          else {
            course.style.display = 'none';
          }
        }

      })
    } else {
      Array.from(courses2).forEach(function (course) {

        const text = course.getElementsByTagName('i');
        const title = text[1].textContent;
        course.style.display = 'block';
        if(workshop.checked)
        {
          if (title == 'Workshop') {
            course.style.display = 'block';
          }
          else {
            course.style.display = 'none';
          }
        }
        else
        {
          course.style.display = 'block';
        }
      })
    }
  }
  else {
    if (this.checked) {
      Array.from(courses2).forEach(function (course) {

        const text = course.getElementsByTagName('i');
        const title = text[1].textContent;
        if(online.checked)
        {
          course.style.display = 'block';
        }
        else
        {
          if (title == 'Workshop') {
            course.style.display = 'block';
          }
          else {
            course.style.display = 'none';
          }
        }

      })
    } else {
      Array.from(courses2).forEach(function (course) {

        const text = course.getElementsByTagName('i');
        const title = text[1].textContent;
        course.style.display = 'block';
        if(online.checked)
        {
          if (title == 'Online') {
            course.style.display = 'block';
          }
          else {
            course.style.display = 'none';
          }
        }
        else
        {
          course.style.display = 'block';
        }
      })
    }
  }
};
Array.from(elements).forEach(function (element) {

  element.addEventListener('click', myFunction);
});
Array.from(boxes).forEach(function (box) {

  box.addEventListener('change', myFunction1);
});



$(document).ready(function(){
  $('#order_list').change( function() {
    $(this).find(":selected").each(function () {
             //console.log( $(this).val() );
             if($(this).val()=='Price')
             {
               //console.log(1);
              $('#ajax_load').load("php/courses/views/courseslistorder.php",{type:$(this).val()}) ;
             }
             if($(this).val()=='Newest first')
             {
              $('#ajax_load').load("php/courses/views/courseslistorder.php",{type:$(this).val()}) ;
             }
             else if ($(this).val()=='Oldest first')
             {
              $('#ajax_load').load("php/courses/views/courseslistorder.php",{type:$(this).val()}) ;
             }
             else if ($(this).val()=='Title (a-z)')
             {
              $('#ajax_load').load("php/courses/views/courseslistorder.php",{type:$(this).val()}) ;
             }
             else if ($(this).val()=='Title (z-a)')
             {
              $('#ajax_load').load("php/courses/views/courseslistorder.php",{type:$(this).val()}) ;
             }
     });
  });
  
  $('#view_module').click( function() {
    $('#ajax_load').load("php/courses/views/courseslist.php") ;
  });
 
});



