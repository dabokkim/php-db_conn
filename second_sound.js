var music = document.getElementById("music");
function musicPlay() {
    music.play();
}
function musicPause() {
    music.pause();
}

//addEventListener('click', callback, false)
//          이벤트를 추가할때 사용한 addEventListener()는 3개의 인자를 전달
//          순서대로 (이벤트 타입, 콜백함수, 이벤트 버블(false), 이벤트 캡쳐(true))
//          세번째 인자는 boolean (true/false)으로 전달

music.addEventListener("timeupdate",
function () {
    document.getElementById("time").innerHTML =
        Math.floor(music.currentTime) + "/" + Math.floor(music.duration) + "(초)";
}, false);  