function loadData(name){
	if(name=="button1"){
	document.getElementById("img1").src = "../images/popularonline.jpg";
	document.getElementById("para").innerHTML = "Poptropica is the largest virtual world for kids and one of 2011's 50 Best Websites according to Time Magazine. In this massive multiplayer online role-playing game, players travel to different Islands to complete quests, play games, and read comics, as well as compete and communicate safely with other players. For every Island they complete, players win credits and medallions. Players can spend their credits in the Poptropica store, where they can purchase costumes and other items for their avatar. Currently, there are more than 20 Islands. Each Island has its own theme and challenge. Poptropica Islands are free to play. Members get Early Access to new Islands and unlimited access to the Poptropica Store. Membership subscriptions renew automatically";
	}
	
	else if(name == "button2"){
	document.getElementById("img1").src = "../images/popular_download.jpg" ;
	document.getElementById("para").innerHTML = "Name of this game is pou. It has finally happened. You have made first contact with extraterrestrial life in the form of a sentient blob named Pou. The good news is that Pou is not here to take over the world. He doesn’t even want to be taken to your leader. The bad news is that he can’t really do much of anything; he’s still physically a baby and needs a lot of love and care before he can grow big and strong.";
	}
	else if(name == "button3"){
	document.getElementById("img1").src = "../images/popular_suggested.webp";
	document.getElementById("para").innerHTML = "Disney Crossy Road is much the same, but uses Disney characters that often radically overhaul the game’s visuals and gameplay mechanics. Over 100 figurines are there to be found, and although IAP lurks, playing and collecting coins in the in-game worlds is all you need to snag them all.";
	}
	else if(name == "button4"){
	document.getElementById("img1").src = "../images/under5.jpeg";
	document.getElementById("para").innerHTML = "Pix the Cart is very popular game under 5 years old kids. in here you can select different levels. ";
	}
	else if(name == "button5"){
	document.getElementById("img1").src = "../images/under6-10.webp";
	document.getElementById("para").innerHTML = "Super Mario 3D World might be the best child-friendly game ever made. The levels are open and friendly. The game can be played with simple controls but hides a fair amount of depth for experts. Most importantly, Super Mario 3D World is designed from the ground up for cooperative play. Some games have co-op tacked on, but everything about this game is designed to suit people playing together.";
	}
	else if(name == "button6"){
	document.getElementById("img1").src = "../images/10+age.webp";
	document.getElementById("para").innerHTML = "World allows kids to create their own world, with every part of an adult-ish life, from office to home, vacation, hospital, and beyond. It’s cute and entertaining, with simple kid-friendly gameplay, which is why it ranks high on the list of free online games for kids."
	}
}


function priceLoop(){
	
	var game=("Log Run= 100.00", "Helipopper= 250.00", "Vine Time= 200.00", "Simon Sees= 500.00","Penguin Drop=430.00" );
	var i;
	var length=game.length;
	var txt;
	for(i=0 ; i<game ; i++); {
	  txt+=game[i] + "<br/>" ;
	}
	document.getElementById("para").innerHTML = txt;
}

function highPrice(){
	var game=[] ;
	
	var txt = ""; 
	game["Poptropica"] ="1024.50";
	game["Free Rice"] ="1500.00";
	game["Magic School Bus"] ="800.00";
	game["NASA Kids' Club"] ="750.98";
	game["Backing Tracks"] ="25.00";
	game["Neopets"] ="540.22";
	game["Ourworld"] ="780.10";
	game["Oggy's Fries"] ="80.05";
	game["Double Digits"] ="1024.32";
	game["Greedy's Bakeries"] ="80.00";
	
	for(var item in game){
		if(game[item]>1024) {
			txt += item + " : " + game[item] + "<br/>";
			
		}
		document.getElementById("img1").src = "../images/priceloop1.jpg" ;
		document.getElementById("para").innerHTML = txt;
		
	}
}

function lowPrice(){
	var game=[] ;
	
	var txt = ""; 
	game["Poptropica"] ="1024.50";
	game["Free Rice"] ="1500.00";
	game["Magic School Bus"] ="800.00";
	game["NASA Kids' Club"] ="750.98";
	game["Backing Tracks"] ="25.00";
	game["Neopets"] ="540.22";
	game["Ourworld"] ="780.10";
	game["Oggy's Fries"] ="80.05";
	game["Double Digits"] ="1024.32";
	game["Greedy's Bakeries"] ="80.00";
	
	
	for(var item in game){
		if(game[item]<=100) {
			txt += item + " : " + game[item] + "<br/>";
			
		}
		document.getElementById("img1").src = "../images/old5.webp" ;
		document.getElementById("para").innerHTML = txt;
	}
	

}


