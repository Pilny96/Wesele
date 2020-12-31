function toggleFill(heart, className) {  
    if (!hasClass(heart, className)) {
      addClass(heart, className);
    } else {
      removeClass(heart, className);
    }
  }
  
  function addClass(el, className) {
    if (el.classList) {
      el.classList.add(className);
    } else {
      el.className += ' ' + className;
    }
  }
  
  function removeClass(el, className) {
    if (el.classList) {
      el.classList.remove(className);
    } else {
      el.className = el.className.replace(
        new RegExp('(^|\\b)' + className.split(' ').join('|') +
                   '(\\b|$)', 'gi'), ' ');
    }
  }
  
  function hasClass(el, className) {
    if (el.classList) {
      return el.classList.contains(className);
    } else {
      return new RegExp('(^| )' + className +
                 '( |$)', 'gi').test(el.className);
    }
  }