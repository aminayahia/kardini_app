O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:77:"C:\wamp64\www\kardini\assets\vendor\bootstrap\scss\mixins\_border-radius.scss";s:10:"publicPath";s:89:"/assets/vendor/bootstrap/scss/mixins/_border-radius-8ba6955cf82ec68c17695029ae4218a9.scss";s:23:"publicPathWithoutDigest";s:56:"/assets/vendor/bootstrap/scss/mixins/_border-radius.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:1904:"// stylelint-disable property-disallowed-list
// Single side border-radius

// Helper function to replace negative values with 0
@function valid-radius($radius) {
  $return: ();
  @each $value in $radius {
    @if type-of($value) == number {
      $return: append($return, max($value, 0));
    } @else {
      $return: append($return, $value);
    }
  }
  @return $return;
}

@mixin border-radius($radius: $border-radius, $fallback-border-radius: false) {
  @if $enable-rounded {
    border-radius: valid-radius($radius);
  }
  @else if $fallback-border-radius != false {
    border-radius: $fallback-border-radius;
  }
}

@mixin border-top-radius($radius) {
  @if $enable-rounded {
    border-top-left-radius: valid-radius($radius);
    border-top-right-radius: valid-radius($radius);
  }
}

@mixin border-right-radius($radius) {
  @if $enable-rounded {
    border-top-right-radius: valid-radius($radius);
    border-bottom-right-radius: valid-radius($radius);
  }
}

@mixin border-bottom-radius($radius) {
  @if $enable-rounded {
    border-bottom-right-radius: valid-radius($radius);
    border-bottom-left-radius: valid-radius($radius);
  }
}

@mixin border-left-radius($radius) {
  @if $enable-rounded {
    border-top-left-radius: valid-radius($radius);
    border-bottom-left-radius: valid-radius($radius);
  }
}

@mixin border-top-left-radius($radius) {
  @if $enable-rounded {
    border-top-left-radius: valid-radius($radius);
  }
}

@mixin border-top-right-radius($radius) {
  @if $enable-rounded {
    border-top-right-radius: valid-radius($radius);
  }
}

@mixin border-bottom-right-radius($radius) {
  @if $enable-rounded {
    border-bottom-right-radius: valid-radius($radius);
  }
}

@mixin border-bottom-left-radius($radius) {
  @if $enable-rounded {
    border-bottom-left-radius: valid-radius($radius);
  }
}
";s:6:"digest";s:32:"8ba6955cf82ec68c17695029ae4218a9";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:48:"vendor/bootstrap/scss/mixins/_border-radius.scss";}