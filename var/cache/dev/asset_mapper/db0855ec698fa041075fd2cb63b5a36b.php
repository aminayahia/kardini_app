O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:59:"C:\wamp64\www\kardini\assets\scss\utilities\_animation.scss";s:10:"publicPath";s:71:"/assets/scss/utilities/_animation-6a7ccea2d4c939037d3a0329d9db6115.scss";s:23:"publicPathWithoutDigest";s:38:"/assets/scss/utilities/_animation.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:633:"// Animation Utilities

// Grow In Animation

@keyframes growIn {
  0% {
    transform: scale(0.9);
    opacity: 0;
  }
  100% {
    transform: scale(1);
    opacity: 1;
  }
}

.animated--grow-in {
  animation-name: growIn;
  animation-duration: 200ms;
  animation-timing-function: transform cubic-bezier(.18,1.25,.4,1), opacity cubic-bezier(0,1,.4,1);
}

// Fade In Animation

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

.animated--fade-in {
  animation-name: fadeIn;
  animation-duration: 200ms;
  animation-timing-function: opacity cubic-bezier(0,1,.4,1);
}
";s:6:"digest";s:32:"6a7ccea2d4c939037d3a0329d9db6115";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:30:"scss/utilities/_animation.scss";}