O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:78:"C:\wamp64\www\kardini_app\assets\vendor\bootstrap\scss\utilities\_display.scss";s:10:"publicPath";s:86:"/assets/vendor/bootstrap/scss/utilities/_display-38577f96707f6757e338e6efde6fa85e.scss";s:23:"publicPathWithoutDigest";s:53:"/assets/vendor/bootstrap/scss/utilities/_display.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:545:"// stylelint-disable declaration-no-important

//
// Utilities for common `display` values
//

@each $breakpoint in map-keys($grid-breakpoints) {
  @include media-breakpoint-up($breakpoint) {
    $infix: breakpoint-infix($breakpoint, $grid-breakpoints);

    @each $value in $displays {
      .d#{$infix}-#{$value} { display: $value !important; }
    }
  }
}


//
// Utilities for toggling `display` in print
//

@media print {
  @each $value in $displays {
    .d-print-#{$value} { display: $value !important; }
  }
}
";s:6:"digest";s:32:"38577f96707f6757e338e6efde6fa85e";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:45:"vendor/bootstrap/scss/utilities/_display.scss";}