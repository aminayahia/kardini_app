O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:51:"C:\wamp64\www\kardini\assets\scss\navs\_topbar.scss";s:10:"publicPath";s:63:"/assets/scss/navs/_topbar-9f7eb1907e0a3f78a5ac9ce8feaf6779.scss";s:23:"publicPathWithoutDigest";s:30:"/assets/scss/navs/_topbar.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:2940:"// Topbar
.topbar {
  height: $topbar-base-height;
  #sidebarToggleTop {
    height: 2.5rem;
    width: 2.5rem;
    &:hover {
      background-color: $gray-200;
    }
    &:active {
      background-color: $gray-300;
    }
  }
  .navbar-search {
    width: 25rem;
    input {
      font-size: 0.85rem;
      height: auto;
    }
  }
  .topbar-divider {
    width: 0;
    border-right: 1px solid $border-color;
    height: calc(#{$topbar-base-height} - 2rem);
    margin: auto 1rem;
  }
  .nav-item {
    .nav-link {
      height: $topbar-base-height;
      display: flex;
      align-items: center;
      padding: 0 0.75rem;
      &:focus {
        outline: none;
      }
    }
    &:focus {
      outline: none;
    }
  }
  .dropdown {
    position: static;
    .dropdown-menu {
      width: calc(100% - #{$grid-gutter-width});
      right: $grid-gutter-width / 2;
    }
  }
  .dropdown-list {
    padding: 0;
    border: none;
    overflow: hidden;
    .dropdown-header {
      background-color: $primary;
      border: 1px solid $primary;
      padding-top: 0.75rem;
      padding-bottom: 0.75rem;
      color: $white;
    }
    .dropdown-item {
      white-space: normal;
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
      border-left: 1px solid $border-color;
      border-right: 1px solid $border-color;
      border-bottom: 1px solid $border-color;
      line-height: 1.3rem;
      .dropdown-list-image {
        position: relative;
        height: 2.5rem;
        width: 2.5rem;
        img {
          height: 2.5rem;
          width: 2.5rem;
        }
        .status-indicator {
          background-color: $gray-200;
          height: 0.75rem;
          width: 0.75rem;
          border-radius: 100%;
          position: absolute;
          bottom: 0;
          right: 0;
          border: .125rem solid $white;
        }
      }
      .text-truncate {
        max-width: 10rem;
      }
      &:active {
        background-color: $gray-200;
        color: $gray-900;
      }
    }
  }
  @include media-breakpoint-up(sm) {
    .dropdown {
      position: relative;
      .dropdown-menu {
        width: auto;
        right: 0;
      }
    }
    .dropdown-list {
      width: 20rem !important;
      .dropdown-item {
        .text-truncate {
          max-width: 13.375rem;
        }
      }
    }
  }
}

.topbar.navbar-dark {
  .navbar-nav {
    .nav-item {
      .nav-link {
        color: fade-out($white, 0.2);
        &:hover {
          color: $white;
        }
        &:active {
          color: $white;
        }
      }
    }
  }
}

.topbar.navbar-light {
  .navbar-nav {
    .nav-item {
      .nav-link {
        color: $gray-400;
        &:hover {
          color: $gray-500;
        }
        &:active {
          color: $gray-600;
        }
      }
    }
  }
}
";s:6:"digest";s:32:"9f7eb1907e0a3f78a5ac9ce8feaf6779";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:22:"scss/navs/_topbar.scss";}