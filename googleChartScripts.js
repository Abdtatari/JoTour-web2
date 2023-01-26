      var PieChart_Artifact_data;
      var PieChart_Place_data;
      var PieChart_Tour_data;
      var All_time_usage;
      var Tourism_item_accYear;
      const firebaseConfig = {
          apiKey: "AIzaSyAPBMlHDhStkyEe1MpjijWSBL8AlmjB0ag",
          authDomain: "graduationproject-b3870.firebaseapp.com",
          databaseURL: "https://graduationproject-b3870-default-rtdb.firebaseio.com",
          projectId: "graduationproject-b3870",
          storageBucket: "graduationproject-b3870.appspot.com",
          messagingSenderId: "1008925247434",
          appId: "1:1008925247434:web:b3d0afd54b3d6839597133",
          measurementId: "G-S6EBSHFXH4"
        };
        async function getMarker() {
            console.log("hi");
            const app = initializeApp(firebaseConfig);
            console.log(await app.firestore().collection('statistics').get());
            //return snapshot.docs.map(doc => doc.data());
        }
        getMarker();
function loadData(){
          PieChart_Artifact_data = [
          ['Artifact', 'totla of Artifacts'],
          ['Aqaba',     11],
          ['Wadi-rum',      2],
          ['Petra',  10],
          ['Ajloun', 6],
          ['Amman',    3]
        ];
         PieChart_Place_data =  [
          ['Places', 'totla of places'],
          ['Aqaba',     34],
          ['Wadi-rum',      62],
          ['Petra',  35],
          ['Ajloun', 53],
          ['Amman',    23]
        ];
         PieChart_Tour_data = [
          ['Tour', 'totla of tours'],
          ['Aqaba',     16],
          ['Wadi-rum',      57],
          ['Petra',  34],
          ['Ajloun', 53],
          ['Amman',    18]
        ];
        All_time_usage = [
          ['Year', 'Tours', 'Artifacts','Places'],
          ['2021',  1000,      400 , 600],
          ['2022',  1170,      460,  400],
          ['2023',  660,       1120, 700],
        ];
        
        
        Tourism_item_accYear =[
          ['Year', 'Tours', 'Artifacts', 'Places'],
          ['2020', 1000, 400, 200],
          ['2021', 1170, 460, 250],
          ['2022', 660, 1120, 300],
          ['2023', 1030, 540, 350]
        ];
      }
     loadData();
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawPieChart);
      function drawPieChart() {
       PieChart_Tour_data = google.visualization.arrayToDataTable(PieChart_Tour_data);
       PieChart_Place_data=google.visualization.arrayToDataTable(PieChart_Place_data);
       PieChart_Artifact_data =google.visualization.arrayToDataTable(PieChart_Artifact_data);
        var options = {
        legend: 'none',
        pieSliceText: 'label',
        pieHole: 0.4,
        width: '100%',
        height: '100%',
        chartArea: {
        left: "3%",
        top: "3%",
        height: "94%",
        width: "94%"
    },
        animation:{
            startup:true,
            duration: 3000,
            easing: 'out',
          },
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart2'));
        chart.draw(PieChart_Artifact_data, options);
        var chart2 = new google.visualization.PieChart(document.getElementById('donutchart3'));
        chart2.draw(PieChart_Place_data, options);
        var chart3 = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart3.draw(PieChart_Tour_data, options);
      }


      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawLineChart);

      function drawLineChart() {
        var options = {
          curveType: 'function',
          legend: { position: 'bottom' },
          width: '100%',
          height: '100%',
          animation:{
          chartArea: {
                height: "100%",
                width: "100%"
            },
            duration: 3000,
            easing: 'out',
            startup:true,
          },
        };
        
        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        All_time_usage=google.visualization.arrayToDataTable(All_time_usage)
        chart.draw(All_time_usage, options);
      }
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawColumnChart);

      function drawColumnChart() {
        var options = {
         legend: 'none',
         animation:{
            duration: 3000,
            easing: 'out',
            startup:true,
          },
        };
        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
        Tourism_item_accYear=google.visualization.arrayToDataTable(Tourism_item_accYear);

        chart.draw(Tourism_item_accYear, google.charts.Bar.convertOptions(options));
      }