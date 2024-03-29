O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:82:"C:\wamp64\www\kardini\assets\vendor\bootstrap\scss\mixins\_background-variant.scss";s:10:"publicPath";s:94:"/assets/vendor/bootstrap/scss/mixins/_background-variant-02b95ea956229b460d1a9ae675b20a55.scss";s:23:"publicPathWithoutDigest";s:61:"/assets/vendor/bootstrap/scss/mixins/_background-variant.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:718:"// stylelint-disable declaration-no-important

// Contextual backgrounds

@mixin bg-variant($parent, $color, $ignore-warning: false) {
  #{$parent} {
    background-color: $color !important;
  }
  a#{$parent},
  button#{$parent} {
    @include hover-focus() {
      background-color: darken($color, 10%) !important;
    }
  }
  @include deprecate("The `bg-variant` mixin", "v4.4.0", "v5", $ignore-warning);
}

@mixin bg-gradient-variant($parent, $color, $ignore-warning: false) {
  #{$parent} {
    background: $color linear-gradient(180deg, mix($body-bg, $color, 15%), $color) repeat-x !important;
  }
  @include deprecate("The `bg-gradient-variant` mixin", "v4.5.0", "v5", $ignore-warning);
}
";s:6:"digest";s:32:"02b95ea956229b460d1a9ae675b20a55";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:53:"vendor/bootstrap/scss/mixins/_background-variant.scss";}