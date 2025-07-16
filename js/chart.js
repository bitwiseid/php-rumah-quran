// CHART BATANG
const options = {
  series: [
    {
      name: "Total",
      data: monthlyData,
    },
  ],
  chart: {
    type: "bar",
    height: 350,
    toolbar: {
      show: true,
    },
  },
  plotOptions: {
    bar: {
      columnWidth: "50%",
      borderRadius: 5,
    },
  },
  xaxis: {
    labels: {
      style: {
        color: "#FFFFFF",
      },
    },
  },
  tooltip: {
    y: {
      formatter: (val) => {
        const item = monthlyData.find((data) => data.y === val);
        return item ? item.format : val;
      },
    },
    style: {
      fontSize: "14px",
      fontFamily: "Arial, sans-serif",
      color: "#FFFFFF",
    },
  },
  fill: {
    colors: ["#3357FF"],
  },
};

if (document.getElementById("column-chart")) {
  const chart = new ApexCharts(
    document.getElementById("column-chart"),
    options
  );
  chart.render();
}

// CHART PIE
if (document.getElementById("pie-chart") && typeof ApexCharts !== "undefined") {
  const chartOptions = {
    series: chartData.map((item) => item.count),
    colors: chartData.map((item) => item.color),
    chart: {
      height: 420,
      width: "100%",
      type: "pie",
    },
    labels: chartData.map((item) => item.label),
    dataLabels: {
      enabled: true,
      style: {
        fontFamily: "Inter, sans-serif",
      },
    },
    legend: {
      position: "bottom",
      fontFamily: "Inter, sans-serif",
    },
  };

  const chart = new ApexCharts(
    document.getElementById("pie-chart"),
    chartOptions
  );
  chart.render();
}
