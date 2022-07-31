var modal = document.getElementById("ListModal");


function deleteList(id)
{
    $.ajax({
        url: '/public/deleteList',
        dataType: 'json',
        type: 'post',
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        data: {
            'id': id
        },
        success: function (retorno) {
            console.log(retorno);
            afterDeleteList(id);
        },
        error: function (retorno) {
            console.log(retorno);
        }
    });
}

function afterDeleteList(id)
{
    $('#list_'+id).remove();
}

function deleteTask(id)
{
    $.ajax({
        url: '/public/deleteTask',
        dataType: 'json',
        type: 'post',
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        data: {
            'id': id
        },
        success: function (retorno) {
            console.log(retorno);
            afterDeleteTask(id);
        },
        error: function (retorno) {
            console.log(retorno);
        }
    });
}

function afterDeleteTask(id)
{
    $('#item_'+id).remove();
}

function onAddTask(id) {

    $('#taskModal').data('id', id);
    $('#taskModal').show();
}

$("#addTask").click(function () {
    let fk_list = $('#taskModal').data('id');
    let name = $('#taskName').val();
    let datetime = $('#taskDatetime').val();
    let desc = $('#taskDesc').val();

    let data = {
        'name': name,
        'datetime': datetime,
        'desc': desc,
        'fk_list': fk_list
    };

    $.ajax({
        url: '/public/addTask',
        dataType: 'json',
        type: 'post',
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        data: data,
        success: function (retorno) {
            console.log(retorno);
            afterAddTask(data);
            $("#taskModal").hide();
        },
        error: function (retorno) {
            console.log(retorno);
        }
    });

});

function afterAddTask(data) {
    let html = $("#" + data.fk_list).html();

    html += "<li class='list-group-item'>" +
        "<div class='todo-indicator bg-warning'></div>" +
        "<div class='widget-content p-0'>" +
        "<div class='widget-content-wrapper'>" +
        "<div class='widget-content-left mr-2'>" +
        "<div class='custom-checkbox custom-control'>" +
        "<input class='custom-control-input' id='exampleCustomCheckbox12' type='checkbox'><label class='custom-control-label' for='exampleCustomCheckbox12'>&nbsp;</label>" +
        "</div>" +
        "</div>" +
        "<div class='widget-content-left'>" +
        "<div class='widget-heading'>"+ data.name +"<div class='badge badge-danger ml-2'>"+data.datetime+"</div>" +
        "</div>" +
        "<div class='widget-subheading'><i>"+data.desc+"</i></div>" +
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

        $("#" + data.fk_list).html(html);
}

function afterAddList(name, id) {

    let html = $("#gridList").html();
    html += "<div class='col-4'>" +
        "<div class='card-hover-shadow-2x mb-3 card'>" +
        "<div class='card-header-tab card-header'>" +
        "<div class='card-header-title font-size-lg text-capitalize font-weight-normal'>" +
        "<i class='fa fa-tasks'></i>&nbsp;" +
        name +
        "</div>" +
        "<div class='d-block right card-header float-right'><button class='btn btn-primary' onclick='onAddTask(" + id + ");' id='addTask'><i class='fa-plus'></i></button></div>" +
        "</div>" +
        "<div class='scroll-area-sm'>" +
        "<perfect-scrollbar class='ps-show-limits'>" +
        "<div style='position: static;' class='ps ps--active-y'>" +
        "<div class='ps-content'>" +
        "<ul id=" + id + " class=' list-group list-group-flush'>" +
        "</ul>" +
        "</div>" +
        "</div>" +
        "</perfect-scrollbar>" +
        "</div>" +
        "</div>" +
        "</div>";

    $("#gridList").html(html);

}

$("#onAddList").click(function () {
    $("#ListModal").show();
});

$("#closeModal").click(function () {
    $("#ListModal").hide();
});

$("#addList").click(function () {
    let name = $('#listName').val();

    $.ajax({
        url: '/public/addLista',
        dataType: 'json',
        type: 'post',
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        data: {
            'name': name
        },
        success: function (retorno) {
            console.log(retorno);
            afterAddList(name, retorno);
            $("#ListModal").hide();
        },
        error: function (retorno) {
            console.log(retorno);
        }
    });
});

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}