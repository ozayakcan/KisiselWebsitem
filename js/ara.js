$(document).ready(function() {
    $("#ara1").on("keyup", function(e) {
        ara("#ara1",".araListe1");
    });
    $("#ara1").on("focus", function() {
        if ($("#ara1").val().length > 1) {
            ara("#ara1",".araListe1");
        }
    });
    $("#ara1").on("change textInput input", function() {
        var arama = $("#ara1").val();
        if (arama.length <= 0) {
            $(".araListe1").hide();
            $(".araListe1").html("");
        }
    });
	var aradiv1 = document.getElementById("aradiv1");
	aradiv1.addEventListener("focusout", function(event) {
		if (aradiv1.contains(event.relatedTarget)) {
			return;
		}
        $(".araListe1").hide();
		$(".araListe1").html("");
	});
    
    $("#ara2").on("keyup", function(e) {
        ara("#ara2",".araListe2");
    });
    $("#ara2").on("focus", function() {
        if ($("#ara2").val().length > 1) {
            ara("#ara2",".araListe2");
        }
    });
    $("#ara2").on("change textInput input", function() {
        var arama = $("#ara2").val();
        if (arama.length <= 0) {
            $(".araListe2").hide();
            $(".araListe2").html("");
        }
    });
	var aradiv2 = document.getElementById("aradiv2");
	aradiv2.addEventListener("focusout", function(event) {
		if (aradiv2.contains(event.relatedTarget)) {
			return;
		}
        $(".araListe2").hide();
		$(".araListe2").html("");
	});
});

function ara(aramadiv, listediv) {
    var arama = $(aramadiv).val();
    $.ajax({
        url: "/ajax/ara",
        type: "GET",
        data: { arama: arama },
        success: function(data) {
            if(data.length > 0){
                $(listediv).show();
            }
            $(listediv).html(data);
        },
        error: function(data) {
            $(listediv).show();
            $(listediv).html('<a href="#" class="list-group-item list-group-item-action temaRengi text-white">Arama Başarısız</a>');
        }
    });
}