$(document).ready(function() {
    $("#ara").on("keyup", function(e) {
        ara();
    });
    $("#ara").on("focus", function() {
        if ($("#ara").val().length > 1) {
            ara();
        }
    });
    $("#ara").on("change textInput input", function() {
        var arama = $("#ara").val();
        if (arama.length <= 0) {
            $(".araListe").html("");
        }
    });
	var aradiv = document.getElementById("aradiv");
	aradiv.addEventListener("focusout", function(event) {
		if (aradiv.contains(event.relatedTarget)) {
			return;
		}
		$(".araListe").html("");
	});
});

function ara() {
    var arama = $("#ara").val();
    $.ajax({
        url: "/ajax/ara",
        type: "GET",
        data: { arama: arama },
        success: function(data) {
            $(".araListe").html(data);
        },
        error: function(data) {
            $(".araListe").html('<a href="#" class="list-group-item list-group-item-action temaRengi text-white">Arama Başarısız</a>');
        }
    });
}