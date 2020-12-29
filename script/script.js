//SendMail
function sendMail(){

    var First_name = document.getElementById('first_name').value;
    var Last_name = document.getElementById('last_name').value;
    var Email_address = document.getElementById('email').value;
    var Phone_number = document.getElementById('phone_number').value;
    
    var Street_address = document.getElementById('s_address').value;
    var City = document.getElementById('city').value;
    var State = document.getElementById('state').value;
    var Postcode = document.getElementById('postcode').value;
    var Country = document.getElementById('country').value;
    
    var Product = document.getElementById('product').value;
    var How_many = document.getElementById('how_many').value;
    var Unit = document.getElementById('unit').value;
    var Comment = document.getElementById('note').value;

    var RE="RE: Enquiry on "+Product;
    
    window.location.href = "mailto:101211418@students.swinburne.edu.my?subject="+RE+"&body=First_name="+First_name+"%0D%0ALast_name="+Last_name+"%0D%0AEmail_address="+Email_address+"%0D%0APhone_number="+Phone_number+"%0D%0AStreet_address="+Street_address+"%0D%0ACity="+City+"%0D%0AState="+State+"%0D%0APostcode="+Postcode+"%0D%0ACountry="+Country+"%0D%0AProduct="+Product+"%0D%0AHow_many="+How_many+"%0D%0AUnit="+Unit+"%0D%0AComment="+ Comment;
    
}

//Form validation
var error = "";

// First Name // 
function valid_firstname(){
  var firstname1 = document.getElementById("first_name");
  var pattern = /^[a-zA-Z ]+$/ //check only alpha characters or space
  var check = false;
    
    if (firstname1.value == ""){
      error += "First Name: Please fill in your first name.\n";
      check = false;
    }else if(firstname1.value.length > 25){
      error += "First Name: Please enter 25 characters or less.\n"
      check = false;
    }else if(!pattern.test(firstname1.value)){
      error += "First Name: Please enter alphabetical characters only.\n"
      check = false;
    }else{
       check = true;
    }
    if (!check){
     document.getElementById("first_name").style.border= "2px solid red";
     document.getElementById("first_name").style.borderRadius = "2px";
     document.getElementById("alert1").style.color = "red";
     document.getElementById("alert1").innerHTML = " " + "x";
    } 
    if (check){
     document.getElementById("first_name").style.border= "1px solid gray";
     document.getElementById("first_name").style.borderRadius = "2px";
     document.getElementById("alert1").style.color = "green";
     document.getElementById("alert1").innerHTML = " " + "&#10003;";
    }  

    return check;
}
// First Name end //

//Last Name //
function valid_lastname(){
    var lastname1 = document.getElementById("last_name")
    var pattern = /^[a-zA-Z ]+$/ //check only alpha characters or space
    var check = false;
  
    if (lastname1.value == ""){
        error += "Last Name: Please fill in your last name/surname. \n";
        check = false;
    }else if(lastname1.value.length > 25){
    error += "Last Name: Please enter 25 characters or less. \n"
    check = false;
    }else if(!pattern.test(lastname1.value)){
    error += "Last Name: Please enter alphabetical characters only.\n"
    check = false;
    }else{
        check = true;
    }
    if (!check){
     document.getElementById("last_name").style.border= "2px solid red";
     document.getElementById("last_name").style.borderRadius = "2px";
     document.getElementById("alert2").style.color = "red";
     document.getElementById("alert2").innerHTML = " " + "x";
    } 

    if (check){
     document.getElementById("last_name").style.border= "1px solid gray";
     document.getElementById("last_name").style.borderRadius = "2px";
     document.getElementById("alert2").style.color = "green";
     document.getElementById("alert2").innerHTML = " " + "&#10003;";
    } 

    return check;
}
// Last Name End //

