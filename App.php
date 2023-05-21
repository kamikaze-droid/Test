<!DOCTYPE html>
<html>
    <meta charset="UTF-8"> 
    <meta  name ="viewport" content="width=device-width, initial-scale=1">
    <link herf=""  rel="stylesheet" type="text/css">
    <style>
table, th, td {
  border:1px solid black;
}
</style>
<?php 
$data = 'https://jsonplaceholder.typicode.com/comments' ;
 function getInfo($api) {
    $infoJson = file_get_contents($api); 
   /* if ($infoJson == false) {
        return false ; 
    } 
    */
    $infoObj = json_decode($infoJson) ;  
    return $infoObj ; 
}
$test = getInfo($data) ; 
$infoArrayObj = $test ; 
$infoArrayObj = new ArrayObject($test) ; 
$infoArrayObj->asort()  ; 
?>
<body>
    <table style="width:100%">
        <tr>
            <th>postId</th><th>id</th><th>name<th>email</th><th>body</th>
        </tr>
        <?php
        foreach ($infoArrayObj as $donnee) { 
            
            ?>
            <tr>
        <td>
            <?php  echo $donnee->postId ;  ?>
        </td>
        <td>
            <?php echo $donnee->id ;  ?>
        </td>
        <td>
            <?php echo $donnee->name;  ?>
        </td>
        <td>
            <?php echo $donnee->email ; ?>
        </td>
        <td>
            <?php echo $donnee->body ; }?>
        </td>
            </tr>
       
    </table>
   



</body>
</html>