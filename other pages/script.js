// Get the event details from the URL query string
const urlParams = new URLSearchParams(window.location.search);
const eventName = urlParams.get('name');
const eventVenue = urlParams.get('venue');
const eventDate = urlParams.get('date');
const eventTime = urlParams.get('time');
const eventPrice = urlParams.get('price');

// Set the event details in the HTML elements
document.getElementById('event-name').textContent = `Event Name: ${eventName}`;
document.getElementById('event-venue').textContent = `Venue: ${eventVenue}`;
document.getElementById('event-date').textContent = `Date: ${eventDate}`;
document.getElementById('event-time').textContent = `Time: ${eventTime}`;
document.getElementById('event-price').textContent = `Price: ${eventPrice} KES`;

// Initialize the number of tickets and M-PESA number
let tickets = 1;
let mpesaNumber = '';

// Function to increment the number of tickets
function increment() {
    if (tickets < 10) {
        tickets++;
        document.getElementById('tickets').value = tickets;
    }
}

// Function to decrement the number of tickets
function decrement() {
    if (tickets > 1) {
        tickets--;
        document.getElementById('tickets').value = tickets;
    }
}

// Function to handle the payment process
function pay() {
    // Get the M-PESA number from the input field
    mpesaNumber = document.getElementById('mpesa-number').value;

    // Validate the M-PESA number
    if (!mpesaNumber.match(/^\d{10}$/)) {
        document.getElementById('booking-status').textContent = 'Please enter a valid M-PESA number.';
        return;
    }

    // Calculate the total price
    const totalPrice = eventPrice * tickets;

    // Generate the payment message
    const paymentMessage = `Please pay KES ${totalPrice} to ${mpesaNumber} to complete your booking for ${tickets} ticket(s) for ${eventName} at ${eventVenue} on ${eventDate} at ${eventTime}.`;

    // Display the payment message
    document.getElementById('booking-status').textContent = paymentMessage;

    // Show the download button
    document.getElementById('download-btn').style.display = 'block';
}

// Function to download the ticket
document.getElementById('download-btn').addEventListener('click', function() {
    const ticketMessage = `Ticket for ${tickets} ticket(s) for ${eventName} at ${eventVenue} on ${eventDate} at ${eventTime}.`;
    alert(ticketMessage);
});