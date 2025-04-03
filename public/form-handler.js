document.addEventListener("DOMContentLoaded", function () {
    // Checkbox Handling Logic
    const checkboxGroups = {
        awareness: document.querySelectorAll(".awareness"),
        visibility: document.querySelectorAll(".visibility"),
        helpfulness: document.querySelectorAll(".helpfulness")
    };

    function allowSingleCheckbox(group, hiddenInput) {
        group.forEach(checkbox => {
            checkbox.addEventListener("change", function () {
                if (this.checked) {
                    group.forEach(cb => {
                        if (cb !== this) {
                            cb.checked = false;
                        }
                    });

                    // Update hidden field if provided
                    if (hiddenInput) {
                        hiddenInput.value = this.value;
                    }
                }
            });
        });
    }

    const hiddenVisibility = document.getElementById("hidden_visibility");
    const hiddenHelpfulness = document.getElementById("hidden_helpfulness");

    // Initialize single checkbox selection with hidden input updates
    allowSingleCheckbox(checkboxGroups.awareness);
    allowSingleCheckbox(checkboxGroups.visibility, hiddenVisibility);
    allowSingleCheckbox(checkboxGroups.helpfulness, hiddenHelpfulness);


    const a4 = document.getElementById("a4");
    if (a4) {
        checkboxGroups.awareness.forEach(checkbox => {
            checkbox.addEventListener("change", function () {
                if (this === a4 && this.checked) {
                    checkboxGroups.visibility.forEach(cb => {
                        cb.checked = false;
                        cb.disabled = true;
                    });
                    checkboxGroups.helpfulness.forEach(cb => {
                        cb.checked = false;
                        cb.disabled = true;
                    });

                    hiddenVisibility.value = "0";
                    hiddenHelpfulness.value = "0";
                } else {
                    a4.checked = false;
                    checkboxGroups.visibility.forEach(cb => cb.disabled = false);
                    checkboxGroups.helpfulness.forEach(cb => cb.disabled = false);
                }
            });
        });

        // Ensure visibility and helpfulness are only disabled if a4 is checked on page load
        if (a4.checked) {
            checkboxGroups.visibility.forEach(cb => cb.disabled = true);
            checkboxGroups.helpfulness.forEach(cb => cb.disabled = true);
            hiddenVisibility.value = "0";
            hiddenHelpfulness.value = "0";
        }
    }

    // Form Submission Prevention Logic (Avoid Duplicate Submissions)
    const form = document.querySelector("form");
    const submitBtn = document.getElementById("submitBtn");
    let formSubmitting = false;

    form.addEventListener("submit", function (e) {
        if (formSubmitting) {
            e.preventDefault(); // Prevent duplicate submissions
            return false;
        }

        formSubmitting = true; // Set flag to prevent multiple submissions
        submitBtn.disabled = true;
        submitBtn.textContent = "...";
    });

    $(document).ready(function () {
        $('#office_visited').select2({
            tags: true,
            placeholder: "Type to select or add an office",
            allowClear: true
        });

        $('#service').select2({
            tags: true,
            placeholder: "Type to select or add a service",
            allowClear: true
        });

        // Office selection change event to dynamically load services
        $('#office_visited').change(function () {
            var officeId = $(this).val(); // Get selected office ID

            if (officeId) {
                // Make an AJAX request to get services for the selected office
                $.ajax({
                    url: '/get-services/' + officeId,
                    type: 'GET',
                    success: function (data) {
                        console.log('Full response:', data); // Log full response

                        if (data.status === "success" && Array.isArray(data.services)) {
                            $('#service').empty();
                            $('#service').append('<option value="" selected disabled>Select a service</option>');

                            $.each(data.services, function (key, service) {
                                $('#service').append('<option value="' + service.id + '">' + service.name + '</option>');
                            });
                        } else {
                            console.error('Unexpected data format:', data);
                        }
                    },
                });
            } else {
                // If no office selected, clear the services dropdown
                $('#service').empty();
                $('#service').append('<option value="" selected disabled>Select a service</option>');
            }
        });
    });

});
