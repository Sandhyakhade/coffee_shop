document.getElementById("submitOrder").addEventListener("click", function () {
    const name = document.getElementById("customerName").value;
    const coffeeType = document.getElementById("coffeeType").value;
    const coffeeSize = document.getElementById("coffeeSize").value;
    const addons = Array.from(document.querySelectorAll("#addons input:checked"))
        .map((addon) => addon.value)
        .join(", ");
    const specialInstructions = document.getElementById("specialInstructions").value;

    if (!name || !coffeeType || !coffeeSize) {
        alert("Please fill out all required fields!");
        return;
    }

    const summary = `
        <p><strong>Name:</strong> ${name}</p>
        <p><strong>Coffee Type:</strong> ${coffeeType}</p>
        <p><strong>Size:</strong> ${coffeeSize}</p>
        <p><strong>Add-ons:</strong> ${addons || "None"}</p>
        <p><strong>Special Instructions:</strong> ${specialInstructions || "None"}</p>
    `;

    document.getElementById("summaryDetails").innerHTML = summary;
    document.querySelector(".order-container").classList.add("hidden");
    document.getElementById("orderSummary").classList.remove("hidden");
});

document.getElementById("newOrder").addEventListener("click", function () {
    document.getElementById("orderForm").reset();
    document.querySelector(".order-container").classList.remove("hidden");
    document.getElementById("orderSummary").classList.add("hidden");
});
