
            <?php include('header.php')?>
            <div class='container-fluid' style=' background-color:whitesmoke'>
                <div class='row'>
                    <div class='col-md-7 col-sm-7'>
                        <div class='weblogo'>
                            <h2>
                                <a href='#' style='color:black;'> <strong><u> M.</u></strong></a>
                            </h2>
                        </div>
                    </div>
                    <div class='col-md-5 col-sm-5'>
                        <div class='navlogo' onclick='openNav()' style='color:black'>
                            <i class='fas fa-bars fa-3x'></i>
                        </div>
                    </div>
                </div>
            </div>
            <div id='myNav' class='overlay'>
                <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
                <div class='overlay-content'>
                    <a href='index.php'>Home</a>
                    <a href='about.php'>About</a>
                    <a href='services.php'>Services</a>
                    <a href='work.php'>Work</a>
                    <a href='blog.php'>Blog</a>
                    <a href='contact.php'>Contact</a>
                </div>
            </div>
            <section >
                <div class='container animate-box slideInUp animated' data-aos='fade-up' data-aos-duration='1500'>
                    <div class='col-md-12 text-center ntitle' style='padding-top:5em;margin-top:10em;'>blog</div>
                    <div class='col-md-12 text-center'><strong>\ \<br><br></strong></div>
                </div>
                <div class='container animate-box slideInUp animated' data-aos='fade-up' data-aos-duration='1500'>
                    <div class='row'>
                        <div class='col-md-6'>
                            <img src='images/<?php echo 'blog1.jpg'?>' height='450px' width='100%' alt='' style='padding:10px;'>
                        </div>
                        <div class='col-md-6 htitle'>
                            <?php                              
                                echo 'Pityful a rethoric question ran over her cheek, then she continued her way';
                            ?>
                        </div>
                    </div>
                </div>
                <div class='container animate-box slideInUp animated' data-aos='fade-up' data-aos-duration='1500'>
                    <div class='row information2'>
                        <div class='col-md-8 col-md-offset-2 text-left' data-aos='fade-up' data-aos-duration='1500'>
                            <?php                              
                                echo '<p><strong>What is Lorem Ipsum?</strong><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><strong><br>Why do we use it?</strong><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p><br></p><p><strong>Where does it come from?</strong></p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p><br><strong>Where can I get some?</strong></p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>';
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php include('footer.php')?>