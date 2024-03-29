O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:66:"C:\wamp64\www\kardini_app\assets\vendor\bootstrap\scss\_badge.scss";s:10:"publicPath";s:74:"/assets/vendor/bootstrap/scss/_badge-c2d9a78bb3f0f4fbe9eb102ff254c3ba.scss";s:23:"publicPathWithoutDigest";s:41:"/assets/vendor/bootstrap/scss/_badge.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:1175:"// Base class
//
// Requires one of the contextual, color modifier classes for `color` and
// `background-color`.

.badge {
  display: inline-block;
  padding: $badge-padding-y $badge-padding-x;
  @include font-size($badge-font-size);
  font-weight: $badge-font-weight;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  @include border-radius($badge-border-radius);
  @include transition($badge-transition);

  @at-root a#{&} {
    @include hover-focus() {
      text-decoration: none;
    }
  }

  // Empty badges collapse automatically
  &:empty {
    display: none;
  }
}

// Quick fix for badges in buttons
.btn .badge {
  position: relative;
  top: -1px;
}

// Pill badges
//
// Make them extra rounded with a modifier to replace v3's badges.

.badge-pill {
  padding-right: $badge-pill-padding-x;
  padding-left: $badge-pill-padding-x;
  @include border-radius($badge-pill-border-radius);
}

// Colors
//
// Contextual variations (linked badges get darker on :hover).

@each $color, $value in $theme-colors {
  .badge-#{$color} {
    @include badge-variant($value);
  }
}
";s:6:"digest";s:32:"c2d9a78bb3f0f4fbe9eb102ff254c3ba";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:33:"vendor/bootstrap/scss/_badge.scss";}