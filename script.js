function validateEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

function checkPassword(str) {
  var re = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
  return re.test(str);
}


// geting the searchBox id
// var getdata ="";
var search = document.getElementById("searchBox");

search.addEventListener("keyup", function (e) {
  var url_1 = "search.php?term=" + encodeURIComponent(search.value);
  console.log(url_1);

  $.ajax({
    url: url_1,
    method: "GET",
    success: function (data) {
      
      console.log(data);
      $("#searchBox").autocomplete({
        source: JSON.parse(data),
         select: function( event, ui ){
          
        }
      });
    },
    error: function (jqXHR, textStatus) {
      alert("Request failed: " + textStatus);
    },
  });
});


// edit btn fuction on click work
var edit = document.getElementById("edit");
var edit_input = document.getElementById("edit_input");
var edit_cancel =document.getElementById("edit_cancel");
var update_btn = document.getElementById("update_btn");
var hide = document.getElementById("hide");
//add event listenr

edit.addEventListener("click",function(event){
  edit_input.style.display = "block";
  hide.style.display = "none";
  event.preventDefault();
});
edit_cancel.addEventListener("click",function(e){
  // edit_input.style.display = "none";
  // edit_input.style.display = "block";
  
  
})
update_btn.addEventListener("click",function(event){
  event.preventDefault();
})




