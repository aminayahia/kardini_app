O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:70:"C:\wamp64\www\kardini\assets\vendor\fontawesome-free\less\_mixins.less";s:10:"publicPath";s:82:"/assets/vendor/fontawesome-free/less/_mixins-c3480465de6edaeacbf222a52828c0be.less";s:23:"publicPathWithoutDigest";s:49:"/assets/vendor/fontawesome-free/less/_mixins.less";s:15:"publicExtension";s:4:"less";s:7:"content";s:1293:"// Mixins
// --------------------------

.fa-icon() {
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  display: inline-block;
  font-style: normal;
  font-variant: normal;
  font-weight: normal;
  line-height: 1;
}

.fa-icon-rotate(@degrees, @rotation) {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=@{rotation})";
  transform: rotate(@degrees);
}

.fa-icon-flip(@horiz, @vert, @rotation) {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=@{rotation}, mirror=1)";
  transform: scale(@horiz, @vert);
}


// Only display content to screen readers. A la Bootstrap 4.
//
// See: http://a11yproject.com/posts/how-to-hide-content/

.sr-only() {
  border: 0;
  clip: rect(0,0,0,0);
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

.sr-only-focusable() {
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
";s:6:"digest";s:32:"c3480465de6edaeacbf222a52828c0be";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:41:"vendor/fontawesome-free/less/_mixins.less";}