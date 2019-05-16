<?php
    $a = 2;

    switch($a){
        case 1:
            echo 'Variable = 1';
            break;
        case 2:
            echo 'variable = 2';
            break;
        default:
            echo 'Sumething else';
    }

?>

<?php if($a == 2): ?>
    <table>
        <tr>
            <td><?php echo $a ?></td>
            <td><?php echo $a ?></td>
            <td><?php echo $a ?></td>
        </tr>
    </table>
<?php endif;?>

<?php 
    $mass = ['Ronaldo', 'Messi', 'Mbape'];
?>

<?php foreach($mass as $item):?>
    <div style="width: 200px; height:50px; display: flex; align-items:center; padding: 15px; border: 1px solid red"><?php echo $item; ?></div>
<?php endforeach; ?>

<style>

</style>