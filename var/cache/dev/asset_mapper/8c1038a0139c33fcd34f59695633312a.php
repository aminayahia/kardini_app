O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:67:"C:\wamp64\www\kardini\assets\vendor\bootstrap\scss\_breadcrumb.scss";s:10:"publicPath";s:79:"/assets/vendor/bootstrap/scss/_breadcrumb-f77adc2ff615fe693635d5e7d470b840.scss";s:23:"publicPathWithoutDigest";s:46:"/assets/vendor/bootstrap/scss/_breadcrumb.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:1368:".breadcrumb {
  display: flex;
  flex-wrap: wrap;
  padding: $breadcrumb-padding-y $breadcrumb-padding-x;
  margin-bottom: $breadcrumb-margin-bottom;
  @include font-size($breadcrumb-font-size);
  list-style: none;
  background-color: $breadcrumb-bg;
  @include border-radius($breadcrumb-border-radius);
}

.breadcrumb-item {
  // The separator between breadcrumbs (by default, a forward-slash: "/")
  + .breadcrumb-item {
    padding-left: $breadcrumb-item-padding;

    &::before {
      float: left; // Suppress inline spacings and underlining of the separator
      padding-right: $breadcrumb-item-padding;
      color: $breadcrumb-divider-color;
      content: escape-svg($breadcrumb-divider);
    }
  }

  // IE9-11 hack to properly handle hyperlink underlines for breadcrumbs built
  // without `<ul>`s. The `::before` pseudo-element generates an element
  // *within* the .breadcrumb-item and thereby inherits the `text-decoration`.
  //
  // To trick IE into suppressing the underline, we give the pseudo-element an
  // underline and then immediately remove it.
  + .breadcrumb-item:hover::before {
    text-decoration: underline;
  }
  // stylelint-disable-next-line no-duplicate-selectors
  + .breadcrumb-item:hover::before {
    text-decoration: none;
  }

  &.active {
    color: $breadcrumb-active-color;
  }
}
";s:6:"digest";s:32:"f77adc2ff615fe693635d5e7d470b840";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:38:"vendor/bootstrap/scss/_breadcrumb.scss";}