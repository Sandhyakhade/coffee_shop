// Buttons
const profileButton = document.getElementById("profile");
const seeOrdersButton = document.getElementById("seeOrders");
const orderCoffeeButton = document.getElementById("orderCoffee");
const logoutButton = document.getElementById("logout");

// Content section
const contentSection = document.getElementById("content");

// Event listeners
profileButton.addEventListener("click", () => {
    contentSection.innerHTML = `
        <div class="profile-card">
            <img src="" alt="Profile Picture">
            <div>
                <h2>john doe</h2>
                <p>Email: john.doe@example.com</p>
                <p>Member since: 2023</p>
            </div>
        </div>
    `;
});

seeOrdersButton.addEventListener("click", () => {
    contentSection.innerHTML = `
        <h2>Your Ordered Items</h2>
        <p>Here you can see all the items you've ordered.</p>
        <ul>
            <li>Espresso - $3.00</li>
            <li>Latte - $4.50</li>
        </ul>
    `;
});

orderCoffeeButton.addEventListener("click", () => {
    contentSection.innerHTML = `
        <h2>Order Coffee</h2>
        <p>Redirecting you to the coffee ordering page...</p>
    `;
    setTimeout(() => {
        window.location.href = "coffee_order.html"; // Link to coffee ordering page
    }, 2000);
});

logoutButton.addEventListener("click", () => {
    contentSection.innerHTML = `
        <h2>Logging Out</h2>
        <p>You are being logged out...</p>
    `;
    setTimeout(() => {
        window.location.href = "login.html"; // Redirect to login page
    }, 2000);
});
