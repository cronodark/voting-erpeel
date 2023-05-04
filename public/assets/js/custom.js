// template js
$(document).ready(function () {
    $(".filter-button").click(function () {
        var value = $(this).attr("data-filter");

        if (value == "all") {
            //$('.filter').removeClass('hidden');
            $(".filter").show("1000");
        } else {
            //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
            //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter")
                .not("." + value)
                .hide("3000");
            $(".filter")
                .filter("." + value)
                .show("3000");
        }
    });

    if ($(".filter-button").removeClass("active")) {
        $(this).removeClass("active");
    }
    $(this).addClass("active");
});
// end template js

// Login Validation
var form = document.getElementById("form");
var btnLogin = document.getElementById("login");
var userError = document.getElementById("usernameError");
var passError = document.getElementById("passwordError");
var wrapInput = document.querySelectorAll("div#wrapInput");
var inputUsername = document.getElementById("username");
var inputPassword = document.getElementById("password");
var iconUserError = document.getElementById("iconUserError");
var iconPassError = document.getElementById("iconPassError");

btnLogin.addEventListener("click", () => {
    if (inputUsername.value == "") {
        wrapInput[0].classList.add("input-validation", "shake");
        // userError.removeAttribute("hidden");
        iconUserError.setAttribute("class", "bi bi-exclamation-circle");
    }

    if (inputPassword.value == "") {
        wrapInput[1].classList.add("input-validation", "shake");
        // passError.removeAttribute("hidden");
        iconPassError.setAttribute("class", "bi bi-exclamation-circle");
    }

    setTimeout(() => {
        wrapInput[0].classList.remove("shake");
        wrapInput[1].classList.remove("shake");
    }, 500);

    inputUsername.addEventListener("keyup", () => {
        if (inputUsername.value == "") {
            wrapInput[0].classList.remove("after-validation");
            wrapInput[0].classList.add("input-validation");
            // userError.removeAttribute("hidden");
            iconUserError.setAttribute("class", "bi bi-exclamation-circle");
        } else {
            wrapInput[0].classList.remove("input-validation");
            wrapInput[0].classList.add("after-validation");
            // userError.setAttribute("hidden", "");
            iconUserError.setAttribute("class", "bi bi-check-circle");
        }
    });

    inputPassword.addEventListener("keyup", () => {
        if (inputPassword.value == "") {
            wrapInput[1].classList.remove("after-validation");
            wrapInput[1].classList.add("input-validation");
            // passError.removeAttribute("hidden");
            iconPassError.setAttribute("class", "bi bi-exclamation-circle");
        } else {
            wrapInput[1].classList.remove("input-validation");
            wrapInput[1].classList.add("after-validation");
            // passError.setAttribute("hidden", "");
            iconPassError.setAttribute("class", "bi bi-check-circle");
        }
    });
}); 
// End Login Validation
