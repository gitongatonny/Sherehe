// Function to retrieve the venue, capacity and price from localStorage
function getVenueDetails() {
    const venue = localStorage.getItem("venue");
    const capacity = localStorage.getItem("capacity");
    const price = localStorage.getItem("price");

    return { venue, capacity, price };
}

// Function to calculate the final price based on the period selected
function calculatePrice(price, period) {
    return price * period;
}

// Function to update the availability of the selected venue based on the period
function updateAvailability(period) {
    const venue = localStorage.getItem("venue");
    const availability = `${venue}_availability`;

    // Retrieve the current availability from localStorage
    let currentAvailability = JSON.parse(localStorage.getItem(availability));

    // Set the availability of the selected period to false
    for (let i = 0; i < period; i++) {
        currentAvailability[i] = false;
    }

    // Update the availability in localStorage
    localStorage.setItem(availability, JSON.stringify(currentAvailability));
}

// Function to validate the user's input
function validateForm() {
    const name = document.getElementById("name").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const email = document.getElementById("email").value.trim();
    const date = document.getElementById("date").value.trim();
    const period = document.getElementById("period").value.trim();

    // Validate name
    if (name === "") {
        alert("Please enter your name.");
        return false;
    }

    // Validate phone number
    const phoneRegex = /^[+]*[(]?[0-9]{1,4}[)]?[-\s./0-9]*$/;
    if (phone === "" || !phoneRegex.test(phone)) {
        alert("Please enter a valid phone number.");
        return false;
    }

    // Validate email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "" || !emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    // Validate date
    if (date === "") {
        alert("Please select a date.");
        return false;
    }

    // Validate period
    if (period === "") {
        alert("Please select the period for your event.");
        return false;
    }

    return true;
}

// Function to handle the checkout process
function handleCheckout() {
    // Retrieve the venue details
    const { venue, capacity, price } = getVenueDetails();

    // Retrieve the user's input
    const name = document.getElementById("name").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const email = document.getElementById("email").value.trim();
    const date = document.getElementById("date").value.trim();
    const period = parseInt(document.getElementById("period").value.trim());

    // Validate the user's input
    if (!validateForm()) {
        return;
    }

    // Calculate the final price
    const finalPrice = calculatePrice(price, period);

    // Update the availability of the selected venue
    updateAvailability(period);

    // Display a success message and save the user's information to the database
    alert(
        `Thank you for your purchase! Your total price is KSHS ${finalPrice}. We have received your booking for ${venue} for ${capacity} guests on ${date} for ${period} day(s). A confirmation email will be sent to ${email}.`
    );

    // TODO: Save the user's information to the database

    // Redirect the user to the home page
    window.location.href = "index.php";
}

document
    .getElementById("download-button")
    .addEventListener("click", function() {
        html2canvas(document.querySelector(".invitation-card")).then((canvas) => {
            var link = document.createElement("a");
            link.download = "invitation-card.png";
            link.href = canvas.toDataURL();
            link.click();
        });
    });