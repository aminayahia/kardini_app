O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:45:"C:\wamp64\www\kardini\assets\scss\_cards.scss";s:10:"publicPath";s:57:"/assets/scss/_cards-564ad7c756f0b4165e57d2860f6d84b1.scss";s:23:"publicPathWithoutDigest";s:24:"/assets/scss/_cards.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:769:"// Custom Card Styling

.card {
  .card-header {
    // Format Dropdowns in Card Headings
    .dropdown {
      line-height: 1;
      .dropdown-menu {
        line-height: 1.5;
      }
    }
  }
  // Collapsable Card Styling
  .card-header[data-toggle="collapse"] {
    text-decoration: none;
    position: relative;
    padding: 0.75rem 3.25rem 0.75rem 1.25rem;
    &::after {
      position: absolute;
      right: 0;
      top: 0;
      padding-right: 1.725rem;
      line-height: 51px;
      font-weight: 900;
      content: '\f107';
      font-family: 'Font Awesome 5 Free';
      color: $gray-400;
    }
    &.collapsed {
      border-radius: $card-border-radius;
      &::after {
        content: '\f105';
      }
    }
  }
}
";s:6:"digest";s:32:"564ad7c756f0b4165e57d2860f6d84b1";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:16:"scss/_cards.scss";}