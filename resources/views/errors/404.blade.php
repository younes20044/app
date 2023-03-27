<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=1">
<meta name="theme-color" content="#111111">

<link rel="icon" type="image/png" sizes="32x32" href="https://knife.media/wp-content/themes/knife/assets/images/icon-32.png" />
<link rel="icon" type="image/png" sizes="192x192" href="https://knife.media/wp-content/themes/knife/assets/images/icon-192.png" />
<link rel="apple-touch-icon" sizes="180x180" href="https://knife.media/wp-content/themes/knife/assets/images/icon-180.png" />
<style>
    body,
h1 {
  margin: 0;
}
.video,
.wrap {
  position: relative;
}
body {
  display: flex;
  flex-flow: column;
  align-items: center;
  justify-content: center;
  user-select: none;
  box-sizing: border-box;
  position: fixed;
  top: 0;
  left: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  min-height: 25rem;
  font: 400 16px/1.4 -apple-system, BlinkMacSystemFont,"Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
  color: #fff;
  background: #000;
}
h1 {
  font-size: 1.875em;
  font-weight: 400;
}
p {
  margin: 1rem 0;
}
a {
  color: #2f72e1;
  border-bottom: 1px solid #2f72e1;
  text-decoration: none;
  transition: border 0.25s;
}
a:hover {
  border-bottom-color: transparent;
}
.wrap {
  display: flex;
  flex-flow: column;
  align-items: center;
  box-sizing: border-box;
  width: 40rem;
  max-width: 100%;
}
.video {
  display: block;
  width: 90%;
  height: auto;
  margin-left: 10%;
  z-index: -1;
}
.message {
  display: block;
  margin-top: -15%;
  padding: 0 1rem;
  text-align: left;
}

@media screen and (max-height: 460px) {
    body {
        position: absolute;
    }
}

@media screen and (max-width: 479px) {
  .message {
    font-size: 0.8125rem;
  }
}

@media screen and (max-width: 319px) {
  h1 {
    font-size: 1.25rem;
  }
  .message {
    font-size: 0.75rem;
  }
}
</style>
<title>Page not found</title>

</head>

<body>
    <div class="wrap">
        <video class="video" poster="https://knife.media/wp-content/themes/knife/assets/images/poster-error.jpg" autoplay preload loop muted>
            <source src="https://knife.media/wp-content/themes/knife/assets/video/video-error.mp4" type="video/mp4">
        </video>

        <div class="message">
            <h1>Nothing found</h1>
            <p>Better go to the  <a href="{{route('home')}}" >home page </a><br> </p>
        </div>
    </div>
</body>
</html>
