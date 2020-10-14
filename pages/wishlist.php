<?php include_once('../includes/header.php'); ?>

<?php include_once('../includes/nav.php'); ?>

<nav class="breadcrumb" aria-label="breadcrumbs">

    <h1>Wishlist</h1>
    <a href="/" title="Back to the frontpage">Home</a>

    <span aria-hidden="true" class="breadcrumb__sep">/</span>
    <span>Wishlist</span>


</nav>

<div class="dt-sc-hr-invisible-large"></div>

<main class="main-content ">



    <div class="wrapper">

        <div class="grid__item">
            <div class="jas-container">
                <div class="table-wrapper">
                    <table class="shop_table cart wishlist_table">
                        <thead>
                            <tr>
                                <th class="product-remove"></th>
                                <th class="product-thumbnail"></th>
                                <th class="product-name"><span class="nobr">Product</span></th>
                                <th class="product-price"> <span class="nobr">Price</span></th>
                                <th class="product-stock-stauts"> <span class="nobr">Stock status</span> </th>
                                <th class="product-add-to-cart"></th>
                            </tr>
                        </thead>
                        <tbody class="wishlist-box">

                            <td colspan="6" class="wishlist-empty tc">Your wishlist is currently empty!</td>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6">
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <script>
                $(function() {
                    var cookieName = "wishlistList";

                    try {
                        if ($.cookie(cookieName) != null && $.cookie(cookieName) != '__' && $.cookie(
                            cookieName) != '') {
                            var str = String($.cookie(cookieName)).split("__");
                            for (var i = 0; i < str.length; i++) {
                                if (str[i] != '') {
                                    Shopify.getProduct(str[i], function(product) {
                                        wishlist_product(product);
                                    });

                                }
                            }
                        } else {
                            emptyWishlist();
                        }
                        jQuery('.currency .active').trigger('click');
                    } catch (err) {} // ignore errors reading cookies

                    function emptyWishlist() {
                        //         $(".wishlist-table").remove();
                        $(".wishlist-box").append(
                            '<td colspan="6" class="wishlist-empty tc">Your wishlist is currently empty!</td>'
                            );
                    }

                    function wishlist_product(product) {
                        var $cloneitem = $(".wishlist-item").clone();
                        //           $cloneitem.find(".product_title").text(product.title);
                        $cloneitem.find(".wishlist-item-link").attr("href", product.url);
                        $cloneitem.find(".img-responsive").attr("src", product.featured_image);
                        //           $cloneitem.find(".table-wishlist-1__product-price").html(Shopify.formatMoney(product.price, formatMoney));
                        var $cloneitemname = $(".wishlist-item-name").clone();
                        $cloneitemname.find(".wishlist-item-link").attr("href", product.url);
                        $cloneitemname.find(".wishlist-item-link").text(product.title);

                        var $cloneitemprice = $(".table-wishlist-1__product-price").clone();
                        $cloneitemprice.html('<span class="money">' + Shopify.formatMoney(product.price,
                            "${{amount}}") + '</span>');
                        //           $cloneitemprice.find(".table-wishlist-1__product-price").html(Shopify.formatMoney(product.price, formatMoney));

                        var $cloneitemclear = $(".wishlist-item-clear").clone();
                        var $cloneitemcontinue = $(".wishlist-item-continue").clone();
                        $cloneitemcontinue.find(".wishlist-item-link").attr("href", product.url);

                        var $cloneitemstock = $(".wishlist-stock").clone();
                        if (product.available) {
                            $cloneitemstock.find(".wishlist-in-stock").text(window.in_stock);
                            $cloneitemcontinue.find(".wishlist-item-link").text('View product');
                        } else {
                            $cloneitemstock.find(".wishlist-in-stock").addClass("wishlist-out-of-stock").text(
                                window.out_of_stock);
                            $cloneitemcontinue.find(".wishlist-item-link").text('View product');
                        }
                        $('.wishlist-box').append("<tr class='" + product.handle + "'>" +
                            "<td class='product-remove'>" + $cloneitemclear.html() + "</td>" +
                            "<td class='product-thumbnail' style='width:100px;'>" + $cloneitem.html() +
                            "</td>" + "<td class='product-name'>" + $cloneitemname.html() + "</td>" +
                            "<td class='wishlist-product-price product-price'>" + $cloneitemprice.html() +
                            "</td>" + "<td class='product-stock-status'>" + $cloneitemstock.html() +
                            "</td>" + "<td class='product-add-to-cart'>" + $cloneitemcontinue.html() +
                            "</td>" + "</tr>")
                        $('.wishlist-box').find("." + product.handle).find('.product-remove-js').click(function(
                            event) {
                            event.preventDefault();
                            $(this).unbind();
                            var item = $(this).parent().parent();
                            var str = $.cookie(cookieName);
                            str = str.replace(item.attr("class"), '');
                            str = str.replace('____', '__');
                            $.cookie(cookieName, str, {
                                expires: 14,
                                path: '/'
                            });

                            item.fadeOut(500);
                            setTimeout(removeItem, 500, item);
                        });
                    }

                    function removeItem(item) {
                        item.remove();

                        if ($.cookie(cookieName) == '__' || $.cookie(cookieName) == '') {
                            emptyWishlist();
                        }
                    }
                });
                </script>
                <div class="wishlist-item-clear" style="display:none">
                    <a href="#" class="remove remove_from_wishlist product-remove-js" title="Remove this product">×</a>
                </div>
                <div class="wishlist-item" style="display:none">
                    <a class="wishlist-item-link" href="#">
                        <!-- img -->
                        <img class="img-responsive" src="#" alt="">
                    </a>
                </div>
                <span class="table-wishlist-1__product-price" style="display:none">#</span>
                <!-- /img -->
                <div class="wishlist-item-name" style="display:none">
                    <a class="wishlist-item-link" href="#">#</a>
                </div>
                <div class="wishlist-stock" style="display:none">
                    <span class="wishlist-in-stock">#</span>
                </div>
                <div class="wishlist-item-continue" style="display:none">
                    <a class="button wishlist-item-link btn" href="#" rel="nofollow">#</a>
                </div>
            </div>


            <script>
            jQuery.cookie = function(b, j, m) {
                if (typeof j != "undefined") {
                    m = m || {};
                    if (j === null) {
                        j = "";
                        m.expires = -1
                    }
                    var e = "";
                    if (m.expires && (typeof m.expires == "number" || m.expires.toUTCString)) {
                        var f;
                        if (typeof m.expires == "number") {
                            f = new Date();
                            f.setTime(f.getTime() + (m.expires * 24 * 60 * 60 * 1000))
                        } else {
                            f = m.expires
                        }
                        e = "; expires=" + f.toUTCString()
                    }
                    var l = m.path ? "; path=" + (m.path) : "";
                    var g = m.domain ? "; domain=" + (m.domain) : "";
                    var a = m.secure ? "; secure" : "";
                    document.cookie = [b, "=", encodeURIComponent(j), e, l, g, a].join("")
                } else {
                    var d = null;
                    if (document.cookie && document.cookie != "") {
                        var k = document.cookie.split(";");
                        for (var h = 0; h < k.length; h++) {
                            var c = jQuery.trim(k[h]);
                            if (c.substring(0, b.length + 1) == (b + "=")) {
                                d = decodeURIComponent(c.substring(b.length + 1));
                                break
                            }
                        }
                    }
                    return d
                }
            };
            if (typeof Currency === "undefined") {
                var Currency = {}
            }
            Currency.cookie = {
                configuration: {
                    expires: 365,
                    path: "/",
                    domain: window.location.hostname
                },
                name: "currency",
                write: function(a) {
                    jQuery.cookie(this.name, a, this.configuration)
                },
                teawrite: function(name, value) {
                    jQuery.cookie(name, value, this.configuration)
                },
                tearead: function(name) {
                    return jQuery.cookie(name)
                },
                read: function() {
                    return jQuery.cookie(this.name)
                },
                destroy: function() {
                    jQuery.cookie(this.name, null, this.configuration)
                }
            };
            Currency.moneyFormats = {
                USD: {
                    money_format: "$",
                    money_with_currency_format: "$ USD"
                },
                EUR: {
                    money_format: "&euro;",
                    money_with_currency_format: "&euro; EUR"
                },
                GBP: {
                    money_format: "&pound;",
                    money_with_currency_format: "&pound; GBP"
                },
                CAD: {
                    money_format: "$",
                    money_with_currency_format: "$ CAD"
                },
                ALL: {
                    money_format: "Lek ",
                    money_with_currency_format: "Lek  ALL"
                },
                DZD: {
                    money_format: "DA ",
                    money_with_currency_format: "DA  DZD"
                },
                AOA: {
                    money_format: "Kz",
                    money_with_currency_format: "Kz AOA"
                },
                ARS: {
                    money_format: "$",
                    money_with_currency_format: "$ ARS"
                },
                AMD: {
                    money_format: " AMD",
                    money_with_currency_format: " AMD"
                },
                AWG: {
                    money_format: "Afl",
                    money_with_currency_format: "Afl AWG"
                },
                AUD: {
                    money_format: "$",
                    money_with_currency_format: "$ AUD"
                },
                BBD: {
                    money_format: "$",
                    money_with_currency_format: "$ Bds"
                },
                AZN: {
                    money_format: "m.",
                    money_with_currency_format: "m. AZN"
                },
                BDT: {
                    money_format: "Tk ",
                    money_with_currency_format: "Tk  BDT"
                },
                BSD: {
                    money_format: "BS$",
                    money_with_currency_format: "BS$ BSD"
                },
                BHD: {
                    money_format: "0 BD",
                    money_with_currency_format: "0 BHD"
                },
                BYR: {
                    money_format: "Br ",
                    money_with_currency_format: "Br  BYR"
                },
                BZD: {
                    money_format: "BZ$",
                    money_with_currency_format: "BZ$ BZD"
                },
                BTN: {
                    money_format: "Nu ",
                    money_with_currency_format: "Nu  BTN"
                },
                BAM: {
                    money_format: "KM ",
                    money_with_currency_format: "KM  BAM"
                },
                BRL: {
                    money_format: "R$ ",
                    money_with_currency_format: "R$  BRL"
                },
                BOB: {
                    money_format: "Bs",
                    money_with_currency_format: "Bs BOB"
                },
                BWP: {
                    money_format: "P",
                    money_with_currency_format: "P BWP"
                },
                BND: {
                    money_format: "$",
                    money_with_currency_format: "$ BND"
                },
                BGN: {
                    money_format: " лв",
                    money_with_currency_format: " лв BGN"
                },
                MMK: {
                    money_format: "K",
                    money_with_currency_format: "K MMK"
                },
                KHR: {
                    money_format: "KHR",
                    money_with_currency_format: "KHR"
                },
                KYD: {
                    money_format: "$",
                    money_with_currency_format: "$ KYD"
                },
                XAF: {
                    money_format: "FCFA",
                    money_with_currency_format: "FCFA XAF"
                },
                CLP: {
                    money_format: "$",
                    money_with_currency_format: "$ CLP"
                },
                CNY: {
                    money_format: "&#165;",
                    money_with_currency_format: "&#165; CNY"
                },
                COP: {
                    money_format: "$",
                    money_with_currency_format: "$ COP"
                },
                CRC: {
                    money_format: "&#8353; ",
                    money_with_currency_format: "&#8353;  CRC"
                },
                HRK: {
                    money_format: " kn",
                    money_with_currency_format: " kn HRK"
                },
                CZK: {
                    money_format: " K&#269;",
                    money_with_currency_format: " K&#269;"
                },
                DKK: {
                    money_format: "",
                    money_with_currency_format: "kr."
                },
                DOP: {
                    money_format: "RD$ ",
                    money_with_currency_format: "RD$ "
                },
                XCD: {
                    money_format: "$",
                    money_with_currency_format: "EC$"
                },
                EGP: {
                    money_format: "LE ",
                    money_with_currency_format: "LE  EGP"
                },
                ETB: {
                    money_format: "Br",
                    money_with_currency_format: "Br ETB"
                },
                XPF: {
                    money_format: " XPF",
                    money_with_currency_format: " XPF"
                },
                FJD: {
                    money_format: "$",
                    money_with_currency_format: "FJ$"
                },
                GMD: {
                    money_format: "D ",
                    money_with_currency_format: "D  GMD"
                },
                GHS: {
                    money_format: "GH&#8373;",
                    money_with_currency_format: "GH&#8373;"
                },
                GTQ: {
                    money_format: "Q",
                    money_with_currency_format: " GTQ"
                },
                GYD: {
                    money_format: "G$",
                    money_with_currency_format: "$ GYD"
                },
                GEL: {
                    money_format: " GEL",
                    money_with_currency_format: " GEL"
                },
                HNL: {
                    money_format: "L ",
                    money_with_currency_format: "L  HNL"
                },
                HKD: {
                    money_format: "$",
                    money_with_currency_format: "HK$"
                },
                HUF: {
                    money_format: "",
                    money_with_currency_format: " Ft"
                },
                ISK: {
                    money_format: " kr",
                    money_with_currency_format: " kr ISK"
                },
                INR: {
                    money_format: "Rs. ",
                    money_with_currency_format: "Rs. "
                },
                IDR: {
                    money_format: "",
                    money_with_currency_format: "Rp "
                },
                ILS: {
                    money_format: " NIS",
                    money_with_currency_format: " NIS"
                },
                JMD: {
                    money_format: "$",
                    money_with_currency_format: "$ JMD"
                },
                JPY: {
                    money_format: "&#165;",
                    money_with_currency_format: "&#165; JPY"
                },
                JEP: {
                    money_format: "&pound;",
                    money_with_currency_format: "&pound; JEP"
                },
                JOD: {
                    money_format: "0 JD",
                    money_with_currency_format: "0 JOD"
                },
                KZT: {
                    money_format: " KZT",
                    money_with_currency_format: " KZT"
                },
                KES: {
                    money_format: "KSh",
                    money_with_currency_format: "KSh"
                },
                KWD: {
                    money_format: "0 KD",
                    money_with_currency_format: "0 KWD"
                },
                KGS: {
                    money_format: "лв",
                    money_with_currency_format: "лв"
                },
                LVL: {
                    money_format: "Ls ",
                    money_with_currency_format: "Ls  LVL"
                },
                LBP: {
                    money_format: "L&pound;",
                    money_with_currency_format: "L&pound; LBP"
                },
                LTL: {
                    money_format: " Lt",
                    money_with_currency_format: " Lt"
                },
                MGA: {
                    money_format: "Ar ",
                    money_with_currency_format: "Ar  MGA"
                },
                MKD: {
                    money_format: "ден ",
                    money_with_currency_format: "ден  MKD"
                },
                MOP: {
                    money_format: "MOP$",
                    money_with_currency_format: "MOP$"
                },
                MVR: {
                    money_format: "Rf",
                    money_with_currency_format: "Rf MRf"
                },
                MXN: {
                    money_format: "$ ",
                    money_with_currency_format: "$  MXN"
                },
                MYR: {
                    money_format: "RM MYR",
                    money_with_currency_format: "RM MYR"
                },
                MUR: {
                    money_format: "Rs ",
                    money_with_currency_format: "Rs  MUR"
                },
                MDL: {
                    money_format: " MDL",
                    money_with_currency_format: " MDL"
                },
                MAD: {
                    money_format: " dh",
                    money_with_currency_format: "Dh  MAD"
                },
                MNT: {
                    money_format: " &#8366",
                    money_with_currency_format: " MNT"
                },
                MZN: {
                    money_format: " Mt",
                    money_with_currency_format: "Mt  MZN"
                },
                NAD: {
                    money_format: "N$",
                    money_with_currency_format: "N$ NAD"
                },
                NPR: {
                    money_format: "Rs",
                    money_with_currency_format: "Rs NPR"
                },
                ANG: {
                    money_format: "&fnof;",
                    money_with_currency_format: " NA&fnof;"
                },
                NZD: {
                    money_format: "$",
                    money_with_currency_format: "$ NZD"
                },
                NIO: {
                    money_format: "C$",
                    money_with_currency_format: "C$ NIO"
                },
                NGN: {
                    money_format: "&#8358;",
                    money_with_currency_format: "&#8358; NGN"
                },
                NOK: {
                    money_format: "kr ",
                    money_with_currency_format: "kr  NOK"
                },
                OMR: {
                    money_format: " OMR",
                    money_with_currency_format: " OMR"
                },
                PKR: {
                    money_format: "Rs.",
                    money_with_currency_format: "Rs. PKR"
                },
                PGK: {
                    money_format: "K ",
                    money_with_currency_format: "K  PGK"
                },
                PYG: {
                    money_format: "Gs. ",
                    money_with_currency_format: "Gs.  PYG"
                },
                PEN: {
                    money_format: "S/. ",
                    money_with_currency_format: "S/.  PEN"
                },
                PHP: {
                    money_format: "&#8369;",
                    money_with_currency_format: "&#8369; PHP"
                },
                PLN: {
                    money_format: " zl",
                    money_with_currency_format: " zl PLN"
                },
                QAR: {
                    money_format: "QAR ",
                    money_with_currency_format: "QAR "
                },
                RON: {
                    money_format: " lei",
                    money_with_currency_format: " lei RON"
                },
                RUB: {
                    money_format: "&#1088;&#1091;&#1073;",
                    money_with_currency_format: "&#1088;&#1091;&#1073; RUB"
                },
                RWF: {
                    money_format: " RF",
                    money_with_currency_format: " RWF"
                },
                WST: {
                    money_format: "WS$ ",
                    money_with_currency_format: "WS$  WST"
                },
                SAR: {
                    money_format: " SR",
                    money_with_currency_format: " SAR"
                },
                STD: {
                    money_format: "Db ",
                    money_with_currency_format: "Db  STD"
                },
                RSD: {
                    money_format: " RSD",
                    money_with_currency_format: " RSD"
                },
                SCR: {
                    money_format: "Rs ",
                    money_with_currency_format: "Rs  SCR"
                },
                SGD: {
                    money_format: "$",
                    money_with_currency_format: "$ SGD"
                },
                SYP: {
                    money_format: "S&pound;",
                    money_with_currency_format: "S&pound; SYP"
                },
                ZAR: {
                    money_format: "R ",
                    money_with_currency_format: "R  ZAR"
                },
                KRW: {
                    money_format: "&#8361;",
                    money_with_currency_format: "&#8361; KRW"
                },
                LKR: {
                    money_format: "Rs ",
                    money_with_currency_format: "Rs  LKR"
                },
                SEK: {
                    money_format: " kr",
                    money_with_currency_format: " kr SEK"
                },
                CHF: {
                    money_format: "SFr. ",
                    money_with_currency_format: "SFr.  CHF"
                },
                TWD: {
                    money_format: "$",
                    money_with_currency_format: "$ TWD"
                },
                THB: {
                    money_format: " &#xe3f;",
                    money_with_currency_format: " &#xe3f; THB"
                },
                TZS: {
                    money_format: " TZS",
                    money_with_currency_format: " TZS"
                },
                TTD: {
                    money_format: "$",
                    money_with_currency_format: "$ TTD"
                },
                TND: {
                    money_format: "",
                    money_with_currency_format: " DT"
                },
                TRY: {
                    money_format: "TL",
                    money_with_currency_format: "TL"
                },
                UGX: {
                    money_format: "Ush ",
                    money_with_currency_format: "Ush  UGX"
                },
                UAH: {
                    money_format: "₴",
                    money_with_currency_format: "₴ UAH"
                },
                AED: {
                    money_format: "Dhs. ",
                    money_with_currency_format: "Dhs.  AED"
                },
                UYU: {
                    money_format: "$",
                    money_with_currency_format: "$ UYU"
                },
                VUV: {
                    money_format: "$",
                    money_with_currency_format: "$VT"
                },
                VEF: {
                    money_format: "Bs. ",
                    money_with_currency_format: "Bs.  VEF"
                },
                VND: {
                    money_format: "&#8363;",
                    money_with_currency_format: " VND"
                },
                XBT: {
                    money_format: " BTC",
                    money_with_currency_format: " BTC"
                },
                XOF: {
                    money_format: "CFA",
                    money_with_currency_format: "CFA XOF"
                },
                ZMW: {
                    money_format: "K",
                    money_with_currency_format: "ZMW"
                }
            };
            Currency.formatMoney = function(b, g) {
                if (typeof Shopify.formatMoney === "function") {
                    return Shopify.formatMoney(b, g)
                }
                if (typeof b == "string") {
                    b = b.replace(".", "")
                }
                var f = "";
                var e = /\{\{\s*(\w+)\s*\}\}/;
                var a = g || "$";

                function c(h, i) {
                    return (typeof h == "undefined" ? i : h)
                }

                function d(m, k, l, j) {
                    k = c(k, 2);
                    l = c(l, ",");
                    j = c(j, ".");
                    if (isNaN(m) || m == null) {
                        return 0
                    }
                    m = (m / 100).toFixed(k);
                    var n = m.split("."),
                        i = n[0].replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1" + l),
                        h = n[1] ? (j + n[1]) : "";
                    return i + h
                }
                switch (a.match(e)[1]) {
                    case "amount":
                        f = d(b, 2);
                        break;
                    case "amount_no_decimals":
                        f = d(b, 0);
                        break;
                    case "amount_with_comma_separator":
                        f = d(b, 2, ".", ",");
                        break;
                    case "amount_no_decimals_with_comma_separator":
                        f = d(b, 0, ".", ",");
                        break
                }
                return a.replace(e, f)
            };
            Currency.currentCurrency = "";
            Currency.format = "money_with_currency_format";
            Currency.convertAll = function(c, b, a, d) {
                jQuery(a || "span.money").each(function() {
                    if (jQuery(this).attr("data-currency") === b) {
                        return
                    }
                    if (jQuery(this).attr("data-currency-" + b)) {
                        jQuery(this).html(jQuery(this).attr("data-currency-" + b))
                    } else {
                        var e = 0;
                        var f = Currency.moneyFormats[c][d || Currency.format] || "";
                        var g = Currency.moneyFormats[b][d || Currency.format] || "";
                        if (f.indexOf("amount_no_decimals") !== -1) {
                            e = Currency.convert(parseInt(jQuery(this).html().replace(/[^0-9]/g, ""), 10) *
                                100, c, b)
                        } else {
                            if (c === "JOD" || c == "KWD" || c == "BHD") {
                                e = Currency.convert(parseInt(jQuery(this).html().replace(/[^0-9]/g, ""),
                                    10) / 10, c, b)
                            } else {
                                e = Currency.convert(parseInt(jQuery(this).html().replace(/[^0-9]/g, ""),
                                    10), c, b)
                            }
                        }
                        var h = Currency.formatMoney(e, g);
                        jQuery(this).html(h);
                        jQuery(this).attr("data-currency-" + b, h)
                    }
                    jQuery(this).attr("data-currency", b)
                });
                this.currentCurrency = b;
                this.cookie.write(b)
            };
            </script>
        </div>

    </div>


    <div class="dt-sc-hr-invisible-large"></div>
</main>


<?php include_once('../includes/footer.php'); ?>