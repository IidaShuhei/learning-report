window.addEventListener("DOMContentLoaded", function() {
    $("#edit").hide();

    $("#editRadio").on("click", function() {
        $("#edit").show();
        $("#add").hide();
    });

    $("#addRadio").on("click", function() {
        $("#edit").hide();
        $("#add").show();
    });
});
