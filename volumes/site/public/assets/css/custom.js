var modal = document.getElementById("ListModal");

function onEditList(id) {
    let name = $("#listaName_"+id).html();;
    $("#listName").val(name);
    $("#ListModal").data('id', id);
    $("#ListModal").data('edit', 1);
    $("#ListModal").show();
}

function editList(id, name) {
    $.ajax({
        url: '/public/editList',
        dataType: 'json',
        type: 'post',
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        data: {
            'id': id,
            'name': name
        },
        success: function (retorno) {
            $("#listaName_"+id).html(name);
            $("#ListModal").hide();
            $("#ListModal").data('id', '');
            $("#ListModal").data('edit', 0);
            $("#listName").val(' ');
        }
    });
}

function editTask(data) {
    $.ajax({
        url: '/public/editTask',
        dataType: 'json',
        type: 'post',
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        data: data
    });
    
    $('#taskName_' + data.id).html(data.name);
    $('#taskDesc_' + data.id).html(data.desc);
    $('#taskDatetime_' + data.id).html(data.datetime);
    $('#taskModal').hide();
    $("#taskModal").data('id', '');
    $("#taskModal").data('edit', 0);
    $("#taskName").val('');
    $("#taskDesc").val('');
    $("#taskDatetime").val('');
}


function modalTask(data) {
    $("#taskModal").data('id', data.id);
    $("#taskModal").data('edit', 1);
    $("#taskName").val(data.name);
    $("#taskDesc").val(data.desc);
    $("#taskDatetime").val(data.datetime);
    $('#taskModal').show();
}

function onEditTask(id) {

    $.ajax({
        url: '/public/getTask',
        dataType: 'json',
        type: 'post',
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        data: {
            'id': id
        },
        success: function (retorno) {
            modalTask(retorno);
        }
    });
}


function updateStatusTask(id) {
    if ($('#check_' + id).is(':checked')) {
        $("#item_" + id).addClass('done');
        var status = 'T';
    }
    else {
        $("#item_" + id).removeClass('done');
        var status = 'F';
    }

    $.ajax({
        url: '/public/updateTask',
        dataType: 'json',
        type: 'post',
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        data: {
            'id': id,
            'status': status
        }
    });
}

function deleteList(id) {
    $.ajax({
        url: '/public/deleteList',
        dataType: 'json',
        type: 'post',
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        data: {
            'id': id
        },
        success: function (retorno) {
            afterDeleteList(id);
        }
    });
}

function afterDeleteList(id) {
    $('#list_' + id).remove();
}

function deleteTask(id) {
    $.ajax({
        url: '/public/deleteTask',
        dataType: 'json',
        type: 'post',
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        data: {
            'id': id
        },
        success: function (retorno) {
            afterDeleteTask(id);
        }
    });
}

function afterDeleteTask(id) {
    $('#item_' + id).remove();
}

function onAddTask(id) {

    $('#taskModal').data('fk_list', id);
    $('#taskModal').data('edit', 0);
    $('#taskModal').show();
}

$("#addTask").click(function () {

    let edicao = $('#taskModal').data('edit');
    let fk_list = $('#taskModal').data('fk_list');
    let name = $('#taskName').val();
    let datetime = $('#taskDatetime').val();
    let desc = $('#taskDesc').val();

    let data = {
        'name': name,
        'datetime': datetime,
        'desc': desc,
        'fk_list': fk_list
    };

    if (edicao == 1) {
        data.id = $('#taskModal').data('id');
        editTask(data);
    }
    else {

        $.ajax({
            url: '/public/addTask',
            dataType: 'json',
            type: 'post',
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
            data: data,
            success: function (retorno) {
                afterAddTask(data, retorno);
                $("#taskModal").hide();
                $("#taskModal").data('id', '');
                $("#taskModal").data('edit', 0);
                $("#taskName").val('');
                $("#taskDesc").val('');
                $("#taskDatetime").val('');
            }
        });
    }
});

function afterAddTask(data, id) {
    let html = $("#" + data.fk_list).html();
    let id_name = 'item_' + id;
    let actionDelete = "deleteTask(" + id + ")";
    let check_id = "check_"+id;
    let span_id = 'taskName_'+id;
    let task_Datetime = 'taskDatetime_'+id;
    let task_Desc = 'taskDesc_'+id;

    if (data.status == 'T')    
    {
        var checked  = 'checked';
    }
    else
    {
        var checked = '';
    }

    html += "<li id=" + id_name + " class='list-group-item'>" +
        "<div class='todo-indicator bg-warning'></div>" +
        "<div class='widget-content p-0'>" +
        "<div class='widget-content-wrapper'>" +
        "<div class='widget-content-left mr-2'>" +
        "<div class='custom-checkbox custom-control'>" +
        "<input onclick='updateStatusTask("+id+");' class='form-check-input'"+ checked +" id="+check_id+" type='checkbox'>" +
        "</div>" +
        "</div>" +
        "<div class='widget-content-left'>" +
        "<div class='widget-heading'> <span id="+span_id+">" + data.name + "</span> <div id="+task_Datetime+" class='badge badge-danger ml-2'>" + data.datetime + "</div>" +
        "</div>" +
        "<div id="+task_Desc+" class='widget-subheading'><i>" + data.desc + "</i></div>" +
        "</div>" +
        "<div class='widget-content-right'>" +
        "<button onclick='onEditTask("+id+");' class='border-0 btn-transition btn btn-outline-warning'>"+
        "<i class='fas fa-edit'></i>" +
        "</button>"+
        "<button onclick=" + actionDelete + " class='border-0 btn-transition btn btn-outline-danger'>" +
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
    let id_lista = "list_" + id;
    let list_name = "listaName_"+id;
    html += "<div id=" + id_lista + " class='col-4'>" +
        "<div class='card-hover-shadow-2x mb-3 card'>" +
        "<div class='card-header-tab card-header'>" +
        "<div class='card-header-title font-size-lg text-capitalize font-weight-normal'>" +
        "<i class='fa fa-tasks'></i>&nbsp;" +
        "<span id="+list_name+">"+name+" </span>" +
        "</div>" +
        "<div class='d-block right card-header float-right'><button class='btn btn-primary' onclick='onAddTask(" + id + ");' id='onAddTask'><i class='fa-plus'></i></button>" +
        "<button class='btn btn-danger' onclick='deleteList(" + id + ");' id='onDeleteTask'><i class='fa fa-trash'></i></button>" +
        "<button class='btn btn-warning' onclick='onEditList("+id+");' id='onEditTask'><i class='fas fa-edit'></i></button>"+
        "</div>" +
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

function onAddList()
{
    $("#ListModal").show();
}

// $("#onAddList").click(function () {
    // $("#ListModal").show();
// });

$("#closeModal").click(function () {
    $("#ListModal").hide();
});

$("#closeTaskModal").click(function () {
    $("#taskModal").hide();
});

$("#addList").click(function () {
    let name = $('#listName').val();
    let edicao = $("#ListModal").data('edit');

    if (edicao == 1) {
        let id = $("#ListModal").data('id');
        editList(id, name);
    }
    else {
        $.ajax({
            url: '/public/addLista',
            dataType: 'json',
            type: 'post',
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
            data: {
                'name': name
            },
            success: function (retorno) {
                afterAddList(name, retorno);
                $("#ListModal").hide();
            }
        });
    }
});