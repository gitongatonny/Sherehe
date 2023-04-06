// Fetch events data from get_events.php
fetch("get_events.php")
    .then((response) => response.json())
    .then((data) => {
        // Loop through the data and create HTML for each event
        let html = "";
        data.forEach((event) => {
            html += `
                <div class="card">
                    <img src="${event.image}" alt="${event.venue}">
                    <h2>${event.venue}</h2>
                    <p>Rating: ${event.rating}</p>
                    <p>Capacity: ${event.capacity} guests</p>
                    <p>Amenities: ${amenities}</p>
                    <p>Price: KSHS ${event.price}</p>
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

// Function to handle hover effect on cards
function cardHoverEffect() {
    const cards = document.querySelectorAll(".card");
    cards.forEach((card) => {
        card.addEventListener("mouseover", () => {
            card.style.boxShadow = "2px 2px 10px rgba(0, 0, 0, 0.3)";
            card.style.transform = "translateY(-10px)";
            card.style.transition = "all 0.3s ease-in-out";
        });
        card.addEventListener("mouseout", () => {
            card.style.boxShadow = "none";
            card.style.transform = "none";
        });
    });
}

// Call the cardHoverEffect function on window load
window.addEventListener("load", cardHoverEffect);