// Email //
function valid_email(){
    var email1 = document.getElementById("email");
  var check = false; 
  var pattern = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-za-zA-Z0-9.-]{1,4}$/;
  if (pattern.test(email1.value)){
    check = true;
  }else{ 
        error += "Email: Please fill in a valid email.\n"
        check = false;
  }
  if (!check){
     document.getElementById("email").style.border= "2px solid red";
     document.getElementById("email").style.borderRadius = "2px";
     document.getElementById("alert3").style.color = "red";
     document.getElementById("alert3").innerHTML = " " + "x";
  } 

  if (check){
     document.getElementById("email").style.border= "1px solid gray";
     document.getElementById("email").style.borderRadius = "2px";
     document.getElementById("alert3").style.color = "green";
     document.getElementById("alert3").innerHTML = " " + "&#10003;";
  } 
    
    
  return check;
}
// Email End //

// Phone Number //
function valid_phonenumber(){
    var phonenumber1 = document.getElementById("phone_number")
    var pattern = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    var check = false;
  
    if (phonenumber1.value == ""){
        error += "Phone Number: Please fill in your phone number.\n";
        check = false;
    }else if (!pattern.test(phonenumber1.value)){
    error += "Phone Number: Please enter 10 numeric numbers only. \n"
    check = false;
    }else if(phonenumber1.value.length > 12){
    error += "Phone Number: Please enter 10 numberic numbers or less. \n"
    check = false;
    }else{
        check = true;
    }
    if (!check){
     document.getElementById("phone_number").style.border= "2px solid red";
     document.getElementById("phone_number").style.borderRadius = "2px";
     document.getElementById("alert4").style.color = "red";
     document.getElementById("alert4").innerHTML = " " + "x";
    } 

    if (check){
     document.getElementById("phone_number").style.border= "1px solid gray";
     document.getElementById("phone_number").style.borderRadius = "2px";
     document.getElementById("alert4").style.color = "green";
     document.getElementById("alert4").innerHTML = " " + "&#10003;";
    }

    return check;
}
// Phone Number End //

// Street Address //
function valid_streetaddress(){
    var streetaddress1 = document.getElementById("s_address")
    var check = false;
  
    if (streetaddress1.value == ""){
        error += "Street Address: Please fill in your street address.\n";
        check = false;
    }else if(streetaddress1.value.length > 40){
    error += "Street Address: Please enter 40 character or less. \n";
    check = false;
    }else{
        check = true;
    }
    if (!check){
     document.getElementById("s_address").style.border= "2px solid red";
     document.getElementById("s_address").style.borderRadius = "2px";
     document.getElementById("alert5").style.color = "red";
     document.getElementById("alert5").innerHTML = " " + "x";
    } 
    if (check){
     document.getElementById("s_address").style.border= "1px solid gray";
     document.getElementById("s_address").style.borderRadius = "2px";
     document.getElementById("alert5").style.color = "green";
     document.getElementById("alert5").innerHTML = " " + "&#10003;";
    } 

    return check;
}
// Street Address End //

// City/Town //
function valid_citytown(){
    var citytown1 = document.getElementById("city")
    var pattern = /^[a-zA-Z ]+$/ //check only alpha characters or space
    var check = false;
  
    if (citytown1.value == ""){
        error += "City: Please fill in your city/town.\n";
        check = false;
    }else if(!pattern.test(citytown1.value)){
    error += "City: Please enter a valid city/town.\n";
    check = false;
    }else{
        check = true;
    }
    if (!check){
     document.getElementById("city").style.border= "2px solid red";
     document.getElementById("city").style.borderRadius = "2px";
     document.getElementById("alert6").style.color = "red";
     document.getElementById("alert6").innerHTML = " " + "x";
    } 

    if (check){
     document.getElementById("city").style.border= "1px solid gray";
     document.getElementById("city").style.borderRadius = "2px";
     document.getElementById("alert6").style.color = "green";
     document.getElementById("alert6").innerHTML = " " + "&#10003;";
    } 

    return check;
}
// City/Town End //

