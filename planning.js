// Get the table body element
const tableBody = document.querySelector('table tbody');

// Add a click event listener to the table body
tableBody.addEventListener('click', event => {
    const button = event.target;

    // Check if the clicked element is a "Book" button
    if (button.tagName === 'BUTTON') {
        const row = button.closest('tr');
        const venueName = row.cells[0].textContent;
        const capacity = row.cells[1].textContent;

        // Disable the "Book" button and update the status
        button.disabled = true;
        row.cells[2].textContent = 'Booked';

        // Show a confirmation message
        alert(`You have booked ${venueName} with a capacity of ${capacity}.`);

        // Generate the invitation card
        generateInvitationCard(venueName, capacity);
    }
});

// Function to generate the invitation card
function generateInvitationCard(venueName, capacity) {
    const eventName = prompt('Enter the name of your event:');
    const eventDate = prompt('Enter the date of your event (YYYY-MM-DD):');

    // Build the invitation card HTML
    const invitationCard = `
    <div class="invitation-card">
      <h2>${eventName}</h2>
      <p>You are invited to an event at ${venueName} with a capacity of ${capacity} on ${eventDate}.</p>
    </div>
  `;

    // Add the invitation card to the page
    document.body.insertAdjacentHTML('beforeend', invitationCard);
}

// Add search functionality
const searchInput = document.querySelector('#search');

searchInput.addEventListener('input', event => {
    const searchQuery = event.target.value.trim().toLowerCase();

    // Call the search function with the search query
    searchVenues(searchQuery);
});

function searchVenues(searchQuery) {
    const rows = document.querySelectorAll('table tbody tr');

    rows.forEach(row => {
        const venueName = row.cells[0].textContent.toLowerCase();
        const capacity = row.cells[1].textContent.toLowerCase();

        if (venueName.includes(searchQuery) || capacity.includes(searchQuery)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}