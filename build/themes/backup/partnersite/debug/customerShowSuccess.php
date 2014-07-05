Customer: <?php echo $customer->getFullName() ?><hr>

Tickets:
<ul>
<?php foreach($tickets as $ticket): ?>
<li><?php echo link_to($ticket->getTitle(), '@debug_ticket_show?id=' . $ticket->getId()) ?>
<?php endforeach ?>
</ul>

