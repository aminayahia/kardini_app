O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:75:"C:\wamp64\www\kardini_app\assets\vendor\bootstrap\scss\utilities\_text.scss";s:10:"publicPath";s:83:"/assets/vendor/bootstrap/scss/utilities/_text-83b407b87f01b3cb1e81db81d709b46a.scss";s:23:"publicPathWithoutDigest";s:50:"/assets/vendor/bootstrap/scss/utilities/_text.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:2178:"// stylelint-disable declaration-no-important

//
// Text
//

.text-monospace { font-family: $font-family-monospace !important; }

// Alignment

.text-justify  { text-align: justify !important; }
.text-wrap     { white-space: normal !important; }
.text-nowrap   { white-space: nowrap !important; }
.text-truncate { @include text-truncate(); }

// Responsive alignment

@each $breakpoint in map-keys($grid-breakpoints) {
  @include media-breakpoint-up($breakpoint) {
    $infix: breakpoint-infix($breakpoint, $grid-breakpoints);

    .text#{$infix}-left   { text-align: left !important; }
    .text#{$infix}-right  { text-align: right !important; }
    .text#{$infix}-center { text-align: center !important; }
  }
}

// Transformation

.text-lowercase  { text-transform: lowercase !important; }
.text-uppercase  { text-transform: uppercase !important; }
.text-capitalize { text-transform: capitalize !important; }

// Weight and italics

.font-weight-light   { font-weight: $font-weight-light !important; }
.font-weight-lighter { font-weight: $font-weight-lighter !important; }
.font-weight-normal  { font-weight: $font-weight-normal !important; }
.font-weight-bold    { font-weight: $font-weight-bold !important; }
.font-weight-bolder  { font-weight: $font-weight-bolder !important; }
.font-italic         { font-style: italic !important; }

// Contextual colors

.text-white { color: $white !important; }

@each $color, $value in $theme-colors {
  @include text-emphasis-variant(".text-#{$color}", $value, true);
}

.text-body { color: $body-color !important; }
.text-muted { color: $text-muted !important; }

.text-black-50 { color: rgba($black, .5) !important; }
.text-white-50 { color: rgba($white, .5) !important; }

// Misc

.text-hide {
  @include text-hide($ignore-warning: true);
}

.text-decoration-none { text-decoration: none !important; }

.text-break {
  word-break: break-word !important; // Deprecated, but avoids issues with flex containers
  word-wrap: break-word !important; // Used instead of `overflow-wrap` for IE & Edge Legacy
}

// Reset

.text-reset { color: inherit !important; }
";s:6:"digest";s:32:"83b407b87f01b3cb1e81db81d709b46a";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:42:"vendor/bootstrap/scss/utilities/_text.scss";}