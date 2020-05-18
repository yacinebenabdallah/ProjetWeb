
  function addClass(element, nameOfClass) {
    if (element.classList) {
       element.classList.add(nameOfClass);
    }
    else {
      var regExp = new RegExp('(\\s|^)' + nameOfClass + '(\\s|$)');
      if (!element.className.match(regExp)) {
        element.className += " " + nameOfClass;
      }
    }
  }
  function removeClass(element, nameOfClass) {
    if (element.classList) {
      element.classList.remove(nameOfClass);
    }
    else {
      var regExp = new RegExp('(\\s|^)' + nameOfClass + '(\\s|$)');
      if (element.className.match(regExp)) {
        element.className.replace(regExp, ' ');
      }
    }
  }

  var element = document.getElementById('clickme');
  var element2 = document.getElementById('affichereview');
  var element3 = document.getElementById('affichereview2');
 
  // Premier événement click
  element.addEventListener('click', function() {
    
      element2.style.position="relative";
      element3.style.height="100%";
  });

  // Deuxième événement click
/*   element.addEventListener('click', function() {
      alert("Et de deux !");
  }); */