// State //
function valid_state(){
    var state1 = document.getElementById("state")
    var pattern = /^[a-zA-Z ]+$/ //check only alpha characters or space
    var check = false;
  
    if (state1.value == ""){
        error += "State: Please fill in your state.\n";
        check = false;
    }else if(!pattern.test(state1.value)){
    error += "State: Please enter a valid state.\n";
    check = false;
    }else{
        check = true;
    }
    if (!check){
     document.getElementById("state").style.border= "2px solid red";
     document.getElementById("state").style.borderRadius = "2px";
     document.getElementById("alert7").style.color = "red";
     document.getElementById("alert7").innerHTML = " " + "x";
    } 

    if (check){
     document.getElementById("state").style.border= "1px solid gray";
     document.getElementById("state").style.borderRadius = "2px";
     document.getElementById("alert7").style.color = "green";
     document.getElementById("alert7").innerHTML = " " + "&#10003;";
    } 

    return check;
}
// State End //

// Postcode //
function valid_postcode(){
    var postcode1 = document.getElementById("postcode")
    var check = false;
  
    if (postcode1.value == ""){
        error += "Postcode: Please fill in your postcode.\n";
        check = false;
  
    }else if(postcode1.value.length > 5){
    error += "Postcode: Please enter 5 numberic numbers or less. \n";
    check = false;
    }else{
        check = true;
    }
    if (!check){
     document.getElementById("postcode").style.border= "2px solid red";
     document.getElementById("postcode").style.borderRadius = "2px";
     document.getElementById("alert8").style.color = "red";
     document.getElementById("alert8").innerHTML = " " + "x";
    } 

    if (check){
     document.getElementById("postcode").style.border= "1px solid gray";
     document.getElementById("postcode").style.borderRadius = "2px";
     document.getElementById("alert8").style.color = "green";
     document.getElementById("alert8").innerHTML = " " + "&#10003;";
    } 

    return check;
}
// Postcode End //

// Subject //
function valid_subject(){
    var subject1 = document.getElementById("subject")
    var pattern = /^[a-zA-Z: ]+$/ //check only alpha characters or space
    var check = false;
  
    if (subject1.value == ""){
        error += "Subject: Please fill in your subject.\n";
        check = false;
  
    }else if(subject1.value == "RE: Enquiry on null" || subject1.value == "RE: Enquiry on [product name]"){
        error += "Subject: Please fill in your subject.\n";
        check = false;
    }else{
        check = true;
    }
    if (!check){
     document.getElementById("subject").style.border= "2px solid red";
     document.getElementById("subject").style.borderRadius = "2px";
     document.getElementById("alert9").style.color = "red";
     document.getElementById("alert9").innerHTML = " " + "x";
    } 

    if (check){
     document.getElementById("subject").style.border= "1px solid gray";
     document.getElementById("subject").style.borderRadius = "2px";
     document.getElementById("alert9").style.color = "green";
     document.getElementById("alert9").innerHTML = " " + "&#10003;";
    } 

    return check;
}
// Subject End //

// Product //
function valid_product(){
    var product1 = document.getElementById("product")
    var check = false;
  
    if(product1.value == "null"){
        error += "Product: Please select your product.\n";
        check = false;
    }else{
        check = true;
    }
    if (!check){
     document.getElementById("product").style.border= "2px solid red";
     document.getElementById("product").style.borderRadius = "2px";
     document.getElementById("alert10").style.color = "red";
     document.getElementById("alert10").innerHTML = " " + "x";
    } 

    if (check){
     document.getElementById("product").style.border= "1px solid gray";
     document.getElementById("product").style.borderRadius = "2px";
     document.getElementById("alert10").style.color = "green";
     document.getElementById("alert10").innerHTML = " " + "&#10003;";
    } 

    return check;
}
// Product End //

