O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:65:"C:\wamp64\www\kardini\assets\vendor\bootstrap\scss\_progress.scss";s:10:"publicPath";s:77:"/assets/vendor/bootstrap/scss/_progress-de0013ed5ae80acc1fdd48e68a255ad4.scss";s:23:"publicPathWithoutDigest";s:44:"/assets/vendor/bootstrap/scss/_progress.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:1218:"// Disable animation if transitions are disabled
@if $enable-transitions {
  @keyframes progress-bar-stripes {
    from { background-position: $progress-height 0; }
    to { background-position: 0 0; }
  }
}

.progress {
  display: flex;
  height: $progress-height;
  overflow: hidden; // force rounded corners by cropping it
  line-height: 0;
  @include font-size($progress-font-size);
  background-color: $progress-bg;
  @include border-radius($progress-border-radius);
  @include box-shadow($progress-box-shadow);
}

.progress-bar {
  display: flex;
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
  color: $progress-bar-color;
  text-align: center;
  white-space: nowrap;
  background-color: $progress-bar-bg;
  @include transition($progress-bar-transition);
}

.progress-bar-striped {
  @include gradient-striped();
  background-size: $progress-height $progress-height;
}

@if $enable-transitions {
  .progress-bar-animated {
    animation: $progress-bar-animation-timing progress-bar-stripes;

    @if $enable-prefers-reduced-motion-media-query {
      @media (prefers-reduced-motion: reduce) {
        animation: none;
      }
    }
  }
}
";s:6:"digest";s:32:"de0013ed5ae80acc1fdd48e68a255ad4";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:36:"vendor/bootstrap/scss/_progress.scss";}