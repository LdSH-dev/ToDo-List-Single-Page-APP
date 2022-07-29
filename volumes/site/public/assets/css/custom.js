function onAddTask(data)
{   
    let html = $("#List").html();
    html += 
    "<li class='list-group-item'>" +
    "<div class='todo-indicator bg-warning'></div>" +
        "<div class='widget-content p-0'>" +
            "<div class='widget-content-wrapper'>" +
                "<div class='widget-content-left mr-2'>" +
                    "<div class='custom-checkbox custom-control'>" +
                        "<input class='custom-control-input' id='exampleCustomCheckbox12' type='checkbox'><label class='custom-control-label' for='exampleCustomCheckbox12'>&nbsp;</label>" +
                    "</div>"+
                "</div>" +
                "<div class='widget-content-left'>" +
                    "<div class='widget-heading'>Call Sam For payments <div class='badge badge-danger ml-2'>Rejected</div>"+
                   "</div>"+
                    "<div class='widget-subheading'><i>By Bob</i></div>"+
                "</div>"+
                "<div class='widget-content-right'>"+
                    "<button class='border-0 btn-transition btn btn-outline-success'>"+
                        "<i class='fa fa-check'></i></button>"+
                    "<button class='border-0 btn-transition btn btn-outline-danger'>"+
                        "<i class='fa fa-trash'></i>"+
                    "</button>"+
                "</div>"+
            "</div>"+
        "</div>"+
    "</li>";
    $("#List").html(html);
}