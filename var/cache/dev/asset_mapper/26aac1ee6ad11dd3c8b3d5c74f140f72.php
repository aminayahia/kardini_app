O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:74:"C:\wamp64\www\kardini\assets\vendor\bootstrap\scss\mixins\_transition.scss";s:10:"publicPath";s:86:"/assets/vendor/bootstrap/scss/mixins/_transition-1f64774d62a99843435c04450f0e9ec2.scss";s:23:"publicPathWithoutDigest";s:53:"/assets/vendor/bootstrap/scss/mixins/_transition.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:707:"// stylelint-disable property-disallowed-list
@mixin transition($transition...) {
  @if length($transition) == 0 {
    $transition: $transition-base;
  }

  @if length($transition) > 1 {
    @each $value in $transition {
      @if $value == null or $value == none {
        @warn "The keyword 'none' or 'null' must be used as a single argument.";
      }
    }
  }

  @if $enable-transitions {
    @if nth($transition, 1) != null {
      transition: $transition;
    }

    @if $enable-prefers-reduced-motion-media-query and nth($transition, 1) != null and nth($transition, 1) != none {
      @media (prefers-reduced-motion: reduce) {
        transition: none;
      }
    }
  }
}
";s:6:"digest";s:32:"1f64774d62a99843435c04450f0e9ec2";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:45:"vendor/bootstrap/scss/mixins/_transition.scss";}