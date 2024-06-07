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
// Dropdown selector
var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("dropdownSelector");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /* When an item is clicked, update the original select box,
        and the selected item: */
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);

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
        labels: ["Izin", "Terlambat", "Pelanggaran", "Tamu"],
        datasets: [
            {
                data: [cis, cts, cps, ct],
                backgroundColor: ["#f56954", "#00a65a", "#f39c12", "ffffff"],
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
        type: "pie",
        data: pieData,
        options: pieOptions,
    });
});

// Import csv
$(document).ready(function () {
    bsCustomFileInput.init();
});

// close import popup
function closePopUp() {
    var container = document.getElementById("import-popup");
    container.classList.add("hidden");
    
}; 

// Data Tables

$(function () {
    $("#example1")
        .DataTable({
            responsive: true,
            lengthChange: false,
            autoWidth: false,
            buttons: [
                {
                    text: "Add",
                    action: function (e, dt, node, config) {
                        window.location.href = "/form-presensi-siswa";
                    },
                    className: "add-button",
                },
                {
                    text: "Import",
                    action: function (e, dt, node, config) {
                        var popup = document.getElementById("import-popup");
                        popup.classList.remove("hidden");
                    },
                    className: "import-button",
                },
                {
                    extend: "collection",
                    text: "Export",
                    className: "export",
                    buttons: [
                        {
                            extend: "copy",
                            exportOptions: {
                                columns: ":visible",
                            },
                        },
                        {
                            extend: "csv",
                            exportOptions: {
                                columns: ":visible",
                            },
                        },
                        {
                            extend: "excel",
                            exportOptions: {
                                columns: ":visible",
                            },
                        },
                        {
                            extend: "pdf",
                            exportOptions: {
                                columns: ":visible",
                            },
                        },
                        {
                            extend: "print",
                            exportOptions: {
                                columns: ":visible",
                            },
                        },
                    ],
                },
                "colvis",
            ],
        })
        .buttons()
        .container()
        .appendTo("#example1_wrapper .col-md-6:eq(0)");
});

$(function () {
    $("#siswa_table")
        .DataTable({
            responsive: true,
            lengthChange: false,
            autoWidth: false,
            buttons: [
                {
                    text: "Add",
                    action: function (e, dt, node, config) {
                        window.location.href = "/form-siswa";
                    },
                    className: "add-button",
                },
                {
                    text: "Import",
                    action: function (e, dt, node, config) {
                        var popup = document.getElementById("import-popup");
                        popup.classList.remove("hidden");
                    },
                    className: "import-button",
                },
                {
                    extend: "collection",
                    text: "Export",
                    className: "export",
                    buttons: [
                        {
                            extend: "copy",
                            exportOptions: {
                                columns: ":visible",
                            },
                        },
                        {
                            extend: "csv",
                            exportOptions: {
                                columns: ":visible",
                            },
                        },
                        {
                            extend: "excel",
                            exportOptions: {
                                columns: ":visible",
                            },
                        },
                        {
                            extend: "pdf",
                            exportOptions: {
                                columns: ":visible",
                            },
                        },
                        {
                            extend: "print",
                            exportOptions: {
                                columns: ":visible",
                            },
                        },
                    ],
                },
                "colvis",
            ],
        })
        .buttons()
        .container()
        .appendTo("#siswa_table_wrapper .col-md-6:eq(0)");
});

$(function () {
    $("#table-tamu")
        .DataTable({
            responsive: true,
            lengthChange: false,
            autoWidth: false,
            buttons: [
                {
                    text: "Add",
                    action: function (e, dt, node, config) {
                        window.location.href = "/form-tamu";
                    },
                    className: "add-button",
                },
                {
                    extend: "collection",
                    text: "Export",
                    className: "export",
                    buttons: [
                        {
                            extend: "copy",
                            exportOptions: {
                                columns: ":visible",
                            },
                        },
                        {
                            extend: "csv",
                            exportOptions: {
                                columns: ":visible",
                            },
                        },
                        {
                            extend: "excel",
                            exportOptions: {
                                columns: ":visible",
                            },
                        },
                        {
                            extend: "pdf",
                            exportOptions: {
                                columns: ":visible",
                            },
                        },
                        {
                            extend: "print",
                            exportOptions: {
                                columns: ":visible",
                            },
                        },
                    ],
                },
                "colvis",
            ],
        })
        .buttons()
        .container()
        .appendTo("#table-tamu_wrapper .col-md-6:eq(0)");
});

$(function () {
    $("#table-penugasan")
        .DataTable({
            responsive: true,
            lengthChange: false,
            autoWidth: false,
            buttons: [
                {
                    text: "Add",
                    action: function (e, dt, node, config) {
                        window.location.href = "/register";
                    },
                    className: "add-button",
                },

                {
                    extend: "collection",
                    text: "Export",
                    className: "export",
                    buttons: [
                        {
                            extend: "copy",
                            exportOptions: {
                                columns: ":visible",
                            },
                        },
                        {
                            extend: "csv",
                            exportOptions: {
                                columns: ":visible",
                            },
                        },
                        {
                            extend: "excel",
                            exportOptions: {
                                columns: ":visible",
                            },
                        },
                        {
                            extend: "pdf",
                            exportOptions: {
                                columns: ":visible",
                            },
                        },
                        {
                            extend: "print",
                            exportOptions: {
                                columns: ":visible",
                            },
                        },
                    ],
                },
                "colvis",
            ],
        })
        .buttons()
        .container()
        .appendTo("#table-penugasan_wrapper .col-md-6:eq(0)");
});

// Form

$(function () {
    var container = document.getElementById("textbox"); // ref(sidebar.blade.php:5)

    $('input[name="status-kehadiran"]').on("click", function () {
        if ($(this).val() == "Dispensasi") {
            container.classList.remove("hidden");
        } else {
            container.classList.add("hidden");
        }
    });
});

$(function () {
    var container = document.getElementById("other");

    //show it when the checkbox is clicked
    $('input[name="status-pelanggaran"]').on("click", function () {
        if ($(this).val() == "Lain-lain") {
            if ($(this).prop("checked")) {
                container.classList.remove("hidden");
            } else {
                container.classList.add("hidden");
            }
        }
    });
});

// Counter on Dashboard
    
let cps = document.getElementById('counterPelanggaranSiswa').innerHTML;
let ct = document.getElementById('counterTamu').innerHTML;
let cis = document.getElementById('counterIzinSiswa').innerHTML;
let cts = document.getElementById('counterTerlambatSiswa').innerHTML;





