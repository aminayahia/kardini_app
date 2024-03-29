O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:88:"C:\wamp64\www\kardini_app\vendor\symfony\ux-turbo\assets\dist\turbo_stream_controller.js";s:10:"publicPath";s:85:"/assets/@symfony/ux-turbo/turbo_stream_controller-7f08b2fb2d5327c4a7e1fafa11ec21e8.js";s:23:"publicPathWithoutDigest";s:52:"/assets/@symfony/ux-turbo/turbo_stream_controller.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1083:"import { Controller } from '@hotwired/stimulus';
import { connectStreamSource, disconnectStreamSource } from '@hotwired/turbo';

class default_1 extends Controller {
    initialize() {
        const errorMessages = [];
        if (!this.hasHubValue)
            errorMessages.push('A "hub" value pointing to the Mercure hub must be provided.');
        if (!this.hasTopicValue)
            errorMessages.push('A "topic" value must be provided.');
        if (errorMessages.length)
            throw new Error(errorMessages.join(' '));
        const u = new URL(this.hubValue);
        u.searchParams.append('topic', this.topicValue);
        this.url = u.toString();
    }
    connect() {
        if (this.url) {
            this.es = new EventSource(this.url);
            connectStreamSource(this.es);
        }
    }
    disconnect() {
        if (this.es) {
            this.es.close();
            disconnectStreamSource(this.es);
        }
    }
}
default_1.values = {
    topic: String,
    hub: String,
};

export { default_1 as default };
";s:6:"digest";s:32:"7f08b2fb2d5327c4a7e1fafa11ec21e8";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:44:"@symfony/ux-turbo/turbo_stream_controller.js";}