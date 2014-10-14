<span class="title_post">Announcements</span>

<span class="body_post">
    <br />
    <?php
        if(isset($user['is_authorized']) && $user['is_authorized'] == true)
        {
            echo anchor('announcements/add_announcement','Add Announcement'); 
        }
    ?>
    
    <?php if(isset($announcements)): foreach($announcements as $row) :?>
    <h2> <?php echo $row->title; ?> </h2>
    <?php 
    $sep_date = explode(" ",$row->datetime);
    $date = DateTime::createFromFormat('Y-m-d', $sep_date[0]);
    echo 'Posted on: '.$date->format('F j, Y'); 
    ?>
    <p> <?php echo $row->content; ?> </p>
    <?php 
        if(isset($user['is_authorized']) && $user['is_authorized'] == true)
        {
            echo anchor('announcements/edit_announcement/'.$row->idannouncement,'Edit');
            echo "&nbsp;&nbsp";
            echo anchor('announcements/delete_announcement/'.$row->idannouncement, 'Delete');
            echo "<br /> <br />";
        }
    ?>
    <?php endforeach; ?>
    <?php else : ?>
    <h3> No records are returned</h3>
    <?php endif; ?>
    
    <?php echo $pagination_links; ?>
</span>