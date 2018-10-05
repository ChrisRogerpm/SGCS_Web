var basepath = document.location.origin;
function fncDuallistbox(){
    $(".Duallistbox").bootstrapDualListbox();
    $(".Duallistbox").prop("disabled", true);
    $(".Duallistbox").prop("disabled", true);
    $(".Duallistbox").parent().find(".moveall").remove();
    $(".Duallistbox").parent().find(".move").remove();
    $(".Duallistbox").parent().find(".removeall").remove();
    $(".Duallistbox").parent().find(".remove").remove();
    $(".Duallistbox").parent().find(".clear2").remove();
    $(".Duallistbox").parent().find(".clear1").remove();
};
$(document).ready(function () {
    $(".datepickerfecha").datepicker();
});