// How many //
function valid_howmany(){
    var howmany1 = document.getElementById("how_many")
    var check = false;
  
    if (howmany1.value == ""){
        error += "How Many: Please fill in how many product.\n";
        check = false;
  
    }else{
        check = true;
    }
    if (!check){
     document.getElementById("how_many").style.border= "2px solid red";
     document.getElementById("how_many").style.borderRadius = "2px";
     document.getElementById("alert11").style.color = "red";
     document.getElementById("alert11").innerHTML = " " + "x";
    } 

    if (check){
     document.getElementById("how_many").style.border= "1px solid gray";
     document.getElementById("how_many").style.borderRadius = "2px";
     document.getElementById("alert11").style.color = "green";
     document.getElementById("alert11").innerHTML = " " + "&#10003;";
    } 

    return check;
}
// How many End //

// Unit //
function valid_unit(){
    var check = false;
    var unit = document.getElementById("unit");

    if (unit.value!="---"){
    check = true;
    }else{
    error+= "Unit: Please select a unit for your product\n"
    check = false;
    }
    if (!check){
     document.getElementById("unit").style.border= "2px solid red";
     document.getElementById("unit").style.borderRadius = "2px";
     document.getElementById("alert12").style.color = "red";
     document.getElementById("alert12").innerHTML = " " + "x";
    } 

    if (check){
     document.getElementById("unit").style.border= "1px solid gray";
     document.getElementById("unit").style.borderRadius = "2px";
     document.getElementById("alert12").style.color = "green";
     document.getElementById("alert12").innerHTML = " " + "&#10003;";
    } 

    return check;
}
// Unit End//

//Sunmit Check
function registerInputsOnClick(){
var inputElements = document.getElementById("enquiry").getElementsByTagName("input");
for (var i = 0; i < inputElements.length; i++){
inputElements[i].onclick = resetFormat;
}
}

//Reset//
function resetFormat(){
    document.getElementById("first_name").style.border= "1px solid gray";
    document.getElementById("first_name").style.borderRadius = "2px";
    document.getElementById("alert1").innerHTML = " ";

    document.getElementById("last_name").style.border= "1px solid gray";
    document.getElementById("last_name").style.borderRadius = "2px";
    document.getElementById("alert2").innerHTML = " ";

    document.getElementById("email").style.border= "1px solid gray";
    document.getElementById("email").style.borderRadius = "2px";
    document.getElementById("alert3").innerHTML = " ";

    document.getElementById("phone_number").style.border= "1px solid gray";
    document.getElementById("phone_number").style.borderRadius = "2px";
    document.getElementById("alert4").innerHTML = " ";

    document.getElementById("s_address").style.border= "1px solid gray";
    document.getElementById("s_address").style.borderRadius = "2px";
    document.getElementById("alert5").innerHTML = " ";

    document.getElementById("city").style.border= "1px solid gray";
    document.getElementById("city").style.borderRadius = "2px";
    document.getElementById("alert6").innerHTML = " ";

    document.getElementById("state").style.border= "1px solid gray";
    document.getElementById("state").style.borderRadius = "2px";
    document.getElementById("alert7").innerHTML = " ";

    document.getElementById("postcode").style.border= "1px solid gray";
    document.getElementById("postcode").style.borderRadius = "2px";
    document.getElementById("alert8").innerHTML = " ";

    document.getElementById("subject").style.border= "1px solid gray";
    document.getElementById("subject").style.borderRadius = "2px";
    document.getElementById("alert9").innerHTML = " ";

    document.getElementById("product").style.border= "1px solid gray";
    document.getElementById("product").style.borderRadius = "2px";
    document.getElementById("alert10").innerHTML = " ";

    document.getElementById("how_many").style.border= "1px solid gray";
    document.getElementById("how_many").style.borderRadius = "2px";
    document.getElementById("alert11").innerHTML = " ";

    document.getElementById("unit").style.border= "1px solid gray";
    document.getElementById("unit").style.borderRadius = "2px";
    document.getElementById("alert12").innerHTML = " ";
}

