O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:67:"C:\wamp64\www\kardini_app\assets\vendor\bootstrap\scss\_toasts.scss";s:10:"publicPath";s:75:"/assets/vendor/bootstrap/scss/_toasts-f84671d38845bd4cc9e1fcbdcafcb1ca.scss";s:23:"publicPathWithoutDigest";s:42:"/assets/vendor/bootstrap/scss/_toasts.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:1178:".toast {
  // Prevents from shrinking in IE11, when in a flex container
  // See https://github.com/twbs/bootstrap/issues/28341
  flex-basis: $toast-max-width;
  max-width: $toast-max-width;
  @include font-size($toast-font-size);
  color: $toast-color;
  background-color: $toast-background-color;
  background-clip: padding-box;
  border: $toast-border-width solid $toast-border-color;
  box-shadow: $toast-box-shadow;
  opacity: 0;
  @include border-radius($toast-border-radius);

  &:not(:last-child) {
    margin-bottom: $toast-padding-x;
  }

  &.showing {
    opacity: 1;
  }

  &.show {
    display: block;
    opacity: 1;
  }

  &.hide {
    display: none;
  }
}

.toast-header {
  display: flex;
  align-items: center;
  padding: $toast-padding-y $toast-padding-x;
  color: $toast-header-color;
  background-color: $toast-header-background-color;
  background-clip: padding-box;
  border-bottom: $toast-border-width solid $toast-header-border-color;
  @include border-top-radius(subtract($toast-border-radius, $toast-border-width));
}

.toast-body {
  padding: $toast-padding-x; // apply to both vertical and horizontal
}
";s:6:"digest";s:32:"f84671d38845bd4cc9e1fcbdcafcb1ca";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:34:"vendor/bootstrap/scss/_toasts.scss";}