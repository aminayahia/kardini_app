O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:73:"C:\wamp64\www\kardini\assets\vendor\bootstrap\scss\mixins\_table-row.scss";s:10:"publicPath";s:85:"/assets/vendor/bootstrap/scss/mixins/_table-row-ae2e0f21069fa3a2c25fa0241bb5b046.scss";s:23:"publicPathWithoutDigest";s:52:"/assets/vendor/bootstrap/scss/mixins/_table-row.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:833:"// Tables

@mixin table-row-variant($state, $background, $border: null) {
  // Exact selectors below required to override `.table-striped` and prevent
  // inheritance to nested tables.
  .table-#{$state} {
    &,
    > th,
    > td {
      background-color: $background;
    }

    @if $border != null {
      th,
      td,
      thead th,
      tbody + tbody {
        border-color: $border;
      }
    }
  }

  // Hover states for `.table-hover`
  // Note: this is not available for cells or rows within `thead` or `tfoot`.
  .table-hover {
    $hover-background: darken($background, 5%);

    .table-#{$state} {
      @include hover() {
        background-color: $hover-background;

        > td,
        > th {
          background-color: $hover-background;
        }
      }
    }
  }
}
";s:6:"digest";s:32:"ae2e0f21069fa3a2c25fa0241bb5b046";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:44:"vendor/bootstrap/scss/mixins/_table-row.scss";}