function validateForm(){
  "use strict"; //directive to ensure variables are declared
  var AllOk = false;
  error = "";
  var vfirstname = valid_firstname();
  var vlastname = valid_lastname();
  var vemail = valid_email();
  var vphonenumber = valid_phonenumber();
  var vstreetaddress = valid_streetaddress();
  var vcitytown = valid_citytown();
  var vstate = valid_state();
  var vpostcode = valid_postcode();
  var vsubject = valid_subject();
  var vproduct = valid_product();
  var vhowmany = valid_howmany();
  var vunit = valid_unit();
  if (vfirstname && vslastname && vemail && vphonenumber && vstreetaddress && vcitytown && vstate && vpostcode && vsubject && vproduct && vhowmany && vunit){
    AllOk = true;
  }
  else{
    alert(error);
    AllOK = false;
    error = "";
  }
  return AllOk;
}

// End Forms Validation //


// Data transfer between pages and same page
function product_submit(){
  var product = document.getElementById("product_name").value;
  // Store
  sessionStorage.setItem("PRODUCTNAME", product);
}

function product_change(){
  var bookname = document.getElementById("product").value;
  // Store
  sessionStorage.setItem("BOOKNAME", bookname);
  // Retrieve
  var bookchange = sessionStorage.getItem("BOOKNAME") ;
  document.getElementById("subject").value = "RE: Enquiry on"+ " " + bookchange;
}

var patharray = location.pathname.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];// Makesure the [1] is 1.
  var foldername = patharray; 
  if (foldername == "enquiry.php"){
    window.addEventListener("load",() => {
        // Retrieve
        var subject = sessionStorage.getItem("PRODUCTNAME");
        document.getElementById("subject").value = "RE: Enquiry on"+ " " + subject;
        document.getElementById("data").textContent = subject;
        document.getElementById("data").value = subject;

    })
  }

// Dropdown list with javascript array
function unitList(){
    var unit = document.getElementById("unit"),
    uarr = ["Book", "Box"],
    uval = ["Book","Box"];
    var object = document.getElementById("unit");
    var remove = object.getElementsByTagName('option');
    for (var i=remove.length-1;i>=1;i--){
      object.removeChild(remove[i]); 
    }
    for (var u = 0; u < uarr.length; u++){
          var option = document.createElement("OPTION"),
              text = document.createTextNode(uarr[u]);

          option.appendChild(text);
          option.setAttribute("value",uval[u]);
          unit.insertBefore(option,unit.lastChild);
        }
}

