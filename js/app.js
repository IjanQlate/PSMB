$(document).ready(function(){
  $.ajax({
    url: "http://localhost/chartjs/data2.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var InstallTeam = [];
      var sum = [];

      for(var i in data) {
        InstallTeam.push("Player " + data[i].InstallTeam);
        sum.push(data[i].total);
      }

      var chartdata = {
        labels: InstallTeam,
        datasets : [
          {
            label: 'Player Score',
            backgroundColor: 'rgba(200, 200, 200, 0.75)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: sum
          }
        ]
      };

      var ctx = $("#mycanvas2");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});