    <div class="container">
        <div class="row">
        <h2>Welcome: <?= ucfirst($this->session->userdata('f_name')) . " " . ucfirst($this->session->userdata('l_name')); ?></h2>
        </div>
        <div class="row" id="login-form">
            <div class="col-md-4 col-md-offset-4">
            <?php if($this->session->flashdata('ques_msg') !=null ): ?>
                    <div class="alert alert-success" role="alert">
                        <?= $this->session->flashdata('ques_msg');; ?>
                    </div>
                <?php endif; ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add Questions</h3>
                    </div>
                    <div class="panel-body">
                        <?= form_open('site/add_questions'); ?>
                        <input type="hidden" name="user_id" value="">
                        <fieldset>
                            <div class="form-group">
                            <label>Questions Name <small>*</small></label>
                                <input class="form-control" type="text" name="ques_name" pattern=".{3,}" required>
                            </div>
                            <div class="form-group">
                            <label>Questions Body <small>*</small></label>
                                <input class="form-control" type="text" name="ques_body" pattern=".{,500}" required>
                            </div>
                            <div class="form-group">
                            <label>Questions Skills <small>*</small></label>
                                <input class="form-control" type="text" name="ques_skills" required>
                            </div>
                            <input class="btn btn-success btn-block" type="submit" value="Add Questions">
                        </fieldset>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>