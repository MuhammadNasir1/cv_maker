<style>
  .select-btn,
  li {
    display: flex;
    align-items: center;
    cursor: pointer;
  }

  .select-btn {
    height: 2.5rem;
    padding: 0 20px;
    font-size: 18px;
    background: #fff;
    border-radius: 7px;
    border: .0625rem solid #80808071;
    justify-content: space-between;
  }

  .select-btn i {
    font-size: 31px;
    transition: transform 0.3s linear;
  }

  .wrapper.active .select-btn i {
    transform: rotate(-180deg);
  }

  .content {
    display: none;
    padding: 20px;
    margin-top: 15px;
    background: #fff;
    border-radius: 7px;
    background-color: #FAFAFA;
    border: .0625rem solid #80808071;

  }

  .wrapper.active .content {
    display: block;
  }

  .content .search {
    position: relative;
  }

  .search i {
    top: 50%;
    left: 15px;
    color: #999;
    font-size: 20px;
    pointer-events: none;
    transform: translateY(-50%);
    position: absolute;
  }

  .search input {
    height: 50px;
    width: 100%;
    outline: none;
    font-size: 17px;
    border-radius: 5px;
    padding: 0 20px 0 43px;
    border: 1px solid #B3B3B3;
  }

  .search input:focus {
    padding-left: 42px;
    border: .0625rem solid #808080
  }

  .search input::placeholder {
    color: #bfbfbf;
  }

  .content .options {
    margin-top: 10px;
    max-height: 250px;
    overflow-y: auto;
    padding-right: 7px;
  }

  .options::-webkit-scrollbar {
    width: 7px;
  }

  .options::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 25px;
  }

  .options::-webkit-scrollbar-thumb {
    background: #ccc;
    border-radius: 25px;
  }

  .options::-webkit-scrollbar-thumb:hover {
    background: #b3b3b3;
  }

  .options li {
    height: 50px;
    padding: 0 13px;
    font-size: 21px;
  }

  .options li:hover,
  li.selected {
    border-radius: 5px;
    background: #f2f2f2;
  }
</style>

<div class="wrapper">
  <div class="select-btn">
    <select name="country" id="" style="width: 100%;     background: transparent; border:none">
      <option  value=""> Select Country </option>
    </select>
  </div>
  <div class="content">
    <div class="search">
      <i class="uil uil-search"></i>
      <input spellcheck="false" type="text" placeholder="Search">
    </div>
    <ul class="options"></ul>
  </div>
</div>

