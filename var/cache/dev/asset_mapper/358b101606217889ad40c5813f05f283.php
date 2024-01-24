O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:81:"C:\wamp64\www\kardini_app\assets\vendor\bootstrap\scss\mixins\_screen-reader.scss";s:10:"publicPath";s:89:"/assets/vendor/bootstrap/scss/mixins/_screen-reader-75e8b67bd3ff07d4448a8ead7ffd4a63.scss";s:23:"publicPathWithoutDigest";s:56:"/assets/vendor/bootstrap/scss/mixins/_screen-reader.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:860:"// Only display content to screen readers
//
// See: https://www.a11yproject.com/posts/2013-01-11-how-to-hide-content/
// See: https://hugogiraudel.com/2016/10/13/css-hide-and-seek/

@mixin sr-only() {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px; // Fix for https://github.com/twbs/bootstrap/issues/25686
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}

// Use in conjunction with .sr-only to only display content when it's focused.
//
// Useful for "Skip to main content" links; see https://www.w3.org/TR/2013/NOTE-WCAG20-TECHS-20130905/G1
//
// Credit: HTML5 Boilerplate

@mixin sr-only-focusable() {
  &:active,
  &:focus {
    position: static;
    width: auto;
    height: auto;
    overflow: visible;
    clip: auto;
    white-space: normal;
  }
}
";s:6:"digest";s:32:"75e8b67bd3ff07d4448a8ead7ffd4a63";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:48:"vendor/bootstrap/scss/mixins/_screen-reader.scss";}