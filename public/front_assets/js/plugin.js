/*Start jQuery---------------------------------------------------------------------------------------*/
$(window).ready(function() {
    $(" a").click(function() {
        $("html, body").animate(
            {
                scrollTop: $("#" + $(this).data("value")).offset().top
            },
            1000
        );
    });
    $(".links li").click(function() {
        $(this)
            .addClass("active")
            .siblings()
            .removeClass("active");
    });
    $(".color-gear").click(function() {
        $(".color-option").fadeToggle(1000);
    });
    var colrLi = $(".color-option ul li");
    colrLi
        .eq(0)
        .css("backgroundColor", "#d03232")
        .end()
        .eq(1)
        .css("backgroundColor", "#FF9800")
        .end()
        .eq(2)
        .css("backgroundColor", "#3cef43")
        .end()
        .eq(3)
        .css("backgroundColor", "#5ca9fb");
    colrLi.click(function() {
        $("link[href*='theme']").attr("href", $(this).attr("data-value"));
    });

    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $(".profile-pic").attr("src", e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    };

    $(".file-upload").on("change", function() {
        readURL(this);
    });

    $(".upload-button").on("click", function() {
        $(".file-upload").click();
    });

    var readURLs = function(input) {
        if (input.files && input.files[0]) {
            var readers = new FileReader();

            readers.onload = function(e) {
                $(".profile-picture").attr("src", e.target.result);
            };

            readers.readAsDataURL(input.files[0]);
        }
    };

    $(".file-uploaded").on("change", function() {
        readURLs(this);
    });

    $(".uploaded-button").on("click", function() {
        $(".file-uploaded").click();
    });
});

/*End jQuery---------------------------------------------------------------------------------------*/

window.onload = function() {
    /*Start Section Item Choice*/

    var Price = document.getElementById("price"),
        Quantity = document.getElementById("quantity"),
        Total = document.getElementById("total"),
        TotalAmount;
    Quantity.onchange = function() {
        "use strict";
        var IntPrice = Price.textContent;
        TotalAmount = Total.innerHTML = IntPrice * Quantity.value;
    };

    var ButtonAdd = document.getElementById("Button-Add"),
        CartSign1 = document.getElementById("cart1"),
        CartSign2 = document.getElementById("cart2"),
        CartSign3 = document.getElementById("cart3"),
        CartSign4 = document.getElementById("cart4"),
        Color = document.getElementById("color"),
        Size = document.getElementById("size"),
        CheckoutBtn = document.getElementById("CheckoutBtn"),
        badge = document.getElementsByClassName("badge");
    ButtonAdd.onclick = function() {
        "use strict";
        CartSign1.innerHTML = "Total: " + TotalAmount;
        CartSign2.innerHTML = "Quantity: " + Quantity.value;
        CartSign3.innerHTML = "Color: " + Color.value;
        CartSign4.innerHTML = "Size: " + Size.value;
        badge[0].textContent = "1";
        badge[0].style.backgroundColor = "#000";
        badge[0].style.width = "30px";
        badge[0].style.height = "30px";
        badge[0].style.lineHeight = "20px";
        badge[0].style.borderRadius = "50%";
        badge[0].style.fontSize = "20px";
        CheckoutBtn.style.display = "block";
    };

    /*End Section Item Choice*/
};
