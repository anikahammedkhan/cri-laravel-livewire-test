/**
 * Create a donut chart using Chart.js
 *
 * @param {string} elementId - The ID of the container element
 * @param {Array} data - The chart data with name, value, and color properties
 * @param {Object} options - Additional options for the chart
 * @returns {Object} The Chart.js instance
 */
export function createDonutChart(elementId, data, options = {}) {
    const container = document.getElementById(elementId);
    if (!container) {
        console.error(`Element with ID "${elementId}" not found`);
        return null;
    }

    const canvas = document.createElement("canvas");
    container.appendChild(canvas);

    const defaultOptions = {
        cutout: "70%",
        showLegend: false,
        responsive: true,
        maintainAspectRatio: false,
    };

    const chartOptions = { ...defaultOptions, ...options };

    return new Chart(canvas, {
        type: "doughnut",
        data: {
            labels: data.map((item) => item.name),
            datasets: [
                {
                    data: data.map((item) => item.value),
                    backgroundColor: data.map((item) => item.color),
                    borderWidth: 0,
                    hoverOffset: 4,
                },
            ],
        },
        options: {
            responsive: chartOptions.responsive,
            maintainAspectRatio: chartOptions.maintainAspectRatio,
            cutout: chartOptions.cutout,
            plugins: {
                legend: {
                    display: chartOptions.showLegend,
                },
            },
        },
    });
}

/**
 * Update an existing donut chart with new data
 *
 * @param {Object} chart - The Chart.js instance
 * @param {Array} data - The new chart data
 */
export function updateDonutChart(chart, data) {
    if (!chart) {
        console.error("Chart instance is required");
        return;
    }

    chart.data.labels = data.map((item) => item.name);
    chart.data.datasets[0].data = data.map((item) => item.value);
    chart.data.datasets[0].backgroundColor = data.map((item) => item.color);
    chart.update();
}
