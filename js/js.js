function before() {
    $("#in").text("Чекайте");
}

function succes(data) {
    var x;
    var my;
    var uu = [];
    my = JSON.parse(data);

    for (x in my) {
        uu[uu.length] = {
            trener: my[x].trener,
            club: my[x].club,
            value: my[x].name,
            rozryad: my[x].rozryad,
            birth: my[x].birth,
            id_atlets: my[x].id_atlets,
            label: my[x].name + " " + my[x].trener + " " + my[x].club

        };
    }
    $("#name").autocomplete({
        source: uu,
        select: function (a, b) {
            $("#trener").val(b.item.trener);
            $("#club").val(b.item.club);
            $("#rozryad").val(b.item.rozryad);
            $("#birth").val(b.item.birth);
            $("#id_atlets").val(b.item.id_atlets);


        }
    });
}


$(document).ready(function () {
    $("#name").bind("keydown", function () {
        // $("#id_atlets").val(b.item.id_atlets);
        $.ajax({
            url: "inc/audit.inc.php",
            type: "Post",
            data: ({name: $("#name").val()}),
            dataType: "html",
            beforeSend: before,
            success: succes
        })
    })
})


$(document).ready(function () {
    $("#name").bind("keydown", function () {
        $("#id_atlets").val(0);

    })
})

////////////////////////////////////////////


function success(data) {
    var x;
    var my;
    var uu = [];
    my = JSON.parse(data);

    for (x in my) {
        uu[uu.length] = {
            trener: my[x].trener,
            club: my[x].club,
            value: my[x].name,
            rozryad: my[x].rozryad,
            birth: my[x].birth,
            id_atlets: my[x].id_atlets,
            label: my[x].name + " " + my[x].trener + " " + my[x].club
        };
    }
     $('#id_atlets').val(my[x].id_atlets);
}


$(document).ready(function () {
    $("#submit").bind("mousedown", function () {
        $.ajax({
            url: "inc/kkkk.inc.php",
            type: "Post",
            data: ({name: $("#name").val(), id_atlets: $("#id_atlets").val()}),
            dataType: "html",
            beforeSend: before,
            success: success

        })
    })
})

