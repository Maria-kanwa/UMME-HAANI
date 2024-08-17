<?php
get_header();
?>




<!-- <div class="container1">
        <div class="content">
       
            <h1>Our Mission</h1>
            <p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum pariatur fuga eveniet soluta aspernatur rem, nam voluptatibus voluptate voluptates sapiente, inventore. Voluptatem, maiores esse molestiae.

<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Saepe a minima quod iste libero rerum dicta!</li>
<li>Voluptas obcaecati, iste porro fugit soluta consequuntur. Veritatis?</li>
<li>Ipsam deserunt numquam ad error rem unde, omnis.</li>
<li>Repellat assumenda adipisci pariatur ipsam eos similique, explicabo.</li>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quaerat harum facilis excepturi et? Mollitia!</p>
        </div>
        <div class="image">
            <img src="<?php echo get_theme_file_uri('images/tchr2.png'); ?>" alt="Description of Image">
        </div>
    </div> -->


    <div class="container1">
    <div class="content">
        <h1><?php echo esc_html(get_theme_mod('our_mission_heading', 'Our Mission')); ?></h1>
        <p>
            <?php echo wp_kses_post(get_theme_mod('our_mission_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum pariatur fuga eveniet soluta aspernatur rem, nam voluptatibus voluptate voluptates sapiente, inventore. Voluptatem, maiores esse molestiae.')); ?>
            <?php echo wp_kses_post(get_theme_mod('our_mission_list', '<ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                <li>Saepe a minima quod iste libero rerum dicta!</li>
                <li>Voluptas obcaecati, iste porro fugit soluta consequuntur. Veritatis?</li>
                <li>Ipsam deserunt numquam ad error rem unde, omnis.</li>
                <li>Repellat assumenda adipisci pariatur ipsam eos similique, explicabo.</li>
            </ul>')); ?>
        </p>
    </div>
    <div class="image">
        <?php
        $image = get_theme_mod('our_mission_image');
        if ($image) {
            echo '<img src="' . esc_url($image) . '" alt="Description of Image">';
        }
        ?>
    </div>
</div>



  
<?php 
get_footer();
?>