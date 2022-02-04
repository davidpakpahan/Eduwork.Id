// Sweet Alert
$(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    dots: false,
    nav: true,
    autoplay: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 4,
        },
    },
});

$(document).ready(function () {
    $(".addToCartBtn").click(function (e) {
        e.preventDefault();
        var productId = $(this)
            .closest(".productData")
            .find(".productId")
            .val();
        var productQty = $(this)
            .closest(".productData")
            .find(".inputQty")
            .val();
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            method: "POST",
            url: "/addToCart",
            data: {
                productId: productId,
                productQty: productQty,
            },
            success: function (response) {
                swal.fire(response.status);
            },
        });
    });

    $(".incrementBtn").click(function (e) {
        e.preventDefault();
        var incValue = $(this).closest(".productData").find(".inputQty").val();
        var value = parseInt(incValue, 10);
        value = isNaN(value) ? 0 : value;
        if (value < 10) {
            value++;
            $(this).closest(".productData").find(".inputQty").val(value);
        }
    });

    $(".decrementBtn").click(function (e) {
        e.preventDefault();
        var decValue = $(this).closest(".productData").find(".inputQty").val();
        var value = parseInt(decValue, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--;
            $(this).closest(".productData").find(".inputQty").val(value);
        }
    });

    $(".deleteCartItem").click(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        var productId = $(this)
            .closest(".productData")
            .find(".productId")
            .val();
        $.ajax({
            method: "POST",
            url: "/deleteCartItem",
            data: {
                productId: productId,
            },
            success: function (response) {
                window.location.reload();
                swal.fire("", response.status, "success");
            },
        });
    });

    $(".changeQty").click(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        var productId = $(this)
            .closest(".productData")
            .find(".productId")
            .val();
        var productQty = $(this)
            .closest(".productData")
            .find(".inputQty")
            .val();
        data = {
            productId: productId,
            productQty: productQty,
        };
        $.ajax({
            method: "POST",
            url: "/updateCart",
            data: data,
            success: function (response) {
                window.location.reload();
            },
        });
    });
});
