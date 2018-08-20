<?php
function getComments($productId)
{
    $servername = "studmysql01.fhict.local";
    $username = "dbi380810";
    $password = "ivelinvelivan";
    $dbname = "dbi380810";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) 
    {
            die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM comment WHERE productId=$productId;";
    $resultQuery = $conn->query($sql);

?>
        <body>
        <h1>Comments</h1>
            <section id="comments" class="body">
                <ol id="posts-list" class="hfeed<?php echo($has_comments?' has-comments':''); ?>">
                    <?php
                    while($row = $resultQuery->fetch_assoc())
                    {
                    ?>
                    <li><article id="comment_<?php echo($row['ID']); ?>" class="hentry">
                    <footer class="post-info">
                        <abbr class="published" title="<?php echo $row["post_time"]; ?>">
                        <?php
                        $rowString = $row['post_time']; 
                        $toEcho = "";
                        for ($i = 0; $i < strlen($rowString); $i++)
                        {
                            if ($rowString[$i] != " ")
                            {
                                $toEcho = $toEcho.$rowString[$i];
                            }
                            else 
                            {
                                break;
                            }
                        }
                        echo($toEcho); ?>
                        </abbr>
                        <address class="vcard author">
                            By <?php echo $row["name"]; ?></a>
                        </address>
                    </footer>
                    <div class="entry-content">
                                    <p><?php echo $row["comment"]; ?></p>
                    </div>
                    </article></li>
                    <?php
                    }
                ?>
                </ol>
                <h2>Leave a Comment</h2>
                <?php
                if (isset($_COOKIE['email']))
                {
                    ?>
                    <div id="respond">
                        <form action="../php/post_comment.php" method="post" id="commentform">

                        <label for="comment" class="required">Your message</label>
                        <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required" style="resize: none"></textarea>

                        <input type="hidden" name="comment_product_ID" value="<?php echo($productId); ?>" id="comment_product_ID" />
                        <input id="submitComment" style="outline: none;" name="submit" type="submit" value="Submit comment" />
                        
                        </form>
                    </div>
                <?php 
                }
                else 
                {
                ?>
                <h3><a onclick="document.getElementById('id01').style.display='block'"><u style="color: blue; cursor: pointer;">Log in</u></a> to post a comment</h3>
                <?php
                }
                ?>
            </section>
        </body>
<?php
}
?>