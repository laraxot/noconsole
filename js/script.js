$(document).ready(function() {
    checkComposer();
});

function urlComposer() {
    return 'mainComposer.php';
}

function callPack(func, pack) {
    $("#output").append("\nplease wait...\n");
    $("#output").append("\n===================================================================\n");
    $("#output").append("Executing Started");
    $("#output").append("\n===================================================================\n");
    $.post('main' + pack + '.php', {
            "package": $("#packageComposer").val(),
            "command": func,
            "function": "command"
        },
        function(data) {
            $("#output").append(data);
            $("#output").append("\n===================================================================\n");
            $("#output").append("Execution Ended");
            $("#output").append("\n===================================================================\n");
        }
    );
}



function callComposer(func) {
    callPack(func, 'Composer');
}

function callBower(func) {
    callPack(func, 'Bower');
}

function callArtisan(func) {
    callPack(func, 'Artisan');
}



function checkComposer() {
    $("#output").append('\nloading...\n');
    $.post(urlComposer(), {
            "function": "getStatus",
            "password": $("#password").val()
        },
        function(data) {
            if (data.composer_extracted) {
                $("#output").html("Ready. All commands are available.\n");
                $("button.composer").removeClass('disabled');
                $("button.bower").removeClass('disabled');
            } else if (data.composer) {
                $.post(urlComposer(), {
                        "password": $("#password").val(),
                        "function": "extractComposer",
                    },
                    function(data) {
                        $("#output").append(data);
                        window.location.reload();
                    }, 'text');
            } else {
                $("#output").html("Please wait till composer is being installed...\n");
                $.post(urlComposer(), {
                        "password": $("#password").val(),
                        "function": "downloadComposer",
                    },
                    function(data) {
                        $("#output").append(data);
                        check();
                    }, 'text');
            }
        });
}