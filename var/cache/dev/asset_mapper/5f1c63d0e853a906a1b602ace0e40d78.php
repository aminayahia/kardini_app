O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:77:"C:\wamp64\www\kardini_app\assets\vendor\bootstrap\scss\mixins\_deprecate.scss";s:10:"publicPath";s:85:"/assets/vendor/bootstrap/scss/mixins/_deprecate-7b4b28a0bbafd58390ea49f37dd1989d.scss";s:23:"publicPathWithoutDigest";s:52:"/assets/vendor/bootstrap/scss/mixins/_deprecate.scss";s:15:"publicExtension";s:4:"scss";s:7:"content";s:623:"// Deprecate mixin
//
// This mixin can be used to deprecate mixins or functions.
// `$enable-deprecation-messages` is a global variable, `$ignore-warning` is a variable that can be passed to
// some deprecated mixins to suppress the warning (for example if the mixin is still be used in the current version of Bootstrap)
@mixin deprecate($name, $deprecate-version, $remove-version, $ignore-warning: false) {
  @if ($enable-deprecation-messages != false and $ignore-warning != true) {
    @warn "#{$name} has been deprecated as of #{$deprecate-version}. It will be removed entirely in #{$remove-version}.";
  }
}
";s:6:"digest";s:32:"7b4b28a0bbafd58390ea49f37dd1989d";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:44:"vendor/bootstrap/scss/mixins/_deprecate.scss";}