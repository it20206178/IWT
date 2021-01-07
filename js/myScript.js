function loadData(name){
	if(name=="button1"){
	document.getElementById("img1").src = "../images/old5.webp";
	document.getElementById("para").innerHTML = "We're all broke right now, so mine for gold, diamonds, and mystery bags in this claw game!";
	}
	
	else if(name == "button2"){
	document.getElementById("img1").src = "../images/old6.webp" ;
	document.getElementById("para").innerHTML = "This quiz makes absolutely zero sense, but if you played it when you were younger, you'll be surprised how many answers you remember.";
	}
	else if(name == "button3"){
	document.getElementById("img1").src = "../images/old7.webp";
	document.getElementById("para").innerHTML = "This Lilo & Stitch themed sandwich stacking game has been replicated in similar apps, but the original's still best, IMHO.";
	}
	else if(name == "button4"){
	document.getElementById("img1").src = "../images/old8.webp";
	document.getElementById("para").innerHTML = "WHERE MY '90s BABIES AT?? My siblings and I were obsessed with this game, where you basically try to save the most lemmings possible from walking off cliffs and into lava by drilling holes. It's a lot more fun than it sounds. ";
	}
	else if(name == "button5"){
	document.getElementById("img1").src = "../images/old9.webp";
	document.getElementById("para").innerHTML = "Yes, I know, it seems like clickbait. But that game is actually crazy hard once you get past the first few levels. You'll get WAY too invested and keep going until you beat that level you're stuck on.";
	}
	else if(name == "button6"){
	document.getElementById("img1").src = "../images/old10.webp";
	document.getElementById("para").innerHTML ="What a classic. It really doesn't get any better than throwing virtual darts at virtual balloons.";
	}
}
function Submit(){
 var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 var fname = document.form.Name.value,
  lname = document.form.LastName.value,
  femail = document.form.Email.value,
  freemail = document.form.enterEmail.value,
  fpassword = document.form.Password.value,
  fmonth = document.form.birthday_month.value,
  fday = document.form.birthday_day.value,
  fyear = document.form.birthday_year.value;

 if( fname == "" )
   {
     document.form.Name.focus() ;
  document.getElementById("errorBox").innerHTML = "enter the first name";
     return false;
   }
 if( lname == "" )
   {
     document.form.LastName.focus() ;
   document.getElementById("errorBox").innerHTML = "enter the last name";
     return false;
   }

   if (femail == "" )
 {
  document.form.Email.focus();
  document.getElementById("errorBox").innerHTML = "enter the email";
  return false;
  }else if(!emailRegex.test(femail)){
  document.form.Email.focus();
  document.getElementById("errorBox").innerHTML = "enter the valid email";
  return false;
  }

   if (freemail == "" )
 {
  document.form.enterEmail.focus();
  document.getElementById("errorBox").innerHTML = "Re-enter the email";
  return false;
  }else if(!emailRegex.test(freemail)){
  document.form.enterEmail.focus();
  document.getElementById("errorBox").innerHTML = "Re-enter the valid email";
  return false;
  }

  if(freemail !=  femail){
   document.form.enterEmail.focus();
   document.getElementById("errorBox").innerHTML = "emails are not matching, re-enter again";
   return false;
   }


 if(fpassword == "")
  {
   document.form.Password.focus();
   document.getElementById("errorBox").innerHTML = "enter the password";
   return false;
  }

   if (fmonth == "") {
        document.form.birthday_month.focus();
  document.getElementById("errorBox").innerHTML = "select the birthday month";
        return false;
     }
  if (fday == "") {
        document.form.birthday_day.focus();
  document.getElementById("errorBox").innerHTML = "select the birthday day";
        return false;
     }
  if (fyear == "") {
        document.form.birthday_year.focus();
  document.getElementById("errorBox").innerHTML = "select the birthday year";
        return false;
     }
  if(document.form.radiobutton[0].checked == false && document.form.radiobutton[1].checked == false){
    document.getElementById("errorBox").innerHTML = "select your gender";
    return false;
   }
  if(fname != '' && lname != '' && femail != '' && freemail != '' && fpassword != '' && fmonth != '' && fday != '' && fyear != ''){
   document.getElementById("errorBox").innerHTML = "form submitted successfully";
   alert("Form Submitted Successfully");
   window.location = "Books.html";
   }

}


function show(){
   var pswrd = document.getElementById('pswrd');
   var icon = document.querySelector('.fas');
   if (pswrd.type === "password") {
    pswrd.type = "text";
    pswrd.style.marginTop = "20px";
    icon.style.color = "#7f2092";
   }else{
    pswrd.type = "password";
    icon.style.color = "grey";
   }
  }
  
  function loadData123(name){
	if(name=="button1"){
		document.getElementById("img1").src = "../images/popularart.jpg";
	document.getElementById("para").innerHTML = "Paint online is the perfect video game for kids that are fond of drawing and painting. Kids need to let their creativity fly away, and what better way than giving them the tools to create Art? Painting is a great way to express yourself and communicate emotionally; kids don’t just love to draw, they also need it to be able to communicate and to progress intellectually. Until a certain age children aren’t able to speak or express themselves the way they want verbally or through speech, that is why painting is for them a way to express their feelings and thoughts. And, in the end, isn’t that what Art is about?"
	}
	
	else if(name == "button2"){
	document.getElementById("img1").src = "../images/popularcar.jpg";
	document.getElementById("para").innerHTML = "This is a great game for the family to play. 20 Questions. Another popular favourite is 20 questions. Going on a Trip (or Memory Game) This is a good memory game for kids age 5+. Scavenger Hunt. Number Plate Bingo. Count the Animals. Grow a Story."
	}
	else if(name == "button3"){
	document.getElementById("img1").src = "../images/popularcard.jpg";
	document.getElementById("para").innerHTML = "With our guide to simple family card games, your gang will be shuffling, dealing and tallying scores in minutes flat!"
	}
}