function loadData1(name){
	if(name=="button1"){
	
	document.getElementById("para").innerHTML = "Math is a crucial subject to learning success, which students will continue through each grade of their school journey. Give your child a head start for more advanced math practice by showing them that they can actually enjoy solving equations! Forget dull and dry lessons that you have to convince reluctant students to complete. With hundreds of cheerfully animated and professionally designed games, your child will be asking to play one more round again and again, while you watch their math skills and confidence grow. Whether your little learner is just starting to recognize numbers, count, and solve simple addition and subtraction problems, or they're diving into beginning algebra, geometry, and numbers with fractions and decimals, Education.com has a game to challenge your child's skills wherever they are on the math journey.To get started, try choosing a game that reviews a subject they've already learned to give them some extra practice. Once their minds are warmed up and their basic skills sharpened, challenge them to take the plunge into learning a new skill. You might be surprised at how quickly your child can learn while they're focused on winning the game!"
	
	}
	
	else if(name == "button2"){
	document.getElementById("para").innerHTML = "Through play children learn to make and practice new sounds. ... Sometimes a simple game is all the spark you need to get your children involved. Play can help your children to develop skills like phonics, phonemic awareness, vocabulary, reading comprehension and fluency – the five basic components of reading."
	}
	
	else if(name == "button3"){
	document.getElementById("para").innerHTML = "Several studies have shown the benefits of musical education. We recommend using games because they make music accessible to children regardless of their age or musical knowledge. ... Music games can improve hand-eye coordination. Playing a musical instrument helps refine different fine motor skills."
	}
	
	else if(name == "button4"){
	document.getElementById("para").innerHTML = "They introduce kids to basic science concepts in an approachable manner, reinforcing comprehension through engaging and stimulating activities. Using interactive science games creates a unique learning process when combined with conventional teaching methods."
	}
	
	
	else if(name == "button5"){
	document.getElementById("para").innerHTML = "Top games helps to identify the most downloaded and most played games. In the top game category you can easily find the most popular top games..."
	}
	
	
	else if(name == "button6"){
	document.getElementById("para").innerHTML = "Some games might improve kids' hand–eye coordination and problem-solving skills. Video games that require kids to actually move or manipulate the game through their own physical movement can even get sedentary kids moving — but not as much as if they actually played outside or did sports."
	}
}




function loadData2(name){
	if(name=="button1"){
	document.getElementById("img1").src = "../images/m111.jpg";
	document.getElementById("para").innerHTML = "Math games can make learning more fun and engaging. When children play games, they can apply their math skills to new and unique scenarios while building logic and critical thinking skills. They also get a chance to practice math in a way that is fun and appeals to their interests."
	}
	
	else if(name == "button2"){
	document.getElementById("img1").src = "../images/s11.webp" ;
	document.getElementById("para").innerHTML = "Our online science games are sure to fulfill your child's sense of curiosity. They introduce kids to basic science concepts in an approachable manner, reinforcing comprehension through engaging and stimulating activities. Using interactive science games creates a unique learning process when combined with conventional teaching methods. At Turtle Diary, we have a vast collection of science kids games covering such topics as the human body, weather, life cycles, animals, and much more. Our games will captivate and hold the attention of your child, creating an unforgettable learning experience."
	}
	else if(name == "button3"){
	document.getElementById("img1").src = "../images/mmm111.jpg";
	document.getElementById("para").innerHTML = "ring the beautiful world of music to your kid thanks to the online game Piano Online Farm Animals. They will learn the musical notes and discover new sounds, and at the same time they will be able to play with the sounds of the animals. Piano Online Farm Animals is a fun way for kids to be familiar with a basic music instrument, such as the piano, and to wake up its interest in music. But you can also turn the traditional piano notes into the sounds that the animals make and create an original song."
	}
	else if(name == "button4"){
	document.getElementById("img1").src = "../images/sss111.png";
	document.getElementById("para").innerHTML = "Pix the Cart is very popular game under 5 years old kids. in here you can select different levels. ";
	}
	else if(name == "button5"){
	document.getElementById("img1").src = "../images/aaa.jpg";
	document.getElementById("para").innerHTML = "One option for students is to learn a new language online, as online activities offer fun and effective foreign language practice. "
	}
}


