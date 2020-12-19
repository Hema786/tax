let isValidate, step1 = document.querySelector(".step-1 .commen-btn"),
    step2 = document.querySelector(".step-2 .commen-btn"),
    step3 = document.querySelector(".step-3 .commen-btn"),
    step4 = document.querySelector(".step-4 .print-btn"),
    stepEdit = document.querySelector(".step-4 .edit-btn");

function validateField(e) {
    let t = "." + document.querySelector(".step-" + e).classList[0],
        n = document.querySelectorAll(t + " .commen-error");
    var i = !1;
    return isValidate = !0, document.querySelectorAll(t + " .commen-input").forEach(function(e) {
        if ("" == e.value) return e.nextElementSibling.classList.add("show-error"), e.nextElementSibling.innerHTML = e.getAttribute("placeholder") + " is required", e.nextElementSibling.style.visibility = "visible", isValidate = !1;
        isValidate && (e.nextElementSibling.classList.remove("show-error"), e.nextElementSibling.innerHTML = "", e.nextElementSibling.style.visibility = "hidden")
    }), n.forEach(function(e) {
        e.classList.contains("show-error") && (i = !0)
    }), i || (document.querySelector(".step-" + e).classList.remove("show-section", "fadeInRight"), document.getElementById("taxForm").classList.remove("display-none"), e++, tabList(), document.getElementById("step-" + e).classList.add("active", "active-list"), document.querySelector(".step-" + e).classList.add("show-section", "fadeInRight")), isValidate
}

function tabList() {
    document.querySelectorAll(".tab-list li").forEach(function(e) {
        e.classList.remove("active"), e.addEventListener("click", function(e) {
            let t = e.target.getAttribute("id");
            fromSteps = parseInt(t.split("", 6).splice(5, 6)), document.querySelectorAll(".tab-list li").forEach(function(e) {
                e.classList.remove("active")
            }), e.target.classList.add("active", "active-list"), document.querySelectorAll("div[class*='step-']").forEach(function(e) {
                e.classList.remove("show-section", "fadeInRight")
            }), document.querySelector("." + t).classList.add("show-section", "fadeInRight")
        })
    })
}
step1.addEventListener("click", function() {
    validateField(1)
}), step2.addEventListener("click", function() {
    validateField(2)
}), step3.addEventListener("click", function() {
    if (validateField(3), isValidate) {
        let e = ["Jan", "Feb", "March", "April", "May", "June", "July", "August", "Sep", "Oct", "Nov", "Dec"],
            t = document.getElementById("monthlyRent").value,
            n = document.getElementById("fullName").value,
            i = document.getElementById("address").value,
            r = document.getElementById("ownerName").value,
            a = document.getElementById("panNumber").value,
            l = document.getElementById("monthly");
        priviewRentRecipt(e, t, n, i, r, a, l), printPreviewRecipt(e, t, n, i, r, a, l), document.getElementById("tabList").classList.add("display-none"), document.getElementById("reciptPreview").classList.remove("display-none"), document.querySelector(".tab-list-wrap h3").classList.add("display-none")
    }
}), step4.addEventListener("click", function() {
    printRecipt()
}), stepEdit.addEventListener("click", function() {
    document.querySelector(".step-1").classList.add("show-section", "fadeInRight"), document.querySelector(".step-4").classList.remove("show-section", "fadeInRight"), document.querySelector("#step-4").classList.remove("active-list", "active"), document.querySelector("#step-1").classList.add("active-list", "active"), document.getElementById("tabList").classList.remove("display-none"), document.getElementById("reciptPreview").classList.add("display-none"), document.querySelector(".tab-list-wrap h3").classList.remove("display-none"), document.getElementById("inner-print-area-2").innerHTML = ""
}), document.querySelectorAll(".input-elmn").forEach(function(e) {
    e.addEventListener("input", function(e) {
        if (!e.data) return;
        var t = e.data.charCodeAt(0);
        let n = e.target,
            i = n.value;
        e.target.classList.contains("input-number") && t > 31 && (t < 48 || t > 57) ? (n.nextElementSibling.innerHTML = "Fill only Number", n.nextElementSibling.classList.add("show-error"), n.nextElementSibling.style.visibility = "visible", i = i.slice(0, i.length - 1), isValidate = !1) : (e.target.nextElementSibling.classList.remove("show-error"), e.target.nextElementSibling.style.visibility = "hidden"), e.target.value = i
    })
});
var pan_no = document.getElementById("panNumber");

function countMonth(e, t) {
    var n;
    return n = 12 * (+t[2] - +e[2]), n -= +e[1] + 1, (n += +t[1] + 2) <= 0 ? 0 : n
}

