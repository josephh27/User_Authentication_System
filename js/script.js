// define all UI variable
const navToggler = document.querySelector('.nav-toggler');
const navMenu = document.querySelector('.site-navbar ul');
const navLinks = document.querySelectorAll('.site-navbar a');
const navContainer = document.querySelector('.nav-container');

function fadeHeader() {
  window.addEventListener('scroll', function(){
    let scrollTop = window.scrollY || document.documentElement.scrollTop;
    if (scrollTop > 250) {
      navContainer.style.top = "-80px";
    } else {
      navContainer.style.top = "0";
    }
  })
}

// fadeHeader();

// load all event listners
allEventListners();

// functions of all event listners
function allEventListners() {
  // toggler icon click event
  navToggler.addEventListener('click', togglerClick);
  // nav links click event
  navLinks.forEach( elem => elem.addEventListener('click', navLinkClick));
}

// togglerClick function
function togglerClick() {
  navToggler.classList.toggle('toggler-open');
  navMenu.classList.toggle('open');
}

// navLinkClick function
function navLinkClick() {
  if(navMenu.classList.contains('open')) {
    navToggler.click();
  }
}

//Removing tab highlight from previous tab location
const removeTabHighlight = () => {
  Array.from(navLinks).forEach((elem) => {
    elem.classList.remove('active')
  })
}


//Adding tab highlight for current tab highlight
const addTabHighlight = () => {
  Array.from(navLinks).forEach((elem) => {
  if (elem.href === location.href) {
    elem.classList.add('active');
    }
  })
}

removeTabHighlight();
addTabHighlight();

//Input boxes effect
const inputBoxes = document.querySelectorAll(".input-1");
inputBoxes.forEach((elem) => {
  elem.addEventListener('focus', () => setFocus(true));
  elem.addEventListener('blur', () => setFocus(false));
})

function setFocus(on) {
  var element = document.activeElement;
  if (on) {
    setTimeout(function () {
      element.parentNode.classList.add("focus");
    });
  } else {
    let box = document.querySelector(".input-box");
    box.classList.remove("focus");
    inputBoxes.forEach(function (elem) {
      var input = elem;
      var parent = input.closest(".input-box");
      if (input.value) parent.classList.add("focus");
      else parent.classList.remove("focus");
    });
  }
}            

