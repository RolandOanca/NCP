function _(query){
	return document.querySelector(query);
}
function _all(query){
	return document.querySelectorAll(query);
}
let songList = [
	{
		thumbnail:"../statics/files/Poster1.jpg",
		audio:"callofnature/CallOfNatureExperience1.mp3",
		songname:"Call of Nature Experience 1"
	},
	{
		thumbnail:"../statics/files/Poster2.jpg",
		audio:"callofnature/CallOfNatureExperience2.mp3",
		songname:"Call of Nature Experience 2"
	},
	{
		thumbnail:"../statics/files/Poster3.jpg",
		audio:"callofnature/CallOfNatureExperience3.mp3",
		songname:"Call of Nature Experience 3"
		
	},
	{
		thumbnail:"../statics/files/Poster4.jpg",
		audio:"callofnature/CallOfNatureExperience4.mp3",
		songname:"Call of Nature Experience 4",
	},
	{
		thumbnail:"../statics/files/Poster5.jpg",
		audio:"callofnature/CallOfNatureExperience5.mp3",
		songname:"Call of Nature Experience 5"
	},
	{
		thumbnail:"../statics/files/Poster6.jpg",
		audio:"callofnature/CallOfNatureExperience6.mp3",
		songname:"Call of Nature Experience 6"
	},
	{
		thumbnail:"../statics/files/Poster7.jpg",
		audio:"callofnature/CallOfNatureExperience7.mp3",
		songname:"Call of Nature Experience 7"
	},
	{
		thumbnail:"../statics/files/Poster8.jpg",
		audio:"callofnature/CallOfNatureExperience8.mp3",
		songname:"Call of Nature Experience 8"
	},
	{
		thumbnail:"../statics/files/Poster9.jpg",
		audio:"callofnature/CallOfNatureExperience9.mp3",
		songname:"Call Of NatureExperience 9",
		artistname:"Silent Partner"
	},
	{
		thumbnail:"../statics/files/Poster10.jpg",
		audio:"callofnature/CallOfNatureExperience10.mp3",
		songname:"Call of Nature Experience 10"
	},
	{
		thumbnail:"../statics/files/Poster11.jpg",
		audio:"finesounds/FineSoundsTherapy1.mp3",
		songname:"Fine Sounds Therapy 1"
	},
	{
		thumbnail:"../statics/files/Poster12.jpg",
		audio:"finesounds/FineSoundsTherapy2.mp3",
		songname:"Fine Sounds Therapy 2"
	},
	{
		thumbnail:"../statics/files/Poster13.jpg",
		audio:"finesounds/FineSoundsTherapy3.mp3",
		songname:"Fine Sounds Therapy 3"
	},
	{
		thumbnail:"../statics/files/Poster14.jpg",
		audio:"finesounds/FineSoundsTherapy4.mp3",
		songname:"Fine Sounds Therapy 4"
	},
	{
		thumbnail:"../statics/files/Poster15.jpg",
		audio:"finesounds/FineSoundsTherapy5.mp3",
		songname:"Fine Sounds Therapy 5"
	},
	{
		thumbnail:"../statics/files/Poster16.jpg",
		audio:"finesounds/FineSoundsTherapy6.mp3",
		songname:"Fine Sounds Therapy 6"
	},
	{
		thumbnail:"../statics/files/Poster17.jpg",
		audio:"finesounds/FineSoundsTherapy7.mp3",
		songname:"Fine Sounds Therapy 7"
	},
	{
		thumbnail:"../statics/files/Poster18.jpg",
		audio:"finesounds/FineSoundsTherapy8.mp3",
		songname:"Fine Sounds Therapy 8"
	},
	{
		thumbnail:"../statics/files/Poster19.jpg",
		audio:"finesounds/FineSoundsTherapy9.mp3",
		songname:"Fine Sounds Therapy 9"
	},
	{
		thumbnail:"../statics/files/Poster20.jpg",
		audio:"finesounds/FineSoundsTherapy10.mp3",
		songname:"Fine Sounds Therapy 10"
	},
	{
		thumbnail:"../statics/files/Poster21.jpg",
		audio:"whitenoise/WhiteNoiseTherapy1.mp3",
		songname:"White Noise Therapy 1"
	},
	{
		thumbnail:"../statics/files/Poster22.jpg",
		audio:"whitenoise/WhiteNoiseTherapy2.mp3",
		songname:"White Noise Therapy 2"
	},
	{
		thumbnail:"../statics/files/Poster23.jpg",
		audio:"whitenoise/WhiteNoiseTherapy3.mp3",
		songname:"White Noise Therapy 3"
	},
	{
		thumbnail:"../statics/files/Poster24.jpg",
		audio:"whitenoise/WhiteNoiseTherapy4.mp3",
		songname:"White Noise Therapy 4"
	},
	{
		thumbnail:"../statics/files/Poster25.jpg",
		audio:"whitenoise/WhiteNoiseTherapy5.mp3",
		songname:"White Noise Therapy 5"
	},
	{
		thumbnail:"../statics/files/Poster26.jpg",
		audio:"whitenoise/WhiteNoiseTherapy6.mp3",
		songname:"White Noise Therapy 6"
	},
	{
		thumbnail:"../statics/files/Poster27.jpg",
		audio:"whitenoise/WhiteNoiseTherapy7.mp3",
		songname:"White Noise Therapy 7"
	},
	{
		thumbnail:"../statics/files/Poster28.jpg",
		audio:"whitenoise/WhiteNoiseTherapy8.mp3",
		songname:"White Noise Therapy 8"
	},
	{
		thumbnail:"../statics/files/Poster29.jpg",
		audio:"whitenoise/WhiteNoiseTherapy9.mp3",
		songname:"White Noise Therapy 9"
	},
	{
		thumbnail:"../statics/files/Poster30.jpg",
		audio:"whitenoise/WhiteNoiseTherapy10.mp3",
		songname:"White Noise Therapy 10"
	}
];

