O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:45:"C:\wamp64\www\kardini\assets\scss\_error.scss";s:10:"publicPath";s:57:"/assets/scss/_error-eb473331beba6ef2f61b469d797e989d.scss";s:23:"publicPathWithoutDigest";s:24:"/assets/scss/_error.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:1191:"// Lucas Bebber's Glitch Effect
// Tutorial and CSS from CSS Tricks
// https://css-tricks.com/glitch-effect-text-images-svg/

.error {
  color: $gray-800;
  font-size: 7rem;
  position: relative;
  line-height: 1;
  width: 12.5rem;
}
@keyframes noise-anim {
  $steps: 20;
  @for $i from 0 through $steps {
    #{percentage($i*(1/$steps))} {
      clip: rect(random(100)+px,9999px,random(100)+px,0);
    }
  }
}
.error:after {
  content: attr(data-text);
  position: absolute;
  left: 2px;
  text-shadow: -1px 0 $red;
  top: 0;
  color: $gray-800;
  background: $gray-100;
  overflow: hidden;
  clip: rect(0,900px,0,0);
  animation: noise-anim 2s infinite linear alternate-reverse;
}

@keyframes noise-anim-2 {
  $steps: 20;
  @for $i from 0 through $steps {
    #{percentage($i*(1/$steps))} {
      clip: rect(random(100)+px,9999px,random(100)+px,0);
    }
  }
}
.error:before {
  content: attr(data-text);
  position: absolute;
  left: -2px;
  text-shadow: 1px 0 $blue;
  top: 0;
  color: $gray-800;
  background: $gray-100;
  overflow: hidden;
  clip: rect(0,900px,0,0);
  animation: noise-anim-2 3s infinite linear alternate-reverse;
}
";s:6:"digest";s:32:"eb473331beba6ef2f61b469d797e989d";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:16:"scss/_error.scss";}