O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:73:"C:\wamp64\www\kardini_app\assets\vendor\bootstrap\scss\mixins\_caret.scss";s:10:"publicPath";s:81:"/assets/vendor/bootstrap/scss/mixins/_caret-4d3674bc6eb83da8bc42ee4718f467d5.scss";s:23:"publicPathWithoutDigest";s:48:"/assets/vendor/bootstrap/scss/mixins/_caret.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:1484:"@mixin caret-down() {
  border-top: $caret-width solid;
  border-right: $caret-width solid transparent;
  border-bottom: 0;
  border-left: $caret-width solid transparent;
}

@mixin caret-up() {
  border-top: 0;
  border-right: $caret-width solid transparent;
  border-bottom: $caret-width solid;
  border-left: $caret-width solid transparent;
}

@mixin caret-right() {
  border-top: $caret-width solid transparent;
  border-right: 0;
  border-bottom: $caret-width solid transparent;
  border-left: $caret-width solid;
}

@mixin caret-left() {
  border-top: $caret-width solid transparent;
  border-right: $caret-width solid;
  border-bottom: $caret-width solid transparent;
}

@mixin caret($direction: down) {
  @if $enable-caret {
    &::after {
      display: inline-block;
      margin-left: $caret-spacing;
      vertical-align: $caret-vertical-align;
      content: "";
      @if $direction == down {
        @include caret-down();
      } @else if $direction == up {
        @include caret-up();
      } @else if $direction == right {
        @include caret-right();
      }
    }

    @if $direction == left {
      &::after {
        display: none;
      }

      &::before {
        display: inline-block;
        margin-right: $caret-spacing;
        vertical-align: $caret-vertical-align;
        content: "";
        @include caret-left();
      }
    }

    &:empty::after {
      margin-left: 0;
    }
  }
}
";s:6:"digest";s:32:"4d3674bc6eb83da8bc42ee4718f467d5";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:40:"vendor/bootstrap/scss/mixins/_caret.scss";}