```
<style>
div.play-button {
  height: 72px;
  width: 72px;
  left: 50%;
  top: 50%;
  margin-left: -36px;
  margin-top: -36px;
  position: absolute;
  background: url(/core/images/templates/des/play-btn.png) no-repeat;
  cursor: pointer;
}
</style>

<div class="flex-video widescreen vimeo">
    <div class="youtube-container">
       <div class="youtube-player" data-id="YOUR YOUTUBE VIDEO ID"></div>
    </div>
</div>

<script>
```js
(function() {
            var v = document.getElementsByClassName("youtube-player");
            for (var n = 0; n < v.length; n++) {
                var p = document.createElement("div");
                p.innerHTML = labnolThumb(v[n].dataset.id);
                p.onclick = labnolIframe;
                v[n].appendChild(p);
            }
        })();

        function labnolThumb(id) {
            return '<img class="youtube-thumb" src="YOUR VIDEO SCREENSHOT"><div class="play-button"></div>';
        }

        function labnolIframe() {
            var iframe = document.createElement("iframe");
            iframe.setAttribute("src", "//www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
            iframe.setAttribute("frameborder", "0");
            iframe.setAttribute("id", "youtube-iframe");
            this.parentNode.replaceChild(iframe, this);
        }
```
</script>

```
