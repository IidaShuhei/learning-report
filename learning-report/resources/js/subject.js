window.addEventListener("DOMContentLoaded", function() {
    //科目の設定
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
