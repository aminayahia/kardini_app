O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:74:"C:\wamp64\www\kardini\assets\vendor\bootstrap\scss\mixins\_box-shadow.scss";s:10:"publicPath";s:86:"/assets/vendor/bootstrap/scss/mixins/_box-shadow-9e3323d4dfb3242b26ed54e6e2e97f44.scss";s:23:"publicPathWithoutDigest";s:53:"/assets/vendor/bootstrap/scss/mixins/_box-shadow.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:552:"@mixin box-shadow($shadow...) {
  @if $enable-shadows {
    $result: ();

    @if (length($shadow) == 1) {
      // We can pass `@include box-shadow(none);`
      $result: $shadow;
    } @else {
      // Filter to avoid invalid properties for example `box-shadow: none, 1px 1px black;`
      @for $i from 1 through length($shadow) {
        @if nth($shadow, $i) != "none" {
          $result: append($result, nth($shadow, $i), "comma");
        }
      }
    }
    @if (length($result) > 0) {
      box-shadow: $result;
    }
  }
}
";s:6:"digest";s:32:"9e3323d4dfb3242b26ed54e6e2e97f44";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:45:"vendor/bootstrap/scss/mixins/_box-shadow.scss";}