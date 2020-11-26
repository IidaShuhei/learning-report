window.addEventListener("DOMContentLoaded", function() {
    //科目の設定
    $("#edit").hide();

    $("#editRadio").on("click", function() {
        $("#edit").show();
        $("#register").hide();
    });

    $("#registerRadio").on("click", function() {
        $("#edit").hide();
        $("#register").show();
    });
});
