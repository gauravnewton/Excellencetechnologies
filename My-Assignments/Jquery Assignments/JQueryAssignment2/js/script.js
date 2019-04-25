function addRow($self) {
    $($self).parents("div#addbtnrow").before('<div style="margin:10px -20px 10px 10px;" class="row">' +
            '<div class="col-sm-3">' +
            '<input type="text"/>' +
            '</div>' +
            '<div class="col-sm-3">' +
            '<input type="file"/>' +
            '</div>' +
            '<div class="col-sm-2">' +
            '<select onchange="changeImageType(this);">' +
            '<option value="0">Primary Image</option>' +
            '<option value="1" selected>Secondary Image</option>' +
            '</select>' +
            '</div>' +
            '<div class="col-sm-2">' +
            '<button onclick="removeRow(this);" class="btnRemove">Remove</button>' +
            '</div>' +
            '</div>');
}

function removeRow($self) {
    if($($self).parent("div").prev("div").children("select").val() === "1")
        $($self).parents("div.row").first().remove();
}

function changeImageType($self) {
    if ($($self).val() === "0") {
        $('select').each(function () {
            $(this).val("1");
        });
        $($self).val("0");
    }
}