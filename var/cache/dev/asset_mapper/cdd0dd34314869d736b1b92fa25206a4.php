O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:66:"C:\wamp64\www\kardini_app\assets\vendor\bootstrap\scss\_alert.scss";s:10:"publicPath";s:74:"/assets/vendor/bootstrap/scss/_alert-de75aa7aa5c275ae36b4b51fe87fa1cb.scss";s:23:"publicPathWithoutDigest";s:41:"/assets/vendor/bootstrap/scss/_alert.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:1216:"//
// Base styles
//

.alert {
  position: relative;
  padding: $alert-padding-y $alert-padding-x;
  margin-bottom: $alert-margin-bottom;
  border: $alert-border-width solid transparent;
  @include border-radius($alert-border-radius);
}

// Headings for larger alerts
.alert-heading {
  // Specified to prevent conflicts of changing $headings-color
  color: inherit;
}

// Provide class for links that match alerts
.alert-link {
  font-weight: $alert-link-font-weight;
}


// Dismissible alerts
//
// Expand the right padding and account for the close button's positioning.

.alert-dismissible {
  padding-right: $close-font-size + $alert-padding-x * 2;

  // Adjust close link position
  .close {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 2;
    padding: $alert-padding-y $alert-padding-x;
    color: inherit;
  }
}


// Alternate styles
//
// Generate contextual modifier classes for colorizing the alert.

@each $color, $value in $theme-colors {
  .alert-#{$color} {
    @include alert-variant(theme-color-level($color, $alert-bg-level), theme-color-level($color, $alert-border-level), theme-color-level($color, $alert-color-level));
  }
}
";s:6:"digest";s:32:"de75aa7aa5c275ae36b4b51fe87fa1cb";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:33:"vendor/bootstrap/scss/_alert.scss";}