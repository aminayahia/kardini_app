O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:66:"C:\wamp64\www\kardini_app\assets\vendor\bootstrap\scss\_close.scss";s:10:"publicPath";s:74:"/assets/vendor/bootstrap/scss/_close-3cdd29b60cd528d008595af76648620f.scss";s:23:"publicPathWithoutDigest";s:41:"/assets/vendor/bootstrap/scss/_close.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:980:".close {
  float: right;
  @include font-size($close-font-size);
  font-weight: $close-font-weight;
  line-height: 1;
  color: $close-color;
  text-shadow: $close-text-shadow;
  opacity: .5;

  // Override <a>'s hover style
  @include hover() {
    color: $close-color;
    text-decoration: none;
  }

  &:not(:disabled):not(.disabled) {
    @include hover-focus() {
      opacity: .75;
    }
  }
}

// Additional properties for button version
// iOS requires the button element instead of an anchor tag.
// If you want the anchor version, it requires `href="#"`.
// See https://developer.mozilla.org/en-US/docs/Web/Events/click#Safari_Mobile

// stylelint-disable-next-line selector-no-qualifying-type
button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
}

// Future-proof disabling of clicks on `<a>` elements

// stylelint-disable-next-line selector-no-qualifying-type
a.close.disabled {
  pointer-events: none;
}
";s:6:"digest";s:32:"3cdd29b60cd528d008595af76648620f";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:33:"vendor/bootstrap/scss/_close.scss";}