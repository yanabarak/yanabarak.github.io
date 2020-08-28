<template>
    <div class="row section-5">
        <button id="vidbutton"></button>
        <video controls poster="../assets/video_bg.png" id="myVideo">
        </video>
    </div>
</template>

<script>
  window.onload = function() {
    var videoSource = new Array();
    videoSource[0] = 'http://canadagoose.in.ua/favicon/video/video1.mp4';
    videoSource[1] = 'http://canadagoose.in.ua/favicon/video/video2.mp4';
    var i = 0;

    function videoPlay(videoNum) {
      document.getElementById("myVideo").setAttribute("src", videoSource[videoNum]);
      document.getElementById("myVideo").load();
      document.getElementById("myVideo").play();
    }
    document.getElementById('myVideo').addEventListener('ended', myHandler, false);
    videoPlay(0); // play the video

    function myHandler() {
      if (i == 0) {
        i++;
        videoPlay(i);
      } else {
        i = 0;
        videoPlay(i);
      }
    }
    var ppbutton = document.getElementById("vidbutton");
    ppbutton.addEventListener("click", playPause);
    var myVideo = document.getElementById("myVideo");
    function playPause() {
      if (myVideo.paused) {
        myVideo.play();
        ppbutton.style.display = "none";
      }
    }
  }
</script>

<style lang="scss">
    .section-5{
        position: relative;
    }
    #myVideo{
        margin-top: 10px;
        filter: brightness(53%);
        width: 100vw;
        height: 43.6vw;
        overflow: hidden;
        object-fit: cover;
    }
    button#vidbutton{
        position: absolute;
        z-index: 100;
        top: calc(21.8vw - 68.5px);
        left: calc(50vw - 68.5px);
        width: 137px;
        height: 137px;
        background-color: transparent;
        border: 0px solid;
        background-image: url(../assets/play_button.png);
        outline: 0;
    }

    @media screen and (max-width: 992px) {
        button#vidbutton {
            top: calc(21.8vw - 25px);
            left: calc(50vw - 25px);
            width: 51px;
            height: 51px;
            background-size: contain;
            background-repeat: no-repeat;
        }
    }
</style>