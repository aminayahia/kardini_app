O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:61:"C:\wamp64\www\kardini\assets\vendor\bootstrap\scss\_grid.scss";s:10:"publicPath";s:73:"/assets/vendor/bootstrap/scss/_grid-db75a52f572a6606b9883fdc408fc7f8.scss";s:23:"publicPathWithoutDigest";s:40:"/assets/vendor/bootstrap/scss/_grid.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:1818:"// Container widths
//
// Set the container width, and override it for fixed navbars in media queries.

@if $enable-grid-classes {
  // Single container class with breakpoint max-widths
  .container,
  // 100% wide container at all breakpoints
  .container-fluid {
    @include make-container();
  }

  // Responsive containers that are 100% wide until a breakpoint
  @each $breakpoint, $container-max-width in $container-max-widths {
    .container-#{$breakpoint} {
      @extend .container-fluid;
    }

    @include media-breakpoint-up($breakpoint, $grid-breakpoints) {
      %responsive-container-#{$breakpoint} {
        max-width: $container-max-width;
      }

      // Extend each breakpoint which is smaller or equal to the current breakpoint
      $extend-breakpoint: true;

      @each $name, $width in $grid-breakpoints {
        @if ($extend-breakpoint) {
          .container#{breakpoint-infix($name, $grid-breakpoints)} {
            @extend %responsive-container-#{$breakpoint};
          }

          // Once the current breakpoint is reached, stop extending
          @if ($breakpoint == $name) {
            $extend-breakpoint: false;
          }
        }
      }
    }
  }
}


// Row
//
// Rows contain your columns.

@if $enable-grid-classes {
  .row {
    @include make-row();
  }

  // Remove the negative margin from default .row, then the horizontal padding
  // from all immediate children columns (to prevent runaway style inheritance).
  .no-gutters {
    margin-right: 0;
    margin-left: 0;

    > .col,
    > [class*="col-"] {
      padding-right: 0;
      padding-left: 0;
    }
  }
}

// Columns
//
// Common styles for small and large grid columns

@if $enable-grid-classes {
  @include make-grid-columns();
}
";s:6:"digest";s:32:"db75a52f572a6606b9883fdc408fc7f8";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:32:"vendor/bootstrap/scss/_grid.scss";}