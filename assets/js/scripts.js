const form    = document.getElementById("loginForm");
const spinner = document.getElementById("loading_spinner");
const button  = document.getElementById("login_button");

let isSubmitting = false;

const showToast = (icon, title) => {
    Swal.fire({
        toast: true,
        icon,
        title,
        position: 'top',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: toast => {
            toast.addEventListener('mouseenter', Swal.stopTimer);
            toast.addEventListener('mouseleave', Swal.resumeTimer);
        }
    });
};

form.addEventListener("submit", async (e) => {
    e.preventDefault();

    if (isSubmitting) return;
    isSubmitting = true;

    const email = document.getElementById("email").value.trim();
    const pass  = document.getElementById("pass").value.trim();

    if (!email || !pass) {
        showToast('warning', 'All fields are required');
        isSubmitting = false;
        return;
    }

    button.disabled = true;
    button.textContent = "Signing in...";
    spinner.style.display = "block";

    try {
        const response = await fetch("loginController.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: new URLSearchParams({
                do_login: "do_login",
                email,
                pass
            })
        });

        const text = await response.text();

        if (response.ok && text === "success") {
            window.location.href = "home.php";
            return;
        }

        showToast('error', 'Wrong user/email or password');
    } catch (err) {
        console.error(err);
        showToast('error', 'Network error occurred');
    } finally {
        spinner.style.display = "none";
        button.disabled = false;
        button.textContent = "SIGN IN";
        isSubmitting = false;
    }
});