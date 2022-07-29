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
    <script src="/public/assets/css/custom.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2aa77c310e.js" crossorigin="anonymous"></script>
</head>

<body>
    <? var_dump($todo); ?>
    <div class="row d-flex justify-content-center container">
        <div class="col-md-8">
            <div class="card-hover-shadow-2x mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="fa fa-tasks"></i>&nbsp;Task Lists</div>

                </div>
                <div class="scroll-area-sm">
                    <perfect-scrollbar class="ps-show-limits">
                        <div style="position: static;" class="ps ps--active-y">
                            <div class="ps-content">
                                <ul class=" list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="todo-indicator bg-warning"></div>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-2">
                                                    <div class="custom-checkbox custom-control">
                                                        <input class="custom-control-input" id="exampleCustomCheckbox12" type="checkbox"><label class="custom-control-label" for="exampleCustomCheckbox12">&nbsp;</label>
                                                    </div>
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Call Sam For payments <div class="badge badge-danger ml-2">Rejected</div>
                                                    </div>
                                                    <div class="widget-subheading"><i>By Bob</i></div>
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
                                    <li class="list-group-item">
                                        <div class="todo-indicator bg-focus"></div>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-2">
                                                    <div class="custom-checkbox custom-control"><input class="custom-control-input" id="exampleCustomCheckbox1" type="checkbox"><label class="custom-control-label" for="exampleCustomCheckbox1">&nbsp;</label></div>
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Make payment to Bluedart</div>
                                                    <div class="widget-subheading">
                                                        <div>By Johnny <div class="badge badge-pill badge-info ml-2">NEW</div>
                                                        </div>

                                                    </div>

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
                                    <li class="list-group-item">
                                        <div class="todo-indicator bg-primary"></div>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-2">
                                                    <div class="custom-checkbox custom-control"><input class="custom-control-input" id="exampleCustomCheckbox4" type="checkbox"><label class="custom-control-label" for="exampleCustomCheckbox4">&nbsp;</label></div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">Office rent </div>
                                                    <div class="widget-subheading">By Samino!</div>
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
                                    <li class="list-group-item">
                                        <div class="todo-indicator bg-info"></div>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-2">
                                                    <div class="custom-checkbox custom-control"><input class="custom-control-input" id="exampleCustomCheckbox2" type="checkbox"><label class="custom-control-label" for="exampleCustomCheckbox2">&nbsp;</label></div>
                                                </div>

                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Office grocery shopping</div>
                                                    <div class="widget-subheading">By Tida</div>
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
                                    <li class="list-group-item">
                                        <div class="todo-indicator bg-success"></div>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-2">
                                                    <div class="custom-checkbox custom-control"><input class="custom-control-input" id="exampleCustomCheckbox3" type="checkbox"><label class="custom-control-label" for="exampleCustomCheckbox3">&nbsp;</label></div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">Ask for Lunch to Clients</div>
                                                    <div class="widget-subheading">By Office Admin</div>
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
                                    <li class="list-group-item">
                                        <div class="todo-indicator bg-success"></div>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-2">
                                                    <div class="custom-checkbox custom-control"><input class="custom-control-input" id="exampleCustomCheckbox10" type="checkbox"><label class="custom-control-label" for="exampleCustomCheckbox10">&nbsp;</label></div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">Client Meeting at 11 AM</div>
                                                    <div class="widget-subheading">By CEO</div>
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
                                </ul>
                            </div>

                        </div>
                    </perfect-scrollbar>
                </div>
                <div class="d-block text-right card-footer"><button class="mr-2 btn btn-link btn-sm">Cancel</button><button class="btn btn-primary">Add Task</button></div>
            </div>
        </div>
    </div>

    <div class="row d-flex justify-content-center container">
        <div class="col-md-8">
            <div class="card-hover-shadow-2x mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="fa fa-tasks"></i>&nbsp;Task Lists</div>

                </div>
                <div class="scroll-area-sm">
                    <perfect-scrollbar class="ps-show-limits">
                        <div style="position: static;" class="ps ps--active-y">
                            <div class="ps-content">
                                <ul id="List" class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="todo-indicator bg-warning"></div>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-2">
                                                    <div class="custom-checkbox custom-control">
                                                        <input class="custom-control-input" id="exampleCustomCheckbox12" type="checkbox"><label class="custom-control-label" for="exampleCustomCheckbox12">&nbsp;</label>
                                                    </div>
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Call Sam For payments <div class="badge badge-danger ml-2">Rejected</div>
                                                    </div>
                                                    <div class="widget-subheading"><i>By Bob</i></div>
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
                                    <li class="list-group-item">
                                        <div class="todo-indicator bg-focus"></div>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-2">
                                                    <div class="custom-checkbox custom-control"><input class="custom-control-input" id="exampleCustomCheckbox1" type="checkbox"><label class="custom-control-label" for="exampleCustomCheckbox1">&nbsp;</label></div>
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Make payment to Bluedart</div>
                                                    <div class="widget-subheading">
                                                        <div>By Johnny <div class="badge badge-pill badge-info ml-2">NEW</div>
                                                        </div>

                                                    </div>

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
                                    <li class="list-group-item">
                                        <div class="todo-indicator bg-primary"></div>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-2">
                                                    <div class="custom-checkbox custom-control"><input class="custom-control-input" id="exampleCustomCheckbox4" type="checkbox"><label class="custom-control-label" for="exampleCustomCheckbox4">&nbsp;</label></div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">Office rent </div>
                                                    <div class="widget-subheading">By Samino!</div>
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
                                    <li class="list-group-item">
                                        <div class="todo-indicator bg-info"></div>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-2">
                                                    <div class="custom-checkbox custom-control"><input class="custom-control-input" id="exampleCustomCheckbox2" type="checkbox"><label class="custom-control-label" for="exampleCustomCheckbox2">&nbsp;</label></div>
                                                </div>

                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Office grocery shopping</div>
                                                    <div class="widget-subheading">By Tida</div>
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
                                    <li class="list-group-item">
                                        <div class="todo-indicator bg-success"></div>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-2">
                                                    <div class="custom-checkbox custom-control"><input class="custom-control-input" id="exampleCustomCheckbox3" type="checkbox"><label class="custom-control-label" for="exampleCustomCheckbox3">&nbsp;</label></div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">Ask for Lunch to Clients</div>
                                                    <div class="widget-subheading">By Office Admin</div>
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
                                    <li class="list-group-item">
                                        <div class="todo-indicator bg-success"></div>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-2">
                                                    <div class="custom-checkbox custom-control"><input class="custom-control-input" id="exampleCustomCheckbox10" type="checkbox"><label class="custom-control-label" for="exampleCustomCheckbox10">&nbsp;</label></div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">Client Meeting at 11 AM</div>
                                                    <div class="widget-subheading">By CEO</div>
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
                                </ul>
                            </div>

                        </div>
                    </perfect-scrollbar>
                </div>
                <div class="d-block text-right card-footer"><button class="mr-2 btn btn-link btn-sm">Cancel</button><button class="btn btn-primary" onclick="onAddTask(this);" id="addTask">Add Task</button></div>
            </div>
        </div>
    </div>

</body>

</html>