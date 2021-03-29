<?php
class ArticlesView
{
    static function getTableTitle()
    {
        echo '<div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Articles</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
                            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                        </div>
                    </div>
             </div>';
    }
    static function getTableThead()
    {
        echo '<thead>
                 <tr>
                     <th>
                         <span class="custom-checkbox">
                             <input type="checkbox" id="selectAll">
                             <label for="selectAll"></label>
                         </span>
                     </th>
                     <th>Libellé</th>
                     <th>Prix</th>
                     <th>Description</th>
                     <th>Actions</th>
                 </tr>
             </thead>';
    }
    static function getTableBody()
    {
        echo '<tbody>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                <label for="checkbox1"></label>
                            </span>
                        </td>
                        <td>Thomas Hardy</td>
                        <td>thomashardy@mail.com</td>
                        <td>89 Chiaroscuro Rd, Portland, USA</td>
                        <td>(171) 555-2222</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                </tbody>';
    }
    //Avoir le nombre de page
    static function getPageNumber()
    {
        echo '<div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
              </div>';
    }
    static function getTable()
    {
        self::getTableTitle();
        echo '<table class="table table-striped table-hover">';
        self::getTableThead();
        self::getTableBody();
        echo ' </table>';
        self::getPageNumber();
    }
}
