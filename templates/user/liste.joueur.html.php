
    
<div style="margin-left:3Opx">
     <table>
         <tr>
             <th>Nom</th>
             <th>Prenom</th>
             <th>Score</th>
         </tr>
         <?php foreach($data as $value): ?>
         <tr>
             <td><?$value['nom']?></td>
             <td><?$value=['Prenom']?></td>
             <td><?$value=['score']?></td>
         </tr>
         <?php endforeach ?>
    </table>

        </div>
      
 </div>
 <?php
require_once(PATH_VIEWS."include/header.html.php");
?>
 <?php
require_once(PATH_VIEWS."include/footer.html.php");
?>
 