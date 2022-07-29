<?

namespace App\Models;

use CodeIgniter\Model;

class ToDoList extends Model
{
    protected $DBGroup = 'default';

    protected $table      = 'list';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['name', 'status'];

 
    function ToDoList()
    {
        parent::Model();
    }

    // function test()
    // {
    //     // $query = $this->db->query('SELECT * FROM list');
    //     // return $query;
    // }
}

?>