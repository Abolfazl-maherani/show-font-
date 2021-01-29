"use strict";
let fonts;
$(document).ready(function() {
    var xhr = new XMLHttpRequest();
    let textText = "این یک متن تستی است";

    function getfont() {
        let fonts = {}
        let str = JSON.stringify(fonts);
        xhr.open("POST", './fonts.php', true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send("fonts=" + str);
    }
    getfont();
    // check response
    xhr.onreadystatechange = function(e) {
        let arr_font = [];
        if (this.status === 200 && this.readyState === 4) {
            let objResponse = JSON.parse(this.responseText);
            let i = 0
            let tblBody = $("#fonts-tbl");
            for (const eKey in objResponse.allfont) {
                arr_font.push(eKey);
            }
            const fontCheck = new Set(arr_font);
            async function Availablefont() {
                await document.fonts.ready;
                const fontAvailable = new Set();
                for (const font of fontCheck.values()) {
                    if (document.fonts.check(`13px "${font}"`)) {
                        fontAvailable.add(font);
                    }
                }
                return ([...fontAvailable.values()]);
            };
            let arravalable = Availablefont();
            arravalable.then(function(resul) {
                for (const eKey in resul) {
                    i++;
                    tblBody.append(`<tr>
                <th class="radif" scope="row">${i}</th>
                    <td style="font-family:${resul[eKey]} "  class="text">${textText}</td>
                    <td class="font_name">${resul[eKey]}</td>
                     <td class="type">${objResponse.allfont[resul[eKey]]}</td>
                    </tr>`);
                }
                $("#count-font").text(" تعداد فونت های موجود سیستم: " + objResponse.numberfont);
                $("#avaleble-font").text("تعداد فونت های فعال سیستم : " + resul.length);
            });
        }
        if (this.status === 404) {
            console.log(this.statusText);
        }
    }
    $("#submit-text").on("click", function() {
        let loader = "<span class=\"spinner-border mr-2 spinner-border-sm\" role=\"status\" aria-hidden=\"true\"></span>";
        let tblText = $(".text");
        let text = $("#text-test").val();
        if (text !== "") {
            tblText.text(text);
            tblText = tblText[0].innerText;
            $(this).append(loader);
            $(this).prop('disabled', true);
            $("#alert-empty").removeClass("active");
            setTimeout(function() {
                $("#submit-text .spinner-border").remove();
                if (tblText == text) {
                    $("#add-text").modal('hide');
                    $('#alert').addClass("active");
                    setTimeout(function() {
                        $('#alert').removeClass("active");
                    }, 4000)

                }
                $(this).attr("disabled", 0);
                $("#submit-text").prop('disabled', false);
            }, 500)

        } else {
            $("#alert-empty").addClass("active")
        }
    });
});