<script>
  const wrapper = document.querySelector(".wrapper"),
    selectBtn = wrapper.querySelector(".select-btn"),
    searchInp = wrapper.querySelector("input"),
    options = wrapper.querySelector(".options");
  // =============counry_list-start====================

  let countries = [
    "Afghanistan",
    "Albania",
    "Algeria",
    "Andorra",
    "Angola",
    "Antigua and Barbuda",
    "Argentina",
    "Armenia",
    "Australia",
    "Austria",
    "Azerbaijan",
    "Bahamas",
    "Bahrain",
    "Bangladesh",
    "Barbados",
    "Belarus",
    "Belgium",
    "Belize",
    "Benin",
    "Bhutan",
    "Bolivia",
    "Bosnia and Herzegovina",
    "Botswana",
    "Brazil",
    "Brunei",
    "Bulgaria",
    "Burkina Faso",
    "Burundi",
    "Cabo Verde",
    "Cambodia",
    "Cameroon",
    "Canada",
    "Central African Republic",
    "Chad",
    "Chile",
    "China",
    "Colombia",
    "Comoros",
    "Congo, Democratic Republic of the",
    "Congo, Republic of the",
    "Costa Rica",
    "Côte d'Ivoire",
    "Croatia",
    "Cuba",
    "Cyprus",
    "Czech Republic",
    "Denmark",
    "Djibouti",
    "Dominica",
    "Dominican Republic",
    "East Timor (Timor-Leste)",
    "Ecuador",
    "Egypt",
    "El Salvador",
    "Equatorial Guinea",
    "Eritrea",
    "Estonia",
    "Eswatini (fmr. 'Swaziland' )",
    "Ethiopia",
    "Fiji",
    "Finland",
    "France",
    "Gabon",
    "Gambia",
    "Georgia",
    "Germany",
    "Ghana",
    "Greece",
    "Grenada",
    "Guatemala",
    "Guinea",
    "Guinea-Bissau",
    "Guyana",
    "Haiti",
    "Honduras",
    "Hungary",
    "Iceland",
    "India",
    "Indonesia",
    "Iran",
    "Iraq",
    "Ireland",
    "Israel",
    "Italy",
    "Jamaica",
    "Japan",
    "Jordan",
    "Kazakhstan",
    "Kenya",
    "Kiribati",
    "Kosovo",
    "Kuwait",
    "Kyrgyzstan",
    "Laos",
    "Latvia",
    "Lebanon",
    "Lesotho",
    "Liberia",
    "Libya",
    "Liechtenstein",
    "Lithuania",
    "Luxembourg",
    "Madagascar",
    "Malawi",
    "Malaysia",
    "Maldives",
    "Mali",
    "Malta",
    "Marshall Islands",
    "Mauritania",
    "Mauritius",
    "Mexico",
    "Micronesia",
    "Moldova",
    "Monaco",
    "Mongolia",
    "Montenegro",
    "Morocco",
    "Mozambique",
    "Myanmar (Burma)",
    "Namibia",
    "Nauru",
    "Nepal",
    "Netherlands",
    "New Zealand",
    "Nicaragua",
    "Niger",
    "Nigeria",
    "North Korea",
    "North Macedonia (fmr. Macedonia)",
    "Norway",
    "Oman",
    "Pakistan",
    "Palau",
    "Palestine",
    "Panama",
    "Papua New Guinea",
    "Paraguay",
    "Peru",
    "Philippines",
    "Poland",
    "Portugal",
    "Qatar",
    "Romania",
    "Russia",
    "Rwanda",
    "Saint Kitts and Nevis",
    "Saint Lucia",
    "Saint Vincent and the Grenadines",
    "Samoa",
    "San Marino",
    "Sao Tome and Principe",
    "Saudi Arabia",
    "Senegal",
    "Serbia",
    "Seychelles",
    "Sierra Leone",
    "Singapore",
    "Slovakia",
    "Slovenia",
    "Solomon Islands",
    "Somalia",
    "South Africa",
    "South Korea",
    "South Sudan",
    "Spain",
    "Sri Lanka",
    "Sudan",
    "Suriname",
    "Sweden",
    "Switzerland",
    "Syria",
    "Taiwan",
    "Tajikistan",
    "Tanzania",
    "Thailand",
    "Togo",
    "Tonga",
    "Trinidad and Tobago",
    "Tunisia",
    "Turkey",
    "Turkmenistan",
    "Tuvalu",
    "Uganda",
    "Ukraine",
    "United Arab Emirates",
    "United Kingdom",
    "United States of America",
    "Uruguay",
    "Uzbekistan",
    "Vanuatu",
    "Vatican City (Holy See)",
    "Venezuela",
    "Vietnam",
    "Yemen",
    "Zambia",
    "Zimbabwe"
  ]
  // =============counry_list-End======================
  function addCountry(selectedCountry) {
    options.innerHTML = "";
    countries.forEach(country => {
      let isSelected = country == selectedCountry ? "selected" : "";
      let li = `<li onclick="updateName(this)" class="${isSelected}">${country}</li>`;
      options.insertAdjacentHTML("beforeend", li);
    });
  }
  addCountry();

  function updateName(selectedLi) {
    searchInp.value = "";
    addCountry(selectedLi.innerText);
    wrapper.classList.remove("active");
    const firstOption = selectBtn.querySelector('option');
    firstOption.innerText = selectedLi.innerText;
    firstOption.value = selectedLi.innerText;
  }

  searchInp.addEventListener("keyup", () => {
    let arr = [];
    let searchWord = searchInp.value.toLowerCase();
    arr = countries.filter(data => {
      return data.toLowerCase().startsWith(searchWord);
    }).map(data => {
      let isSelected = data == selectBtn.firstElementChild.innerText ? "selected" : "";
      return `<li onclick="updateName(this)" class="${isSelected}">${data}</li>`;
    }).join("");
    options.innerHTML = arr ? arr : `<p style="margin-top: 10px;">Oops! Country not found</p>`;
  });

  selectBtn.addEventListener("click", () => wrapper.classList.toggle("active"));
</script>