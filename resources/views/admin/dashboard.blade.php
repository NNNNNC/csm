@if(session('reload'))
<script>
    sessionStorage.setItem('reload', true);
    window.location.reload();
</script>
@endif

<div style="width: 90%; margin:auto;">
    <div class="row">
        <div class="col-md-3">
            <label class="fw-bold mb-2" for="officeFilter">Select Office:</label>
            <select id="officeFilter" class="form-control">
                <option value="">All Offices</option> <!-- Default Option -->
                @foreach($offices as $office)
                <option value="{{ $office->id }}">{{ $office->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row mt-4 mb-4 g-3 justify-content-center">
        <div class="col-lg-2 col-md-6">
            <div class="card text-white bg-success h-100 text-center">
                <div class="card-body d-flex flex-column justify-content-center">
                    <h5 class="card-title fw-bold">Total Responses</h5>
                    <p class="card-text display-4" id="officeSurveyCount"></p>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-6">
            <div class="comment_card card text-white bg-primary h-100 text-center" data-bs-toggle="modal" data-bs-target="#commentsModal" style="cursor: pointer;">
                <div class="card-body d-flex flex-column justify-content-center">
                    <h5 class="card-title fw-bold">Total Comments</h5>
                    <p class="card-text display-4" id="totalComments"></p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card text-white bg-info h-100 text-center">
                <div class="card-body d-flex flex-column justify-content-center">
                    <h5 class="card-title fw-bold">Citizen's Charter Satisfaction</h5>
                    <p class="card-text display-4" id="ccSatisfaction"></p>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-6">
            <div class="card text-white bg-danger h-100 text-center">
                <div class="card-body d-flex flex-column justify-content-center">
                    <h5 class="card-title fw-bold">Service Satisfaction</h5>
                    <p class="card-text display-4" id="serviceSatisfaction"></p>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-6">
            <div class="card text-white bg-warning h-100 text-center">
                <div class="card-body d-flex flex-column justify-content-center">
                    <h5 class="card-title fw-bold">Overall Satisfaction</h5>
                    <p class="card-text display-4" id="overallSatisfaction"></p>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-body text-center">
                    <h4 class="card-title fw-bold">Sex Distribution</h4>
                    <div style="margin: auto; width: 100%; height: 100%;">
                        <canvas id="sexChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body text-center">
                    <h4 class="card-title fw-bold">Age Distribution</h4>
                    <div style="margin: auto; width: 80%; height: 100%;">
                        <canvas id="ageChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card">
                <div class="card-body text-center">
                    <h4 class="card-title fw-bold">Service Distribution</h4>
                    <div class="container-fluid" style="height: 100%;">
                        <canvas id="serviceChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body text-center">
                    <h4 class="card-title fw-bold">Client Type Distribution</h4>
                    <canvas id="clientTypeChart" height="80"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body text-center">
                    <h4 class="card-title fw-bold">Citizen's Charter(CC) Questions</h4>
                    <canvas id="ratingsChart" height="120"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title fw-bold text-center mb-3">Service Satisfaction Ratings</h4>

                    <!-- List in Two Columns -->
                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><strong>SQD0:</strong></td>
                                            <td>I am satisfied with the service that I availed.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>SQD1:</strong></td>
                                            <td>I spent a reasonable amount of time for my transaction.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>SQD2:</strong></td>
                                            <td>The office followed the transaction's requirements and steps.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>SQD3:</strong></td>
                                            <td>The steps for my transaction were easy and simple.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>SQD4:</strong></td>
                                            <td>I easily found information about my transaction.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><strong>SQD5:</strong></td>
                                            <td>I paid a reasonable amount of fees for my transaction.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>SQD6:</strong></td>
                                            <td>I feel the office was fair to everyone, or "walang palakasan".</td>
                                        </tr>
                                        <tr>
                                            <td><strong>SQD7:</strong></td>
                                            <td>I was treated courteously by the staff.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>SQD8:</strong></td>
                                            <td>I got what I needed from the government office.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                    <!-- Chart Canvas -->
                    <div class="text-center mt-3">
                        <canvas id="sqdChart" height="120"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Comments Modal -->

<div class="modal fade" id="commentsModal" tabindex="-1" aria-labelledby="commentsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fw-bold" id="commentsModalLabel">Client Reviews</h2>
                <button type="button" class="btn-close" onclick="window.location.href='/admin'" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="max-height: 600px; overflow-y: auto;">


                <div class="container">
                    <div class="row mb-3">
                        <div class="col d-flex flex-column">
                            <label for="startDate" class="form-label"><strong>Start Date:</strong></label>
                            <input type="date" id="startDate" class="form-control">
                        </div>
                        <div class="col d-flex flex-column">
                            <label for="endDate" class="form-label"><strong>End Date:</strong></label>
                            <input type="date" id="endDate" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col d-flex align-items-center justify-content-center">
                            <button class="btn btn-primary" style="width: 100px;" onclick="filterComments()">Filter</button>
                        </div>
                    </div>
                </div>




                <ul id="commentsList" class="list-unstyled"></ul>
                <ul id="commentsList" class="list-unstyled"></ul>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
    if (sessionStorage.getItem('reload')) {
        sessionStorage.removeItem('reload'); // Clear sessionStorage after the reload
    }
    let sexChart, ageChart, clientTypeChart, ratingsChart, sqdChart, serviceChart;

    function createCharts(data, clientData) {
        if (sexChart) sexChart.destroy();
        if (ageChart) ageChart.destroy();
        if (clientTypeChart) clientTypeChart.destroy();
        if (ratingsChart) ratingsChart.destroy();
        if (sqdChart) sqdChart.destroy();
        if (serviceChart) serviceChart.destroy();

        const ctxSex = document.getElementById("sexChart").getContext("2d");
        const ctxAge = document.getElementById("ageChart").getContext("2d");
        const ctxClientType = document.getElementById("clientTypeChart")?.getContext("2d");
        const ctxRatings = document.getElementById("ratingsChart").getContext("2d");
        const ctxSqd = document.getElementById("sqdChart")?.getContext("2d");
        const ctxService = document.getElementById("serviceChart")?.getContext("2d");

        // Handle missing or undefined age_distribution
        const ageLabels = data.age_distribution ? Object.keys(data.age_distribution) : [];
        const ageValues = data.age_distribution ? Object.values(data.age_distribution) : [];

        // Bar Chart for Ratings
        // Extract unique rating titles for x-axis
        const category = ['awareness', 'helpfulness', 'visibility'];
        const ratingLabels = data.rating_counts.map(item => item.rating);
        // Extract count values for y-axis
        const ratingCounts = data.rating_counts.map(item => item.count);


        const ratingCountsMap = Object.fromEntries(
            data.rating_counts.map(item => [item.rating, item.count])
        );

        if (typeof ratingsChart !== "undefined" && ratingsChart !== null) {
            ratingsChart.destroy();
        }


        // Define colors for each category
        const categoryColors = {
            "Awareness": "#3498db",
            "Helpfulness": "#2ecc71",
            "Visibility": "#e74c3c"
        };

        // Map category values to readable names
        const categoryMap = {
            "awareness": "Awareness",
            "helpfulness": "Helpfulness",
            "visibility": "Visibility"
        };

        // Group data by category
        const groupedData = {};
        data.rating_counts.forEach(({
            category,
            rating,
            count
        }) => {
            const categoryName = categoryMap[category] || category;
            if (!groupedData[categoryName]) {
                groupedData[categoryName] = {};
            }
            groupedData[categoryName][rating] = count;
        });

        // Extract unique categories and ratings
        const categories = [...new Set(data.rating_counts.map(item => categoryMap[item.category] || item.category))];
        const allRatings = [...new Set(data.rating_counts.map(d => d.rating))];

        // Prepare datasets dynamically (grouped by category)
        const datasets = categories.map(category => ({
            label: category, // Use mapped category name
            backgroundColor: categoryColors[category] || "#95a5a6",
            data: allRatings.map(rating => groupedData[category]?.[rating] || 0)
        }));


        // Generate the chart
        ratingsChart = new Chart(ctxRatings, {
            type: "bar",
            data: {
                labels: allRatings, // Ratings as labels
                datasets: datasets
            },
            options: {
                indexAxis: 'y',

                responsive: true,
                plugins: {
                    legend: {
                        position: "top"
                    }
                },
                scales: {
                    x: {
                        stacked: true,
                        title: {
                            display: true,
                            text: "Total Responses"
                        },
                        ticks: {
                            autoSkip: false,
                            maxRotation: 45,
                            minRotation: 0
                        }
                    },
                    y: {
                        stacked: true,
                        title: {
                            display: true,
                            text: "CC Questions"
                        }
                    }
                }
            }
        });

        sexChart = new Chart(ctxSex, {
            type: "doughnut",
            data: {
                labels: ["Male", "Female"],
                datasets: [{
                    data: [data.male_count || 0, data.female_count || 0],
                    backgroundColor: ["#3498db", "#e74c3c"]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: "right",
                        labels: {
                            boxWidth: 15,
                            font: {
                                size: 14
                            }
                        }
                    }
                }
            }
        });

        ageChart = new Chart(ctxAge, {
            type: "doughnut",
            data: {
                labels: ageLabels,
                datasets: [{
                    data: ageValues,
                    backgroundColor: ["#1abc9c", "#f39c12", "#9b59b6", "#e67e22", "#2ecc71"]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: "right",
                        labels: {
                            boxWidth: 15,
                            font: {
                                size: 14
                            }
                        }
                    }
                }
            }
        });

        const service_labels = data.service_responses.map(item => item.name);
        const service_values = data.service_responses.map(item => item.total_response);
        const backgroundColors = [
            '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF',
            '#FF9F40', '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0',
            '#9966FF', '#FF9F40', '#FF6384', '#36A2EB', '#FFCE56'
        ];

        serviceChart = new Chart(ctxService, {
            type: "doughnut",
            data: {
                labels: service_labels,
                datasets: [{
                    data: service_values,
                    backgroundColor: backgroundColors
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: "right",
                        labels: {
                            boxWidth: 15,
                            font: {
                                size: 14
                            }
                        }
                    }
                }
            }
        });

        console.log("data: ", clientData);

        // Define the correct order for legends
        let clientTypes = ["Citizen", "Business", "Government"];

        // Map data according to the correct order
        let formattedData = clientTypes.map(type => {
            let found = clientData.find(item => item.client_type === type);
            return found ? found.total_client : 0; // Default to 0 if missing
        });

        clientTypeChart = new Chart(ctxClientType, {
            type: 'bar', // Horizontal bar chart
            data: {
                labels: clientTypes, // Labels in order: Citizen, Business, Government
                datasets: [{
                    label: 'Total Clients',
                    data: formattedData,
                    backgroundColor: ['#4CAF50', '#FF9800', '#2196F3'], // Colors match labels
                }]
            },
            options: {
                indexAxis: 'y', // This makes the bar chart horizontal
                plugins: {
                    legend: {
                        display: false // Hides the legend
                    }
                }
            }
        });

        // Step 1: Collect all unique SQD categories for the X-axis
        const sqdCategories = [...new Set(data.sqd_counts.map(item => item.category))];

        // Step 2: Initialize an object to hold dataset values
        const ratingData = {};

        const sqdLabels = {
            0: "N/A",
            1: "Strongly Disagree",
            2: "Disagree",
            3: "Neither Agree nor Disagree",
            4: "Agree",
            5: "Strongly Agree"
        };

        const ratingColors = {
            0: "#A9A9A9", // Gray - N/A
            1: "#FF4C4C", // Red - Strongly Disagree
            2: "#FFA500", // Orange - Disagree
            3: "#FFD700", // Yellow - Neither Agree nor Disagree
            4: "#32CD32", // Green - Agree
            5: "#4682B4" // Blue - Strongly Agree
        };



        // Initialize each rating label with an empty dataset for every category
        Object.keys(sqdLabels).forEach(rating => {
            ratingData[rating] = {
                label: sqdLabels[rating], // Satisfaction rating label
                data: Array(sqdCategories.length).fill(0), // Default 0 count per SQD category
                backgroundColor: ratingColors[rating]
            };
        });

        // Step 3: Populate the datasets with actual counts
        data.sqd_counts.forEach(({
            category,
            rating,
            count
        }) => {
            const categoryIndex = sqdCategories.indexOf(category);
            if (categoryIndex !== -1) {
                ratingData[rating].data[categoryIndex] = count;
            }
        });

        // Step 4: Convert ratingData into an array for Chart.js
        const sqdDatasets = Object.values(ratingData);

        // Step 5: Create the chart
        if (ctxSqd) {
            sqdChart = new Chart(ctxSqd, { // Use global sqdChart variable
                type: "bar",
                data: {
                    labels: sqdCategories,
                    datasets: sqdDatasets
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {

                        },
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        } else {
            console.error("Chart context (ctxSqd) is not defined.");
        }

    }

    function fetchSurveyData(officeId = "") {
        var surveyCountElement = document.getElementById("officeSurveyCount");
        var commentCountElement = document.getElementById("totalComments");
        var satisfactionElement = document.getElementById("overallSatisfaction");
        var ccSatisfactionElement = document.getElementById("ccSatisfaction");
        var serviceSatisfactionElement = document.getElementById("serviceSatisfaction");
        var commentsList = document.getElementById("commentsList");

        if (!surveyCountElement || !commentCountElement || !satisfactionElement || !ccSatisfactionElement || !serviceSatisfactionElement || !commentsList) {
            console.error("One or more survey elements not found.");
            return;
        }

        fetch("{{ route('survey.data') }}?office_id=" + encodeURIComponent(officeId))
            .then(response => {
                if (!response.ok) {
                    throw new Error("Network response was not ok " + response.statusText);
                }
                return response.json();
            })
            .then(data => {

                surveyCountElement.textContent = data.total_responses || "0";
                commentCountElement.textContent = data.comments_count || "0";
                satisfactionElement.textContent = data.overall_satisfaction || "0%";
                ccSatisfactionElement.textContent = data.cc_satisfaction_percentage || "0%";
                serviceSatisfactionElement.textContent = data.service_satisfaction_percentage || "0%";

                if (data.client_type_data && Array.isArray(data.client_type_data)) {
                    createCharts(data, data.client_type_data);
                } else {
                    console.warn("Invalid or missing client_type_data.");
                    createCharts(data, []);
                }

                window.allComments = data.email_comments || [];
                filterComments();
            })
            .catch(error => {
                console.error("Error fetching survey data:", error);
                surveyCountElement.textContent = "Error";
                commentCountElement.textContent = "Error";
                satisfactionElement.textContent = "Error";
                ccSatisfactionElement.textContent = "Error";
                serviceSatisfactionElement.textContent = "Error";
            });
    }

    function filterComments() {
        var commentsList = document.getElementById("commentsList");
        var startDate = document.getElementById("startDate").value;
        var endDate = document.getElementById("endDate").value;

        if (!commentsList || !window.allComments) {
            console.error("Comments list or data is not available.");
            return;
        }

        commentsList.innerHTML = "";

        if (!startDate || !endDate) {
            console.warn("No date selected. Showing all comments.");
            displayComments(window.allComments);
            return;
        }

        let start = new Date(startDate);
        let end = new Date(endDate);

        let filteredComments = window.allComments.filter(entry => {
            let commentDate = new Date(entry.created_at);
            return commentDate >= start && commentDate <= end;
        });

        displayComments(filteredComments);
    }

    function displayComments(comments) {
        var commentsList = document.getElementById("commentsList");
        commentsList.innerHTML = "";

        if (!comments || comments.length === 0) {
            let noCommentItem = document.createElement("li");
            noCommentItem.classList.add("list-group-item", "text-muted");
            noCommentItem.textContent = "No comments available for the selected date range.";
            commentsList.appendChild(noCommentItem);
            return;
        }

        comments.forEach(entry => {
            let email = entry.email ? entry.email : "Anonymous";
            let commentText = entry.comments ? entry.comments : "No comment provided.";
            let createdAt = entry.created_at ? new Date(entry.created_at).toLocaleString() : "Unknown Date";

            let commentItem = document.createElement("li");
            commentItem.classList.add("border-bottom", "py-2");

            commentItem.innerHTML = `
            <p style="font-size: 16px;">
                <strong>${email}:</strong> <br>
                <small class="text-muted" style="font-size: 14px;">${createdAt}</small><br><br>
                <span style="font-size: 18px;">${commentText}</span>
            </p>
        `;
            commentsList.appendChild(commentItem);
        });
    }

    // Ensure the element exists before adding an event listener
    document.addEventListener("DOMContentLoaded", function() {
        // Initial chart rendering when the page loads
        fetchSurveyData(""); // Or your desired initial fetch for the charts

        // Hook into route changes or AJAX updates (e.g., when the office filter changes)
        const rerouteEvent = new Event('chartRender');
        window.addEventListener('chartRender', function() {
            const officeFilter = document.getElementById("officeFilter");
            if (officeFilter) {
                officeFilter.addEventListener("change", function() {
                    fetchSurveyData(this.value); // Trigger chart creation with new office id
                });
            }
        });

        // Trigger chart rendering after the page is loaded and content is potentially dynamic
        window.dispatchEvent(rerouteEvent);

        // Ensure comments modal works after content is updated
        var totalCommentsCard = document.querySelector(".comment_card");
        var commentsModal = document.getElementById("commentsModal");
        if (totalCommentsCard && commentsModal) {
            totalCommentsCard.addEventListener("click", function() {
                let myModal = new bootstrap.Modal(commentsModal);
                myModal.show();
            });
        } else {
            if (!totalCommentsCard) console.error("Total Comments card not found.");
            if (!commentsModal) console.error("Modal with ID 'commentsModal' not found.");
        }
    });
</script>