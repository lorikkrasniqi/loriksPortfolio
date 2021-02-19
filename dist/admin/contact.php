<?php 
include_once "./layout/header.php"
?>
<section class="admin admin__contact">





<?php 
                
            /** @var $pdo \PDO */
            require_once "../include/database.php";


            $statement= $pdo->prepare('Select * FROM contact ');


            $statement-> execute();
            $contacts =$statement-> fetchALL(PDO::FETCH_ASSOC);

            if (sizeof($contacts)<1){?>
                <h1>You do not have any messages yet</h1>
           <?php }
            else{
                ?>
                <table class="contact-table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <?php 
                foreach ($contacts as $i => $contact){?>
                
               <tbody>
                    <tr>
                        <td><?php echo $contact['name']?></td>
                        <td><?php echo $contact['subject']?></td>
                        <td><a href="mailto:<?php echo $contact['email']?>"> <?php echo $contact['email']?></td>
                        <td><?php echo $contact['message']?></td>
                        <td><?php echo $contact['date']?></td>
                    </tr>
            
                </tbody>

            <?php }
            ?>  </table>
            <?php

            
                
                
                    

                 }
                
                ?>


</section>

<?php 
include_once "./layout/footer.php"
?>