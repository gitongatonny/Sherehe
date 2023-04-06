fetch("get_events.php")
    .then(response => response.json())
    .then(data => {
        // Loop through the data and create HTML for each event
        let html = "";
        data.forEach(event => {
            // Split the amenities string into an array of individual amenities
            const amenities = event.amenities.split("\n");
            // Create a new paragraph element for each amenity
            const amenitiesHtml = amenities.map(amenity => `<p>${amenity}</p>`).join("");
            // Build the HTML for the event card
            html += `
                <div class="card">
                    <img src="${event.image}" alt="${event.venue}">
                    <h2>${event.venue}</h2>
                    <p><b>Rating:</b> ${event.rating}</p>
                    <p><b>Capacity:</b> ${event.capacity} guests</p>
                    <p><b>Price:</b> KSHS ${event.price}</p>
                    <div class="amenities">${amenitiesHtml}</div>
                    <button onclick="bookVenue(${event.id})">Book</button>
                </div>
            `;
        });

        // Set the HTML for the card container
        const cardContainer = document.querySelector(".card-container");
        cardContainer.innerHTML = html;
    })
    .catch(error => console.error(error));
