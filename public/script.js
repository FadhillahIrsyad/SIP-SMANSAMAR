// sidebar

function openSidebar() {
    // Def var using element with id sidebar & close-button.
    var sidebar = document.getElementById("sidebar"); // ref(sidebar.blade.php:5)
    var close = document.getElementById("close-button"); // ref(sidebar.blade.php:2)

    // Add class to element
    sidebar.classList.add("active");
    close.classList.add("show");
}

function closeSidebar() {
    // Def var using element with id sidebar & close-button.
    var sidebar = document.getElementById("sidebar"); // ref(sidebar.blade.php:5)
    var close = document.getElementById("close-button"); // ref(sidebar.blade.php:2)

    // Remove class from element
    sidebar.classList.remove("active");
    close.classList.remove("show");
}

document.addEventListener("click", function handleClickOutsideBox(event) {
    // 👇️ the element the user clicked
    console.log("user clicked: ", event.target);

    const container = document.getElementById("user-menu");

    // Check if the user clicked on the user-img element or one of its child elements
    const userImg = document.getElementById("user-img");
    if (
        container &&
        !container.contains(event.target) &&
        !userImg.contains(event.target)
    ) {
        container.classList.remove("show");
    }
});

// Add a separate event listener for the user-img element
document
    .getElementById("user-img")
    .addEventListener("click", function handleUserImgClick(event) {
        // Prevent the event from propagating further up the DOM tree
        event.stopPropagation();

        // Show the user-menu element
        const container = document.getElementById("user-menu");
        container.classList.add("show");
    });

$(function () {
    /* Chart.js Charts */
    // Sales chart
    var overviewChartCanvas = document
        .getElementById("overview-chart-canvas")
        .getContext("2d");

    var overviewChartData = {
        labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
        ],
        datasets: [
            {
                label: "Siswa",
                backgroundColor: "rgba(60,141,188,0.9)",
                borderColor: "rgba(60,141,188,0.8)",
                pointRadius: false,
                pointColor: "#3b8bba",
                pointStrokeColor: "rgba(60,141,188,1)",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(60,141,188,1)",
                data: [28, 48, 40, 19, 86, 27, 90],
            },
            {
                label: "Tamu",
                backgroundColor: "rgba(210, 214, 222, 1)",
                borderColor: "rgba(210, 214, 222, 1)",
                pointRadius: false,
                pointColor: "rgba(210, 214, 222, 1)",
                pointStrokeColor: "#c1c7d1",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [65, 59, 80, 81, 56, 55, 40],
            },
            {
                label: "Pelanggaran",
                backgroundColor: "rgba(100, 214, 222, 1)",
                borderColor: "rgba(100, 214, 222, 1)",
                pointRadius: false,
                pointColor: "rgba(100, 214, 222, 1)",
                pointStrokeColor: "#c1c7d1",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [25, 69, 60, 81, 36, 25, 20],
            },
        ],
    };

    var overviewChartOptions = {
        maintainAspectRatio: false,
        responsive: true,
        legend: {
            display: true,
        },
        scales: {
            xAxes: [
                {
                    gridLines: {
                        display: false,
                    },
                },
            ],
            yAxes: [
                {
                    gridLines: {
                        display: false,
                    },
                },
            ],
        },
    };

    // This will get the first returned node in the jQuery collection.
    // eslint-disable-next-line no-unused-vars
    var overviewChart = new Chart(overviewChartCanvas, {
        // lgtm[js/unused-local-variable]
        type: "bar",
        data: overviewChartData,
        options: overviewChartOptions,
    });

    // Donut Chart
    var pieChartCanvas = $("#sales-chart-canvas").get(0).getContext("2d");
    var pieData = {
        labels: ["Siswa", "Tamu", "Pelanggaran"],
        datasets: [
            {
                data: [172, 102, 10],
                backgroundColor: ["#f56954", "#00a65a", "#f39c12"],
            },
        ],
    };
    var pieOptions = {
        legend: {
            display: true,
        },
        maintainAspectRatio: false,
        responsive: true,
    };
    // Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    // eslint-disable-next-line no-unused-vars
    var pieChart = new Chart(pieChartCanvas, {
        // lgtm[js/unused-local-variable]
        type: "doughnut",
        data: pieData,
        options: pieOptions,
    });
});
