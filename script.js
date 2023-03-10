$(document).ready(function() {
    $("#add_another").click(function() {
        var last_row = $("tbody tr:last-child");
        var new_row = last_row.clone();
        var last_id = parseInt(last_row.find("input:first").attr("name").split("[")[1].split("]")[0]);
        var new_id = last_id + 1;

        new_row.find("input").each(function(index, element) {
            var current_name = $(element).attr("name");
            var new_name = current_name.replace("[" + last_id + "]", "[" + new_id + "]");
            $(element).attr("name", new_name);
            $(element).val("");
        });

        new_row.insertAfter(last_row);
    });

    $("form").submit(function(event) {
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url: "submit.php",
            type: "POST",
            data: form_data,
            success: function(response) {
                $("#ajax_results_here").html(response);
            }
        });
    });
});
