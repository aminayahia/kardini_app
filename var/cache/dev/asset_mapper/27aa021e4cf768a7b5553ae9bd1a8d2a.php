O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:72:"C:\wamp64\www\kardini\assets\vendor\bootstrap\scss\utilities\_embed.scss";s:10:"publicPath";s:84:"/assets/vendor/bootstrap/scss/utilities/_embed-1b7fe322e1bd5b3268cabaed1df00c46.scss";s:23:"publicPathWithoutDigest";s:51:"/assets/vendor/bootstrap/scss/utilities/_embed.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:885:"// Credit: Nicolas Gallagher and SUIT CSS.

.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden;

  &::before {
    display: block;
    content: "";
  }

  .embed-responsive-item,
  iframe,
  embed,
  object,
  video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
  }
}

@each $embed-responsive-aspect-ratio in $embed-responsive-aspect-ratios {
  $embed-responsive-aspect-ratio-x: nth($embed-responsive-aspect-ratio, 1);
  $embed-responsive-aspect-ratio-y: nth($embed-responsive-aspect-ratio, 2);

  .embed-responsive-#{$embed-responsive-aspect-ratio-x}by#{$embed-responsive-aspect-ratio-y} {
    &::before {
      padding-top: percentage($embed-responsive-aspect-ratio-y / $embed-responsive-aspect-ratio-x);
    }
  }
}
";s:6:"digest";s:32:"1b7fe322e1bd5b3268cabaed1df00c46";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:43:"vendor/bootstrap/scss/utilities/_embed.scss";}