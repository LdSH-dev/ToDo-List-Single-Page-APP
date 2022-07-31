<?php

namespace App\Controllers;

use App\Models\Task;


class TaskControl extends BaseController
{   
    public function insertTask()
    {   
        if ($this->request->isAJAX())
        {   
            $data['name']     = $this->request->getPost('name');
            $data['desc']     = $this->request->getPost('desc');
            $data['datetime'] = $this->request->getPost('datetime');
            $data['fk_list']  = $this->request->getPost('fk_list');

            $taskModel   = new Task();
            $result = $taskModel->insert($data);

            return json_encode($result);
        }
    }

    public function deleteTask()
    {
        if ($this->request->isAJAX())
        {
            $id = $this->request->getPost('id');

            $taskModel = new Task();
            $result = $taskModel->delete($id);

            return json_encode($result);
        }
    }
}