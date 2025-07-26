document.getElementById("registrationForm").addEventListener("submit", function (e) {
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();
    const university = document.getElementById("university").value.trim();
    const experience = document.getElementById("experience").value;

    if (!email || !password || !university || !experience) {
        e.preventDefault(); // Prevent form submission
        showToast("Please fill in all required fields.");
    }
});

function showToast(message) {
    const toast = document.getElementById("toast");
    const toastMessage = document.getElementById("toastMessage");
    toastMessage.textContent = message;
    toast.classList.add("show");

    setTimeout(() => {
        toast.classList.remove("show");
    }, 3000);
}
