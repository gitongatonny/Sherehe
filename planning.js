fetch("get_events.php")
    .then((response) => response.json())
    .then((data) => {
        // Loop through the data and create HTML for each event
        let html = "";
        data.forEach((event) => {
            // Split the amenities string into an array of individual amenities
            const amenities = event.amenities.split("\n");
            // Create a new paragraph element for each amenity
            const amenitiesHtml = amenities.map(amenity => `<p>${amenity}</p>`).join("");
            // Build the HTML for the event card
            html += `
                <div class="card">
                    <img src="${event.image}" alt="${event.venue}">
                    <h2>${event.venue}</h2>
                    <p><strong>Rating:</strong> ${event.rating}</p>
                    <p><strong>Capacity:</strong> ${event.capacity} guests</p>
                    <div class="amenities">${amenitiesHtml}</div>
                    <p><strong>Price:</strong> KSHS ${event.price}</p>
                    <button onclick="bookVenue(${event.id})">Book</button>
                </div>
            `;
        });

        // Set the HTML for the card container
        const cardContainer = document.querySelector(".card-container");
        cardContainer.innerHTML = html;
    })
    .catch((error) => console.error(error));

// Function to handle booking a venue
function bookVenue(venueId) {
    // Send an AJAX request to the server to retrieve the venue information
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            const venue = JSON.parse(this.responseText);
            const { venueName, capacity, price } = venue;
            // Redirect to the check-out page with the venue information as parameters
            window.location.href = `check-out.php?id=${venueId}&name=${venueName}&capacity=${capacity}&price=${price}`;
        }
    };
    xhttp.open("GET", `get-venue.php?id=${venueId}`, true);
    xhttp.send();
}