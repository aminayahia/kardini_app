O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:54:"C:\wamp64\www\kardini\assets\js\demo\chart-pie-demo.js";s:10:"publicPath";s:66:"/assets/js/demo/chart-pie-demo-996c8b5668fc0da5e5ec3bdc44734680.js";s:23:"publicPathWithoutDigest";s:33:"/assets/js/demo/chart-pie-demo.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1092:"// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Direct", "Referral", "Social"],
    datasets: [{
      data: [55, 30, 15],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
";s:6:"digest";s:32:"996c8b5668fc0da5e5ec3bdc44734680";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:25:"js/demo/chart-pie-demo.js";}