O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:69:"C:\wamp64\www\kardini_app\assets\vendor\bootstrap\scss\_spinners.scss";s:10:"publicPath";s:77:"/assets/vendor/bootstrap/scss/_spinners-37344e8ff2cda4f752bc7b66367dc217.scss";s:23:"publicPathWithoutDigest";s:44:"/assets/vendor/bootstrap/scss/_spinners.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:1328:"//
// Rotating border
//

@keyframes spinner-border {
  to { transform: rotate(360deg); }
}

.spinner-border {
  display: inline-block;
  width: $spinner-width;
  height: $spinner-height;
  vertical-align: text-bottom;
  border: $spinner-border-width solid currentColor;
  border-right-color: transparent;
  // stylelint-disable-next-line property-disallowed-list
  border-radius: 50%;
  animation: .75s linear infinite spinner-border;
}

.spinner-border-sm {
  width: $spinner-width-sm;
  height: $spinner-height-sm;
  border-width: $spinner-border-width-sm;
}

//
// Growing circle
//

@keyframes spinner-grow {
  0% {
    transform: scale(0);
  }
  50% {
    opacity: 1;
    transform: none;
  }
}

.spinner-grow {
  display: inline-block;
  width: $spinner-width;
  height: $spinner-height;
  vertical-align: text-bottom;
  background-color: currentColor;
  // stylelint-disable-next-line property-disallowed-list
  border-radius: 50%;
  opacity: 0;
  animation: .75s linear infinite spinner-grow;
}

.spinner-grow-sm {
  width: $spinner-width-sm;
  height: $spinner-height-sm;
}

@if $enable-prefers-reduced-motion-media-query {
  @media (prefers-reduced-motion: reduce) {
    .spinner-border,
    .spinner-grow {
      animation-duration: 1.5s;
    }
  }
}
";s:6:"digest";s:32:"37344e8ff2cda4f752bc7b66367dc217";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:36:"vendor/bootstrap/scss/_spinners.scss";}