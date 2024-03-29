O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:73:"C:\wamp64\www\kardini_app\assets\vendor\bootstrap\scss\mixins\_image.scss";s:10:"publicPath";s:81:"/assets/vendor/bootstrap/scss/mixins/_image-8c5b0c90528cb2ad34149ef323dd534b.scss";s:23:"publicPathWithoutDigest";s:48:"/assets/vendor/bootstrap/scss/mixins/_image.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:1191:"// Image Mixins
// - Responsive image
// - Retina image


// Responsive image
//
// Keep images from scaling beyond the width of their parents.

@mixin img-fluid() {
  // Part 1: Set a maximum relative to the parent
  max-width: 100%;
  // Part 2: Override the height to auto, otherwise images will be stretched
  // when setting a width and height attribute on the img element.
  height: auto;
}


// Retina image
//
// Short retina mixin for setting background-image and -size.

@mixin img-retina($file-1x, $file-2x, $width-1x, $height-1x) {
  background-image: url($file-1x);

  // Autoprefixer takes care of adding -webkit-min-device-pixel-ratio and -o-min-device-pixel-ratio,
  // but doesn't convert dppx=>dpi.
  // There's no such thing as unprefixed min-device-pixel-ratio since it's nonstandard.
  // Compatibility info: https://caniuse.com/css-media-resolution
  @media only screen and (min-resolution: 192dpi), // IE9-11 don't support dppx
    only screen and (min-resolution: 2dppx) { // Standardized
    background-image: url($file-2x);
    background-size: $width-1x $height-1x;
  }
  @include deprecate("`img-retina()`", "v4.3.0", "v5");
}
";s:6:"digest";s:32:"8c5b0c90528cb2ad34149ef323dd534b";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:40:"vendor/bootstrap/scss/mixins/_image.scss";}