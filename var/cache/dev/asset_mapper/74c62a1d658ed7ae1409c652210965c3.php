O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:77:"C:\wamp64\www\kardini\assets\vendor\bootstrap\scss\mixins\_text-emphasis.scss";s:10:"publicPath";s:89:"/assets/vendor/bootstrap/scss/mixins/_text-emphasis-9228099e924f5197c897ee0875bc5d95.scss";s:23:"publicPathWithoutDigest";s:56:"/assets/vendor/bootstrap/scss/mixins/_text-emphasis.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:491:"// stylelint-disable declaration-no-important

// Typography

@mixin text-emphasis-variant($parent, $color, $ignore-warning: false) {
  #{$parent} {
    color: $color !important;
  }
  @if $emphasized-link-hover-darken-percentage != 0 {
    a#{$parent} {
      @include hover-focus() {
        color: darken($color, $emphasized-link-hover-darken-percentage) !important;
      }
    }
  }
  @include deprecate("`text-emphasis-variant()`", "v4.4.0", "v5", $ignore-warning);
}
";s:6:"digest";s:32:"9228099e924f5197c897ee0875bc5d95";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:48:"vendor/bootstrap/scss/mixins/_text-emphasis.scss";}