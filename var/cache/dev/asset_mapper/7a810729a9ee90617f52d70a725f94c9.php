O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:73:"C:\wamp64\www\kardini\assets\vendor\bootstrap\scss\mixins\_gradients.scss";s:10:"publicPath";s:85:"/assets/vendor/bootstrap/scss/mixins/_gradients-7205e250aa83ea27c8214e083650ef71.scss";s:23:"publicPathWithoutDigest";s:52:"/assets/vendor/bootstrap/scss/mixins/_gradients.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:2095:"// Gradients

@mixin gradient-bg($color) {
  @if $enable-gradients {
    background: $color linear-gradient(180deg, mix($body-bg, $color, 15%), $color) repeat-x;
  } @else {
    background-color: $color;
  }
}

// Horizontal gradient, from left to right
//
// Creates two color stops, start and end, by specifying a color and position for each color stop.
@mixin gradient-x($start-color: $gray-700, $end-color: $gray-800, $start-percent: 0%, $end-percent: 100%) {
  background-image: linear-gradient(to right, $start-color $start-percent, $end-color $end-percent);
  background-repeat: repeat-x;
}

// Vertical gradient, from top to bottom
//
// Creates two color stops, start and end, by specifying a color and position for each color stop.
@mixin gradient-y($start-color: $gray-700, $end-color: $gray-800, $start-percent: 0%, $end-percent: 100%) {
  background-image: linear-gradient(to bottom, $start-color $start-percent, $end-color $end-percent);
  background-repeat: repeat-x;
}

@mixin gradient-directional($start-color: $gray-700, $end-color: $gray-800, $deg: 45deg) {
  background-image: linear-gradient($deg, $start-color, $end-color);
  background-repeat: repeat-x;
}
@mixin gradient-x-three-colors($start-color: $blue, $mid-color: $purple, $color-stop: 50%, $end-color: $red) {
  background-image: linear-gradient(to right, $start-color, $mid-color $color-stop, $end-color);
  background-repeat: no-repeat;
}
@mixin gradient-y-three-colors($start-color: $blue, $mid-color: $purple, $color-stop: 50%, $end-color: $red) {
  background-image: linear-gradient($start-color, $mid-color $color-stop, $end-color);
  background-repeat: no-repeat;
}
@mixin gradient-radial($inner-color: $gray-700, $outer-color: $gray-800) {
  background-image: radial-gradient(circle, $inner-color, $outer-color);
  background-repeat: no-repeat;
}
@mixin gradient-striped($color: rgba($white, .15), $angle: 45deg) {
  background-image: linear-gradient($angle, $color 25%, transparent 25%, transparent 50%, $color 50%, $color 75%, transparent 75%, transparent);
}
";s:6:"digest";s:32:"7205e250aa83ea27c8214e083650ef71";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:44:"vendor/bootstrap/scss/mixins/_gradients.scss";}