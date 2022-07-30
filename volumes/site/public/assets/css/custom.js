function onAddTask(data) {
    let html = $("#list").html();
    html +=
        "<li class='list-group-item'>" +
        "<div class='todo-indicator bg-warning'></div>" +
        "<div class='widget-content p-0'>" +
        "<div class='widget-content-wrapper'>" +
        "<div class='widget-content-left mr-2'>" +
        "<div class='custom-checkbox custom-control'>" +
        "<input class='custom-control-input' id='exampleCustomCheckbox12' type='checkbox'><label class='custom-control-label' for='exampleCustomCheckbox12'>&nbsp;</label>" +
        "</div>" +
        "</div>" +
        "<div class='widget-content-left'>" +
        "<div class='widget-heading'>Call Sam For payments <div class='badge badge-danger ml-2'>Rejected</div>" +
        "</div>" +
        "<div class='widget-subheading'><i>By Bob</i></div>" +
        "</div>" +
        "<div class='widget-content-right'>" +
        "<button class='border-0 btn-transition btn btn-outline-success'>" +
        "<i class='fa fa-check'></i></button>" +
        "<button class='border-0 btn-transition btn btn-outline-danger'>" +
        "<i class='fa fa-trash'></i>" +
        "</button>" +
        "</div>" +
        "</div>" +
        "</div>" +
        "</li>";
    $("#list").html(html);
}

function onAddList() {
    let html = $("#gridList").html();
    html += "<div class='col-4'>" +
        "<div class='card-hover-shadow-2x mb-3 card'>" +
        "<div class='card-header-tab card-header'>" +
        "<div class='card-header-title font-size-lg text-capitalize font-weight-normal'>"+
        "<i class='fa fa-tasks'></i>&nbsp;" +
        "<form id='formList' action=' method='post'>"+
            "<input type='text' class='form-control' id='list.name' placeholder='Nome da lista'>"+
        "</form>" +
        "</div>"+
        "<div class='d-block right card-header float-right'><button class='btn btn-primary' onclick='onAddTask(this);' id='addTask'><i class='fa-plus'></i></button></div>" +
        "</div>" +
        "<div class='scroll-area-sm'>" +
        "<perfect-scrollbar class='ps-show-limits'>" +
        "<div style='position: static;' class='ps ps--active-y'>" +
        "<div class='ps-content'>" +
        "<ul id='list' class=' list-group list-group-flush'>" +
        "<li>Você ainda não adicionou tarefas a essa lista</li>" +
        "</ul>" +
        "</div>" +
        "</div>" +
        "</perfect-scrollbar>" +
        "</div>" +
        "</div>" +
        "</div>";

    $("#gridList").html(html);
}