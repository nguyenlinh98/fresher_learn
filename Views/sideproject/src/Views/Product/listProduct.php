<div class="ml-2" style="width: 98%; font-size: 14px;">
    <h6 class="mt-4" style="color: white;background-color: #4c7095;line-height: 40px;">
        <i class="fab fa-microsoft mr-1 ml-2"></i>&nbsp;&nbsp;User Management
    </h6>
    <a href="index.php?controllers=Product&action=create" class="btn btn-primary mb-2" style="background-color: #4e7197; font-size: 12px;"> Add User</a>
    <table id="content-table" class="table table-bordered">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col"> Name</th>
            <th scope="col"> Price</th>
            <th scope="col">Category</th>
            <th scope="col">Activate</th>
            <th scope="col">Time Created</th>
            <th scope="col">Time Updated</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($listProduct as $product):
            ?>
            <tr>

                <td><input type="checkbox" value="<?php echo $product['id']; ?>"></td>
                <td><?php echo $product['id']; ?></td>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['price']; ?></td>
                <td><?php echo $product['idCate']; ?></td>
                <td><?php echo $product['status'] == 1 ? "<span style=\"color: #1e7e34;\">active</span>" : "<span style=\"color: red;\">Deactive</span>"; ?></td>
                <td><?php echo $product['created_at']; ?></td>
                <td><?php echo $product['updated_at']; ?></td>
                <td class="text-center"><a href="index.php?controllers=Product&&action=showUpdate&&id=<?php echo $product['id']; ?>" class="btn btn-info btn-sm mr-1">Edit</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div>
        <button class="btn btn-success btn-sm" id="activate">Activate</button>
        <button class="btn btn-warning btn-sm" id="deactive">Deactive</button>
        <button class="btn btn-danger btn-sm" id="delete">Delete</button>
    </div>
    <div class="float-right">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <!--            --><?php //for($i = 1; $i <= $num_page; $i++): ?>
            <!--                <li class="page-item --><?php //if($p == $i): ?><!-- active --><?php //endif; ?><!-- "><a class="page-link" href="admin.php?controller=news&p=--><?php //echo $i; ?><!--">--><?php //echo $i; ?><!--</a></li>-->
            <!--            --><?php //endfor; ?>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </div>
</div>