function priviewRentRecipt(e, t, n, i, r, a, l) {
    let o = $("#datetimepicker1 > input").val().split("/"),
        s = $("#datetimepicker2 > input").val().split("/");
    totalMonths = countMonth(o, s);
    let d = parseInt(o[1]),
        c = parseInt(o[2]),
        p = document.querySelectorAll(".period");
    document.getElementById("tenantPriview").innerHTML = n, document.getElementById("addressPreview").innerHTML = i, document.getElementById("ownerNamePriview").innerHTML = r, document.getElementById("ownerPanPriview").innerHTML = a, document.getElementById("reciptType").innerHTML = "Format: Monthly", o = e[d - 1] + " " + c, s = e[d + 2 - 1] + " " + c, l.checked ? (p.forEach(function(e) {
        e.innerHTML = o
    }), document.getElementById("rentPriview").innerHTML = commaSeprated(t)) : (totalMonths >= 3 && (e.length - 1 <= d && (s = d + 2 - (e.length + 2), c++), document.getElementById("rentPriview").innerHTML = commaSeprated(3 * t), p.forEach(function(e) {
        e.innerHTML = "from " + o + " to " + s
    })), document.getElementById("reciptType").innerHTML = "Format: Quarterly")
}

function printPreviewRecipt(e, t, n, r, a, l, o) {
    let s, d = $("#datetimepicker1 > input").val().split("/"),
        c = $("#datetimepicker2 > input").val().split("/");
    totalMonths = countMonth(d, c);
    let p = Math.floor(totalMonths / 3),
        m = totalMonths % 3,
        u = parseInt(d[1]),
        g = parseInt(d[2]),
        y = 1;
    document.getElementById("previewBlock");
    for (o.checked && (m = m = totalMonths, p = 0), i = 1; i <= p; i++) {
        s = commaSeprated(3 * t), d = e[u - 1] + " " + g, e.length - 1 <= u && (u = u + 2 - (e.length + 2), g++), c = e[u + 2 - 1] + " " + g, (u += 3) > 12 && (u += -12, g++), (h = document.createElement("div")).className = "print-wrapper", h.innerHTML = '<table cellpadding="0" cellspacing="0" style="border:1px solid #000000;padding:20px 20px 10px 20px;display:block;max-width:100%;width: 670px;margin:0 0 15px 0;font-family: arial;" id="pageBreak"><tr><td><h1 style="color:#1e2432;font-size: 14px;text-transform: uppercase;margin:0">Rent receipt</h1><p style="color:#a8b1c0;font-size: 14px;text-transform: uppercase;margin:5px 0 0 0">' + d + " - " + c + '</p></td><td style="text-align: right"><div style="text-align: left;display: inline-block;"><p style="font-size: 12px; color:#c0bec2;margin:0">Receipt: ' + y + '</p></div></td></tr><tr><td colspan="2"><p style="font-size: 12px; line-height: 18px;color: #454545;margin:25px 0 30px 0;padding-right:20px;">Received sum of &#8377;' + s + ' from <span style="text-decoration: underline;text-transform: capitalize;">' + n + '</span> towards the rent of property located at <span style="text-decoration: underline;text-transform: capitalize;">' + r + "</span> for the period from " + d + " to " + c + '</p></td></tr><tr><td rowspan="2" style="vertical-align:bottom"><p style="font-size: 14px; line-height: 18px;color: #1e2432;margin:0px 0 15px 0;font-weight:bold;">Signature</p><p style="font-size: 14px; line-height: 18px;color: #1e2432;margin:0px 0 15px 0;font-weight:bold;"><span id="landLordName" style="text-transform:capitalize">' + a + '</span> <span style="font-size:14px;color:#c0bec2;font-weight: normal;">(Landlord)</p><p style="font-size: 14px; line-height: 18px;color: #1e2432;margin:0px 0 0;font-weight:bold;"><span id="landLordPan" style="text-transform:uppercase">' + l + '</span> <span style="font-size:14px;color:#c0bec2;font-weight: normal;">(PAN Number)</p></td><td style="text-align: right"><div style="border:1px dashed #000000;color: #c0bec2;font-size: 14px;padding: 10px;text-align: center;border-radius: 5px;width:80px;margin:0;display: inline-block;"><p style="color: #c0bec2;">Revenue<br/>Stamp</p></div></td></tr><tr><td></div></td></tr></table>', document.getElementById("inner-print-area-2").append(h), y++
    }
    if (0 !== m)
        for (i = 1; i <= m; i++) {
            var h;
            s = commaSeprated(t), d = e[u - 1] + " " + g, u >= 12 && (u = 0, g++), u++, (h = document.createElement("div")).className = "print-wrapper", h.innerHTML = '<table cellpadding="0" cellspacing="0" style="border:1px solid #000000;padding:20px 20px 10px 20px;display:block;max-width:100%;width: 670px;margin:0 0 15px 0;font-family: arial;" id="pageBreak"><tr><td><h1 style="color:#1e2432;font-size: 14px;text-transform: uppercase;margin:0">Rent receipt</h1><p style="color:#a8b1c0;font-size: 14px;text-transform: uppercase;margin:5px 0 0 0">' + d + '</p></td><td style="text-align: right"><div style="text-align: left;display: inline-block;"><p style="font-size: 12px; color:#c0bec2;margin:0">Receipt: ' + y + '</p></div></td></tr><tr><td colspan="2"><p style="font-size: 12px; line-height: 18px;color: #454545;margin:25px 0 30px 0;padding-right:20px;">Received sum of INR &#8377;' + s + ' from <span style="text-decoration: underline;text-transform: capitalize;">' + n + '</span> towards the rent of property located at <span style="text-decoration: underline;text-transform: capitalize;">' + r + "</span> for the period " + d + '</p></td></tr><tr><td rowspan="2" style="vertical-align:bottom"><p style="font-size: 14px; line-height: 18px;color: #1e2432;margin:0px 0 15px 0;font-weight:bold;">Signature</p><p style="font-size: 14px; line-height: 18px;color: #1e2432;margin:0px 0 15px 0;font-weight:bold;"><span id="landLordName" style="text-transform:capitalize">' + a + '</span> <span style="font-size:14px;color:#c0bec2;font-weight: normal;">(Landlord)</p><p style="font-size: 14px; line-height: 18px;color: #1e2432;margin:0px 0 0 0;font-weight:bold;"><span id="landLordPan" style="text-transform:uppercase">' + l + '</span> <span style="font-size:14px;color:#c0bec2;font-weight: normal;">(PAN Number)</p></td><td style="text-align: right"><div style="border:1px dashed #000000;font-size: 14px;padding: 10px;text-align: center;border-radius: 5px;width:80px;margin:0;display: inline-block;"><p style="color: #c0bec2;">Revenue<br/>Stamp</p></div></td></tr><tr><td></td></tr></table>', document.getElementById("inner-print-area-2").append(h), y++
        }
    document.querySelectorAll("#inner-print-area-2 .print-wrapper").length >= 4 && document.querySelectorAll("#inner-print-area-2  .print-wrapper:nth-child(4n+4)").forEach(function(e) {
        e.style.pageBreakAfter = "always";
        document.getElementById("footer")
    })
}

