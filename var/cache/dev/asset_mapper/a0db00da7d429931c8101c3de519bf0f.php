O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:79:"C:\wamp64\www\kardini_app\assets\vendor\bootstrap\scss\utilities\_position.scss";s:10:"publicPath";s:87:"/assets/vendor/bootstrap/scss/utilities/_position-db4005ba5d2cc8e43787c2ce64ebbf9f.scss";s:23:"publicPathWithoutDigest";s:54:"/assets/vendor/bootstrap/scss/utilities/_position.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:516:"// stylelint-disable declaration-no-important

// Common values
@each $position in $positions {
  .position-#{$position} { position: $position !important; }
}

// Shorthand

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: $zindex-fixed;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: $zindex-fixed;
}

.sticky-top {
  @supports (position: sticky) {
    position: sticky;
    top: 0;
    z-index: $zindex-sticky;
  }
}
";s:6:"digest";s:32:"db4005ba5d2cc8e43787c2ce64ebbf9f";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:46:"vendor/bootstrap/scss/utilities/_position.scss";}