function countryList(){
  var country = document.getElementById("country"),
  a_nam = ["Afghanistan", "Albania" , "Algeria", "Andorra", "Angola", "Antigua", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan"],
  a_val = ["Afghanistan", "Albania" , "Algeria", "Andorra", "Angola", "Antigua", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan"],
  b_nam = ["Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi"],
  b_val = ["Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi"],
  c_nam = ["Côte d'Ivoire", "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Central", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo (Congo-Brazzaville)", "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czechia"],
  c_val = ["Côte d'Ivoire", "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Central", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo (Congo-Brazzaville)", "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czechia"],
  d_nam = ["Democratic Republic of the Congo", "Denmark", "Djibouti", "Dominica", "Dominican Republic"],
  d_val = ["Democratic Republic of the Congo", "Denmark", "Djibouti", "Dominica", "Dominican Republic"],
  e_nam = ["Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia"],
  e_val = ["Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia"],
  f_nam = ["Fiji", "Finland", "France"],
  f_val = ["Fiji", "Finland", "France"],
  g_nam = ["Gabon", "Gambia", "Georgia","Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana"],
  g_val = ["Gabon", "Gambia", "Georgia","Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana"],
  h_nam = ["Haiti", "Holy See", "Honduras", "Hungary"],
  h_val = ["Haiti", "Holy See", "Honduras", "Hungary"],
  i_nam = ["Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy"],
  i_val = ["Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy"],
  j_nam = ["Jamaica", "Japan", "Jordan"],
  j_val = ["Jamaica", "Japan", "Jordan"],
  k_nam = ["Kazakhstan", "Kenya", "Kiribati", "Kuwait", "Kyrgyzstan"],
  k_val = ["Kazakhstan", "Kenya", "Kiribati", "Kuwait", "Kyrgyzstan"],
  l_nam = ["Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg"],
  l_val = ["Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg"],
  m_nam = ["Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar (formerly Burma)"],
  m_val = ["Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar (formerly Burma)"],
  n_nam = ["Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea", "North Macedonia", "Norway"],
  n_val = ["Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea", "North Macedonia", "Norway"],
  o_nam = ["Oman"],
  o_val = ["Oman"],
  p_nam = ["Pakistan", "Palau", "Palestine State", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal"],
  p_val = ["Pakistan", "Palau", "Palestine State", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal"],
  q_nam = ["Qatar"],
  q_val = ["Qatar"],
  r_nam = ["Romania", "Russia", "Rwanda"],
  r_val = ["Romania", "Russia", "Rwanda"],
  s_nam = ["Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Korea", "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria"],
  s_val = ["Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Korea", "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria"],
  t_nam = ["Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu"],
  t_val = ["Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu"],
  u_nam = ["Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States of America", "Uruguay", "Uzbekistan"],
  u_val = ["Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States of America", "Uruguay", "Uzbekistan"],
  v_nam = ["Vanuatu", "Venezuela", "Vietnam"],
  v_val = ["Vanuatu", "Venezuela", "Vietnam"],
  y_nam = ["Yemen"],
  y_val = ["Yemen"],
  z_nam = ["Zambia", "Zimbabwe"],
  z_val = ["Zambia", "Zimbabwe"],
  aph = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","Y","Z"];


  var object = document.getElementById("country");
  var remove = object.getElementsByTagName('optgroup');
  for (var i=remove.length-1;i>=1;i--){
    object.removeChild(remove[i]); 
  }

  for (var i = 0; i < aph.length; i++){
      var group = document.createElement("OPTGROUP");
      group.setAttribute("label", aph[i]);
      country.insertBefore(group,country.lastChild);
      if (i == 0){
        for (var j = 0; j < a_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(a_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",a_val[j]);
              option.setAttribute("id",a_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 1){
        for (var j = 0; j < b_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(b_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",b_val[j]);
              option.setAttribute("id",b_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 2){
        for (var j = 0; j < c_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(c_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",c_val[j]);
              option.setAttribute("id",c_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 3){
        for (var j = 0; j < d_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(d_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",d_val[j]);
              option.setAttribute("id",d_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 4){
        for (var j = 0; j < e_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(e_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",e_val[j]);
              option.setAttribute("id",e_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 5){
        for (var j = 0; j < f_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(f_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",f_val[j]);
              option.setAttribute("id",f_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 6){
        for (var j = 0; j < g_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(g_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",g_val[j]);
              option.setAttribute("id",g_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 7){
        for (var j = 0; j < h_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(h_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",h_val[j]);
              option.setAttribute("id",h_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 8){
        for (var j = 0; j < i_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(i_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",i_val[j]);
              option.setAttribute("id",i_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 9){
        for (var j = 0; j < j_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(j_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",j_val[j]);
              option.setAttribute("id",j_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 10){
        for (var j = 0; j < k_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(k_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",k_val[j]);
              option.setAttribute("id",k_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 11){
        for (var j = 0; j < l_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(l_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",l_val[j]);
              option.setAttribute("id",l_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 12){
        for (var j = 0; j < m_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(m_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",m_val[j]);
              option.setAttribute("id",m_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 13){
        for (var j = 0; j < n_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(n_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",n_val[j]);
              option.setAttribute("id",n_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 14){
        for (var j = 0; j < o_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(o_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",o_val[j]);
              option.setAttribute("id",o_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 15){
        for (var j = 0; j < p_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(p_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",p_val[j]);
              option.setAttribute("id",p_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 16){
        for (var j = 0; j < q_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(q_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",q_val[j]);
              option.setAttribute("id",q_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 17){
        for (var j = 0; j < r_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(r_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",r_val[j]);
              option.setAttribute("id",r_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 18){
        for (var j = 0; j < s_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(s_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",s_val[j]);
              option.setAttribute("id",s_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 19){
        for (var j = 0; j < t_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(t_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",t_val[j]);
              option.setAttribute("id",t_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 20){
        for (var j = 0; j < u_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(u_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",u_val[j]);
              option.setAttribute("id",u_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 21){
        for (var j = 0; j < v_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(v_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",v_val[j]);
              option.setAttribute("id",v_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 22){
        for (var j = 0; j < y_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(y_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",y_val[j]);
              option.setAttribute("id",y_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 23){
        for (var j = 0; j < z_nam.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(z_nam[j]);

              option.appendChild(text);
              option.setAttribute("value",z_val[j]);
              option.setAttribute("id",z_val[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      

  }

}

function productList(){
    var product = document.getElementById("product"),
    barr = ["Definitive biography of the genius of Robin Williams", "Henry James the imagination of genius, A Biography", "A biography of Jimi Hendrix: Room full of mirrors", "IDA a sword among lions", "Wild: From Lost to Found on the Pacific Crest Trail", "The Glass Castle"],
    farr = ["Florence's Best Nyonya Recipes","Korean Homestyle Cooking","The Little Malaysian CookBook", "Whole Grain Sourdough at Home", "Inspiring Soup Flavours", "Traditional Festival Desserts"],
    marr = ["Music: The Definitive Visual History", "The History of Music in Fifty Instruments", "The Jazz Standards: A Guide to the Repertoire", "Brass Instruments: Their History and Development", "Antonio Stradivari: His Life and Work", "Beethoven's Symphonies: An Artistic Vision"],
    harr = ["IT", "The Only Good Indians", "Pet Semetary", "The Institute", "The Girl In Red", "Dracula"],
    bval = ["Biographybook_1","Biographybook_2","Biographybook_3","Biographybook_4","Biographybook_5","Biographybook_6"],
    fval = ["Foodbook_1","Foodbook_2","Foodbook_3","Foodbook_4","Foodbook_5","Foodbook_6"],
    mval = ["Musicbook_1","Musicbook_2","Musicbook_3","Musicbook_4","Musicbook_5","Musicbook_6"],
    hval = ["Horrorbook_1","Horrorbook_2","Horrorbook_3","Horrorbook_4","Horrorbook_5","Horrorbook_6"],
    bro = ["Biography", "Food", "Music", "Horror"];


    var object = document.getElementById("product");
    var remove = object.getElementsByTagName('optgroup');
    for (var i=remove.length-1;i>=1;i--){
      object.removeChild(remove[i]); 
    }

    for (var i = 0; i < bro.length; i++){
      var group = document.createElement("OPTGROUP");
      group.setAttribute("label", bro[i]);
      product.insertBefore(group,product.lastChild);
      if (i == 0){
        for (var j = 0; j < barr.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(barr[j]);

              option.appendChild(text);
              option.setAttribute("value",barr[j]);
              option.setAttribute("id",bval[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 1){
        for (var j = 0; j < farr.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(farr[j]);

              option.appendChild(text);
              option.setAttribute("value",farr[j]);
              option.setAttribute("id",fval[j]);
              group.appendChild(option,group.lastChild);
            }
      }
      
      if (i == 2){
        for (var j = 0; j < marr.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(marr[j]);

              option.appendChild(text);
              option.setAttribute("value",marr[j]);
              option.setAttribute("id",mval[j]);
              group.appendChild(option,group.lastChild);
            }
      }

      if (i == 3){
        for (var j = 0; j < harr.length; j++){
              var option = document.createElement("OPTION"),
                  text = document.createTextNode(harr[j]);

              option.appendChild(text);
              option.setAttribute("value",harr[j]);
              option.setAttribute("id",hval[j]);
              group.appendChild(option,group.lastChild);
            }
      }


    }

    
  }

function init() {
  product_submit();
  countryList()
  productList();
  product_change();
  unitList();
}
window.onload = init;