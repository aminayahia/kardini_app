O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:55:"C:\wamp64\www\kardini_app\assets\scss\navs\_global.scss";s:10:"publicPath";s:63:"/assets/scss/navs/_global-f82809fa87cc0bf90fc41e0bbad21499.scss";s:23:"publicPathWithoutDigest";s:30:"/assets/scss/navs/_global.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:953:"// Global styles for both custom sidebar and topbar compoments

.sidebar,
.topbar {
  .nav-item {
    // Customize Dropdown Arrows for Navbar
    &.dropdown {
      .dropdown-toggle {
        &::after {
          width: 1rem;
          text-align: center;
          float: right;
          vertical-align: 0;
          border: 0;
          font-weight: 900;
          content: '\f105';
          font-family: 'Font Awesome 5 Free';
        }
      }
      &.show {
        .dropdown-toggle::after {
          content: '\f107';
        }
      }
    }
    // Counter for nav links and nav link image sizing
    .nav-link {
      position: relative;
      .badge-counter {
        position: absolute;
        transform: scale(0.7);
        transform-origin: top right;
        right: .25rem;
        margin-top: -.25rem;
      }
      .img-profile {
        height: 2rem;
        width: 2rem;
      }
    }
  }
}
";s:6:"digest";s:32:"f82809fa87cc0bf90fc41e0bbad21499";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:22:"scss/navs/_global.scss";}