let currentSongIndex = 0;

let player = _(".player"),
	toggleSongList = _(".player .toggle-list");

let main = {
	audio:_(".player .main audio"),
	thumbnail:_(".player .main img"),
	seekbar:_(".player .main input"),
	songname:_(".player .main .details h2"),
	prevControl:_(".player .main .controls .prev-control"),
	playPauseControl:_(".player .main .controls .play-pause-control"),
	nextControl:_(".player .main .controls .next-control")
}

toggleSongList.addEventListener("click", function(){
	toggleSongList.classList.toggle("active");
	player.classList.toggle("activeSongList");
});

_(".player .player-list .list").innerHTML = (songList.map(function(song,songIndex){
	return `
		<div class="item" songIndex="${songIndex}">
			<div class="thumbnail">
				<img src="./files/${song.thumbnail}">
			</div>
			<div class="details">
				<h2>${song.songname}</h2>
			</div>
		</div>
	`;
}).join(""));

let songListItems = _all(".player .player-list .list .item");
for(let i=0;i<songListItems.length;i++){
	songListItems[i].addEventListener("click",function(){
		currentSongIndex = parseInt(songListItems[i].getAttribute("songIndex"));
		loadSong(currentSongIndex);
		player.classList.remove("activeSongList");
	});
}

function loadSong(songIndex){
	let song = songList[songIndex];
	main.thumbnail.setAttribute("src","./files/"+song.thumbnail);
	document.body.style.background = `linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.8)), url("./files/${song.thumbnail}") center no-repeat`;
	document.body.style.backgroundSize = "cover";	
	main.songname.innerText = song.songname;
	main.audio.setAttribute("src","https://d3fza070fv6s80.cloudfront.net/NCP/audio/"+song.audio);
	main.seekbar.setAttribute("value",0);
	main.seekbar.setAttribute("min",0);
	main.seekbar.setAttribute("max",0);
	main.audio.addEventListener("canplay",function(){
		main.audio.play();
		if(!main.audio.paused){
			main.playPauseControl.classList.remove("paused");
		}
		main.seekbar.setAttribute("max",parseInt(main.audio.duration));
		main.audio.onended = function(){
			main.nextControl.click();
		}
	})
}
setInterval(function(){
	main.seekbar.value = parseInt(main.audio.currentTime);
},1000);

main.prevControl.addEventListener("click",function(){
	currentSongIndex--;
	if(currentSongIndex < 0){
		currentSongIndex = songList.length + currentSongIndex;
	}
	loadSong(currentSongIndex);
});
main.nextControl.addEventListener("click",function(){
	currentSongIndex = (currentSongIndex+1) % songList.length;
	loadSong(currentSongIndex);
});
main.playPauseControl.addEventListener("click",function(){
	if(main.audio.paused){
		main.playPauseControl.classList.remove("paused");
		main.audio.play();
	} else {
		main.playPauseControl.classList.add("paused");
		main.audio.pause();
	}
});
main.seekbar.addEventListener("change",function(){
	main.audio.currentTime = main.seekbar.value;
});
loadSong(currentSongIndex);
