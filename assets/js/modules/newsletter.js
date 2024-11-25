import {
    errorToast,
    successFormToast
} from "./toastify";

function newsletter() {
    const newsletterForm = document.querySelector("#newsletterForm");
    const newsletterEmailInput = document.querySelector("#newsletter-email");

    console.log(newsletterForm)

    if (!newsletterForm) return;

    newsletterForm.addEventListener("submit", (e) => {
        e.preventDefault();

        const email = newsletterEmailInput.value;

        // Validate email format
        if (!validateEmail(email)) {
            errorToast.showToast("لطفا یک ایمیل معتبر وارد کنید.");
            return;
        }

        jQuery(($) => {
            $.ajax({
                type: "POST",
                url: restDetails.url + "cyn-api/v1/newsletter",
                data: {
                    email: email
                },
                success: (res) => {
                    if (res.subscribed) {
                        successFormToast.showToast("شما با موفقیت در خبرنامه ثبت نام کردید.");
                        newsletterForm.reset();
                    } else {
                        errorToast.showToast("خطا در ثبت نام در خبرنامه. لطفا دوباره تلاش کنید.");
                    }
                },
                error: (err) => {
                    errorToast.showToast("خطا در ارتباط با سرور. لطفا دوباره تلاش کنید.");
                },
            });
        });
    });
}

// Email validation function
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(String(email).toLowerCase());
}

newsletter();