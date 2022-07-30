<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/assets/css/custom.css" crossorigin="anonymous">
    <script src="/public/assets/css/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2aa77c310e.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="gridList" class="row d-flex justify-content-center container-fluid pt-5">
        <div class="container-fluid col-4 justify-content-center">
            <div class="d-flex" style="margin-top: 25%; margin-left:45%;"><button class="btn btn-primary btn-lg" onclick="onAddList(this);" id="addList"><i class="fa-plus"></i></button></div>
        </div>
        <?PHP foreach ($listas as $lista) { ?>
            <div class="col-4">
                <div class="card-hover-shadow-2x mb-3 card">
                    <div class="card-header-tab card-header">
                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                            <i class="fa fa-tasks"></i>&nbsp;
                            <form id="formList" action="" method="post">
                                <input type="text" class="form-control" id="list.name" placeholder="Nome da lista" value="<?PHP echo $lista['name']; ?>">
                            </form>
                        </div>
                        <div class="d-block right card-header float-right"><button class="btn btn-primary" onclick="onAddTask(this);" id="addTask"><i class="fa-plus"></i></button></div>
                    </div>
                    <div class="scroll-area-sm">
                        <perfect-scrollbar class="ps-show-limits">
                            <div style="position: static;" class="ps ps--active-y">
                                <div class="ps-content">
                                    <ul id="list" class=" list-group list-group-flush">
                                        <? if ($lista['tasks']) { ?>
                                            <? foreach ($lista['tasks'] as $task) { ?>
                                                <?PHP $class = ($task['status'] == 'T') ? 'done' : null; ?>
                                                <li class="list-group-item <? echo $class ?>">
                                                    <div class="todo-indicator bg-warning"></div>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-2">
                                                                <div class="custom-checkbox custom-control">
                                                                    <input class="custom-control-input" id="exampleCustomCheckbox12" type="checkbox"><label class="custom-control-label" for="exampleCustomCheckbox12">&nbsp;</label>
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading"><?PHP echo ($task['name']); ?> <div class="badge badge-danger ml-2"><? echo ($task['datetime']) ?></div>
                                                                </div>
                                                                <div class="widget-subheading"><i><? echo ($task['desc'] ?? null) ?></i></div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <button class="border-0 btn-transition btn btn-outline-success">
                                                                    <i class="fa fa-check"></i></button>
                                                                <button class="border-0 btn-transition btn btn-outline-danger">
                                                                    <i class="fa fa-trash"></i>

                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?PHP }
                                        } else { ?>
                                            <li>Você ainda não adicionou tarefas a essa lista</li>
                                        <?PHP } ?>
                                    </ul>
                                </div>

                            </div>
                        </perfect-scrollbar>
                    </div>
                </div>
            </div>
        <?PHP } ?>
    </div>
</body>

</html>