function printRecipt() {
    var e = document.getElementById("print-area-2").innerHTML;
    window.frames.print_frame.document.body.innerHTML = e, setTimeout(function() {
        window.frames.print_frame.focus(), window.frames.print_frame.print(), console.log(window.length)
    }, 250)
}

function commaSeprated(e) {
    let t = (e = e.toString()).substring(e.length - 3),
        n = e.substring(0, e.length - 3);
    return "" != n && (t = "," + t), n.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + t
}
pan_no.addEventListener("blur", function(e) {
    if ("" != pan_no.value) {
        PanNo = e.target.value; - 1 == PanNo.search(/^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/) && (e.target.nextElementSibling.classList.add("show-error"), e.target.nextElementSibling.innerHTML = "Enter Valid PAN No.", e.target.nextElementSibling.style.visibility = "visible", document.querySelector(".step-2 button").style.pointerEvents = "none")
    } else e.target.nextElementSibling.classList.remove("show-error"), e.target.nextElementSibling.innerHTML = "", e.target.nextElementSibling.style.visibility = "hidden", document.querySelector(".step-2 button").style.pointerEvents = "auto"
}), $(function() {
    var e = "1/04/" + ((new Date).getFullYear() - 2),
        t = "31/03/" + ((new Date).getFullYear() + 1);
    $(".date").datepicker({
        format: "dd/mm/yyyy",
        language: "en",
        autoclose: !0,
        useCurrent: !0,
        todayHighlight: !0,
        startDate: e,
        endDate: t,
        startView: 1
    }), $(".date").on("changeDate", function(e) {
        let t = $("#datetimepicker1").find("#starDate").val().split("/"),
            n = $("#datetimepicker2").find("#endDate").val().split("/");
        totalMonths = countMonth(t, n), $(e.currentTarget).find(".commen-error").removeClass("show-error"), $(e.currentTarget).find(".commen-error").css("visibility", "hidden"), "" != $("#datetimepicker2").find("#endDate").val() && new Date(t[1] + "/" + t[0] + "/" + t[2]) > new Date(n[1] + "/" + n[0] + "/" + n[2]) && ($("#datetimepicker2").find(".commen-error").addClass("show-error"), $("#datetimepicker2").find(".commen-error").css("visibility", "visible"), $("#datetimepicker2").find(".commen-error").html("Enter valid date")), totalMonths <= 2 || isNaN(totalMonths) ? ($("#quarterly").parent(".radio-btn").addClass("disabled-class"), $("#monthly").prop("checked", !0)) : ($("#quarterly").prop("checked", !0), $("#monthly").prop("checked", !1), $("#quarterly").parent(".radio-btn").removeClass("disabled-class"))
    })
});