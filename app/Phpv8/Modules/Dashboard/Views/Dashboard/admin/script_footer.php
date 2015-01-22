 
    /*Jquery Easy Pie Chart*/
      $('.epie-chart').easyPieChart({
        barColor: '#FD9C35',
        trackColor: '#EFEFEF',
        lineWidth: 7,
        animate: 600,
        size: 103,
        onStep: function(val){//Update current value while animation
          $("span", this.$el).html(parseInt(val) + "%");
        }
        });

 