<?php
$this->load->view('inc/header');
?>
<div class='container'>
    <h1>Account Details</h1>
</div>
<div class="w3-container center">
    <h1>User Account</h1>
    <table border="1px solid black" class="w3-table-all">
        <tr class="w3-red">
            <th>First Name</th>
            <th>Account Number</th>
        </tr>
        <?php
        foreach ($users as $user):
            ?>
        
            <tr>
                <td>
                    <?php echo $user['firstname']; ?>
                </td>
                
                <td>
                    <?php echo $user['accountno']; ?>
                </td>
            </tr>
            
            <!-- without Database or other ways
            $user->accountno;
            <td>
                        <?php //echo $user['firstname']; ?>
                    </td>
                    <td>
                        <?php //echo $user['accountno']; ?>
                    </td>
            -->
            <?php
        endforeach;
        ?>
    </table>
</div>
<?php
$this->load->view('inc/footer');
?>
