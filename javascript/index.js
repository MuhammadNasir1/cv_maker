// ================index-page-heading-an==========
var TxtType = function (el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 4000;
  this.txt = "";
  this.tick();
  this.isDeleting = false;
};

TxtType.prototype.tick = function () {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">' + this.txt + "|</span>";

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) {
    delta /= 2;
  }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === "") {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function () {
    that.tick();
  }, delta);
};

window.onload = function () {
  var elements = document.getElementsByClassName("typewrite");
  for (var i = 0; i < elements.length; i++) {
    var toRotate = elements[i].getAttribute("data-type");
    var period = elements[i].getAttribute("data-period");
    if (toRotate) {
      new TxtType(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  // css.innerHTML = ".typewrite > .wrap { border-right: 5px solid black;  }";
  document.body.appendChild(css);
};

// ================index-page-cv-templete==========
// $(".carousel .carousel-item").each(function () {
//   var minPerSlide = 4;
//   var next = $(this).next();
//   if (!next.length) {
//     next = $(this).siblings(":first");
//   }
//   next.children(":first-child").clone().appendTo($(this));

//   for (var i = 0; i < minPerSlide; i++) {
//     next = next.next();
//     if (!next.length) {
//       next = $(this).siblings(":first");
//     }
//     next.children(":first-child").clone().appendTo($(this));
//   }
// });

// ============password-show-hide================
function showpassword() {
  var inputpass = document.getElementById("pass");
  var showpass = document.getElementById("pass_show_icon");
  var hidepass = document.getElementById("pass_hide_icon");
  if (inputpass.type === "password") {
    inputpass.type = "text";
    showpass.style.display = "block";
    hidepass.style.display = "none";
  } else {
    inputpass.type = "password";
    showpass.style.display = "none";
    hidepass.style.display = "block";
  }
}


function toggleDivs() {
  const withoutimg = document.getElementById("withoutimg");
  const withoutimg2 = document.getElementById("withoutimg2");
  const withimag = document.getElementById("withimag");

  if (withoutimg.style.display === "none") {
    withoutimg.style.display = "block";
    withoutimg2.style.display = "block";
    withimag.style.display = "none";
  } else {
    withoutimg.style.display = "none";
    withoutimg2.style.display = "none";
    withimag.style.display = "block";
  }
}
