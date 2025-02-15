<?php
// Start session only if not already active
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<style>
    .privacy-container {
        max-width: 900px;
        margin: 40px auto;
        padding: 20px;
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.1);
    }

    .privacy-heading {
        font-size: 30px;
        font-weight: bold;
        color: #333;
        margin-bottom: 15px;
        text-align: center;
    }

    .privacy-subheading {
        font-size: 22px;
        font-weight: bold;
        color: #444;
        margin-top: 20px;
    }

    .privacy-text {
        font-size: 18px;
        line-height: 1.6;
        color: #555;
        margin-bottom: 15px;
        text-align: justify;
    }

    .privacy-divider {
        border: 0;
        height: 1px;
        background: #ddd;
        margin: 25px 0;
    }
</style>

<div class="privacy-container">
    <h2 class="privacy-heading">Privacy Policy</h2>
    <p class="privacy-text">
        Your privacy is important to us. This privacy policy outlines how we collect, use, and protect your personal information when using TrackMyExpense.
    </p>

    <h3 class="privacy-subheading">Information We Collect</h3>
    <p class="privacy-text">
        We collect data such as your name, email address, and transaction details for providing better services.
    </p>

    <h3 class="privacy-subheading">How We Use Your Information</h3>
    <p class="privacy-text">
        The collected data is used to track your expenses, improve your user experience, and ensure secure access to your account.
    </p>

    <hr class="privacy-divider">

    <h2 class="privacy-heading">Terms of Service</h2>
    <p class="privacy-text">
        By using TrackMyExpense, you agree to abide by the following terms and conditions.
    </p>

    <h3 class="privacy-subheading">Usage Policy</h3>
    <p class="privacy-text">
        Users must not engage in fraudulent activities, and any misuse of the platform may lead to account suspension.
    </p>

    <h3 class="privacy-subheading">Limitation of Liability</h3>
    <p class="privacy-text">
        We are not responsible for any financial decisions made based on the data presented in our application.
    </p>
</div>

<?php include('./includes/footer.php');
?>