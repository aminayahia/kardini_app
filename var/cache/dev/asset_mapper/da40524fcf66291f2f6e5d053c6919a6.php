O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:74:"C:\wamp64\www\kardini_app\assets\vendor\fontawesome-free\scss\_mixins.scss";s:10:"publicPath";s:82:"/assets/vendor/fontawesome-free/scss/_mixins-7e5aa472705f113ff31d65a8db06a76d.scss";s:23:"publicPathWithoutDigest";s:49:"/assets/vendor/fontawesome-free/scss/_mixins.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:1322:"// Mixins
// --------------------------

@mixin fa-icon {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  display: inline-block;
  font-style: normal;
  font-variant: normal;
  font-weight: normal;
  line-height: 1;
}

@mixin fa-icon-rotate($degrees, $rotation) {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=#{$rotation})";
  transform: rotate($degrees);
}

@mixin fa-icon-flip($horiz, $vert, $rotation) {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=#{$rotation}, mirror=1)";
  transform: scale($horiz, $vert);
}


// Only display content to screen readers. A la Bootstrap 4.
//
// See: http://a11yproject.com/posts/how-to-hide-content/

@mixin sr-only {
  border: 0;
  clip: rect(0, 0, 0, 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}

// Use in conjunction with .sr-only to only display content when it's focused.
//
// Useful for "Skip to main content" links; see http://www.w3.org/TR/2013/NOTE-WCAG20-TECHS-20130905/G1
//
// Credit: HTML5 Boilerplate

@mixin sr-only-focusable {
  &:active,
  &:focus {
    clip: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    position: static;
    width: auto;
  }
}
";s:6:"digest";s:32:"7e5aa472705f113ff31d65a8db06a76d";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:41:"vendor/fontawesome-free/scss/_mixins.scss";}