O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:61:"C:\wamp64\www\kardini\assets\vendor\bootstrap\scss\_code.scss";s:10:"publicPath";s:73:"/assets/vendor/bootstrap/scss/_code-2c8a8e508cb9d6d92e323ccd2b3801da.scss";s:23:"publicPathWithoutDigest";s:40:"/assets/vendor/bootstrap/scss/_code.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:1060:"// Inline code
code {
  @include font-size($code-font-size);
  color: $code-color;
  word-wrap: break-word;

  // Streamline the style when inside anchors to avoid broken underline and more
  a > & {
    color: inherit;
  }
}

// User input typically entered via keyboard
kbd {
  padding: $kbd-padding-y $kbd-padding-x;
  @include font-size($kbd-font-size);
  color: $kbd-color;
  background-color: $kbd-bg;
  @include border-radius($border-radius-sm);
  @include box-shadow($kbd-box-shadow);

  kbd {
    padding: 0;
    @include font-size(100%);
    font-weight: $nested-kbd-font-weight;
    @include box-shadow(none);
  }
}

// Blocks of code
pre {
  display: block;
  @include font-size($code-font-size);
  color: $pre-color;

  // Account for some code outputs that place code tags in pre tags
  code {
    @include font-size(inherit);
    color: inherit;
    word-break: normal;
  }
}

// Enable scrollable blocks of code
.pre-scrollable {
  max-height: $pre-scrollable-max-height;
  overflow-y: scroll;
}
";s:6:"digest";s:32:"2c8a8e508cb9d6d92e323ccd2b3801da";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:32:"vendor/bootstrap/scss/_code.scss";}