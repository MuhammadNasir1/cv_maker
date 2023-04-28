

$('.carousel .carousel-item').each(function () {
  var minPerSlide = 4;
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i = 0; i < minPerSlide; i++) { next = next.next(); if (!next.length) { next = $(this).siblings(':first'); } next.children(':first-child').clone().appendTo($(this)); }
});

// ============password-show-hide================
function showpassword() {
  var inputpass = document.getElementById("pass");
  var showpass = document.getElementById("pass_show_icon");
  var hidepass = document.getElementById("pass_hide_icon");
  if (inputpass.type === 'password') {
    inputpass.type = "text";
    showpass.style.display = "block";
    hidepass.style.display = "none";
  }
  else {
    inputpass.type = "password";
    showpass.style.display = "none";
    hidepass.style.display = "block";
  }
}


// ===============Education-sec-start===============

var addnum = 1;
function clickeduction() {
  addnum += 1
  content = '<div id="addeduction">\
  <div><h4 class="me-2 ms-2 mt-4">Education <b>'+ addnum + '</b></h4></div>\
  <div class="container">\
  <div class="row">\
            <div class="col-md-6">\
              <div class="input-field mt-5 ">\
                <input type="text" required spellcheck="false">\
                <label>Institute Name</label>\
              </div>\
            </div>\
            <div class="col-md-6">\
              <div class="input-field mt-5">\
                <input type="text" required spellcheck="false">\
                <label>Dagree</label>\
              </div>\
            </div>\
            <div class="col-md-6">\
              <div class="input-field mt-5 ">\
                <input type="date" required spellcheck="false">\
                <label class="date-lable">Start Date</label>\
              </div>\
            </div>\
            <div class="col-md-6 ">\
              <div class="input-field mt-5 ">\
                <input type="date" required spellcheck="false">\
                <label class="date-lable">End Date</label>\
              </div>\
            </div>\
            <div class="col-md-12">\
              <div class="input-field mt-5 ">\
                <input type="text" required spellcheck="false">\
                <label>Feild</label>\
              </div>\
            </div>\
            </div>\
            </div>\
            </div> '


  var addeduction = document.getElementById('addeduction')
  addeduction.innerHTML += content;
}

// ===============Education-sec-End=================


// ===============skill-sec-start===============

var countre = 1;
function addindd() {
  countre += 1
  html = '<div class="input-field mt-5 " id="myList' + countre + '">\
  <input id="skillinput" style="width:90%" type="text" required spellcheck="false">\
  <label>Skill '+ countre + '</label>\
  </div>'

  var add_iteee = document.getElementById('add_iteee')
  add_iteee.innerHTML += html;
}

// ===============skill-sec-End=================

// ===============language-sec-start===============

var countr = 1;
function clicklanguage() {
  countr += 1
  htm = '<div class="input-field mt-5">\
  <input type="text" required spellcheck="false">\
  <label>Language</label>\
</div>'

  var addlanguage = document.getElementById('addlanguage')
  addlanguage.innerHTML += htm;
}

// ===============language-sec-End=================
// ===============reference-sec-start===============

var count = 1;
function clickrefer() {
  count += 1
  htl = '<div class="input-field mt-5 ">\
  <input style="width:90%" type="text" required spellcheck="false">\
  <label>Reference</label>\
</div>'

  var referadd = document.getElementById('referadd')
  referadd.innerHTML += htm;
}

// ===============reference-sec-End=================
// ===============work-experience-sec-start===============

var contre = 1;
function addwork() {
  contre += 1
  tml = '  <div class="personal-info-form pb-4">\
  <h3 class="mt-5">Working Experience '+ coutre + '</h3>\
  <div class="form-info">\
  <div id="addwork">\
  <div class="container">\
    <div class="row">\
      <div class="col-md-6">\
        <div class="input-field mt-5 ">\
          <input type="text" required spellcheck="false">\
          <label>Company Name</label>\
        </div>\
      </div>\
    <div class="col-md-6" >\
      <div class="input-field mt-5 ">\
        <input type="text" required spellcheck="false">\
          <label>Role </label>\
      </div>\
      </div>\
    <div class="col-md-6" >\
    <div class="input-field mt-5 " >\
      <input type="date" required spellcheck="false">\
        <label class="date-lable">Start Date</label>\
      </div>\
      </div >\
      <div class="col-md-6 ">\
        <div class="input-field mt-5 ">\
          <input type="date" required spellcheck="false">\
          <label class="date-lable">End Date</label>\
        </div>\
      </div>\
      <div class="col-md-12">\
        <div class="input-field mt-5 ">\
          <input type="text" required spellcheck="false">\
          <label>City & Country</label>\
        </div>\
      </div>\
    </div >\
  </div >\
  </div >\
  </div >\
</div > '

  var addwork = document.getElementById('addwork')
  addwork.innerHTML += tml;
}

// ===============work-experience-sec-End=================