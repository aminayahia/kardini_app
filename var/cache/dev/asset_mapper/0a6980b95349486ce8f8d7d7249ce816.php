O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:63:"C:\wamp64\www\kardini\assets\vendor\bootstrap\scss\_images.scss";s:10:"publicPath";s:75:"/assets/vendor/bootstrap/scss/_images-989310fb31d37b4b19323d0b6338f1ed.scss";s:23:"publicPathWithoutDigest";s:42:"/assets/vendor/bootstrap/scss/_images.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:1199:"// Responsive images (ensure images don't scale beyond their parents)
//
// This is purposefully opt-in via an explicit class rather than being the default for all `<img>`s.
// We previously tried the "images are responsive by default" approach in Bootstrap v2,
// and abandoned it in Bootstrap v3 because it breaks lots of third-party widgets (including Google Maps)
// which weren't expecting the images within themselves to be involuntarily resized.
// See also https://github.com/twbs/bootstrap/issues/18178
.img-fluid {
  @include img-fluid();
}


// Image thumbnails
.img-thumbnail {
  padding: $thumbnail-padding;
  background-color: $thumbnail-bg;
  border: $thumbnail-border-width solid $thumbnail-border-color;
  @include border-radius($thumbnail-border-radius);
  @include box-shadow($thumbnail-box-shadow);

  // Keep them at most 100% wide
  @include img-fluid();
}

//
// Figures
//

.figure {
  // Ensures the caption's text aligns with the image.
  display: inline-block;
}

.figure-img {
  margin-bottom: $spacer / 2;
  line-height: 1;
}

.figure-caption {
  @include font-size($figure-caption-font-size);
  color: $figure-caption-color;
}
";s:6:"digest";s:32:"989310fb31d37b4b19323d0b6338f1ed";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:34:"vendor/bootstrap/scss/_images.scss";}