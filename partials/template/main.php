    <main class="darkblue">
 
                <div class="diskboxs_container">
                    <?php foreach($database as $diskbox) { ?>
                        <div class="diskbox black">
                        <div class="poster">
                            <img src=<?php echo($diskbox["poster"]) ?>>
                        </div>
                        <div class="description">
                            <div class="title">
                                <h2><?php echo($diskbox["title"]) ?></h2>
                            </div>
                            <div class="author">
                                <p><?php echo($diskbox["author"]) ?></p>
                            </div>
                            <div class="year little_text">
                                <p><?php echo($diskbox["year"]) ?></p>
                            </div>
                        </div>

                    </div>
                                   
                    <?php }?>
                  
                </div>
            </main>
