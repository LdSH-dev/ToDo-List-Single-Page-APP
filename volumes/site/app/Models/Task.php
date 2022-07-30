<?

namespace App\Models;

use CodeIgniter\Model;

class Task extends Model
{
    protected $DBGroup = 'default';

    protected $table      = 'task';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['name', 'status', 'fk_list', 'desc', 'datetime'];

 
    function Task()
    {
        parent::Model();
    }

    function getTasks()
    {
        return $this->findAll();
    }

}

?>