//created by Arvid Dezittere
//only for commercial use with license!
function check(){
  if(document.getElementById('name').value == ""){
    document.getElementById("name_er").innerHTML = "Please enter a name";
  }if(document.getElementById('mail').value == ""){
    document.getElementById("email_er").innerHTML = "Please enter an email adres";
  }if(document.getElementById('sub').value == ""){
    document.getElementById("quest_er").innerHTML = "Please enter a subject";
  }if(document.getElementById('qust').value == ""){
    document.getElementById("qust_er").innerHTML = "Please enter something";
  }
}
