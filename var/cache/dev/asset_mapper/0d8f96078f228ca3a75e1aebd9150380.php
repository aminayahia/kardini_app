O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:65:"C:\wamp64\www\kardini_app\assets\vendor\bootstrap\scss\_root.scss";s:10:"publicPath";s:73:"/assets/vendor/bootstrap/scss/_root-9d355da2a4f8c273841a1b2a90bffb5d.scss";s:23:"publicPathWithoutDigest";s:40:"/assets/vendor/bootstrap/scss/_root.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:591:":root {
  // Custom variable values only support SassScript inside `#{}`.
  @each $color, $value in $colors {
    --#{$color}: #{$value};
  }

  @each $color, $value in $theme-colors {
    --#{$color}: #{$value};
  }

  @each $bp, $value in $grid-breakpoints {
    --breakpoint-#{$bp}: #{$value};
  }

  // Use `inspect` for lists so that quoted items keep the quotes.
  // See https://github.com/sass/sass/issues/2383#issuecomment-336349172
  --font-family-sans-serif: #{inspect($font-family-sans-serif)};
  --font-family-monospace: #{inspect($font-family-monospace)};
}
";s:6:"digest";s:32:"9d355da2a4f8c273841a1b2a90bffb5d";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:32:"vendor/bootstrap/scss/_root.scss";}