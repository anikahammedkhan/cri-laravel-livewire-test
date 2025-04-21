import "./bootstrap";
import { createDonutChart, updateDonutChart } from "./components/donut-chart";

// Alpine.js for interactive UI components
import Alpine from "alpinejs";
window.Alpine = Alpine;

// Make chart functions available globally
window.createDonutChart = createDonutChart;
window.updateDonutChart = updateDonutChart;

// Start Alpine.js
Alpine.start();
