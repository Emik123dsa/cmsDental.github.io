<?php $this->theme->header(); ?> 
      <main class="main">
            <section class="page_list">
                <div class="container">
                    <div class="page_list_wrap">
                        <div class="page_list_content">
                            <h2 class="page_list_content_title">
                            Create Pages
                            </h2>
                            <!-- /.page_list_content_title -->
                        </div>
                        <div class="page_list_wrap_form">
                            
                            <form action="" class="page_list_wrap_form">
                                <span class="page_list_wrap_title"> Title</span> <!-- /.page_list_wrap_title -->
                            <p class="page_list_wrap_form_title_p">
                                <label for = "formInput" class="page_list_wrap_form_title_label">
                                
                                    <input type="text" name = "title" id="formTitle" class="page_list_wrap_form_title_input" required autofocus>
                                </label> <!-- /.page_list_wrap_form_title_label --></p>
                            <!-- /.page_list_wrap_form_title_p -->
                            <span class="page_list_wrap_content"> Content</span> <!-- /.page_list_wrap_content -->
                                <p class="page_list_wrap_form_content_p">
                                    <label for = "formContent"class="page_list_wrap_form_content_label">
                                        <textarea class ="page_list_wrap_content_textarea" name="content" id="formContent" cols="30" rows="10"></textarea>
                                        </label> <!-- /.page_list_wrap_form_content_label --></p>
                                <!-- /.page_list_wrap_form_content_p -->
                            <button class="page_list_form_wrap_form_button" onclick = "page.add()">
                                Commit it!
                            </button> <!-- /.page_list_form_wrap_form_button -->
                            </form>
                            <!-- /.page_list_wrap_form -->
                        </div>
                        <!-- /.page_list_wrap_form -->
                    </div>
                    <!-- /.page_list_wrap -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /.page_list -->
        </main>
        <!-- /.main -->
<?php $this->theme->footer();?> 

       
        